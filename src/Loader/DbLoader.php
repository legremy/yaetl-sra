<?php

namespace Gremy\SraYaetl\Loader;

use fab2s\NodalFlow\Flows\FlowStatusInterface;
use fab2s\YaEtl\Loaders\LoaderAbstract;

class DbLoader extends LoaderAbstract
{
    public array $records = [];

    public function exec($param = null)
    {
        $this->records[] = $param;
    }

    public function flush(?FlowStatusInterface $flowStatus = null)
    {
        dump('on flush');
        dump($this->records);

        /*
         * `if ($flowStatus !== null) {
         *      // YaEtl's call to flush()
         *      if ($flowStatus->isRunning()) {
         *           // flow is running
         *      } elseif ($flowStatus->isClean()) {
         *           // everything went well
         *      } elseif ($flowStatus->isDirty()) {
         *           // a node broke the flow
         *      } elseif ($flowStatus->isException()) {
         *           // an exception was raised during the flow execution
         *      }
         * } else {
         *      // it should be you calling this method
         *      // during the flow execution (multi insert)
         * }`
         */
    }
}