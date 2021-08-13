<?php

namespace App\Search\Domain;

class PostSearch implements Search
{
    public function all()
    {
        return "Get the Posts, JSON";
    }
}