<?php

use PHPUnit\Framework\TestCase;
use App\Inheritance\Domain\User;

class UserInheritanceUnitTest extends TestCase
{
    function test_should_get_username()
    {
        $expectedValue = 'Pepito';
        $user = new User("Pepito");

        $name = $user->getName();

        $this->assertEquals($expectedValue, $name);
    }
}