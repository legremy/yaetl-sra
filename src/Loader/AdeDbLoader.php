<?php

namespace Gremy\SraYaetl\Loader;

use fab2s\NodalFlow\Flows\FlowStatusInterface;

class AdeDbLoader extends DbLoader
{
    protected string $table = 'antidemarrages';

    protected function getQuery()
    {

        $values = [];
        foreach ($this->records as $record) {
            $values[] = '(\'' . implode('\',\'', $record) . '\')';
        }

        $values = implode(',', $values);

        return "INSERT INTO " . $this->table . " (code_antidemarrages, libelle) VALUES $values";
    }


}