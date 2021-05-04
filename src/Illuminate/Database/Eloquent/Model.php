<?php

namespace Ianrizky\Illuminate\Database\Eloquent;

use Ianrizky\Illuminate\Database\Query\Builder as QueryBuilder;
use Illuminate\Database\Eloquent\Model as BaseModel;

/**
 * @property int $id
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder on(string|null $connection) Begin querying the model on a given connection.
 * @method static \Ianrizky\Illuminate\Database\Query\Builder onWriteConnection() Begin querying the model on the write connection.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder with(array|string $relations) Begin querying a model with eager loading.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder query() Begin querying the model.
 * @method \Ianrizky\Illuminate\Database\Eloquent\Builder newQuery() Get a new query builder for the model's table.
 * @method \Ianrizky\Illuminate\Database\Eloquent\Builder|static newModelQuery() Get a new query builder that doesn't have any global scopes or eager loading.
 * @method \Ianrizky\Illuminate\Database\Eloquent\Builder newQueryWithoutRelationships() Get a new query builder with no relationships loaded.
 * @method \Ianrizky\Illuminate\Database\Eloquent\Builder registerGlobalScopes(\Ianrizky\Illuminate\Database\Eloquent\Builder $builder) Register the global scopes for this builder instance.
 * @method \Ianrizky\Illuminate\Database\Eloquent\Builder|static newQueryWithoutScopes() Get a new query builder that doesn't have any global scopes.
 * @method \Ianrizky\Illuminate\Database\Eloquent\Builder newQueryWithoutScope(\Illuminate\Database\Eloquent\Scope|string $scope) Get a new query instance without a given scope.
 * @method \Ianrizky\Illuminate\Database\Eloquent\Builder newQueryForRestoration(array|int $ids) Get a new query to restore one or more models by their queueable IDs.
 */
abstract class Model extends BaseModel
{
    use Concerns\HandleModel,
        Concerns\HasAttributes,
        Concerns\HasRelationships,
        Concerns\HasTimestamps,
        Concerns\Tappable,
        Docblock\EloquentBuilder;

    /**
     * {@inheritDoc}
     *
     * @param  \Ianrizky\Illuminate\Database\Query\Builder  $query
     * @return \Ianrizky\Illuminate\Database\Eloquent\Builder|static
     */
    public function newEloquentBuilder($query): Builder
    {
        return new Builder($query);
    }

    /**
     * {@inheritDoc}
     *
     * @return \Ianrizky\Illuminate\Database\Query\Builder
     */
    protected function newBaseQueryBuilder(): QueryBuilder
    {
        return parent::newBaseQueryBuilder();
    }

    /**
     * {@inheritDoc}
     *
     * @return \Ianrizky\Illuminate\Database\Eloquent\Collection
     */
    public function newCollection(array $models = []): Collection
    {
        return new Collection($models);
    }
}
