<?php

namespace Ianrizky\Illuminate\Database\Eloquent;

use ArrayIterator;
use Illuminate\Database\Eloquent\Collection as BaseCollection;

class Collection extends BaseCollection
{
    /**
     * {@inheritDoc}
     *
     * @return \ArrayIterator<\Ianrizky\Illuminate\Database\Eloquent\Model>
     */
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->items);
    }
}
