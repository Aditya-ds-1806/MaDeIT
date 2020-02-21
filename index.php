<?php

require_once 'vendor/autoload.php';

// Include router class
include('classes/Route.php');

Route::add('/', function () {
    require('views/index.php');
});

Route::add('/people', function () {
    require('views/people.php');
});

Route::add('/portfolio', function () {
    require('views/portfolio.php');
});

Route::add('/news', function () {
    require('views/news.php');
});

Route::add('/tenders', function () {
    require('views/tenders.php');
});

Route::run('/');
