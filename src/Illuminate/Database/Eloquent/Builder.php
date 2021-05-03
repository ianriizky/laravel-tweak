<?php

namespace Ianrizky\Illuminate\Database\Eloquent;

use Ianrizky\Illuminate\Database\Query\Builder as QueryBuilder;
use Illuminate\Database\Eloquent\Builder as BaseBuilder;

/**
 * @method $this setModel(\Ianrizky\Illuminate\Database\Eloquent\Model $model) Set a model instance for the model being queried.
 */
class Builder extends BaseBuilder
{
    use Docblock\QueryBuilder;

    /**
     * Create a new Eloquent query builder instance.
     *
     * @param  \Ianrizky\Illuminate\Database\Query\Builder  $query
     * @return void
     */
    public function __construct(QueryBuilder $query)
    {
        parent::__construct($query);
    }

    /**
     * {@inheritDoc}
     */
    public function getQuery(): QueryBuilder
    {
        return parent::getQuery();
    }

    /**
     * {@inheritDoc}
     */
    public function getModel(): Model
    {
        return parent::getModel();
    }
}
