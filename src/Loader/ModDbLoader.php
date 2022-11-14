<?php

namespace Gremy\SraYaetl\Loader;

use fab2s\NodalFlow\Flows\FlowStatusInterface;

class ModDbLoader extends DbLoader
{
    protected string $table = 'modeles';

    protected function getQuery()
    {

        $values = [];
        foreach ($this->records as $record) {
            $values[] = '(\'' . implode('\',\'', $record) . '\')';
        }

        $values = implode(',', $values);

        return "INSERT INTO " . $this->table . " (code_marque, code_modele, libelle, code_segment) VALUES $values";
    }
}