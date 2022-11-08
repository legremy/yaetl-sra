<?php

namespace Gremy\SraYaetl\Qualifier;

use fab2s\NodalFlow\Flows\InterrupterInterface;
use fab2s\NodalFlow\Interrupter;
use fab2s\YaEtl\Qualifiers\QualifierAbstract;

class InterruptIfLoadedQualifier extends QualifierAbstract
{

    public string $rootFlowId;

    public function __construct(string $rootFlowId)
    {
        $this->rootFlowId = $rootFlowId;
    }

    public function qualify($param)
    {
        return new Interrupter($this->rootFlowId, null, InterrupterInterface::TYPE_CONTINUE);
    }
}