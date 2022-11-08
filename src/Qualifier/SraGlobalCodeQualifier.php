<?php

namespace Gremy\SraYaetl\Qualifier;

use fab2s\YaEtl\Qualifiers\QualifierAbstract;

class SraGlobalCodeQualifier extends QualifierAbstract
{

    public array $usedCodes;

    /**
     * @param string $string
     */
    public function __construct(array $usedCodes)
    {
        $this->usedCodes = $usedCodes;
    }

    public function qualify($param)
    {
        return in_array(substr($param, 0, 3), $this->usedCodes);
    }
}