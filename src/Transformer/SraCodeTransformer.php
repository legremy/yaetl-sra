<?php

namespace Gremy\SraYaetl\Transformer;

use fab2s\YaEtl\Transformers\TransformerAbstract;

class SraCodeTransformer extends TransformerAbstract
{

    public function getSraCodeMapClassification()
    {
        return [
            [
                'codes' => ['DCY', 'BDV', 'SUS', 'SDT', 'CLA', 'SER', 'AFR', 'AFU', 'ACV', 'APV', 'ALV', 'ALR', 'DAS', 'CDS'],
                'mapping'=> ['code'=>1, 'label'=>25],
            ],
            [
                'codes' => ['ABR', 'CPX', 'CRE', 'ENE', 'PMO', 'SGT', 'TFR', 'MRQ', 'PRV', 'TRA'],
                //'mapping'=> ['type'=>3, 'code'=>2, 'label'=>25],
                'mapping'=> ['code'=>2, 'label'=>25],
            ],
            [
                'codes' => ['ADE', 'ALI', 'CAR'],
                'mapping'=> ['code'=>3, 'label'=>25],
            ],
            [
                'codes' => ['GRA', 'GRP'],
                'mapping'=> ['code'=>2],
            ],
            [
                'codes' => ['GRE'],
                'mapping'=> ['code'=>2, 'libelle'=>35],
            ],
            [
                'codes' => ['MOD', 'MRV'],
                'mapping'=> ['code-marque'=>2, 'code-modele'=>2, 'label-modele'=>25, 'code-segment'=>2],
            ],
        ];
    }

    public function exec($param = null)
    {
        $code = substr($param, 0, 3);

        foreach ($this->getSraCodeMapClassification() as $mapClassification) {
            if (in_array($code, $mapClassification['codes'])) {
                $offset = 3;
                foreach ($mapClassification['mapping'] as $label=>$length) {
                    $return[] = trim(substr($param, $offset, $length));
                    $offset += $length;
                }
                return $return;
            }
        }
    }
}