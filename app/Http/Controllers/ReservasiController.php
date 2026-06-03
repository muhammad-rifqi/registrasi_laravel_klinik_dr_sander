<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * ReservasiController
 * ──────────────────────────────────────────────────────────────────────────────
 * TODO (Backend Developer):
 * Implementasi controller ini sesuai kebutuhan bisnis.
 * Frontend sudah siap menerima struktur data berikut.
 * ──────────────────────────────────────────────────────────────────────────────
 */
class ReservasiController extends Controller
{
    /**
     * GET /reservasi
     * Landing page — menampilkan daftar layanan reservasi.
     *
     * Data yang WAJIB dikirim ke view:
     *
     *   $layanan  → Collection, setiap item punya:
     *     - slug        (string)  → 'dr. Sander B' | 'mcu'
     *     - judul       (string)  → Judul card
     *     - deskripsi   (string)  → Deskripsi singkat
     *     - tag_label   (string)  → Label badge (misal: 'MCU')
     *     - fitur       (array)   → ['Fitur A', 'Fitur B', ...]
     *     - route_name  (string)  → Nama route untuk tombol CTA
     *                               (misal: 'reservasi.dr. Sander B.create')
     *
     *   $klinik_aktif → boolean → Apakah badge "Layanan Online Aktif" ditampilkan
     */
    public function index()
    {
        // TODO: Ambil dari DB atau config, ini contoh data static-nya
        $layanan = collect([
            (object)[
                'slug'       => 'rspp',
                'judul'      => 'Registrasi Medical Check Up',
                'deskripsi'  => 'Lakukan registrasi pemeriksaan kesehatan (Medical Check Up) Anda secara online dengan mudah, cepat, dan tanpa antri panjang.',
                'tag_label'  => 'MCU',
                'fitur'      => ['Pemeriksaan Darah', 'Pemeriksaan Fisik', 'Konsultasi Dokter'],
                'route_name' => 'reservasi.create',
            ],
            (object)[
                'slug'       => 'mcu',
                'judul'      => 'Hasil Medical Check Up',
                'deskripsi'  => 'Jadwalkan pemeriksaan kesehatan berkala Anda. Pantau kondisi tubuh dengan layanan MCU komprehensif.',
                'tag_label'  => 'MCU',
                'fitur'      => ['MCU Dasar', 'MCU Lengkap', 'MCU Eksekutif'],
                'route_name' => 'reservasi.result',
            ],
        ]);

        $klinik_aktif = true; // TODO: ambil dari config('klinik.aktif') atau DB

        return view('reservasi.index', compact('layanan', 'klinik_aktif'));
    }

    /**
     * GET /reservasi/dr. Sander B/daftar
     * Form registrasi dr. Sander B.
     * TODO: Buat view resources/views/reservasi/dr. Sander B/create.blade.php
     */
    public function create()
    {
        return view('reservasi.create');
    }

    public function pasien_baru()
    {
        return view('reservasi.pasien_baru');
    }

    public function pasien_lama()
    {
        return view('reservasi.pasien_lama');
    }

    public function qrcode($id)
    {
        $dataid = $id;
        return view('reservasi.qrcode', compact('dataid'));
    }

    /**
     * POST /reservasi/dr. Sander B
     * Simpan data registrasi dr. Sander B.
     * TODO: Implementasi validasi & simpan ke DB
     */

    public function result()
    {
         return redirect('https://portal.klinikdrsanderb-emcu.com/login');
        // return view('reservasi.result');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            // TODO: Definisikan field form di sini
            // 'nama'    => 'required|string|max:255',
            // 'nik'     => 'required|digits:16',
            // 'tanggal' => 'required|date|after:today',
        ]);

        // TODO: Simpan ke DB dan redirect
        return redirect()->route('reservasi.index')
            ->with('success', 'Registrasi dr. Sander B berhasil!');
    }

    /**
     * GET /reservasi/mcu/daftar
     * Form registrasi MCU.
     * TODO: Buat view resources/views/reservasi/mcu/create.blade.php
     */
    public function mcuCreate()
    {
        return view('reservasi.mcu.create');
    }

    /**
     * POST /reservasi/mcu
     * Simpan data registrasi MCU.
     * TODO: Implementasi validasi & simpan ke DB
     */
    public function mcuStore(Request $request)
    {
        $validated = $request->validate([
            // TODO: Definisikan field form di sini
        ]);

        // TODO: Simpan ke DB dan redirect
        return redirect()->route('reservasi.index')
            ->with('success', 'Registrasi MCU berhasil!');
    }
}
