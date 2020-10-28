<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostsController;

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

// Route::get('/', function () {
//     return  view('welcome');
// });

Route::get ('/', function () {
    $name = request('name');
    
    return view ('test', [
        'name' => $name
        ,
    ]);
} );

// Route::get('/posts/{post}', function ($post) {
 
// });

Route::get('/posts/{post}', [PostsController::class, 'render']);