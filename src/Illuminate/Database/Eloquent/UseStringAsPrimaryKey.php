<?php

namespace Ianrizky\Illuminate\Database\Eloquent;

/**
 * @property string $id
 */
trait UseStringAsPrimaryKey
{
    /**
     * The "type" of the primary key ID.
     *
     * @var string
     */
    protected $keyType = 'string';
}
