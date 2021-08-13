<?php

use PHPUnit\Framework\TestCase;
use App\Search\Domain\UserSearch;

class UserSearchUnitTest extends TestCase
{
    function test_should_execute_all_user()
    {
        $expectedValue = 'Get the Users, XML';
        $userSearch = new UserSearch();

        $users = $userSearch->all();

        $this->assertEquals($expectedValue, $users);
    }
}
