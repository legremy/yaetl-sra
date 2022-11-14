<?php

namespace Gremy\SraYaetl\Loader;

use fab2s\NodalFlow\Flows\FlowStatusInterface;

class CarDbLoader extends DbLoader
{
    protected string $table='carrosseries';

    protected function getQuery()
    {

        $values = [];
        foreach ($this->records as $record) {
            $values[] = '(\'' . implode('\',\'', $record) . '\')';
        }

        $values = implode(',', $values);

        return "INSERT INTO " . $this->table . " (code_carrosseries, libelle) VALUES $values";
    }
}