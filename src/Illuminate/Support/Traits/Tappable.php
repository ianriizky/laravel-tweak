<?php

namespace Ianrizky\Illuminate\Support\Traits;

use Illuminate\Support\Traits\Tappable as BaseTappable;

trait Tappable
{
    use BaseTappable;

    /**
     * Call the given Closure with this instance then return the instance if the given condition is true.
     *
     * @param  mixed  $condition
     * @param  callable|null  $callback
     * @return $this|\Illuminate\Support\HigherOrderTapProxy
     */
    public function tapIf($condition, callable $callback = null)
    {
        return tap_if($condition, $this, $callback);
    }

    /**
     * Call the given Closure with this instance then return the instance unless the given condition is true.
     *
     * @param  mixed  $condition
     * @param  callable|null  $callback
     * @return $this|\Illuminate\Support\HigherOrderTapProxy
     */
    public function tapUnless($condition, callable $callback = null)
    {
        return tap_unless($condition, $this, $callback);
    }
}
