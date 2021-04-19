<?php

namespace Ianrizky\Illuminate\Database;

use Illuminate\Database\SQLiteConnection as BaseSQLiteConnection;

class SQLiteConnection extends BaseSQLiteConnection
{
    use Concerns\UseCustomQueryBuilder;
}
