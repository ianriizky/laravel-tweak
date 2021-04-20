<?php

namespace Ianrizky\Illuminate\Database\Concerns;

use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\Config;
use InvalidArgumentException;

trait UseCustomQueryBuilder
{
    /**
     * Get a new query builder instance.
     *
     * @return \Illuminate\Database\Query\Builder
     *
     * @throws \InvalidArgumentException
     */
    public function query(): Builder
    {
        $customQueryBuilderClass = Config::get('database.custom_query_builder_class');

        if (is_null($customQueryBuilderClass)) {
            return new Builder(
                $this, $this->getQueryGrammar(), $this->getPostProcessor()
            );
        }

        if (is_subclass_of($customQueryBuilderClass, Builder::class)) {
            return new $customQueryBuilderClass(
                $this, $this->getQueryGrammar(), $this->getPostProcessor()
            );
        }

        throw new InvalidArgumentException(sprintf(
            "The custom query builder class of %s must extend the base %s laravel class",
            $customQueryBuilderClass, Builder::class
        ));
    }
}
