<?php

namespace Ianrizky\Illuminate\Database\Eloquent\Factories;

use Illuminate\Database\Eloquent\FactoryBuilder;

trait HasFactory
{
    /**
     * Get a new factory instance for the model.
     *
     * @param  mixed  ...$paramaters
     * @return \Illuminate\Database\Eloquent\FactoryBuilder
     */
    public static function factory(...$paramaters): FactoryBuilder
    {
        $paramaters = array_merge([static::class], $paramaters);

        return factory(...$paramaters);
    }
}
