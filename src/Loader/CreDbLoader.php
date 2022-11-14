<?php

namespace Gremy\SraYaetl\Loader;

use fab2s\NodalFlow\Flows\FlowStatusInterface;

class CreDbLoader extends DbLoader
{
    protected string $table = 'classes_de_reparation';

    protected function getQuery()
    {

        $values = [];
        foreach ($this->records as $record) {
            $values[] = '(\'' . implode('\',\'', $record) . '\')';
        }

        $values = implode(',', $values);

        return "INSERT INTO " . $this->table . " (code_classe_de_reparation, libelle) VALUES $values";
    }
}