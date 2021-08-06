<?php

use App\Administrator\Domain\Administrator;
use App\User\Domain\User;

require __DIR__ . '/vendor/autoload.php';

$user = new User();

$user->type = new Administrator();


echo $user->type->greet();
