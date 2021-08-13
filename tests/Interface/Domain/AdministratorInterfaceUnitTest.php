<?php

use PHPUnit\Framework\TestCase;
use App\Inheritance\Domain\Administrator;

class AdministratorInterfaceUnitTest extends TestCase
{
    function test_should_get_username()
    {
        $expectedValue = 'Pedro';
        $administrator = new Administrator("Pedro");

        $name = $administrator->getName();

        $this->assertEquals($expectedValue, $name);
    }
}