<?php

namespace Gremy\SraYaetl\Transformer;

use Exception;
use fab2s\YaEtl\Transformers\TransformerAbstract;

class SraTransformer extends TransformerAbstract
{

    public $map = [];
    public $displayReport = false;


    public function __construct($map)
    {
        $this->map = $map;
        parent::__construct();
    }

    /**
     * Transforme le fichier plat sra en un jeu de données exportable
     *
     * @param string|null $param
     *
     * @return array
     */
    public function exec($param = null): array
    {
        if ($this->displayReport) {
            dump("Transforming CSV line...");
        }

        foreach ($this->map as $itemName=>$item) {
            $result[$itemName] = trim(substr($param, $item[0], $item[1]));
        }

        return $result;
    }

}