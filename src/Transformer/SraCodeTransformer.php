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
                'mapping'=> ['type'=>3, 'code'=>1, 'label'=>25],
            ],
            [
                'codes' => ['ABR', 'CPX', 'CRE', 'ENE', 'PMO', 'SGT', 'TFR', 'MRQ', 'PRV', 'TRA'],
                'mapping'=> ['type'=>3, 'code'=>2, 'label'=>25],
            ],
            [
                'codes' => ['ADE', 'ALI', 'CAR'],
                'mapping'=> ['type'=>3, 'code'=>3, 'label'=>25],
            ],
            [
                'codes' => ['GRA', 'GRP', 'GRE'],
                'mapping'=> ['type'=>3, 'code'=>2],
            ],
            [
                'codes' => ['MOD', 'MRV'],
                'mapping'=> ['type'=>3, 'code-marque'=>2, 'code-modele'=>2, 'label-modele'=>25, 'code-segment'=>2],
            ],
        ];
    }

    public function exec($param = null)
    {
        $code = substr($param, 0, 3);

        foreach ($this->getSraCodeMapClassification() as $mapClassification) {
            if (in_array($code, $mapClassification['codes'])) {
                $offset = 0;
                foreach ($mapClassification['mapping'] as $label=>$length) {
                    $return[] = trim(substr($param, $offset, $length));
                    $offset += $length;
                }
                return $return;
            }
        }
    }
}