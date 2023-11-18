<?php
use Illuminate\Http\Request;

use App\Http\Controllers\EnumFetchControllers;
use App\Http\Controllers\JabatanValuesControllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use App\Http\Middleware\AuthenticateUser;
use App\Http\Middleware\ApiKeyMiddleware;

use App\Http\Controllers\CountController;
use App\Http\Controllers\PenggunaController;

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

Route::post('/login', [AuthController::class, 'login'])->middleware(AuthenticateUser::class)->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');

// Route::get('/barangShow', [BarangController::class, 'barangShow']);
// Route::post('/barangAdd', [BarangController::class, 'createOrUpdate']);
// Route::patch('/barangUpdate/{id}', [BarangController::class, 'createOrUpdate']);
// Route::delete('/barangDelete/{nomor_barang}', [BarangController::class, 'delete']);
// Route::post('/barangShowByNomor', [BarangController::class, 'fetchByNomor']);

// Route::get('/jurusan-values', [EnumFetchControllers::class, 'getJurusanValues']);
// Route::get('/jabatan-values', [JabatanValuesControllers::class, 'getJabatanValues']);

// Route::get('count-usersbyjurusan', [CountController::class, 'countUsersByJurusan']);
// Route::get('count-usersbyjabatan', [CountController::class, 'countUsersByJabatan']);

// Route::get('count-barang', [CountController::class, 'countBarang']);
// Route::get('count-pengguna', [CountController::class, 'countPengguna']);
// Route::get('count-peminjaman', [CountController::class, 'countPeminjaman']);
// Route::get('count-pengembalian', [CountController::class, 'countPengembalian']);
// Route::get('count-permohonan', [CountController::class, 'countPermohonan']);
// Route::get('count-tipepengguna', [CountController::class, 'countTipePengguna']);
// Route::get('count-tipebarang', [CountController::class, 'countTipeBarang']);

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('/jurusan-values', [EnumFetchControllers::class, 'getJurusanValues']);
Route::get('/jabatan-values', [JabatanValuesControllers::class, 'getJabatanValues']);
Route::middleware('auth:api')->group(function () {
    // Define your routes here that should use the 'auth:api' middleware.
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
Route::get('/barangShow', [BarangController::class, 'index']);
Route::post('/barangAdd', [BarangController::class, 'store']);
Route::patch('/barangUpdate/{id}', [BarangController::class, 'update']);
Route::delete('/barangDelete/{nomor_barang}', [BarangController::class, 'destroy']);
Route::post('/barangtest/{id}', [BarangController::class, 'show']);



Route::get('count-usersbyjurusan', [CountController::class, 'countUsersByJurusan']);
Route::get('count-usersbyjabatan', [CountController::class, 'countUsersByJabatan']);

Route::get('count-barang', [CountController::class, 'countBarang']);
Route::get('count-pengguna', [CountController::class, 'countPengguna']);
Route::get('count-peminjaman', [CountController::class, 'countPeminjaman']);
Route::get('count-pengembalian', [CountController::class, 'countPengembalian']);
Route::get('count-permohonan', [CountController::class, 'countPermohonan']);
Route::get('count-tipepengguna', [CountController::class, 'countTipePengguna']);
Route::get('count-tipebarang', [CountController::class, 'countTipeBarang']);

Route::get('/count-barangkategori', [CountController::class, 'countBarangByKategori']);

Route::get('/pengguna', [PenggunaController::class, 'index']);
Route::get('/pengguna/{id}', [PenggunaController::class, 'show']);
Route::post('/pengguna', [PenggunaController::class, 'store']);
Route::put('/pengguna/{id}', [PenggunaController::class, 'update']);
Route::delete('/pengguna/{id}', [PenggunaController::class, 'destroy']);

});
