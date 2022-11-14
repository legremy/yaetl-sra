<?php

namespace Gremy\SraYaetl\Loader;

use fab2s\NodalFlow\Flows\FlowStatusInterface;

class EneDbLoader extends DbLoader
{
    protected string $table = 'energies';

    protected function getQuery()
    {

        $values = [];
        foreach ($this->records as $record) {
            $values[] = '(\'' . implode('\',\'', $record) . '\')';
        }

        $values = implode(',', $values);

        return "INSERT INTO " . $this->table . " (code_energie, libelle) VALUES $values";
    }
}