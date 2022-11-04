<?php

namespace Gremy\SraYaetl\Transformer;

use fab2s\YaEtl\Transformers\TransformerAbstract;

class TestTransformer extends TransformerAbstract
{

    public function exec($param = null)
    {
        dd($param);
        return $param;
    }
}