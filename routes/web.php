<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', [PostController::class, 'index']);
//Route::resource('/', PostController::class)->names(
//    [
//        'index'=>'posts.index',
//        'create' => 'posts.create',
//        'store' => 'posts.store',
//        'show' => 'posts.show'
//    ]
//);
