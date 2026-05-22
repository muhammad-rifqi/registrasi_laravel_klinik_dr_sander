<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title', 'Reservasi Online Klinik') | Daya Medika – Klinik dr. Sander B</title>

{{-- Google Fonts --}}
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=DM+Serif+Display:ital@0;1&display=swap" rel="stylesheet">

{{-- App CSS via Vite --}}
@vite(['resources/css/app.css'])

@stack('styles')
</head>
<body>

{{-- ── HEADER ── --}}
<header>
    <div class="header-logo">
        {{--
            TODO (Backend):
            Ganti img src ini dengan asset() atau storage path yang proper.
            Contoh: <img src="{{ asset('asset/logo.png') }}" ...>
        --}}
        <img src="{{ asset('asset/logo.png') }}"
             alt="Daya Medika – Klinik dr. Sander B"
             style="height:48px; width:auto; display:block;">
    </div>

    {{--
        TODO (Backend):
        Badge ini bisa dibuat dinamis dari config/DB.
        Contoh: $klinik_aktif dari Controller → tampil/sembunyi badge-nya.
    --}}
    @if($klinik_aktif ?? true)
    <div class="header-badge">
        <span>Layanan Online Aktif</span>
    </div>
    @endif
</header>

{{-- ── CONTENT ── --}}
@yield('content')

{{-- ── FOOTER ── --}}
<footer>
    <div class="footer-copy">© {{ date('Y') }} <strong>Daya Adicipta Medika</strong></div>
    <div class="footer-links">
        <a href="{{ route('bantuan') }}">Bantuan</a>
        <a href="{{ route('syarat-ketentuan') }}">Syarat &amp; Ketentuan</a>
        <a href="{{ route('kontak') }}">Hubungi Kami</a>
    </div>
</footer>

@stack('scripts')
</body>
</html>
