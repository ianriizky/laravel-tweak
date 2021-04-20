<?php

namespace Ianrizky\Illuminate\Database\Eloquent\Concerns;

use Ianrizky\Illuminate\Support\Traits\Tappable as BaseTappable;
use Illuminate\Database\Eloquent\Model;

trait Tappable
{
    use BaseTappable;

    /**
     * Call the given Closure with this instance, save the instance into storage, then return the instance.
     *
     * @param  callable|null  $callback
     * @return $this
     */
    public function tapAndSave(callable $callback = null)
    {
        return $this->tap($callback)->tap(function (Model $model) {
            $model->save();
        });
    }

    /**
     * Call the given Closure with this instance, save the instance into storage, then return the instance if the given condition is true.
     *
     * @param  mixed  $condition
     * @param  callable|null  $callback
     * @return $this
     */
    public function tapAndSaveIf($condition, callable $callback = null)
    {
        return $this->tapIf($condition, $callback)->tapIf($condition, function (Model $model) {
            $model->save();
        });
    }

    /**
     * Call the given Closure with this instance, save the instance into storage, then return the instance unless the given condition is true.
     *
     * @param  mixed  $condition
     * @param  callable|null  $callback
     * @return $this
     */
    public function tapAndSaveUnless($condition, callable $callback = null)
    {
        return $this->tapUnless($condition, $callback)->tapUnless($condition, function (Model $model) {
            $model->save();
        });
    }

    /**
     * Save the instance into storage, call the given Closure with this instance, then return the instance.
     *
     * @param  callable|null  $callback
     * @return $this|\Illuminate\Support\HigherOrderTapProxy
     */
    public function saveAndTap(callable $callback = null)
    {
        return $this->tap(function (Model $model) {
            $model->save();
        })->tap($callback);
    }

    /**
     * Save the instance into storage, call the given Closure with this instance, then return the instance if the given condition is true.
     *
     * @param  mixed  $condition
     * @param  callable|null  $callback
     * @return $this|\Illuminate\Support\HigherOrderTapProxy
     */
    public function saveAndTapIf($condition, callable $callback = null)
    {
        return $this->tapIf($condition, function (Model $model) {
            $model->save();
        })->tapIf($condition, $callback);
    }

    /**
     * Save the instance into storage, call the given Closure with this instance, then return the instance unless the given condition is true.
     *
     * @param  mixed  $condition
     * @param  callable|null  $callback
     * @return $this|\Illuminate\Support\HigherOrderTapProxy
     */
    public function saveAndTapUnless($condition, callable $callback = null)
    {
        return $this->tapUnless($condition, function (Model $model) {
            $model->save();
        })->tapUnless($condition, $callback);
    }
}
