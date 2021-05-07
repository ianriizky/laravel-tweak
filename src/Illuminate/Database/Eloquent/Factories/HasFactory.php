<?php

namespace Ianrizky\Illuminate\Database\Eloquent\Factories;

use Illuminate\Database\Eloquent\FactoryBuilder;

trait HasFactory
{
    /**
     * Get a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\FactoryBuilder
     */
    public static function factory(): FactoryBuilder
    {
        return factory(static::class);
    }
}
