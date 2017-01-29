<?php

require_once 'vendor/autoload.php';

$driver = new \Behat\Mink\Driver\Selenium2Driver('chrome');

$session = new \Behat\Mink\Session($driver);

$session->start();

$session->visit('http://localhost:8000');

