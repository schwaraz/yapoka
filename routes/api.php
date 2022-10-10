<?php
use App\Http\Controllers\Api\Postcontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\angket;

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
Route::get('/', function () {
    return view('welcome');
});
Route::get('/auth/redirect', function () {
    return Socialite::driver('google')->redirect();

});

Route::get('/form', function () {
    return view('form');
});
Route::get('angket', function(){
    return view('angket');
});
Route::get('angket/send', [Postcontroller::class, 'store']);
Route::get('notifangket', function(){
    return view('notifangket');
});
Route::get('pilihangket', [Postcontroller::class, 'getangket']);
Route::post('pilihangket/send', [Postcontroller::class, 'postangket']);

Route::post('pilihangket/post', [Postcontroller::class, 'postdata']);
