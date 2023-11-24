<?php

use App\Models\ApiNavbarItems;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ApiPageInfoController;
use App\Http\Controllers\ApiPageController; 
use App\Http\Controllers\ApiNavbarItemsController;
use App\Http\Controllers\ApiNavbarController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/pageinfo', [ApiPageInfoController::class, 'index']);

Route::get('/pagecontent/{url}', [ApiPageController::class, 'show']);

Route::get('/template/navbar', [ApiNavbarController::class, 'index']);
Route::get('/template/navbar/{name}', [ApiNavbarController::class, 'show']);

Route::get('/items/navbar', [ApiNavbarItemsController::class, 'index']);
Route::get('/items/navbar/{name}', [ApiNavbarItemsController::class, 'show']);