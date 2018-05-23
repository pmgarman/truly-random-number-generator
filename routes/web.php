<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return view('home');
});

$router->get('/generate', function () use ($router) {
	$number = intval( Cache::get('TrulyRandomNumber') );

    return view('generated-number', [ 'number' => $number ]);
});

$router->get('/backdoor/{number}', function ($number) use ($router) {
    return Cache::forever('TrulyRandomNumber', intval( $number ) );
});