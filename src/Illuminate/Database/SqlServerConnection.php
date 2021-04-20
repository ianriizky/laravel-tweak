<?php

namespace Ianrizky\Illuminate\Database;

use Illuminate\Database\SqlServerConnection as BaseSqlServerConnection;

class SqlServerConnection extends BaseSqlServerConnection
{
    use Concerns\UseCustomQueryBuilder;
}
