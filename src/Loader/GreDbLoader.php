<?php

namespace Gremy\SraYaetl\Loader;

use fab2s\NodalFlow\Flows\FlowStatusInterface;

class GreDbLoader extends DbLoader
{
    protected string $table = 'genres';

    protected function getSchema()
    {
        $sm = $this->connection->createSchemaManager();
        dd($columns = $sm->listTableColumns('genres'));


        return '(code_genre, libelle)';
    }
}