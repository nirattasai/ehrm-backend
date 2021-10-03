<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;

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

Route::get('/csrf', function () {
    echo csrf_token();
});

// Route::get('/login', [LoginController::class, 'login']);

Route::post('/api/login', [LoginController::class, 'login']);
Route::get('/api/about', [LoginController::class, 'about_me']);
Route::get('/api/logout', [LoginController::class, 'logout']);
Route::get('/api/is-admin', [LoginController::class, 'is_admin']);

//Admin route
Route::post('/api/admin/create-user', [AdminController::class, 'create_user']);
Route::post('/api/admin/remove-user', [AdminController::class, 'remove_user']);
Route::get('/api/admin/all-users', [AdminController::class, 'all_users']);

// Route::post('/api/user/start-work')
// Route::post('/login', function(Request $request) {
//     return $request->post();
// });