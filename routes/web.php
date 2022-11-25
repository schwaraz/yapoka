<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\angket;
use App\Http\Controllers\Api\Postcontroller;
use App\Http\Controllers\Api\dataangket;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;
use App\Http\Controllers\CrudController;
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
// });
// Route::get('/auth/redirect', function () {
//     return Socialite::driver('google')->redirect();

// });

Route::get('/form', function () {
    return view('form');
});
Route::get('angket', function(){
    return view('angket');
});
Route::post('angket/send', [Postcontroller::class, 'store']);
Route::post('notifangket', function(){
    return view('notifangket');
});
Route::get('tes', function(){
    $pdf = Pdf::loadView('form');
    return $pdf->download('invoice.pdf');
});
Route::get('pilihangket', [Postcontroller::class, 'getangket']);
Route::get('/pilihangket/send', [Postcontroller::class, 'postangket']);
Route::post('pilihangket/post', [dataangket::class, 'postdata']);
Route::get('isiangket', [dataangket::class, 'isiangket']);
Route::post('/isiangket/submit',[dataangket::class, 'submit']);
Route::get('/ceklaporan',[dataangket::class, 'ambildata']);
Route::post('/ceklaporan/laporanditolak', [dataangket::class, 'tolak']);
Route::post('/ceklaporan/laporanditerima', [dataangket::class, 'terima']);
Route::post('/ceklaporan/penyimpanandata', [dataangket::class, 'save']);
Route::get('/preview', [dataangket::class, 'priview']);
Route::get('/print', [dataangket::class, 'print']);
Route::get('/revisi', [dataangket::class, 'revisi']);
Route::post('/revisi/submit', [dataangket::class, 'updaterevisi']);
//kurang submit revisi ambil tolak cuma update ke sananya ganti +1