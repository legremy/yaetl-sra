<?php

use fab2s\YaEtl\Extractors\File\LineExtractor;
use fab2s\YaEtl\Loaders\File\CsvLoader;
use fab2s\YaEtl\YaEtl;
use Gremy\SraYaetl\Loader\CustomCsvLoader;
use Gremy\SraYaetl\Loader\DbLoader;
use Gremy\SraYaetl\Qualifier\InterruptIfLoadedQualifier;
use Gremy\SraYaetl\Qualifier\SraCodeQualifier;
use Gremy\SraYaetl\Qualifier\SraGlobalCodeQualifier;
use Gremy\SraYaetl\Qualifier\SraVecQualifier;
use Gremy\SraYaetl\Transformer\SraCodeTransformer;
use Gremy\SraYaetl\Transformer\SraTransformer;

echo "SRA - ETL";

require_once '../vendor/autoload.php';

$yaetl = new YaEtl();

$sraTransformerMap = include('./data/sra-transformer-map.php');

$pathToInput = './data/input/SRAVEH.txt';
$pathToInput = './data/input/sra-extract.txt';

$pathToCodeInput = './data/input/SRACOD.txt';
$pathToCodeInput = './data/input/sra-code-extract.txt';

// Main Vehicle ETL flow
$pathToMainOutput = './data/output/sra-veh.csv';
$extractor = new LineExtractor($pathToInput);
$mainLoader = new DbLoader();
$sraTransformer = new SraTransformer($sraTransformerMap);

$yaetl
    ->from($extractor)
    ->qualify(new SraVecQualifier())
    ->transform($sraTransformer)
    ->to($mainLoader)
    ->exec()
;


// Codes ETL flow
$usedCodes = ['MRQ', 'ADE', 'MOD', 'CAR', 'ENE', 'CPX', 'CRE', 'GRE'];

$codesEtl = (new YaEtl())
    ->from(new LineExtractor($pathToCodeInput))
    ->qualify(new SraGlobalCodeQualifier($usedCodes));

foreach ($usedCodes as $code) {
    $codesEtl->branch(
        (new YaEtl())
            ->qualify(new SraCodeQualifier($code))
            ->transform(new SraCodeTransformer())
            ->to(new DbLoader())
            ->qualify(new InterruptIfLoadedQualifier($codesEtl->getId()))
    );
}

$codesEtl->exec();
