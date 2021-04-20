<?php

namespace Ianrizky\Illuminate\Database;

use Illuminate\Database\PostgresConnection as BasePostgresConnection;

class PostgresConnection extends BasePostgresConnection
{
    use Concerns\UseCustomQueryBuilder;
}
