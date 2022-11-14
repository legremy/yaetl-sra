<?php

namespace Gremy\SraYaetl\Loader;

use Doctrine\DBAL\Connection;
use fab2s\NodalFlow\Flows\FlowStatusInterface;
use fab2s\YaEtl\Loaders\LoaderAbstract;
use Doctrine\DBAL\DriverManager;

abstract class DbLoader extends LoaderAbstract
{
    public array $records = [];
    protected string $table;
    protected Connection $connection;

    protected $connectionParams = [
        'dbname' => 'sra',
        'user' => 'root',
        'password' => 'example',
        'host' => 'localhost',
        'driver' => 'pdo_mysql',
        'port'=>3307
    ];

    public function __construct()
    {
        $this->connection = DriverManager::getConnection($this->connectionParams);
    }

    public function exec($param = null)
    {
        $this->records[] = $param;
    }

    public function flush(?FlowStatusInterface $flowStatus = null)
    {

        $this->connection->executeQuery('TRUNCATE TABLE ' . $this->table);

        $this->executeStatement();

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

    protected function executeStatement()
    {
        $values = $this->getStatementValues($this->records);
        $placeholder = $this->getStatementPlaceholder($this->records);
        $listTableColumns = $this->getTableColumns();

        $statement = 'INSERT INTO ' . $this->table . ' ' . $listTableColumns . ' VALUES ' . $placeholder;

        $this->connection->executeStatement($statement, $values);
    }

    protected function getStatementPlaceholder($records)
    {
        $placeholder = [];

        foreach ($records as $record) {
            $placeholder[] = '(' . implode(',', array_fill(0, count($record), '?')) . ')';
            foreach ($record as $item) {
                $values[] = $item;
            }
        }

        return implode(',', $placeholder);
    }

    protected function getStatementValues($records)
    {
        $values = [];

        foreach ($records as $record) {
            foreach ($record as $item) {
                $values[] = $item;
            }
        }

        return $values;
    }

    protected function getTableColumns()
    {
        $sm = $this->connection->createSchemaManager();
        $listTableColumns = [];

        foreach ($sm->listTableColumns($this->table) as $columnName=>$column) {
            $listTableColumns[] = $columnName;
        }

        return '(' . implode(',', $listTableColumns) . ')';
    }
}
