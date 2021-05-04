<?php

namespace Ianrizky\Illuminate\Database\Eloquent\Docblock;

/**
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder select(array|mixed $columns = ['*']) Set the columns to be selected.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder selectSub(\Closure|$this|string $query, string $as) Add a subselect expression to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder selectRaw(string $expression, array array $bindings = []) Add a new "raw" select expression to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder fromSub(\Closure|\Illuminate\Database\Query\Builder|string $query, string $as) Makes "from" fetch from a subquery.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder fromRaw(string $expression, mixed $bindings = []) Add a raw from clause to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder addSelect(array|mixed $column) Add a new select column to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder distinct() Force the query to only return distinct results.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder from(\Closure|\Illuminate\Database\Query\Builder|string $table, string|null $as = null) Set the table which the query is targeting.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder join(string $table, \Closure|string $first, string|null $operator = null, string|null $second = null, string $type = 'inner', bool $where = false) Add a join clause to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder joinWhere(string $table, \Closure|string $first, string $operator, string $second, string $type = 'inner') Add a "join where" clause to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder joinSub(\Closure|\Illuminate\Database\Query\Builder|string $query, string $as, \Closure|string $first, string|null $operator = null, string|null $second = null, string $type = 'inner', bool $where = false) Add a subquery join clause to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder leftJoin(string $table, \Closure|string $first, string|null $operator = null, string|null $second = null) Add a left join to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder leftJoinWhere(string $table, \Closure|string $first, string $operator, string $second) Add a "join where" clause to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder leftJoinSub(\Closure|\Illuminate\Database\Query\Builder|string $query, string $as, \Closure|string $first, string|null $operator = null, string|null $second = null) Add a subquery left join to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder rightJoin(string $table, \Closure|string $first, string|null $operator = null, string|null $second = null) Add a right join to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder rightJoinWhere(string $table, \Closure|string $first, string $operator, string $second) Add a "right join where" clause to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder rightJoinSub(\Closure|\Illuminate\Database\Query\Builder|string $query, string $as, \Closure|string $first, string|null $operator = null, string|null $second = null) Add a subquery right join to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder crossJoin(string $table, \Closure|string|null $first = null, string|null $operator = null, string|null $second = null) Add a "cross join" clause to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder mergeWheres(array $wheres, array $bindings) Merge an array of where clauses and bindings.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder where(\Closure|string|array $column, mixed $operator = null, mixed $value = null, string $boolean = 'and') Add a basic where clause to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder prepareValueAndOperator(string $value, string $operator, bool $useDefault = false) Prepare the value and operator for a where clause.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder orWhere(\Closure|string|array $column, mixed $operator = null, mixed $value = null) Add an "or where" clause to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder whereColumn(string|array $first, string|null $operator = null, string|null $second = null, string|null $boolean = 'and') Add a "where" clause comparing two columns to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder orWhereColumn(string|array $first, string|null $operator = null, string|null $second = null) Add an "or where" clause comparing two columns to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder whereRaw(string $sql, mixed $bindings = [], string $boolean = 'and') Add a raw where clause to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder orWhereRaw(string $sql, mixed $bindings = []) Add a raw or where clause to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder whereIn(string $column, mixed $values, string $boolean = 'and', bool $not = false) Add a "where in" clause to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder orWhereIn(string $column, mixed $values) Add an "or where in" clause to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder whereNotIn(string $column, mixed $values, string $boolean = 'and') Add a "where not in" clause to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder orWhereNotIn(string $column, mixed $values) Add an "or where not in" clause to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder whereIntegerInRaw(string $column, \Illuminate\Contracts\Support\Arrayable|array $values, string $boolean = 'and', bool $not = false) Add a "where in raw" clause for integer values to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder whereIntegerNotInRaw(string $column, \Illuminate\Contracts\Support\Arrayable|array $values, string $boolean = 'and') Add a "where not in raw" clause for integer values to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder whereNull(string|array $columns, string $boolean = 'and', bool $not = false) Add a "where null" clause to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder orWhereNull(string $column) Add an "or where null" clause to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder whereNotNull(string|array $columns, string $boolean = 'and') Add a "where not null" clause to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder whereBetween(string $column, array $values, string $boolean = 'and', bool $not = false) Add a where between statement to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder orWhereBetween(string $column, array $values) Add an or where between statement to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder whereNotBetween(string $column, array $values, string $boolean = 'and') Add a where not between statement to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder orWhereNotBetween(string $column, array $values) Add an or where not between statement to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder orWhereNotNull(string $column) Add an "or where not null" clause to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder whereDate(string $column, string $operator, \DateTimeInterface|string|null $value = null, string $boolean = 'and') Add a "where date" statement to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder orWhereDate(string $column, string $operator, \DateTimeInterface|string|null $value = null) Add an "or where date" statement to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder whereTime(string $column, string $operator, \DateTimeInterface|string|null $value = null, string $boolean = 'and') Add a "where time" statement to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder orWhereTime(string $column, string $operator, \DateTimeInterface|string|null $value = null) Add an "or where time" statement to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder whereDay(string $column, string $operator, \DateTimeInterface|string|null $value = null, string $boolean = 'and') Add a "where day" statement to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder orWhereDay(string $column, string $operator, \DateTimeInterface|string|null $value = null) Add an "or where day" statement to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder whereMonth(string $column, string $operator, \DateTimeInterface|string|null $value = null, string $boolean = 'and') Add a "where month" statement to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder orWhereMonth(string $column, string $operator, \DateTimeInterface|string|null $value = null) Add an "or where month" statement to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder whereYear(string $column, string $operator, \DateTimeInterface|string|int|null $value = null, string $boolean = 'and') Add a "where year" statement to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder orWhereYear(string $column, string $operator, \DateTimeInterface|string|int|null $value = null) Add an "or where year" statement to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder whereNested(\Closure $callback, string $boolean = 'and') Add a nested where statement to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder forNestedWhere() Create a new query instance for nested where condition.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder addNestedWhereQuery(\Illuminate\Database\Query\Builder|static $query, string $boolean = 'and') Add another query builder as a nested where to the query builder.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder whereExists(\Closure $callback, string $boolean = 'and', bool $not = false) Add an exists clause to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder orWhereExists(\Closure $callback, bool $not = false) Add an or exists clause to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder whereNotExists(\Closure $callback, string $boolean = 'and') Add a where not exists clause to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder orWhereNotExists(\Closure $callback) Add a where not exists clause to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder addWhereExistsQuery(\Illuminate\Database\Query\Builder $query, string $boolean = 'and', bool $not = false) Add an exists clause to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder whereRowValues(array $columns, string $operator, array $values, string $boolean = 'and') Adds a where condition using row values.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder orWhereRowValues(array $columns, string $operator, array $values) Adds a or where condition using row values.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder whereJsonContains(string $column, mixed $value, string $boolean = 'and', bool $not = false) Add a "where JSON contains" clause to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder orWhereJsonContains(string $column, mixed $value) Add a "or where JSON contains" clause to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder whereJsonDoesntContain(string $column, mixed $value, string $boolean = 'and') Add a "where JSON not contains" clause to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder orWhereJsonDoesntContain(string $column, mixed $value) Add a "or where JSON not contains" clause to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder whereJsonLength(string $column, mixed $operator, mixed $value = null, string $boolean = 'and') Add a "where JSON length" clause to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder orWhereJsonLength(string $column, mixed $operator, mixed $value = null) Add a "or where JSON length" clause to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder dynamicWhere(string $method, array $parameters) Handles dynamic "where" clauses to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder groupBy(array|string ...$groups) Add a "group by" clause to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder groupByRaw(string $sql, array $bindings = []) Add a raw groupBy clause to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder having(string $column, string|null $operator = null, string|null $value = null, string $boolean = 'and') Add a "having" clause to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder orHaving(string $column, string|null $operator = null, string|null $value = null) Add a "or having" clause to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder havingBetween(string $column, array $values, string $boolean = 'and', bool $not = false) Add a "having between " clause to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder havingRaw(string $sql, array $bindings = [], string $boolean = 'and') Add a raw having clause to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder orHavingRaw(string $sql, array $bindings = []) Add a raw or having clause to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder orderBy(\Closure|\Illuminate\Database\Query\Builder|\Illuminate\Database\Query\Expression|string $column, string $direction = 'asc') Add an "order by" clause to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder orderByDesc(\Closure|\Illuminate\Database\Query\Builder|\Illuminate\Database\Query\Expression|string $column) Add a descending "order by" clause to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder latest(\Closure|\Illuminate\Database\Query\Builder|\Illuminate\Database\Query\Expression|string $column = 'created_at') Add an "order by" clause for a timestamp to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder oldest(\Closure|\Illuminate\Database\Query\Builder|\Illuminate\Database\Query\Expression|string $column = 'created_at') Add an "order by" clause for a timestamp to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder inRandomOrder(string $seed = '') Put the query's results in random order.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder orderByRaw(string $sql, array $bindings = []) Add a raw "order by" clause to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder skip(int $value) Alias to set the "offset" value of the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder offset(int $value) Set the "offset" value of the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder take(int $value) Alias to set the "limit" value of the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder limit(int $value) Set the "limit" value of the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder forPage(int $page, int $perPage = 15) Set the limit and offset for a given page.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder forPageBeforeId(int $perPage = 15, int|null $lastId = 0, string $column = 'id') Constrain the query to the previous "page" of results before a given ID.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder forPageAfterId(int $perPage = 15, int|null $lastId = 0, string $column = 'id') Constrain the query to the next "page" of results after a given ID.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder union(\Illuminate\Database\Query\Builder|\Closure $query, bool $all = false) Add a union statement to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder unionAll(\Illuminate\Database\Query\Builder|\Closure $query) Add a union all statement to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder lock(string|bool $value = true) Lock the selected rows in the table.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder lockForUpdate() Lock the selected rows in the table for updating.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder sharedLock() Share lock the selected rows in the table.
 * @method static string toSql() Get the SQL representation of the query (included in \Illuminate\Database\Eloquent\Builder::$passthru).
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder find(int|string $id, array $columns = ['*']) Execute a query for a single record by ID.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder value(string $column) Get a single column's value from the first result of a query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder get(array|string $columns = ['*']) Execute the query as a "select" statement.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder paginate(int $perPage = 15, array $columns = ['*'], string $pageName = 'page', int|null $page = null) Paginate the given query into a simple paginator.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder simplePaginate(int $perPage = 15, array $columns = ['*'], string $pageName = 'page', int|null $page = null) Get a paginator only supporting simple next and previous links. This is more efficient on larger data-sets, etc.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder getCountForPagination(array $columns = ['*']) Get the count of the total records for the paginator.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder cursor() Get a lazy collection for the given query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder pluck(string $column, string|null $key = null) Get an array with the values of a given column.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder implode(string $column, string $glue = '') Concatenate values of a given column as a string.
 * @method static bool exists() Determine if any rows exist for the current query (included in \Illuminate\Database\Eloquent\Builder::$passthru).
 * @method static bool doesntExist() Determine if no rows exist for the current query (included in \Illuminate\Database\Eloquent\Builder::$passthru).
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder existsOr(\Closure $callback) Execute the given callback if no rows exist for the current query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder doesntExistOr(\Closure $callback) Execute the given callback if rows exist for the current query.
 * @method static int count(string $columns = '*') Retrieve the "count" result of the query (included in \Illuminate\Database\Eloquent\Builder::$passthru).
 * @method static mixed min(string $column) Retrieve the minimum value of a given column (included in \Illuminate\Database\Eloquent\Builder::$passthru).
 * @method static mixed max(string $column) Retrieve the maximum value of a given column (included in \Illuminate\Database\Eloquent\Builder::$passthru).
 * @method static mixed sum(string $column) Retrieve the sum of the values of a given column (included in \Illuminate\Database\Eloquent\Builder::$passthru).
 * @method static mixed avg(string $column) Retrieve the average of the values of a given column (included in \Illuminate\Database\Eloquent\Builder::$passthru).
 * @method static mixed average(string $column) Alias for the "avg" method (included in \Illuminate\Database\Eloquent\Builder::$passthru).
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder aggregate(string $function, array $columns = ['*']) Execute an aggregate function on the database.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder numericAggregate(string $function, array $columns = ['*']) Execute a numeric aggregate function on the database.
 * @method static bool insert(array $values) Insert a new record into the database (included in \Illuminate\Database\Eloquent\Builder::$passthru).
 * @method static int insertOrIgnore(array $values) Insert a new record into the database while ignoring errors (included in \Illuminate\Database\Eloquent\Builder::$passthru).
 * @method static int insertGetId(array $values, string|null $sequence = null) Insert a new record and get the value of the primary key (included in \Illuminate\Database\Eloquent\Builder::$passthru).
 * @method static int insertUsing(array $columns, \Closure|\Illuminate\Database\Query\Builder|string $query) Insert new records into the table using a subquery (included in \Illuminate\Database\Eloquent\Builder::$passthru).
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder update(array $values) Update a record in the database.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder updateOrInsert(array $attributes, array $values = []) Insert or update a record matching the attributes, and fill it with values.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder increment(string $column, float|int $amount = 1, array $extra = []) Increment a column's value by a given amount.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder decrement(string $column, float|int $amount = 1, array $extra = []) Decrement a column's value by a given amount.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder truncate() Run a truncate statement on the table.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder newQuery() Get a new instance of the query builder.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder raw(mixed $value) Create a raw database expression.
 * @method static array getBindings() Get the current query value bindings in a flattened array (included in \Illuminate\Database\Eloquent\Builder::$passthru).
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder getRawBindings() Get the raw array of bindings.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder setBindings(array $bindings, $type = 'where') Set the bindings on the query builder.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder addBinding(mixed $value, string $type = 'where') Add a binding to the query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder mergeBindings(\Illuminate\Database\Query\Builder $query) Merge an array of bindings into our bindings.
 * @method static \Illuminate\Database\ConnectionInterface getConnection() Get the database connection instance (included in \Illuminate\Database\Eloquent\Builder::$passthru).
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder getProcessor() Get the database query processor instance.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder getGrammar() Get the query grammar instance.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder useWritePdo() Use the write pdo for query.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder cloneWithout(array $properties) Clone the query without the given properties.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder cloneWithoutBindings(array $except) Clone the query without the given bindings.
 * @method static \Ianrizky\Illuminate\Database\Eloquent\Builder dump() Dump the current SQL and bindings (included in \Illuminate\Database\Eloquent\Builder::$passthru).
 * @method static void dd() Die and dump the current SQL and bindings (included in \Illuminate\Database\Eloquent\Builder::$passthru).
 *
 * @see \Illuminate\Database\Query\Builder
 */
trait QueryBuilder
{
    use BuildsQueries, CustomQueryBuilder;
}
