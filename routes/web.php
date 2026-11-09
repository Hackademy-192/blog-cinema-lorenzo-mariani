<?php

use Illuminate\Support\Facades\Route;

$all_dragonball = [
    [
        "id" => 1,
        "title" => "dragonball-z",
        "genere" => "manga",
        "anno di uscita" => 1989,
        "regista" => "daisuke",
    ],
    [
        "id" => 2,
        "title" => "dragonball-super",
        "genere" => "manga",
        "anno di uscita" => 2015,
        "regista" => "akira",
    ],
    [
        "id" => 3,
        "title" => "dragonaball beerus",
        "genere" => "manga",
        "anno di uscita" => 2026,
        "regista" => "tatsuya",
    ],
];

Route::get('/', function () {
    return view('welcome');
});

Route::get('/saga1', function () use ($all_dragonball) {
    return view('film', ['film' => $all_dragonball[0]]);
});

Route::get('/saga2', function () use ($all_dragonball) {
    return view('film', ['film' => $all_dragonball[1]]);
});

Route::get('/saga3', function () use ($all_dragonball) {
    return view('film', ['film' => $all_dragonball[2]]);
});