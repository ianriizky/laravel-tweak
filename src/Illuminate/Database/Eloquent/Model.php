<?php

namespace Ianrizky\Illuminate\Database\Eloquent;

use Illuminate\Database\Eloquent\Model as BaseModel;

/**
 * @property int $id
 */
abstract class Model extends BaseModel
{
    use Concerns\EloquentBuilderDocblock,
        Concerns\HandleModel,
        Concerns\HasAttributes,
        Concerns\HasTimestamps,
        Concerns\Tappable;
}
