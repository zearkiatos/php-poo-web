<?php

use PHPUnit\Framework\TestCase;
use App\Shared\Domain\Cached;

class CachedUnitTest extends TestCase
{
    function test_should_execute_method_store_and_return_value()
    {
        $expectedValue = 'Save store in cached';
        $cached = new Cached();
        $cachedStore = $cached->store();

        $this->assertEquals($expectedValue, $cachedStore);
    }
}
