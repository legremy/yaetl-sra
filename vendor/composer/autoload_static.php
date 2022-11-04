<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit582eb94d278320919d345392b29f3389
{
    public static $files = array (
        '2324d0e5cadd603331d27de142371f0b' => __DIR__ . '/..' . '/symfony/contracts/Deprecation/function.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '667aeda72477189d0494fecd327c3641' => __DIR__ . '/..' . '/symfony/var-dumper/Resources/functions/dump.php',
    );

    public static $prefixLengthsPsr4 = array (
        'f' => 
        array (
            'fab2s\\NodalFlow\\' => 16,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Contracts\\' => 18,
            'Symfony\\Component\\VarDumper\\' => 28,
        ),
        'P' => 
        array (
            'Psr\\EventDispatcher\\' => 20,
            'Psr\\Container\\' => 14,
            'Psr\\Cache\\' => 10,
        ),
        'G' => 
        array (
            'Gremy\\SraYaetl\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'fab2s\\NodalFlow\\' => 
        array (
            0 => __DIR__ . '/..' . '/fab2s/nodalflow/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Contracts\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/contracts',
        ),
        'Symfony\\Component\\VarDumper\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/var-dumper',
        ),
        'Psr\\EventDispatcher\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/event-dispatcher/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Psr\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/cache/src',
        ),
        'Gremy\\SraYaetl\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'fab2s\\Bom\\Bom' => __DIR__ . '/..' . '/fab2s/bom/src/Bom.php',
        'fab2s\\ContextException\\ContextException' => __DIR__ . '/..' . '/fab2s/context-exception/src/ContextException.php',
        'fab2s\\ContextException\\ContextExceptionInterface' => __DIR__ . '/..' . '/fab2s/context-exception/src/ContextExceptionInterface.php',
        'fab2s\\FileLock\\FileLock' => __DIR__ . '/..' . '/fab2s/filelock/src/FileLock.php',
        'fab2s\\Math\\Math' => __DIR__ . '/..' . '/fab2s/math/src/Math.php',
        'fab2s\\Math\\MathBaseAbstract' => __DIR__ . '/..' . '/fab2s/math/src/MathBaseAbstract.php',
        'fab2s\\Math\\MathOpsAbstract' => __DIR__ . '/..' . '/fab2s/math/src/MathOpsAbstract.php',
        'fab2s\\NodalFlow\\YaEtlException' => __DIR__ . '/..' . '/fab2s/yaetl/src/YaEtlException.php',
        'fab2s\\SoUuid\\Laravel\\SoUuidTrait' => __DIR__ . '/..' . '/fab2s/souuid/src/Laravel/SoUuidTrait.php',
        'fab2s\\SoUuid\\SoUuid' => __DIR__ . '/..' . '/fab2s/souuid/src/SoUuid.php',
        'fab2s\\SoUuid\\SoUuidFactoryInterface' => __DIR__ . '/..' . '/fab2s/souuid/src/SoUuidFactoryInterface.php',
        'fab2s\\SoUuid\\SoUuidInterface' => __DIR__ . '/..' . '/fab2s/souuid/src/SoUuidInterface.php',
        'fab2s\\Strings\\Strings' => __DIR__ . '/..' . '/fab2s/strings/src/Strings.php',
        'fab2s\\Utf8\\Utf8' => __DIR__ . '/..' . '/fab2s/utf8/src/Utf8.php',
        'fab2s\\YaEtl\\Events\\YaEtlEvent' => __DIR__ . '/..' . '/fab2s/yaetl/src/Events/YaEtlEvent.php',
        'fab2s\\YaEtl\\Extractors\\AggregateExtractor' => __DIR__ . '/..' . '/fab2s/yaetl/src/Extractors/AggregateExtractor.php',
        'fab2s\\YaEtl\\Extractors\\CallableExtractor' => __DIR__ . '/..' . '/fab2s/yaetl/src/Extractors/CallableExtractor.php',
        'fab2s\\YaEtl\\Extractors\\DbExtractorAbstract' => __DIR__ . '/..' . '/fab2s/yaetl/src/Extractors/DbExtractorAbstract.php',
        'fab2s\\YaEtl\\Extractors\\ExtractorAbstract' => __DIR__ . '/..' . '/fab2s/yaetl/src/Extractors/ExtractorAbstract.php',
        'fab2s\\YaEtl\\Extractors\\ExtractorBatchLimitAbstract' => __DIR__ . '/..' . '/fab2s/yaetl/src/Extractors/ExtractorBatchLimitAbstract.php',
        'fab2s\\YaEtl\\Extractors\\ExtractorBatchLimitInterface' => __DIR__ . '/..' . '/fab2s/yaetl/src/Extractors/ExtractorBatchLimitInterface.php',
        'fab2s\\YaEtl\\Extractors\\ExtractorInterface' => __DIR__ . '/..' . '/fab2s/yaetl/src/Extractors/ExtractorInterface.php',
        'fab2s\\YaEtl\\Extractors\\ExtractorLimitAbstract' => __DIR__ . '/..' . '/fab2s/yaetl/src/Extractors/ExtractorLimitAbstract.php',
        'fab2s\\YaEtl\\Extractors\\ExtractorLimitInterface' => __DIR__ . '/..' . '/fab2s/yaetl/src/Extractors/ExtractorLimitInterface.php',
        'fab2s\\YaEtl\\Extractors\\File\\CsvExtractor' => __DIR__ . '/..' . '/fab2s/yaetl/src/Extractors/File/CsvExtractor.php',
        'fab2s\\YaEtl\\Extractors\\File\\FileExtractorAbstract' => __DIR__ . '/..' . '/fab2s/yaetl/src/Extractors/File/FileExtractorAbstract.php',
        'fab2s\\YaEtl\\Extractors\\File\\LineExtractor' => __DIR__ . '/..' . '/fab2s/yaetl/src/Extractors/File/LineExtractor.php',
        'fab2s\\YaEtl\\Extractors\\JoinableInterface' => __DIR__ . '/..' . '/fab2s/yaetl/src/Extractors/JoinableInterface.php',
        'fab2s\\YaEtl\\Extractors\\NullExtractor' => __DIR__ . '/..' . '/fab2s/yaetl/src/Extractors/NullExtractor.php',
        'fab2s\\YaEtl\\Extractors\\OnClause' => __DIR__ . '/..' . '/fab2s/yaetl/src/Extractors/OnClause.php',
        'fab2s\\YaEtl\\Extractors\\OnClauseInterface' => __DIR__ . '/..' . '/fab2s/yaetl/src/Extractors/OnClauseInterface.php',
        'fab2s\\YaEtl\\Extractors\\PdoExtractor' => __DIR__ . '/..' . '/fab2s/yaetl/src/Extractors/PdoExtractor.php',
        'fab2s\\YaEtl\\Extractors\\PdoExtractorTrait' => __DIR__ . '/..' . '/fab2s/yaetl/src/Extractors/PdoExtractorTrait.php',
        'fab2s\\YaEtl\\Extractors\\PdoUniqueKeyExtractor' => __DIR__ . '/..' . '/fab2s/yaetl/src/Extractors/PdoUniqueKeyExtractor.php',
        'fab2s\\YaEtl\\Extractors\\UniqueKeyExtractorAbstract' => __DIR__ . '/..' . '/fab2s/yaetl/src/Extractors/UniqueKeyExtractorAbstract.php',
        'fab2s\\YaEtl\\Laravel\\Callbacks\\ProgressBarSubscriber' => __DIR__ . '/..' . '/fab2s/yaetl/src/Events/ProgressBarSubscriber.php',
        'fab2s\\YaEtl\\Laravel\\Callbacks\\ProgressCallback' => __DIR__ . '/..' . '/fab2s/yaetl/src/Laravel/Callbacks/ProgressCallback.php',
        'fab2s\\YaEtl\\Laravel\\Extractors\\DbExtractor' => __DIR__ . '/..' . '/fab2s/yaetl/src/Laravel/Extractors/DbExtractor.php',
        'fab2s\\YaEtl\\Laravel\\Extractors\\UniqueKeyExtractor' => __DIR__ . '/..' . '/fab2s/yaetl/src/Laravel/Extractors/UniqueKeyExtractor.php',
        'fab2s\\YaEtl\\Laravel\\Loaders\\DbLoader' => __DIR__ . '/..' . '/fab2s/yaetl/src/Laravel/Loaders/DbLoader.php',
        'fab2s\\YaEtl\\Loaders\\ChainableLoaderAbstract' => __DIR__ . '/..' . '/fab2s/yaetl/src/Loaders/ChainableLoaderAbstract.php',
        'fab2s\\YaEtl\\Loaders\\File\\CsvLoader' => __DIR__ . '/..' . '/fab2s/yaetl/src/Loaders/File/CsvLoader.php',
        'fab2s\\YaEtl\\Loaders\\File\\FileLoaderAbstract' => __DIR__ . '/..' . '/fab2s/yaetl/src/Loaders/File/FileLoaderAbstract.php',
        'fab2s\\YaEtl\\Loaders\\LoaderAbstract' => __DIR__ . '/..' . '/fab2s/yaetl/src/Loaders/LoaderAbstract.php',
        'fab2s\\YaEtl\\Loaders\\LoaderInterface' => __DIR__ . '/..' . '/fab2s/yaetl/src/Loaders/LoaderInterface.php',
        'fab2s\\YaEtl\\Loaders\\NoOpLoader' => __DIR__ . '/..' . '/fab2s/yaetl/src/Loaders/NoOpLoader.php',
        'fab2s\\YaEtl\\Qualifiers\\CallableQualifier' => __DIR__ . '/..' . '/fab2s/yaetl/src/Qualifiers/CallableQualifier.php',
        'fab2s\\YaEtl\\Qualifiers\\QualifierAbstract' => __DIR__ . '/..' . '/fab2s/yaetl/src/Qualifiers/QualifierAbstract.php',
        'fab2s\\YaEtl\\Qualifiers\\QualifierInterface' => __DIR__ . '/..' . '/fab2s/yaetl/src/Qualifiers/QualifierInterface.php',
        'fab2s\\YaEtl\\Traits\\CsvHandlerTrait' => __DIR__ . '/..' . '/fab2s/yaetl/src/Traits/CsvHandlerTrait.php',
        'fab2s\\YaEtl\\Traits\\FileHandlerTrait' => __DIR__ . '/..' . '/fab2s/yaetl/src/Traits/FileHandlerTrait.php',
        'fab2s\\YaEtl\\Transformers\\Arrays\\ArrayMapTransformer' => __DIR__ . '/..' . '/fab2s/yaetl/src/Transformers/Arrays/ArrayMapTransformer.php',
        'fab2s\\YaEtl\\Transformers\\Arrays\\ArrayReplaceRecursiveTransformer' => __DIR__ . '/..' . '/fab2s/yaetl/src/Transformers/Arrays/ArrayReplaceRecursiveTransformer.php',
        'fab2s\\YaEtl\\Transformers\\Arrays\\ArrayReplaceTransformer' => __DIR__ . '/..' . '/fab2s/yaetl/src/Transformers/Arrays/ArrayReplaceTransformer.php',
        'fab2s\\YaEtl\\Transformers\\Arrays\\ArrayWalkRecursiveTransformer' => __DIR__ . '/..' . '/fab2s/yaetl/src/Transformers/Arrays/ArrayWalkRecursiveTransformer.php',
        'fab2s\\YaEtl\\Transformers\\Arrays\\ArrayWalkTransformer' => __DIR__ . '/..' . '/fab2s/yaetl/src/Transformers/Arrays/ArrayWalkTransformer.php',
        'fab2s\\YaEtl\\Transformers\\Arrays\\KeyRenameTransformer' => __DIR__ . '/..' . '/fab2s/yaetl/src/Transformers/Arrays/KeyRenameTransformer.php',
        'fab2s\\YaEtl\\Transformers\\Arrays\\KeyUnsetTransformer' => __DIR__ . '/..' . '/fab2s/yaetl/src/Transformers/Arrays/KeyUnsetTransformer.php',
        'fab2s\\YaEtl\\Transformers\\CallableTransformer' => __DIR__ . '/..' . '/fab2s/yaetl/src/Transformers/CallableTransformer.php',
        'fab2s\\YaEtl\\Transformers\\NoOpTransformer' => __DIR__ . '/..' . '/fab2s/yaetl/src/Transformers/NoOpTransformer.php',
        'fab2s\\YaEtl\\Transformers\\TransformerAbstract' => __DIR__ . '/..' . '/fab2s/yaetl/src/Transformers/TransformerAbstract.php',
        'fab2s\\YaEtl\\Transformers\\TransformerInterface' => __DIR__ . '/..' . '/fab2s/yaetl/src/Transformers/TransformerInterface.php',
        'fab2s\\YaEtl\\YaEtl' => __DIR__ . '/..' . '/fab2s/yaetl/src/YaEtl.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit582eb94d278320919d345392b29f3389::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit582eb94d278320919d345392b29f3389::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit582eb94d278320919d345392b29f3389::$classMap;

        }, null, ClassLoader::class);
    }
}