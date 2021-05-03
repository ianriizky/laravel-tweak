<?php

namespace Ianrizky\Illuminate\Database\Eloquent\Docblock;

/**
 * @method static static make(array $attributes = []) Create and return an un-saved model instance.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder withGlobalScope(string $identifier, \Illuminate\Database\Eloquent\Scope|\Closure $scope) Register a new global scope.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder withoutGlobalScope(\Illuminate\Database\Eloquent\Scope|string $scope) Remove a registered global scope.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder withoutGlobalScopes(array $scopes = null) Remove all or passed registered global scopes.
 * @method static array removedScopes() Get an array of global scopes that were removed from the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder whereKey(mixed $id) Add a where clause on the primary key to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder whereKeyNot(mixed $id) Add a where clause on the primary key to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder where(\Closure|string|array|\Illuminate\Database\Query\Expression $column, mixed $operator = null, mixed $value = null, string $boolean = 'and') Add a basic where clause to the query.
 * @method static static|null firstWhere($column, $operator = null, $value = null, $boolean = 'and') Add a basic where clause to the query, and return the first result.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder orWhere(\Closure|array|string|\Illuminate\Database\Query\Expression $column, mixed $operator = null, mixed $value = null) Add an "or where" clause to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder latest(string|\Illuminate\Database\Query\Expression $column = null) Add an "order by" clause for a timestamp to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder oldest(string|\Illuminate\Database\Query\Expression $column = null) Add an "order by" clause for a timestamp to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Collection hydrate(array $items) Create a collection of models from plain arrays.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Collection fromQuery(string $query, array $bindings = []) Create a collection of models from a raw query.
 * @method static static|\Ianrizky\Illuminate\Database\Eloquent\Collection|null find(mixed $id, array $columns = ['*']) Find a model by its primary key.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Collection findMany(\Illuminate\Contracts\Support\Arrayable|array $ids, array $columns = ['*']) Find multiple models by their primary keys.
 * @method static static|\Ianrizky\Illuminate\Database\Eloquent\Collection findOrFail(mixed $id, array $columns = ['*']) Find a model by its primary key or throw an exception.
 * @method static static|\Ianrizky\Illuminate\Database\Eloquent\Collection findOrNew(mixed $id, array $columns = ['*']) Find a model by its primary key or return fresh model instance.
 * @method static static firstOrNew(array $attributes, array $values = []) Get the first record matching the attributes or instantiate it.
 * @method static static firstOrCreate(array $attributes, array $values = []) Get the first record matching the attributes or create it.
 * @method static static updateOrCreate(array $attributes, array $values = []) Create or update a record matching the attributes, and fill it with values.
 * @method static static firstOrFail(array $columns = ['*']) Execute the query and get the first result or throw an exception.
 * @method static static|mixed firstOr(\Closure|array $columns = ['*'], \Closure|null $callback = null) Execute the query and get the first result or call a callback.
 * @method static mixed value(string|\Illuminate\Database\Query\Expression $column) Get a single column's value from the first result of a query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Collection get(array|string $columns = ['*']) Execute the query as a "select" statement.
 * @method static static[] getModels(array|string $columns = ['*']) Get the hydrated models without eager loading.
 * @method static array eagerLoadRelations(array $models) Eager load the relationships for the models.
 * @method static \Illuminate\Support\LazyCollection cursor() Get a lazy collection for the given query.
 * @method static \Illuminate\Support\Collection pluck(string|\Illuminate\Database\Query\Expression $column, string|null $key = null) Get an array with the values of a given column.
 * @method static \Illuminate\Contracts\Pagination\LengthAwarePaginator paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null) Paginate the given query.
 * @method static \Illuminate\Contracts\Pagination\Paginator simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null) Paginate the given query into a simple paginator.
 * @method static static create(array $attributes = []) Save a new model and return the instance.
 * @method static static forceCreate(array $attributes) Save a new model and return the instance. Allow mass-assignment.
 * @method static int update(array $values) Update a record in the database.
 * @method static int increment(string|\Illuminate\Database\Query\Expression $column, float|int $amount = 1, array $extra = []) Increment a column's value by a given amount.
 * @method static int decrement(string|\Illuminate\Database\Query\Expression $column, float|int $amount = 1, array $extra = []) Decrement a column's value by a given amount.
 * @method static mixed delete() Delete a record from the database.
 * @method static mixed forceDelete() Run the default delete function on the builder. Since we do not apply scopes here, the row will actually be deleted.
 * @method static void onDelete(\Closure $callback) Register a replacement for the default delete function.
 * @method static static|mixed scopes(array|string $scopes) Call the given local model scopes.
 * @method static static applyScopes() Apply the scopes to the Eloquent builder instance and return it.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder with(mixed $relations) Set the relationships that should be eager loaded.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder without(mixed $relations) Prevent the specified relations from being eager loaded.
 * @method static static newModelInstance(array $attributes = []) Create a new instance of the model being queried.
 * @method static \Ianrizky\Illuminate\Database\Query\Builder getQuery() Get the underlying query builder instance.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder setQuery(\Illuminate\Database\Query\Builder $query) Set the underlying query builder instance.
 * @method static \Ianrizky\Illuminate\Database\Query\Builder toBase() Get a base query builder instance.
 * @method static array getEagerLoads() Get the relationships being eagerly loaded.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder setEagerLoads(array $eagerLoad) Set the relationships being eagerly loaded.
 * @method static static getModel() Get the model instance being queried.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder setModel(\Ianrizky\Illuminate\Database\Eloquent\Model $model) Set a model instance for the model being queried.
 * @method static string qualifyColumn(string|\Illuminate\Database\Query\Expression $column) Qualify the given column name by the model's table.
 * @method static \Closure getMacro(string $name) Get the given macro by name.
 * @method static bool hasMacro(string $name) Checks if a macro is registered.
 * @method static \Closure getGlobalMacro(string $name) Get the given global macro by name.
 * @method static bool hasGlobalMacro(string $name) Checks if a global macro is registered.
 *
 * @see \Illuminate\Database\Eloquent\Builder
 * @see \Ianrizky\Illuminate\Database\Eloquent\Builder
 */
trait EloquentBuilder
{
    use QueryBuilder, BuildsQueries;
}
