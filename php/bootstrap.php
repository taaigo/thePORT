<?php
require '../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable('../');        // pin point location to .env
$dotenv->load();

include 'functions/redirect.php';