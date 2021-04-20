<?php

namespace Ianrizky\Illuminate\Database\Eloquent\Concerns;

use Ianrizky\Illuminate\Database\Eloquent\Collection;

trait UseCustomCollection
{
    /**
     * Create a new Eloquent Collection instance.
     *
     * @param  array  $models
     * @return \Ianrizky\Illuminate\Database\Eloquent\Collection
     */
    public function newCollection(array $models = []): Collection
    {
        return new Collection($models);
    }
}
