<?php

use App\Http\Controllers\firstcontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\Postcontroller;
use App\Http\Controllers\rysacontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::view('/home', 'home');
Route::view('/elgreen', 'elgreen');
Route::view('/lodging', 'lodging');




Route::post('users', [logincontroller::class, 'getdata']);
Route::view('login', 'login');
Route::view('profile', 'profile');
Route::get('/add-post', [Postcontroller::class, 'addPost'])->name('post.add');
Route::post('/add-post', [Postcontroller::class, 'savePost'])->name('save.post');

Route::view('rysa', 'rysa');
Route::post('send', [rysacontroller::class, 'send']);
Route::get('rysa1', [rysacontroller::class, 'view']);
Route::get('first', [firstcontroller::class, 'addPost'])->name('post.add');
Route::post('first', [firstcontroller::class, 'savePost'])->name('save.post');
Route::get('first1', [firstcontroller::class, 'postList']);
Route::get('edit/{id}', [firstcontroller::class, 'editpost'])->name('post.edit');
Route::get('delete/{id}', [firstcontroller::class, 'deletepost'])->name('post.delete');
Route::post('/update-post', [firstcontroller::class, 'updatepost'])->name('update.post');
Route::post('/update-post', [firstcontroller::class, 'updatepost'])->name('update.post');


// Route::get('products/index/{name}', [logincontroller::class, 'show'] )->where('name', '[0-9]+');

Route::get('products/index/{name}/{id}', [logincontroller::class, 'show'] )->where(
    [
        'id'=>'[a-zA-Z]+',
    'name'=>'[0-9]+'
    ]);

Route::get('loginview', [logincontroller::class, 'getdata'] );
Route::get('loginview', [logincontroller::class, 'lesson'] );

Route::get('/products', function(){
    return "welcome to product page";
});





