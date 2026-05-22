{{--
    KOMPONEN: card-layanan.blade.php
    ─────────────────────────────────────────────────────────────────────────────
    Cara pakai di Blade:
        <x-card-layanan :layanan="$item" />

    Props yang diterima dari Controller ($layanan collection):
        $layanan->slug          → string  → 'mcu' | 'rspp'
        $layanan->judul         → string  → Judul card
        $layanan->deskripsi     → string  → Paragraf deskripsi
        $layanan->tag_label     → string  → Label badge kecil (misal: 'MCU')
        $layanan->fitur         → array   → List chip fitur
        $layanan->route_name    → string  → Nama route untuk tombol daftar

    Warna card otomatis ditentukan dari slug:
        'rspp' → biru
        'mcu'  → hijau
    ─────────────────────────────────────────────────────────────────────────────
--}}

@props(['layanan'])

<div class="card card-{{ $layanan->slug }}"
     onclick="window.location='{{ route($layanan->route_name) }}'">

    <div class="card-icon-wrap">
        @if($layanan->slug === 'rspp')
            {{-- Icon: doctor scene --}}
            <svg viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="6" y="28" width="40" height="3" rx="1.5" fill="#1565C0" opacity="0.2"/>
                <circle cx="34" cy="15" r="6" fill="#1976D2" opacity="0.85"/>
                <path d="M26 38c0-5 3.5-8 8-8s8 3 8 8" fill="#1976D2" opacity="0.6"/>
                <circle cx="18" cy="16" r="5" fill="#42A5F5" opacity="0.85"/>
                <path d="M11 38c0-4.5 3-7 7-7s7 2.5 7 7" fill="#42A5F5" opacity="0.6"/>
                <path d="M24 22c0-1.1.9-2 2-2s2 .9 2 2c0-1.1.9-2 2-2s2 .9 2 2c0 2-4 4-4 4s-4-2-4-4z" fill="#EF5350" opacity="0.9"/>
            </svg>
        @elseif($layanan->slug === 'mcu')
            {{-- Icon: clipboard checklist --}}
            <svg viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="14" y="10" width="24" height="30" rx="4" fill="#43A047" opacity="0.2"/>
                <rect x="18" y="8" width="16" height="6" rx="3" fill="#43A047" opacity="0.6"/>
                <path d="M20 22h12M20 28h10M20 34h8" stroke="#43A047" stroke-width="2" stroke-linecap="round" opacity="0.7"/>
                <path d="M17 22l2 2 4-4" stroke="#43A047" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <circle cx="36" cy="36" r="5" fill="#66BB6A" opacity="0.3"/>
                <path d="M33 33c1-3 4-3 4 0" stroke="#43A047" stroke-width="1.5" stroke-linecap="round"/>
            </svg>
        @endif
    </div>

    {{-- Tag badge --}}
    <span class="card-tag">{{ $layanan->tag_label }}</span>

    {{-- Judul --}}
    <h2>{{ $layanan->judul }}</h2>

    {{-- Deskripsi --}}
    <p>{{ $layanan->deskripsi }}</p>

    {{-- Feature chips --}}
    <div class="features">
        @foreach($layanan->fitur as $fitur)
            <span class="feature-chip">{{ $fitur }}</span>
        @endforeach
    </div>

    <br>

    {{-- CTA Button --}}
    <a href="{{ route($layanan->route_name) }}" class="card-btn">
        Daftar Sekarang
        <svg viewBox="0 0 16 16" fill="none">
            <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </a>

</div>
