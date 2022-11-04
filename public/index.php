<?php

use fab2s\YaEtl\Extractors\File\LineExtractor;
use fab2s\YaEtl\Loaders\File\CsvLoader;
use fab2s\YaEtl\YaEtl;
use Gremy\SraYaetl\Loader\CustomCsvLoader;
use Gremy\SraYaetl\Qualifier\SraCodeQualifier;
use Gremy\SraYaetl\Qualifier\SraVecQualifier;
use Gremy\SraYaetl\Qualifier\TestQualifier;
use Gremy\SraYaetl\Transformer\SraCodeTransformer;
use Gremy\SraYaetl\Transformer\SraTransformer;

echo "SRA - ETL";

require_once '../vendor/autoload.php';

$yaetl = new YaEtl();

$sraTransformerMap = include('./data/sra-transformer-map.php');

$pathToInput = './data/input/SRAVEH.txt';
$pathToInput = './data/input/sra-extract.txt';

// Main Vehicle ETL flow
$pathToMainOutput = './data/output/sra-veh.csv';
$extractor = new LineExtractor($pathToInput);
$mainLoader = new CsvLoader($pathToMainOutput);
$sraTransformer = new SraTransformer($sraTransformerMap);

$yaetl
    ->from($extractor)
    ->qualify(new SraVecQualifier())
    ->transform($sraTransformer)
    ->to($mainLoader)
    ->exec()
;

$testYaetl = new YaEtl();
dump($testYaetl->getId());

// Codes ETL flow
$codesEtl = (new YaEtl())->from(new LineExtractor('./data/input/SRACOD.txt'));

foreach (['MRQ', 'ADE', 'MOD', 'CAR', 'ENE', 'CPX', 'CRE', 'GRE'] as $code) {
    $codesEtl
        ->branch(
            (new YaEtl())
            ->qualify(new SraCodeQualifier($code))
            ->transform(new SraCodeTransformer())
            ->to(new CustomCsvLoader('./data/output/' . strtolower($code) . '.csv'))
            ->sendTo($testYaetl->getId())
        )
        ->branch($testYaetl->qualify(new TestQualifier));
    ;
}

$codesEtl->exec();


