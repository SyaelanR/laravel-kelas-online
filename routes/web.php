<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller_admin;
use App\Http\Controllers\Controller_guru;
use App\Http\Controllers\Controller_siswa;

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

Route::get('/tes', function () {
    return view('guru');
});

Route::get('/admin', [Controller_admin::class, 'admin'])->name('admin');
Route::get('/tambahsiswa', [Controller_admin::class, 'tambahsiswa'])->name('tambahsiswa');
Route::get('/tambahguru', [Controller_admin::class, 'tambahguru'])->name('tambahguru');
Route::get('/dashboardguru', [Controller_guru::class, 'dashboardguru'])->name('dashboardguru');
Route::get('/kelasgr', [Controller_guru::class, 'kelasgr'])->name('kelasgr');
Route::get('/materigr', [Controller_guru::class, 'materigr'])->name('materigr');
Route::get('/tugasgr', [Controller_guru::class, 'tugasgr'])->name('tugasgr');
Route::get('/daftartugas', [Controller_guru::class, 'daftartugas'])->name('daftartugas');
Route::get('/daftarsiswatg', [Controller_guru::class, 'daftarsiswatg'])->name('daftarsiswatg');
Route::get('/berinilai', [Controller_guru::class, 'berinilai'])->name('berinilai');
Route::get('/daftarnilaisw', [Controller_guru::class, 'daftarnilaisw'])->name('daftarnilaisw');
Route::get('/opendaftarnl', [Controller_guru::class, 'opendaftarnl'])->name('opendaftarnl');
Route::get('/kelassw', [Controller_guru::class, 'kelassw'])->name('kelassw');
Route::get('/tugas', [Controller_guru::class, 'tugas'])->name('tugas');
Route::get('/materi', [Controller_guru::class, 'materi'])->name('materi');
Route::get('/login', [Controller_admin::class, 'login'])->name('login');

Route::get('/kelasswS', [Controller_guru::class, 'kelasswS'])->name('kelasswS');

Route::post('/queritambahguru', [Controller_admin::class, 'queritambahguru'])->name('queritambahguru');
Route::post('/queritambahsiswa', [Controller_admin::class, 'queritambahsiswa'])->name('queritambahsiswa');
Route::post('/falidasilogin', [Controller_admin::class, 'falidasilogin'])->name('falidasilogin');
Route::post('/queritambahmt', [Controller_guru::class, 'queritambahmt'])->name('queritambahmt');
Route::post('/queritambahtg', [Controller_guru::class, 'queritambahtg'])->name('queritambahtg');
Route::post('/queripengumpulantugas', [Controller_guru::class, 'queripengumpulantugas'])->name('queripengumpulantugas');
Route::post('/queriberinilai', [Controller_guru::class, 'queriberinilai'])->name('queriberinilai');
Route::post('/querichat', [Controller_guru::class, 'querichat'])->name('querichat');
