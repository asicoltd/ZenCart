<?php

namespace Tests\Support\DatabaseFixtures;

abstract class DatabaseFixture
{
    protected $tables;
    protected $connection;

    public function __construct($tables, $connection)
    {
        $this->tables = $tables;
        $this->connection = $connection;
    }

    public function unloadFixture()
    {
        foreach ($this->tables as $table) {
            $sql = "truncate " . $table;
            $this->connection->query($sql);

        }
    }
}
