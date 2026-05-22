<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi MCU</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('asset/css/daftar.css')}}">
</head>

<body>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">

                <!-- Card -->
                <div class="main-card shadow">

                    <!-- Header -->
                    <div class="header text-center">
                        <h2>Registrasi MCU</h2>
                        <p>Silakan pilih menu registrasi</p>
                    </div>

                    <!-- Menu -->
                    <div class="menu-wrapper">

                        <!-- Pasien Baru -->
                        <a href="{{route('reservasi.pasien_baru')}}"" class="menu-btn primary-menu">
                            <div class="icon-box">
                                <i class="bi bi-person-plus-fill"></i>
                            </div>

                            <div class="menu-text">
                                <h5>Peserta Baru</h5>
                                <p>Input data pasien baru</p>
                            </div>

                            <i class="bi bi-chevron-right arrow"></i>
                        </a>

                        <!-- Pasien Lama -->
                        <a href="{{route('reservasi.pasien_lama')}}" class="menu-btn success-menu">
                            <div class="icon-box">
                                <i class="bi bi-person-vcard-fill"></i>
                            </div>

                            <div class="menu-text">
                                <h5>Pasien Lama</h5>
                                <p>Update data pasien lama</p>
                            </div>

                            <i class="bi bi-chevron-right arrow"></i>
                        </a>

                    </div>

                </div>

            </div>
        </div>
    </div>

</body>

</html>