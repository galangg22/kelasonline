<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home'); // ← ini diperbaiki!
});

Route::get('/classes', function () {
    $classes = [
        (object)['name' => 'Laravel Dasar', 'description' => 'Belajar Laravel dari 0.'],
        (object)['name' => 'PHP OOP', 'description' => 'Dasar Pemrograman Berorientasi Objek.'],
        (object)['name' => 'Web Design', 'description' => 'Membuat tampilan website menarik.'],
    ];
    return view('classes.index', compact('classes'));
});
