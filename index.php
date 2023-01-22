<?php

use App\Models\User;

define('ROOT', dirname(__FILE__));
require_once('vendor/autoload.php');

$class = new User();
var_dump($class->checkEmail('markezeafu@Gmail.com'));