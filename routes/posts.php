<?php

use App\Livewire\Pages\Posts\PostsEdit;
use App\Livewire\Pages\Posts\PostsSearch;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
Route::get('posts/create', function () {
    return view("posts.create");
    
})->middleware(['auth'])->name('posts.create');
Route::get('posts/edit/{post_id}',PostsEdit::class)->middleware(['auth'])->name('posts.edit');
Route::get('posts/search/{q}',PostsSearch::class)->name('posts.search');

