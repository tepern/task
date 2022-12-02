<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

$groupData = [
    'namespace' => '\App\Http\Controllers',
    'prefix' => 'education',
];
Route::group($groupData, function() {
    //User
    $methods = ['index', 'show'];
    
    Route::resource('user','UserController')->names('education.user');
});
