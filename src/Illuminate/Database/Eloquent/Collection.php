<?php

namespace Ianrizky\Illuminate\Database\Eloquent;

use Illuminate\Database\Eloquent\Collection as BaseCollection;
use Iterator;

class Collection extends BaseCollection implements Iterator
{
    /** @var int */
    protected $position = 0;

    /**
     * {@inheritDoc}
     */
    public function current(): Model
    {
        return $this->getIterator()->offsetGet($this->position);
    }

    /**
     * {@inheritDoc}
     */
    public function key(): int
    {
        return $this->position;
    }

    /**
     * {@inheritDoc}
     */
    public function next(): void
    {
        $this->position++;
    }

    /**
     * {@inheritDoc}
     */
    public function rewind(): void
    {
        $this->position = 0;
    }

    /**
     * {@inheritDoc}
     */
    public function valid(): bool
    {
        return $this->getIterator()->offsetExists($this->position);
    }
}
