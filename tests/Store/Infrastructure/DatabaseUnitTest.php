<?php
use PHPUnit\Framework\TestCase;
use App\Store\Infrastructure\Database;

class DataBaseUnitTest extends TestCase
{
    function test_should_execute_get_method_and_return_its_value()
    {
        $expectedValue = 'Implement code';
        $database = new Database();
        $data = $database->get();

        $this->assertEquals($expectedValue, $data);
    }
}