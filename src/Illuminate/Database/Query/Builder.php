<?php

namespace Ianrizky\Illuminate\Database\Query;

use Illuminate\Database\Query\Builder as BaseBuilder;

class Builder extends BaseBuilder
{
    /**
     * Add a basic "where like" clause to the query.
     *
     * @param  string  $column
     * @param  mixed   $value
     * @param  string  $boolean
     * @return $this
     */
    public function whereLike($column, $value, $boolean = 'and')
    {
        return parent::where($column, 'like', $value, $boolean);
    }

    /**
     * Add an "or where like" clause to the query.
     *
     * @param  string  $column
     * @param  mixed   $value
     * @return $this
     */
    public function orWhereLike($column, $value)
    {
        return $this->whereLike($column, $value, 'or');
    }

    /**
     * Add a basic "where like" with prefix "%" clause to the query.
     *
     * @param  string  $column
     * @param  mixed   $value
     * @param  string  $boolean
     * @return $this
     */
    public function whereLikeEnd($column, $value, $boolean = 'and')
    {
        return $this->whereLike($column, sprintf('%%%s', $value), $boolean);
    }

    /**
     * Add an "or where like" with prefix "%" clause to the query.
     *
     * @param  string  $column
     * @param  mixed   $value
     * @return $this
     */
    public function orWhereLikeEnd($column, $value)
    {
        return $this->whereLikeEnd($column, $value, 'or');
    }

    /**
     * Add a basic "where like" with postfix "%" clause to the query.
     *
     * @param  string  $column
     * @param  mixed   $value
     * @param  string  $boolean
     * @return $this
     */
    public function whereLikeStart($column, $value, $boolean = 'and')
    {
        return $this->whereLike($column, sprintf('%s%%', $value), $boolean);
    }

    /**
     * Add an "or where like" with postfix "%" clause to the query.
     *
     * @param  string  $column
     * @param  mixed   $value
     * @return $this
     */
    public function orWhereLikeStart($column, $value)
    {
        return $this->whereLikeStart($column, $value, 'or');
    }

    /**
     * Add a basic "where like" with prefix "%" and postfix "%" clause to the query.
     *
     * @param  string  $column
     * @param  mixed   $value
     * @param  string  $boolean
     * @return $this
     */
    public function whereLikeAny($column, $value, $boolean = 'and')
    {
        return $this->whereLike($column, sprintf('%%%s%%', $value), $boolean);
    }

    /**
     * Add an "or where like" with prefix "%" and postfix "%" clause to the query.
     *
     * @param  string  $column
     * @param  mixed   $value
     * @return $this
     */
    public function orWhereLikeAny($column, $value)
    {
        return $this->whereLikeAny($column, $value, 'or');
    }
}
