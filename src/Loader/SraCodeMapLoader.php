<?php

namespace Gremy\SraYaetl\Loader;

use fab2s\YaEtl\Loaders\LoaderAbstract;

class SraCodeMapLoader extends LoaderAbstract
{
    protected $loadedData = [];

    public function exec($param = null)
    {
        if (!is_null($param)) {
            $type = $param['type'];
            unset($param['type']);
            $this->loadedData[$type][] = $param;
        }
    }

    /**
     * @return array
     */
    public function getLoadedData(): array
    {
        return $this->loadedData;
    }
}