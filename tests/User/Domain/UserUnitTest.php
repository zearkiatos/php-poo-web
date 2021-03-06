<?php

use PHPUnit\Framework\TestCase;
use App\User\Domain\User;
use App\Administrator\Domain\Administrator;

class UserUnitTest extends TestCase
{
    function test_should_declare_administrator_type_and_return_execute_greet()
    {
        $expectedValue = 'Hello Administrator';
        $user = new User();
        $user->type = new Administrator();
        $greet = $user->type->greet();

        $this->assertEquals($expectedValue, $greet);
    }

    function test_should_return_the_username()
    {
        $expectedValue = 'Pedro';
        $user = new User();
        $user->username = 'Pedro';

        $username = $user->getUsername();

        $this->assertEquals($expectedValue, $username);
    }
}
