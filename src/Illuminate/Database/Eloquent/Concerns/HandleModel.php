<?php

namespace Ianrizky\Illuminate\Database\Eloquent\Concerns;

use Illuminate\Database\Connection;
use Illuminate\Database\ConnectionInterface;

trait HandleModel
{
    /**
     * Create a new Eloquent model instance in static way.
     *
     * @param  array  $attributes
     * @return static
     */
    public static function instance(array $attributes = [])
    {
        return new static($attributes);
    }

    /**
     * Get the table associated with the model in static way.
     *
     * @return string
     */
    public static function getTableName(): string
    {
        return static::instance()->getxTable();
    }

    /**
     * Get the current connection name for the model in static way.
     *
     * @return string|null
     */
    public static function connectionName(): ?string
    {
        return static::instance()->getConnectionName();
    }

    /**
     * Get the database connection for the model in static way.
     *
     * @return \Illuminate\Database\Connection
     */
    public static function connection(): Connection
    {
        return static::instance()->getConnection();
    }

    /**
     * Start a new database transaction for the model in static way.
     *
     * @return \Illuminate\Database\Connection
     */
    public static function beginTransaction(): Connection
    {
        return tap(static::connection(), function (ConnectionInterface $connection) {
            $connection->beginTransaction();
        });
    }

    /**
     * Get the table morph name using on polymorphic relation associated with the model in static way.
     *
     * @return string
     */
    public static function getMorphName(): string
    {
        $model = static::instance();

        if (property_exists($model, 'morphName')) {
            return $model->morphName;
        }

        return get_class($model);
    }

    /**
     * Return list of column of given table.
     *
     * @return array
     */
    public static function getTableColumns(): array
    {
        $model = static::instance();

        return $model->getConnection()->getSchemaBuilder()->getColumnListing($model->getTable());
    }
}
