<?php

namespace Ianrizky\Illuminate\Database\Eloquent\Concerns;

use Illuminate\Support\Carbon;

/**
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 */
trait HasTimestamps
{
    /**
     * Return "created_at" attribute value.
     *
     * @return \Illuminate\Support\Carbon|null
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->getAttributeValue($this->getCreatedAtColumn());
    }

    /**
     * Return "updated_at" attribute value.
     *
     * @return \Illuminate\Support\Carbon|null
     */
    public function getUpdatedAt(): ?Carbon
    {
        return $this->getAttributeValue($this->getUpdatedAtColumn());
    }
}
