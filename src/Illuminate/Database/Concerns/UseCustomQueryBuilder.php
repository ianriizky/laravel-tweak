<?php

namespace Ianrizky\Illuminate\Database\Concerns;

use Ianrizky\Illuminate\Database\Query\Builder;

trait UseCustomQueryBuilder
{
    /**
     * Get a new query builder instance.
     *
     * @return \Ianrizky\Illuminate\Database\Query\Builder
     */
    public function query(): Builder
    {
        return new Builder(
            $this, $this->getQueryGrammar(), $this->getPostProcessor()
        );
    }
}
