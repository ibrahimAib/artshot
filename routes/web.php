<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\VideoController;
use App\Models\About;
use App\Models\Photo;
use Illuminate\Support\Facades\Route;
use Whoops\Run;

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
    return redirect('/photo');
});

Auth::routes();

Route::get('/home', function () {
    return redirect('/');
});
// photo Controller
Route::resource('/photo', PhotoController::class);
Route::get('/mygear', [PhotoController::class, 'gear']);
Route::get('/contact', [PhotoController::class, 'contact']);
Route::resource('/about', AboutController::class);

Route::resource('/videos', VideoController::class);
// Admin Controller
Route::get('/admin', [AdminController::class, 'photo']);
Route::get('/createphoto', [AdminController::class, 'createphoto']);
Route::get('/createvideo', [AdminController::class, 'createvideo']);
Route::post('/addadmin', [AdminController::class, 'addadmin']);
Route::get('/admins', [AdminController::class, 'admins']);
Route::get('/adabout', [AdminController::class, 'about']);
Route::get('/newsite', [About::class, 'create']);
