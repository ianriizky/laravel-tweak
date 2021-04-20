<?php

namespace Ianrizky\Illuminate\Database\Eloquent;

use Illuminate\Database\Eloquent\Model as BaseModel;

/**
 * @property int $id
 */
abstract class Model extends BaseModel
{
    use Concerns\HandleModel,
        Concerns\HasAttributes,
        Concerns\HasTimestamps,
        Concerns\Tappable,
        Docblock\EloquentBuilder;

    /**
     * {@inheritDoc}
     */
    public function newCollection(array $models = []): Collection
    {
        return new Collection($models);
    }
}
