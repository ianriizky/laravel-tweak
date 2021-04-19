<?php

namespace Ianrizky\Illuminate\Database;

use Illuminate\Database\MySqlConnection as BaseMySqlConnection;

class MySqlConnection extends BaseMySqlConnection
{
    use Concerns\UseCustomQueryBuilder;
}
