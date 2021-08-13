<?php

namespace App\Shared\Domain;

use App\Shared\Domain\Base;

class Cached extends Base
{
    public function store()
    {
        return "Save store in cached";
    }
}
