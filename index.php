<?php

use App\Administrator\Domain\Administrator;
use App\User\Domain\User;
use App\Login\Domain\Guest;
use App\Login\Domain\User as UserLogin;
use App\Login\Domain\Administrator as AdministratorLogin;

require __DIR__ . '/vendor/autoload.php';

$user = new User();

$user->type = new Administrator();


echo $user->type->greet();

echo "<pre>";
include 'greet.php';

echo greet("Pedro", "How are you?");

echo "<pre>";

$guest = new Guest();
echo $guest->login();

echo "<pre>";

$userLogin = new UserLogin('Pedro');
echo $userLogin->login();

echo "<pre>";

$administratorLogin = new AdministratorLogin('Admin');
echo $administratorLogin->login();


