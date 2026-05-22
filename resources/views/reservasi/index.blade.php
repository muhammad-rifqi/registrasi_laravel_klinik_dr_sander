{{--
    VIEW: reservasi/index.blade.php
    ─────────────────────────────────────────────────────────────────────────────
    Route   : GET /reservasi  → nama route: 'reservasi.index'
    Controller: ReservasiController@index

    Data yang diharapkan dari Controller:
        $layanan        → Collection of object/model, masing-masing punya:
                            - slug          (string)
                            - judul         (string)
                            - deskripsi     (string)
                            - tag_label     (string)
                            - fitur         (array)
                            - route_name    (string)
        $klinik_aktif   → boolean → untuk badge "Layanan Online Aktif" di header
    ─────────────────────────────────────────────────────────────────────────────
--}}

@extends('layouts.app')

@section('title', 'Reservasi Online Klinik')

@section('content')

    {{-- ── HERO ── --}}
    <section class="hero">
        <div class="hero-eyebrow">
            <svg viewBox="0 0 14 14" fill="none">
                <circle cx="7" cy="7" r="6" stroke="currentColor" stroke-width="1.5"/>
                <path d="M7 4v3l2 2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
            </svg>
            Reservasi Online Klinik
        </div>
        <h1>Layanan Kesehatan<br>yang <span class="accent">Mudah &amp; Cepat</span></h1>
        <p class="hero-sub">
            Daftarkan kunjungan Anda kapan saja, di mana saja.
            Tersedia untuk seluruh pekerja dan keluarga Daya Medika.
        </p>
    </section>

    {{-- ── CARDS GRID ── --}}
    <div class="cards-grid">
        @forelse($layanan as $item)
            <x-card-layanan :layanan="$item" />
        @empty
            {{-- Fallback kalau data kosong --}}
            <p class="text-center" style="color: var(--gray); grid-column: 1/-1;">
                Layanan belum tersedia. Silakan coba beberapa saat lagi.
            </p>
        @endforelse
    </div>

@endsection
