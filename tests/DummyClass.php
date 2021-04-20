<?php

namespace Ianrizky\LaravelTweak\Tests;

class DummyClass
{
    /**
     * The value.
     *
     * @var int
     */
    protected $value;

    /**
     * Create a new instance class.
     *
     * @param  int  $value
     * @return void
     */
    public function __construct(int $value)
    {
        $this->setValue($value);
    }

    /**
     * Return value.
     *
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set value.
     *
     * @return void
     */
    public function setValue(int $value)
    {
        $this->value = $value;
    }

    /**
     * Return exponential value.
     *
     * @param  int  $value
     * @return int
     */
    public function exponential(int $value)
    {
        return $this->value = pow($this->value, $value);
    }
}
