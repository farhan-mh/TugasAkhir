<?php

use App\Models\Posts;
use App\Livewire\Logout;

use App\Models\ShowKategori;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\editHalaman;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\blogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\viewController;
use App\Http\Controllers\contactController;

// use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/farhan',function(){
    echo "Saya siswa";
    
});
Route::get('/guru', function () {
    return view('data_guru');
});
Route::get('/siswa',function(){
    return view('data_siswa');
});


Route::resource('/usr', viewController::class);
// route::get('/berita', [viewController::class,'berita1']);
route::get('/berita!!', [viewController::class,'berita1'])->name('beritaa');
route::get('/list/{menu}', [viewController::class,'show2'])->name('show2');  //'/list/{id}' mengambil url show2 dan id // ->name(show2 di header)
route::get('contact',function(){
    return view('contact');
})->name('contact');

Route::group(['middleware' => 'auth.check'], function(){
    Route::resource('/post', blogController::class);
    Route::resource('/editHalaman',editHalaman::class);
});

route::get('/konten',function(){
    return view('content');
});
// route::get('/kategori2',[viewController::class,'kategori2']);
route::get('/list',[viewController::class,'list']);
// search
Route::get('/usr/search',[viewController::class,'search']);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// login - logut livewire
Route::view('/lgnAdmin','livewire.home');
Route::view('/regis','livewire.layout');
Route::view('/login','livewire.layout2')->name('login');
Route::get('/logout', Logout::class)->name('livewire.logout');
// Route::get('/jkl', 'blogController@index')->name('jkl');
// Route::view('lgnAdmin','livewire.register')->name('register');

// login modul 9  ----
Route::group(['middleware' => 'guest'], function(){
    Route::get('/register',[AuthController::class,'register'])->name('register');
    Route::post('/register',[AuthController::class,'registerPost'])->name('register');
    Route::get('/login2',[AuthController::class,'login'])->name('login2');
    Route::post('/login2',[AuthController::class,'loginPost'])->name('login2');
});

Route::group(['middleware' => 'auth'], function(){
    Route::get('/home2',[HomeController::class,'index']);
    Route::delete('/logout2',[AuthController::class,'logout'])->name('logout2');
});

// 
Route::post('/th', [blogcontroller::class,'tambahHapus'])->name('th');
Route::post('/eee', [editHalaman::class,'updateMultiple'])->name('eee');
// kontak
route::get('/contact', [contactController::class, 'show'])->name('contact.show');
route::post('/contact', [contactController::class, 'send'])->name('contact.send');
