<?php

namespace Ianrizky\LaravelTweak\Tests\Unit;

use Ianrizky\LaravelTweak\Tests\DummyClass;
use Ianrizky\LaravelTweak\Tests\TestCase;

class HelpersTest extends TestCase
{
    /**
     * Assert that helper function tap_if() is running properly.
     *
     * @return void
     */
    public function testAssertTapIf()
    {
        $condition = rand(0, 1) === 1;

        $value = rand(0, 10);
        $exponential = rand(0, 10);

        /** @var \Ianrizky\LaravelTweak\Tests\DummyClass $dummy */
        $dummy = tap_if($condition, new DummyClass($value), function (DummyClass $dummy) use ($exponential) {
            $dummy->exponential($exponential);
        });

        $this->assertInstanceOf(DummyClass::class, $dummy);

        if ($condition) {
            return $this->assertEquals(pow($value, $exponential), $dummy->getValue());
        }

        $this->assertEquals($value, $dummy->getValue());
    }

    /**
     * Assert that helper function tap_unless() is running properly.
     *
     * @return void
     */
    public function testAssertTapUnless()
    {
        $condition = rand(0, 1) === 1;

        $value = rand(0, 10);
        $exponential = rand(0, 10);

        /** @var \Ianrizky\LaravelTweak\Tests\DummyClass $dummy */
        $dummy = tap_unless($condition, new DummyClass($value), function (DummyClass $dummy) use ($exponential) {
            $dummy->exponential($exponential);
        });

        $this->assertInstanceOf(DummyClass::class, $dummy);

        if (!$condition) {
            return $this->assertEquals(pow($value, $exponential), $dummy->getValue());
        }

        $this->assertEquals($value, $dummy->getValue());
    }
}
