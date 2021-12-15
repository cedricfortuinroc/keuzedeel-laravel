<?php

use App\Http\Livewire\PostBySlug;
use Illuminate\Support\Facades\Route;


Route::get('/', function() {
    if(Auth::check()) {
        return redirect()->route('trending');
    }
    return view('welcome');
})->name('index');
Route::view('/trending', 'trending')->name('trending');

Route::get('/post/{slug}', PostBySlug::class)->name('post');

Route::group(['middleware' => 'auth'], function() {
    Route::view('/dashboard', 'dashboard')->name('dashboard');
    Route::view('/posts', 'posts')->name('posts');
    Route::view('/newpost', 'new-post')->name('newpost');
});


require __DIR__.'/auth.php';
