<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/about', function () {
//     return "hi about page";
// });

// Route::get('/contact', function () {
//     return "hi, contact page";
// });

// Route::get('/post/{id}/{name}', function($id,$name){
//     return "This is post number ".$id." ".$name;
// });

// Route::get('admin/posts/example',array('as'=>'admin.home', function(){
//     $url = route('admin.home');

//     return "this url is ".$url;
// }));



//Route::get('/post/{id}', [PostController::class, 'index']);

//Route::resource('posts', \App\Http\Controllers\PostController::class);

Route::get('/contact', [PostController::class, 'contact']);

Route::get('/post/{id}/{name}/{password}/',[PostController::class, 'show_post']);

Route::group(['middleware' => ['web']], function (){
});

