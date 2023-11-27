<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\KelasXController;
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
    return view('beranda');

});


Auth::routes();

Route::get('/beranda', [App\Http\Controllers\HomeController::class, 'index'])->name('beranda');

Route::get('/content/input',[JurusanController::class,'input']);

Route::post('/content/store',[JurusanController::class,'store']);
Route::post('/content/store',[KelasXController::class,'store']);

// untuk mengupload gambar 


Route::get('/content/input',[JurusanController::class,'input']);


Route::get('/inputjurusan', function () {
    return view('/content/inputjurusan');
});  
Route::get('/kelas', [KelasXController::class,'index']);
Route::get('/beranda', function () {
    return view('beranda');
});
Route::get('/rombel', function () {
    return view('rombonganbelajar');
});
Route::get('/gafuri', function () {
    return view('gafuri');
});
Route::get('/gafuri2', function () {
    return view('gafuri2');
    
});
Route::get('/tes', function () {
    return view('tes');
});

Route::get('/kalender', function () {
    return view('kalender');
});



Route::get('/beranda2', function () {
    return view('beranda2');
});
// Route::get('/login', function () {
//     return view('login');
// });
Route::get('/guru', function () {
    return view('guru');
});
Route::get('/jurusan', [JurusanController::class,'index']);
Route::get('/RPL', function () {
    return view('Jurusan.RPL');
});
Route::get('/DKV1', function () {
    return view('Jurusan.DKV1');
});
Route::get('/DKV2', function () {
    return view('Jurusan.DKV2');
});
Route::get('/TKJ', function () {
    return view('Jurusan.TKJ');
});
Route::get('/AKL1', function () {
    return view('Jurusan.AKL1');
});
Route::get('/AKL2', function () {
    return view('Jurusan.AKL2');
});
Route::get('/BDP', function () {
    return view('Jurusan.BDP');
});
Route::get('/MP', function () {
    return view('Jurusan.MP');
});
Route::get('/BR1', function () {
    return view('Jurusan.BR1');
});
Route::get('/BR2', function () {
    return view('Jurusan.BR2');
});
Route::get('/Kuliner', function () {
    return view('Jurusan.Kuliner');
});
Route::get('/TBS', function () {
    return view('Jurusan.TBS');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
