<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\aboutController;
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
//     return view('welcome');
// })->middleware('protected');

// Route::middleware(['protectedPage'])->group(function () {
  
// Route::get('login', function(){
//     return view("login");
// });  
// Route::get('about/{name}', [aboutController::class, 'index']);

// });

  
Route::get('/', function () {
    if(!session()->has("username")){
        return back();
    }
    return view('welcome');
});

Route::Post('login', [aboutController::class, 'login']);
Route::Post('logout', [aboutController::class, 'logout']);

    Route::get('about/{name}', [aboutController::class, 'index']);
    Route::get('loginPage', [aboutController::class, 'loginPage']);
    Route::view('noaccess', 'noaccess');
    Route::view('upload', 'upload');
    Route::Post('upload', [aboutController::class, 'upload']);

    Route::get('blog', [aboutController::class, 'blog']); 
    
    
    Route::get('users', [aboutController::class, 'user']);  
    Route::get('posts', [aboutController::class, 'post']);
    
    Route::get('tag', [aboutController::class, 'tag']);