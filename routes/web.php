<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome',['posts'=>Post::all()]);
});

Route::get('/register',function () {
    return view('register');
} );


Route::get('/login', function () {
    return view('login');
});

Route::post('/validate',[UserController::class,'validateUserRegistration'])->name('user.store');


Route::get("/profile", function () {
    if (Auth::check()) {
        return view("profile",["posts"=>Post::where('user_id',auth()->id())->get()]);  
    }
    return view('login');
});

Route::get('/logout',[UserController::class,'logout']);

Route::post('/LoginValidation',[UserController::class,'login'])->name('user.login');

// post related routs
Route::post('/PostValidation',[PostController::class,'CreatPost'])->name('create.post');
Route::get('/edit-post/{post}',[PostController::class,'EditPost']);
Route::put('/edit-post/{post}',[PostController::class,'UpdatePost']);
Route::delete('/delete-post/{post}',[PostController::class,'DeletePost']);