<?php

namespace Ianrizky\Illuminate\Database;

use Ianrizky\Illuminate\Database\Connectors\ConnectionFactory;
use Illuminate\Database\DatabaseManager;
use Illuminate\Database\DatabaseServiceProvider as BaseDatabaseServiceProvider;

class DatabaseServiceProvider extends BaseDatabaseServiceProvider
{
    /**
     * {@inheritDoc}
     */
    protected function registerConnectionServices()
    {
        /**
         * Note: The db.factory container instance has been changed to impelement custom query builder.
         */
        $this->app->singleton('db.factory', function ($app) {
            return new ConnectionFactory($app);
        });

        $this->app->singleton('db', function ($app) {
            return new DatabaseManager($app, $app['db.factory']);
        });

        $this->app->bind('db.connection', function ($app) {
            return $app['db']->connection();
        });
    }
}
