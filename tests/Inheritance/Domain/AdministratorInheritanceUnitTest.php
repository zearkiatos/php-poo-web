<?php

use PHPUnit\Framework\TestCase;
use App\Inheritance\Domain\Administrator;

class AdministratorInheritanceUnitTest extends TestCase
{
    function test_should_get_username()
    {
        $expectedValue = 'root';
        $administrator = new Administrator("root");

        $name = $administrator->getName();

        $this->assertEquals($expectedValue, $name);
    }
}