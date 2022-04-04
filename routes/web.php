<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KategoriPortfolioController;
use App\Http\Controllers\KategoriJurusanController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\IklanController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\SocialMediaController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\TextKontakController;
use App\Http\Controllers\TextTestimoniController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\JurusanController;

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

Route::get('/', [FrontendController::class, 'index'])->name('home');

Route::get('berita', [FrontendController::class, 'berita']);
Route::get('gallery', [FrontendController::class, 'gallery'])->name('gallery');
Route::get('port', [FrontendController::class, 'port'])->name('port');
Route::get('/detail-artikel/{slug}', [FrontendController::class, 'detail'])->name('detail-artikel');
Route::get('/detail-portfolio/{slug}', [FrontendController::class, 'detail_portfolio'])->name('detail-portfolio');
Route::get('/kategori-berita/{id}', [FrontendController::class, 'kategori_berita'])->name('kategori-berita');
Route::get('/kategori-portfolio/{id}', [FrontendController::class, 'kategori_portfolio'])->name('kategori-portfolio');
Route::get('/kompentensi/{id}', [FrontendController::class, 'jurusan'])->name('profil-jurusan');

Auth::routes();

Route::group(['middleware' => ['auth']], function() {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('kategori', KategoriController::class);
    Route::resource('kategori_portfolio', KategoriPortfolioController::class);
    Route::resource('kategori_jurusan', KategoriJurusanController::class);
    Route::resource('artikel', ArtikelController::class);
    Route::resource('iklan', IklanController::class);
    Route::resource('galeri', GaleriController::class);
    Route::resource('portfolio', PortfolioController::class);
    Route::resource('social', SocialMediaController::class);
    Route::resource('kontak', KontakController::class);
    Route::resource('text_kontak', TextKontakController::class);
    Route::resource('text_testimoni', TextTestimoniController::class);
    Route::resource('testimoni', TestimoniController::class);
    Route::resource('header', HeaderController::class);
    Route::resource('jurusan', JurusanController::class);
});






