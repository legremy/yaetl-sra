<?php

namespace Gremy\SraYaetl\Qualifier;

use fab2s\YaEtl\Qualifiers\QualifierAbstract;

class SraVecQualifier extends QualifierAbstract
{

    public function qualify($param)
    {
        return str_starts_with($param, "VEC");
    }
}
