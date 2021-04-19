<?php

namespace Ianrizky\Illuminate\Database\Eloquent;

use Illuminate\Database\Eloquent\SoftDeletes as BaseSoftDeletes;
use Illuminate\Support\Carbon;

/**
 * @property \Illuminate\Support\Carbon|null $deleted_at
 */
trait SoftDeletes
{
    use BaseSoftDeletes;

    /**
     * Return "deleted_at" attribute value.
     *
     * @return \Illuminate\Support\Carbon|null
     */
    public function getDeletedAt(): ?Carbon
    {
        return $this->getAttributeValue($this->getDeletedAtColumn());
    }

}
