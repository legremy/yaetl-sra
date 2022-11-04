<?php

namespace Gremy\SraYaetl\Qualifier;

use fab2s\NodalFlow\Flows\InterrupterInterface;
use fab2s\YaEtl\Qualifiers\QualifierAbstract;

class SraCodeQualifier extends QualifierAbstract
{

    public string $code;

    /**
     * @param string $string
     */
    public function __construct(string $code)
    {
        $this->code = $code;
    }

    public function qualify($param)
    {
        return substr($param, 0, 3) === $this->code;
    }
}