<?php

namespace Ianrizky\Illuminate\Database;

use Ianrizky\Illuminate\Database\Connectors\ConnectionFactory as CustomConnectionFactory;
use Illuminate\Database\DatabaseManager;
use Illuminate\Database\DatabaseServiceProvider as BaseDatabaseServiceProvider;

class DatabaseServiceProvider extends BaseDatabaseServiceProvider
{
    /**
     * {@inheritDoc}
     */
    public function register()
    {
        parent::register();

        $this->mergeConfigFrom(
            __DIR__ . '/../../../config/database.php', 'database'
        );
    }

    /**
     * {@inheritDoc}
     */
    protected function registerConnectionServices()
    {
        /**
         * The db.factory container instance has been changed
         * to implement custom query builder.
         */
        $this->app->singleton('db.factory', function ($app) {
            return new CustomConnectionFactory($app);
        });

        $this->app->singleton('db', function ($app) {
            return new DatabaseManager($app, $app['db.factory']);
        });

        $this->app->bind('db.connection', function ($app) {
            return $app['db']->connection();
        });
    }
}
