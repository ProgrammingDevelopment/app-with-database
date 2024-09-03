<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Selamat datang!!');
});
Route::get('/users', function () {
    foreach(User::all() as $user) {
        dump($user->name);
    }
});
