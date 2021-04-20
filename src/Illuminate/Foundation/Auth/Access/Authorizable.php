<?php

namespace Ianrizky\Illuminate\Foundation\Auth\Access;

use Illuminate\Foundation\Auth\Access\Authorizable as BaseAuthorizable;
use Illuminate\Http\Response;

trait Authorizable
{
    use BaseAuthorizable;

    /**
     * Throw an HttpException if the entity has the given abilities.
     *
     * @param  iterable|string  $abilities
     * @param  array|mixed  $arguments
     * @return $this
     *
     * @throws \Symfony\Component\HttpKernel\Exception\HttpException
     */
    public function abortIfCant($abilities, $arguments = [])
    {
        if ($this->cant($abilities, $arguments)) {
            abort(Response::HTTP_FORBIDDEN);
        }

        return $this;
    }
}
