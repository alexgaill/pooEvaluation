<?php

require 'app/App.php' ;
use App\App;

define('ROOT', __DIR__);
App::load();

session_start();

require 'routing.php';
