<?php

namespace Ianrizky\Illuminate\Database\Eloquent\Docblock;

/**
 * // @method static $this tap(callable $callback) Pass the query to a given callback. (this method has been overrided by \Ianrizky\Illuminate\Database\Eloquent\Concerns\Tappable)
 *
 * @method static bool chunk(int $count, callable $callback) Chunk the results of the query.
 * @method static bool each(callable $callback, int $count = 1000) Execute a callback over each item while chunking.
 * @method static bool chunkById(int $count, callable $callback, string|null $column = null, string|null $alias = null) Chunk the results of a query by comparing IDs.
 * @method static bool eachById(callable $callback, int $count = 1000, string|null $column = null, string|null $alias = null) Execute a callback over each item while chunking by id.
 * @method static static|null first(array|string $columns = ['*']) Execute the query and get the first result.
 * @method static mixed|\Ianrizky\Illuminate\Database\Eloquent\Builder|\Ianrizky\Illuminate\Database\Query\Builder when(mixed $value, callable $callback, callable|null $default = null) Apply the callback's query changes if the given "value" is true.
 * @method static mixed|\Ianrizky\Illuminate\Database\Eloquent\Builder|\Ianrizky\Illuminate\Database\Query\Builder unless(mixed $value, callable $callback, callable|null $default = null) Apply the callback's query changes if the given "value" is false.
 *
 * @see \Illuminate\Database\Concerns\BuildsQueries
 */
trait BuildsQueries
{
    //
}
