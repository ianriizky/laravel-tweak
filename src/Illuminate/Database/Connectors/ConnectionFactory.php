<?php

namespace Ianrizky\Illuminate\Database\Connectors;

use Ianrizky\Illuminate\Database\MySqlConnection;
use Ianrizky\Illuminate\Database\PostgresConnection;
use Ianrizky\Illuminate\Database\SQLiteConnection;
use Ianrizky\Illuminate\Database\SqlServerConnection;
use Illuminate\Database\Connection;
use Illuminate\Database\Connectors\ConnectionFactory as BaseConnectionFactory;

class ConnectionFactory extends BaseConnectionFactory
{
    /**
     * {@inheritDoc}
     */
    protected function createConnection($driver, $connection, $database, $prefix = '', array $config = [])
    {
        if ($resolver = Connection::getResolver($driver)) {
            return $resolver($connection, $database, $prefix, $config);
        }

        switch ($driver) {
            case 'mysql':
                return new MySqlConnection($connection, $database, $prefix, $config);

            case 'pgsql':
                return new PostgresConnection($connection, $database, $prefix, $config);

            case 'sqlite':
                return new SQLiteConnection($connection, $database, $prefix, $config);

            case 'sqlsrv':
                return new SqlServerConnection($connection, $database, $prefix, $config);
        }

        return parent::createConnection($driver, $connection, $database, $prefix, $config);
    }
}
