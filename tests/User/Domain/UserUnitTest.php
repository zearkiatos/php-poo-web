<?php
use PHPUnit\Framework\TestCase;
use App\User\Domain\User;
use App\Administrator\Domain\Administrator;

class UserUnitTest extends TestCase
{
    function test_should_declare_administrator_type_and_return_execute_greet()
    {
        $expectedValue = 'Hola Administrador';
        $user = new User();
        $user->type = new Administrator();
        $greet = $user->type->greet();

        $this->assertEquals($expectedValue, $greet);
    }
}