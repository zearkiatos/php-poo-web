<?php
namespace App\Test\Login\Domain;

use PHPUnit\Framework\TestCase;
use App\Login\Domain\User;

class UserUnitTest extends TestCase
{
    function test_should_execute_the_method_login()
    {
        $expectedValue = 'My name is Pedro from the class App\Login\Domain\User';
        $user = new User('Pedro');

        $login = $user->login();

        $this->assertEquals($expectedValue, $login);
    }
}