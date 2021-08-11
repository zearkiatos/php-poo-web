<?php
namespace App\Test\Login\Domain;

use PHPUnit\Framework\TestCase;
use App\Login\Domain\Guest;

class GuestUnitTest extends TestCase
{
    function test_should_execute_the_method_login()
    {
        $expectedValue = 'My name is Guest from the class App\Login\Domain\Guest';
        $guest = new Guest();

        $login = $guest->login();

        $this->assertEquals($expectedValue, $login);
    }
}