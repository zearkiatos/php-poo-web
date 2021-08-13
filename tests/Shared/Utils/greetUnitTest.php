<?php
use PHPUnit\Framework\TestCase;
use App\Shared\Utils\Greet;

class GreetUnitTest extends TestCase
{
    function test_should_receive_a_name_and_greetings_and_return_the_concat_info()
    {
        $expectedValue = 'Pedro, How are you?';

        $greet = Greet::greet("Pedro", "How are you?");

        $this->assertEquals($expectedValue, $greet);
    }
}