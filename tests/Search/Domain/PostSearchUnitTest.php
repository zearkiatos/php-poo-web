<?php

use PHPUnit\Framework\TestCase;
use App\Search\Domain\PostSearch;

class PostSearchUnitTest extends TestCase
{
    function test_should_execute_all_user()
    {
        $expectedValue = 'Get the Posts, JSON';
        $postSearch = new PostSearch();

        $posts = $postSearch->all();

        $this->assertEquals($expectedValue, $posts);
    }
}