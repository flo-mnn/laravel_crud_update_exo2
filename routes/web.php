<?php

use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [MemberController::class, 'index']);
Route::get('/member/show/{id}', [MemberController::class, 'show']);
Route::get('/member/create', [MemberController::class, 'create']);
Route::get('/member/edit/{id}', [MemberController::class, 'edit']);
Route::post('/member/add',[MemberController::class, 'store']);
Route::post('/member/update/{id}',[MemberController::class, 'update']);
Route::post('/member/delete/{id}',[MemberController::class, 'destroy']);
