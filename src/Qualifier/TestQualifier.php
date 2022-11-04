<?php

namespace Gremy\SraYaetl\Qualifier;

use fab2s\YaEtl\Qualifiers\QualifierAbstract;

class TestQualifier extends QualifierAbstract
{

    public function qualify($param)
    {
        dd('Test qualifier');
    }
}