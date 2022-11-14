<?php

namespace Gremy\SraYaetl\Loader;

class VehicleDbLoader extends DbLoader
{
    protected string $table = 'vehicules';
    protected array $chunks = [];

    protected function executeStatement()
    {
        $this->chunks = array_chunk($this->records, 10000);
        $listTableColumns = $this->getTableColumns();

        foreach ($this->chunks as $chunk) {
            $values = $this->getStatementValues($chunk);
            $placeholder = $this->getStatementPlaceholder($chunk);

            $statement = 'INSERT INTO ' . $this->table . ' ' . $listTableColumns . ' VALUES ' . $placeholder;

            $this->connection->executeStatement($statement, $values);
        }
    }
}