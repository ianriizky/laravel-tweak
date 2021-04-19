<?php

namespace Ianrizky\Illuminate\Database;

use Illuminate\Database\Connection as BaseConnection;

class Connection extends BaseConnection
{
    use Concerns\UseCustomQueryBuilder;
}
