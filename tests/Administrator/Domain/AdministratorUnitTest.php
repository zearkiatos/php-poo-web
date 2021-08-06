<?php

use PHPUnit\Framework\TestCase;
use App\Administrator\Domain\Administrator;

class AdministratorUnitTest extends TestCase
{
    function test_should_execute_a_greet_and_return_a_greetings()
    {
        $expectedValue = 'Hola Administrador';
        $administrator = new Administrator();

        $greet = $administrator->greet();

        $this->assertEquals($expectedValue, $greet);
    }
}
