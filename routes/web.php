<?php

use App\Models\Posts;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome',[
    'posts'=>Posts::all()->reverse(),

])->name("welcome");

Route::view('profile', 'profile')
    ->middleware(['auth', 'verified'])
    ->name('profile');

Route::view('setting', 'setting')
    ->middleware(['auth'])
    ->name('setting');

require __DIR__.'/auth.php';
require __DIR__.'/posts.php';
