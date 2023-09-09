<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminCrudController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\TanggapanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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

Route::get('/', [UserController::class, 'tampil_hal_utama']);
Route::get('/viewlogin', [UserController::class, 'viewLogin']);

Route::middleware(['masyarakat'])->group(function () {
    Route::get('/index', [UserController::class, 'index']);
    Route::get('/detail/{id}', [UserController::class, 'detail']);
    Route::get('/Profil', [UserController::class, 'profil']);

    Route::post('/tambah', [PengaduanController::class, 'tambah']);
    Route::post('/updateprofil', [RegistrasiController::class, 'updateProfile']);
    Route::post('/updatedPassword', [RegistrasiController::class,'updatePassword']);
    Route::post('/komen', [TanggapanController::class, 'upComent']);
});


Route::middleware(['adminpetugas'])->group(function () {
    Route::get('/admin', [AdminController::class, 'dsbrdAdmin']);
    Route::get('/profil', [AdminController::class,'viewProfile']);
    Route::post('/updateProfil', [RegistrasiController::class, 'updateProfile']);
    Route::post('/updatePassword', [RegistrasiController::class,'updatePassword']);
    
    Route::get('/viewaddmasyarakat', [AdminController::class, 'viewAddMasyarakat']);
    Route::get('/datamasyarakat', [AdminController::class, 'viewDataMasyarakat']);
    Route::post('/addmasyarakat',[AdminCrudController::class,'addMasyarakat']);
    Route::get('/viewPengaduan/{id}', [AdminController::class,'viewPengaduan']);
    
    Route::get('/viewaddkategori', [AdminController::class, 'viewAddKategori']);
    Route::get('/datakategori', [AdminController::class, 'viewDataKategori']);
    Route::get('/viewUpdateKategori/{id}', [AdminController::class, 'viewUpdateKategori']);
    Route::post('/addkategori', [AdminCrudController::class, 'addKategori']);
    Route::post('/updateKategori/{id}', [AdminCrudController::class, 'updateKategori']);
    Route::get('/deleteKategori/{id}', [AdminCrudController::class, 'deleteKategori']);

    Route::get('/laporanpengaduan', [AdminController::class,'viewAllPengaduan']);
    Route::get('/viewdetail/{id}', [AdminController::class, 'viewDetail']);
    Route::post('/updatestatus/{id}', [AdminCrudController::class,'updateStatus']);
    Route::post('/kirimtanggapan', [TanggapanController::class, 'upComent']);
    Route::get('/hapuskomen/{id}', [TanggapanController::class, 'hapusTanggapan']);

});
Route::middleware(['admin'])->group(function () {
    Route::get('/viewaddpetugas', [AdminController::class, 'viewAddPetugas']);
    Route::get('/viewUpdateUser/{id}', [AdminController::class,'viewUpdateUser']);
    Route::get('/datapetugas', [AdminController::class, 'viewDataPetugas']);
    Route::get('/generate', [AdminController::class,'generate']);

    Route::post('/generatePeriode',[AdminCrudController::class,'generatePeriode']);
    Route::post('/generateRekap', [AdminCrudController::class,'generateRekap']);

    Route::post('/addpetugas', [AdminCrudController::class, 'addPetugas']);
    Route::post('/updateUser/{id}', [AdminCrudController::class, 'updateUser']);
    Route::post('/updatepassword/{id}', [AdminCrudController::class, 'updatePassword']);
    Route::get('/deleteuser/{id}', [AdminCrudController::class, 'deleteUser']);
});


Route::post('/regis', [RegistrasiController::class, 'register']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);