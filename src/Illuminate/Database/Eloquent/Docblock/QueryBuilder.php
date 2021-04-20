<?php

namespace Ianrizky\Illuminate\Database\Eloquent\Docblock;

/**
 * @method static $this select(array|mixed $columns = ['*']) Set the columns to be selected.
 * @method static \Illuminate\Database\Query\Builder|static selectSub(\Closure|$this|string $query, string $as) Add a subselect expression to the query.
 * @method static \Illuminate\Database\Query\Builder|static selectRaw(string $expression, array array $bindings = []) Add a new "raw" select expression to the query.
 * @method static \Illuminate\Database\Query\Builder|static fromSub(\Closure|\Illuminate\Database\Query\Builder|string $query, string $as) Makes "from" fetch from a subquery.
 * @method static \Illuminate\Database\Query\Builder|static fromRaw(string $expression, mixed $bindings = []) Add a raw from clause to the query.
 * @method static $this addSelect(array|mixed $column) Add a new select column to the query.
 * @method static $this distinct() Force the query to only return distinct results.
 * @method static $this from(\Closure|\Illuminate\Database\Query\Builder|string $table, string|null $as = null) Set the table which the query is targeting.
 * @method static $this join(string $table, \Closure|string $first, string|null $operator = null, string|null $second = null, string $type = 'inner', bool $where = false) Add a join clause to the query.
 * @method static \Illuminate\Database\Query\Builder|static joinWhere(string $table, \Closure|string $first, string $operator, string $second, string $type = 'inner') Add a "join where" clause to the query.
 * @method static \Illuminate\Database\Query\Builder|static joinSub(\Closure|\Illuminate\Database\Query\Builder|string $query, string $as, \Closure|string $first, string|null $operator = null, string|null $second = null, string $type = 'inner', bool $where = false) Add a subquery join clause to the query.
 * @method static \Illuminate\Database\Query\Builder|static leftJoin(string $table, \Closure|string $first, string|null $operator = null, string|null $second = null) Add a left join to the query.
 * @method static \Illuminate\Database\Query\Builder|static leftJoinWhere(string $table, \Closure|string $first, string $operator, string $second) Add a "join where" clause to the query.
 * @method static \Illuminate\Database\Query\Builder|static leftJoinSub(\Closure|\Illuminate\Database\Query\Builder|string $query, string $as, \Closure|string $first, string|null $operator = null, string|null $second = null) Add a subquery left join to the query.
 * @method static \Illuminate\Database\Query\Builder|static rightJoin(string $table, \Closure|string $first, string|null $operator = null, string|null $second = null) Add a right join to the query.
 * @method static \Illuminate\Database\Query\Builder|static rightJoinWhere(string $table, \Closure|string $first, string $operator, string $second) Add a "right join where" clause to the query.
 * @method static \Illuminate\Database\Query\Builder|static rightJoinSub(\Closure|\Illuminate\Database\Query\Builder|string $query, string $as, \Closure|string $first, string|null $operator = null, string|null $second = null) Add a subquery right join to the query.
 * @method static \Illuminate\Database\Query\Builder|static crossJoin(string $table, \Closure|string|null $first = null, string|null $operator = null, string|null $second = null) Add a "cross join" clause to the query.
 * @method static void mergeWheres(array $wheres, array $bindings) Merge an array of where clauses and bindings.
 * @method static $this where(\Closure|string|array $column, mixed $operator = null, mixed $value = null, string $boolean = 'and') Add a basic where clause to the query.
 * @method static array prepareValueAndOperator(string $value, string $operator, bool $useDefault = false) Prepare the value and operator for a where clause.
 * @method static \Illuminate\Database\Query\Builder|static orWhere(\Closure|string|array $column, mixed $operator = null, mixed $value = null) Add an "or where" clause to the query.
 * @method static \Illuminate\Database\Query\Builder|static whereColumn(string|array $first, string|null $operator = null, string|null $second = null, string|null $boolean = 'and') Add a "where" clause comparing two columns to the query.
 * @method static \Illuminate\Database\Query\Builder|static orWhereColumn(string|array $first, string|null $operator = null, string|null $second = null) Add an "or where" clause comparing two columns to the query.
 * @method static $this whereRaw(string $sql, mixed $bindings = [], string $boolean = 'and') Add a raw where clause to the query.
 * @method static \Illuminate\Database\Query\Builder|static orWhereRaw(string $sql, mixed $bindings = []) Add a raw or where clause to the query.
 * @method static $this whereIn(string $column, mixed $values, string $boolean = 'and', bool $not = false) Add a "where in" clause to the query.
 * @method static \Illuminate\Database\Query\Builder|static orWhereIn(string $column, mixed $values) Add an "or where in" clause to the query.
 * @method static \Illuminate\Database\Query\Builder|static whereNotIn(string $column, mixed $values, string $boolean = 'and') Add a "where not in" clause to the query.
 * @method static \Illuminate\Database\Query\Builder|static orWhereNotIn(string $column, mixed $values) Add an "or where not in" clause to the query.
 * @method static $this whereIntegerInRaw(string $column, \Illuminate\Contracts\Support\Arrayable|array $values, string $boolean = 'and', bool $not = false) Add a "where in raw" clause for integer values to the query.
 * @method static $this whereIntegerNotInRaw(string $column, \Illuminate\Contracts\Support\Arrayable|array $values, string $boolean = 'and') Add a "where not in raw" clause for integer values to the query.
 * @method static $this whereNull(string|array $columns, string $boolean = 'and', bool $not = false) Add a "where null" clause to the query.
 * @method static \Illuminate\Database\Query\Builder|static orWhereNull(string $column) Add an "or where null" clause to the query.
 * @method static \Illuminate\Database\Query\Builder|static whereNotNull(string|array $columns, string $boolean = 'and') Add a "where not null" clause to the query.
 * @method static $this whereBetween(string $column, array $values, string $boolean = 'and', bool $not = false) Add a where between statement to the query.
 * @method static \Illuminate\Database\Query\Builder|static orWhereBetween(string $column, array $values) Add an or where between statement to the query.
 * @method static \Illuminate\Database\Query\Builder|static whereNotBetween(string $column, array $values, string $boolean = 'and') Add a where not between statement to the query.
 * @method static \Illuminate\Database\Query\Builder|static orWhereNotBetween(string $column, array $values) Add an or where not between statement to the query.
 * @method static \Illuminate\Database\Query\Builder|static orWhereNotNull(string $column) Add an "or where not null" clause to the query.
 * @method static \Illuminate\Database\Query\Builder|static whereDate(string $column, string $operator, \DateTimeInterface|string|null $value = null, string $boolean = 'and') Add a "where date" statement to the query.
 * @method static \Illuminate\Database\Query\Builder|static orWhereDate(string $column, string $operator, \DateTimeInterface|string|null $value = null) Add an "or where date" statement to the query.
 * @method static \Illuminate\Database\Query\Builder|static whereTime(string $column, string $operator, \DateTimeInterface|string|null $value = null, string $boolean = 'and') Add a "where time" statement to the query.
 * @method static \Illuminate\Database\Query\Builder|static orWhereTime(string $column, string $operator, \DateTimeInterface|string|null $value = null) Add an "or where time" statement to the query.
 * @method static \Illuminate\Database\Query\Builder|static whereDay(string $column, string $operator, \DateTimeInterface|string|null $value = null, string $boolean = 'and') Add a "where day" statement to the query.
 * @method static \Illuminate\Database\Query\Builder|static orWhereDay(string $column, string $operator, \DateTimeInterface|string|null $value = null) Add an "or where day" statement to the query.
 * @method static \Illuminate\Database\Query\Builder|static whereMonth(string $column, string $operator, \DateTimeInterface|string|null $value = null, string $boolean = 'and') Add a "where month" statement to the query.
 * @method static \Illuminate\Database\Query\Builder|static orWhereMonth(string $column, string $operator, \DateTimeInterface|string|null $value = null) Add an "or where month" statement to the query.
 * @method static \Illuminate\Database\Query\Builder|static whereYear(string $column, string $operator, \DateTimeInterface|string|int|null $value = null, string $boolean = 'and') Add a "where year" statement to the query.
 * @method static \Illuminate\Database\Query\Builder|static orWhereYear(string $column, string $operator, \DateTimeInterface|string|int|null $value = null) Add an "or where year" statement to the query.
 * @method static \Illuminate\Database\Query\Builder|static whereNested(\Closure $callback, string $boolean = 'and') Add a nested where statement to the query.
 * @method static \Illuminate\Database\Query\Builder forNestedWhere() Create a new query instance for nested where condition.
 * @method static $this addNestedWhereQuery(\Illuminate\Database\Query\Builder|static $query, string $boolean = 'and') Add another query builder as a nested where to the query builder.
 * @method static $this whereExists(\Closure $callback, string $boolean = 'and', bool $not = false) Add an exists clause to the query.
 * @method static \Illuminate\Database\Query\Builder|static orWhereExists(\Closure $callback, bool $not = false) Add an or exists clause to the query.
 * @method static \Illuminate\Database\Query\Builder|static whereNotExists(\Closure $callback, string $boolean = 'and') Add a where not exists clause to the query.
 * @method static \Illuminate\Database\Query\Builder|static orWhereNotExists(\Closure $callback) Add a where not exists clause to the query.
 * @method static $this addWhereExistsQuery(\Illuminate\Database\Query\Builder $query, string $boolean = 'and', bool $not = false) Add an exists clause to the query.
 * @method static $this whereRowValues(array $columns, string $operator, array $values, string $boolean = 'and') Adds a where condition using row values.
 * @method static $this orWhereRowValues(array $columns, string $operator, array $values) Adds a or where condition using row values.
 * @method static $this whereJsonContains(string $column, mixed $value, string $boolean = 'and', bool $not = false) Add a "where JSON contains" clause to the query.
 * @method static $this orWhereJsonContains(string $column, mixed $value) Add a "or where JSON contains" clause to the query.
 * @method static $this whereJsonDoesntContain(string $column, mixed $value, string $boolean = 'and') Add a "where JSON not contains" clause to the query.
 * @method static $this orWhereJsonDoesntContain(string $column, mixed $value) Add a "or where JSON not contains" clause to the query.
 * @method static $this whereJsonLength(string $column, mixed $operator, mixed $value = null, string $boolean = 'and') Add a "where JSON length" clause to the query.
 * @method static $this orWhereJsonLength(string $column, mixed $operator, mixed $value = null) Add a "or where JSON length" clause to the query.
 * @method static $this dynamicWhere(string $method, array $parameters) Handles dynamic "where" clauses to the query.
 * @method static $this groupBy(array|string ...$groups) Add a "group by" clause to the query.
 * @method static $this groupByRaw(string $sql, array $bindings = []) Add a raw groupBy clause to the query.
 * @method static $this having(string $column, string|null $operator = null, string|null $value = null, string $boolean = 'and') Add a "having" clause to the query.
 * @method static \Illuminate\Database\Query\Builder|static orHaving(string $column, string|null $operator = null, string|null $value = null) Add a "or having" clause to the query.
 * @method static \Illuminate\Database\Query\Builder|static havingBetween(string $column, array $values, string $boolean = 'and', bool $not = false) Add a "having between " clause to the query.
 * @method static $this havingRaw(string $sql, array $bindings = [], string $boolean = 'and') Add a raw having clause to the query.
 * @method static \Illuminate\Database\Query\Builder|static orHavingRaw(string $sql, array $bindings = []) Add a raw or having clause to the query.
 * @method static $this orderBy(\Closure|\Illuminate\Database\Query\Builder|\Illuminate\Database\Query\Expression|string $column, string $direction = 'asc') Add an "order by" clause to the query.
 * @method static $this orderByDesc(\Closure|\Illuminate\Database\Query\Builder|\Illuminate\Database\Query\Expression|string $column) Add a descending "order by" clause to the query.
 * @method static \Illuminate\Database\Query\Builder|static latest(\Closure|\Illuminate\Database\Query\Builder|\Illuminate\Database\Query\Expression|string $column = 'created_at') Add an "order by" clause for a timestamp to the query.
 * @method static \Illuminate\Database\Query\Builder|static oldest(\Closure|\Illuminate\Database\Query\Builder|\Illuminate\Database\Query\Expression|string $column = 'created_at') Add an "order by" clause for a timestamp to the query.
 * @method static $this inRandomOrder(string $seed = '') Put the query's results in random order.
 * @method static $this orderByRaw(string $sql, array $bindings = []) Add a raw "order by" clause to the query.
 * @method static \Illuminate\Database\Query\Builder|static skip(int $value) Alias to set the "offset" value of the query.
 * @method static $this offset(int $value) Set the "offset" value of the query.
 * @method static \Illuminate\Database\Query\Builder|static take(int $value) Alias to set the "limit" value of the query.
 * @method static $this limit(int $value) Set the "limit" value of the query.
 * @method static \Illuminate\Database\Query\Builder|static forPage(int $page, int $perPage = 15) Set the limit and offset for a given page.
 * @method static \Illuminate\Database\Query\Builder|static forPageBeforeId(int $perPage = 15, int|null $lastId = 0, string $column = 'id') Constrain the query to the previous "page" of results before a given ID.
 * @method static \Illuminate\Database\Query\Builder|static forPageAfterId(int $perPage = 15, int|null $lastId = 0, string $column = 'id') Constrain the query to the next "page" of results after a given ID.
 * @method static \Illuminate\Database\Query\Builder|static union(\Illuminate\Database\Query\Builder|\Closure $query, bool $all = false) Add a union statement to the query.
 * @method static \Illuminate\Database\Query\Builder|static unionAll(\Illuminate\Database\Query\Builder|\Closure $query) Add a union all statement to the query.
 * @method static $this lock(string|bool $value = true) Lock the selected rows in the table.
 * @method static \Illuminate\Database\Query\Builder lockForUpdate() Lock the selected rows in the table for updating.
 * @method static \Illuminate\Database\Query\Builder sharedLock() Share lock the selected rows in the table.
 * @method static string toSql() Get the SQL representation of the query.
 * @method static mixed|static find(int|string $id, array $columns = ['*']) Execute a query for a single record by ID.
 * @method static mixed value(string $column) Get a single column's value from the first result of a query.
 * @method static \Illuminate\Support\Collection get(array|string $columns = ['*']) Execute the query as a "select" statement.
 * @method static \Illuminate\Contracts\Pagination\LengthAwarePaginator paginate(int $perPage = 15, array $columns = ['*'], string $pageName = 'page', int|null $page = null) Paginate the given query into a simple paginator.
 * @method static \Illuminate\Contracts\Pagination\Paginator simplePaginate(int $perPage = 15, array $columns = ['*'], string $pageName = 'page', int|null $page = null) Get a paginator only supporting simple next and previous links. This is more efficient on larger data-sets, etc.
 * @method static int getCountForPagination(array $columns = ['*']) Get the count of the total records for the paginator.
 * @method static \Illuminate\Support\LazyCollection cursor() Get a lazy collection for the given query.
 * @method static \Illuminate\Support\Collection pluck(string $column, string|null $key = null) Get an array with the values of a given column.
 * @method static string implode(string $column, string $glue = '') Concatenate values of a given column as a string.
 * @method static bool exists() Determine if any rows exist for the current query.
 * @method static bool doesntExist() Determine if no rows exist for the current query.
 * @method static mixed existsOr(\Closure $callback) Execute the given callback if no rows exist for the current query.
 * @method static mixed doesntExistOr(\Closure $callback) Execute the given callback if rows exist for the current query.
 * @method static int count(string $columns = '*') Retrieve the "count" result of the query.
 * @method static mixed min(string $column) Retrieve the minimum value of a given column.
 * @method static mixed max(string $column) Retrieve the maximum value of a given column.
 * @method static mixed sum(string $column) Retrieve the sum of the values of a given column.
 * @method static mixed avg(string $column) Retrieve the average of the values of a given column.
 * @method static mixed average(string $column) Alias for the "avg" method.
 * @method static mixed aggregate(string $function, array $columns = ['*']) Execute an aggregate function on the database.
 * @method static float|int numericAggregate(string $function, array $columns = ['*']) Execute a numeric aggregate function on the database.
 * @method static bool insert(array $values) Insert a new record into the database.
 * @method static int insertOrIgnore(array $values) Insert a new record into the database while ignoring errors.
 * @method static int insertGetId(array $values, string|null $sequence = null) Insert a new record and get the value of the primary key.
 * @method static int insertUsing(array $columns, \Closure|\Illuminate\Database\Query\Builder|string $query) Insert new records into the table using a subquery.
 * @method static int update(array $values) Update a record in the database.
 * @method static bool updateOrInsert(array $attributes, array $values = []) Insert or update a record matching the attributes, and fill it with values.
 * @method static int increment(string $column, float|int $amount = 1, array $extra = []) Increment a column's value by a given amount.
 * @method static int decrement(string $column, float|int $amount = 1, array $extra = []) Decrement a column's value by a given amount.
 * @method static int delete(mixed $id = null) Delete a record from the database.
 * @method static void truncate() Run a truncate statement on the table.
 * @method static \Illuminate\Database\Query\Builder newQuery() Get a new instance of the query builder.
 * @method static \Illuminate\Database\Query\Expression raw(mixed $value) Create a raw database expression.
 * @method static array getBindings() Get the current query value bindings in a flattened array.
 * @method static array getRawBindings() Get the raw array of bindings.
 * @method static $this setBindings(array $bindings, $type = 'where') Set the bindings on the query builder.
 * @method static $this addBinding(mixed $value, string $type = 'where') Add a binding to the query.
 * @method static $this mergeBindings(\Illuminate\Database\Query\Builder $query) Merge an array of bindings into our bindings.
 * @method static \Illuminate\Database\ConnectionInterface getConnection() Get the database connection instance.
 * @method static \Illuminate\Database\Query\Processors\Processor getProcessor() Get the database query processor instance.
 * @method static \Illuminate\Database\Query\Grammars\Grammar getGrammar() Get the query grammar instance.
 * @method static $this useWritePdo() Use the write pdo for query.
 * @method static static cloneWithout(array $properties) Clone the query without the given properties.
 * @method static static cloneWithoutBindings(array $except) Clone the query without the given bindings.
 * @method static $this dump() Dump the current SQL and bindings.
 * @method static void dd() Die and dump the current SQL and bindings.
 *
 * @see \Illuminate\Database\Query\Builder
 */
trait QueryBuilder
{
    use BuildsQueries, CustomQueryBuilder;
}
