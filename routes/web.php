<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservasiController;

Route::get('/', function () {
    // return view('welcome');
    return redirect('/reservasi');

});


/* ── HALAMAN UTAMA RESERVASI ── */
Route::get('/reservasi', [ReservasiController::class, 'index'])
    ->name('reservasi.index');

/* ── REGISTRASI RSPP (Medical Check Up - Registrasi) ── */
Route::get('/reservasi/daftar', [ReservasiController::class, 'create'])
    ->name('reservasi.create');

Route::get('/reservasi/pasien_lama', [ReservasiController::class, 'pasien_lama'])
    ->name('reservasi.pasien_lama');

Route::get('/reservasi/pasien_baru', [ReservasiController::class, 'pasien_baru'])
    ->name('reservasi.pasien_baru');

Route::get('/reservasi/qrcode/{id}', [ReservasiController::class, 'qrcode'])
    ->name('reservasi.qrcode');

Route::post('/reservasi/rspp', [ReservasiController::class, 'rsppStore'])
    ->name('reservasi.store');

/* ── PORTAL MCU (Medical Check Up - Portal) ── */
// Route::get('/reservasi/mcu/daftar', [ReservasiController::class, 'mcuCreate'])
//     ->name('reservasi.mcu.create');
Route::get('/reservasi/mcu/daftar', function () {
    return redirect('https://portal.klinikdrsanderb-emcu.com/login');
});

Route::post('/reservasi/mcu', [ReservasiController::class, 'mcnpuStore'])
    ->name('reservasi.mcu.store');

/* ── STATIC / FOOTER PAGES ── */
Route::get('/bantuan',           fn() => view('reservasi.bantuan'))->name('bantuan');
Route::get('/syarat-ketentuan',  fn() => view('reservasi.syarat'))->name('syarat-ketentuan');
Route::get('/kontak',            fn() => view('reservasi.kontak'))->name('kontak');
