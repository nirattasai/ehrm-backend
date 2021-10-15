<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\AdminController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\LogController;
use App\Http\Controllers\Api\LeaveController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', [LoginController::class, 'login']);
Route::get('/about', [LoginController::class, 'about_me']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/is-admin', [LoginController::class, 'is_admin']);

//Admin route
Route::post('/admin/create-user', [AdminController::class, 'create_user']);
Route::post('/admin/remove-user', [AdminController::class, 'remove_user']);
Route::get('/admin/all-users', [AdminController::class, 'all_users']);
Route::get('/admin/user/{id}', [AdminController::class, 'get_user']);



Route::post('/user/start-work', [UserController::class, 'start_day']);
Route::post('/user/end-work', [UserController::class, 'end_day']);
Route::post('/user/create-leave', [UserController::class, 'create_leave']);
Route::get('/user/test', [UserController::class, 'test']);
// Route::post('/login', function(Request $request) {
//     return $request->post();
// });

// Query data
Route::get('/logs', [LogController::class, 'index']);
Route::get('/leaves', [LogController::class, 'index']);
Route::get('/logs/{id}', [LogController::class, 'show']);
Route::get('/leaves/{id}', [LeaveController::class, 'show']);
