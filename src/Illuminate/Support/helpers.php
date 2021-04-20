<?php

if (! function_exists('tap_if')) {
    /**
     * Call the given Closure with the given value then return the value if the given condition is true.
     *
     * @param  mixed  $condition
     * @param  mixed  $value
     * @param  callable|null  $callback
     * @return mixed|\Illuminate\Support\HigherOrderTapProxy
     */
    function tap_if($condition, $value, callable $callback = null)
    {
        if ($condition) {
            return tap($value, $callback);
        }

        return $value;
    }
}

if (! function_exists('tap_unless')) {
    /**
     * Call the given Closure with the given value then return the value unless the given condition is true.
     *
     * @param  mixed  $condition
     * @param  mixed  $value
     * @param  callable|null  $callback
     * @return mixed|\Illuminate\Support\HigherOrderTapProxy
     */
    function tap_unless($condition, $value, callable $callback = null)
    {
        return tap_if(!$condition, $value, $callback);
    }
}

if (! function_exists('dd_if')) {
    /**
     * Run dd() helper if the given condition is true.
     *
     * @param  mixed  $condition
     * @param  mixed  ...$vars
     * @return exit
     */
    function dd_if($condition, ...$vars)
    {
        if ($condition) {
            dd(...$vars);
        }
    }
}

if (! function_exists('dd_unless')) {
    /**
     * Run dd() helper unless the given condition is true.
     *
     * @param  mixed  $condition
     * @param  mixed  ...$vars
     * @return exit
     */
    function dd_unless($condition, ...$vars)
    {
        dd_if(!$condition, ...$vars);
    }
}
