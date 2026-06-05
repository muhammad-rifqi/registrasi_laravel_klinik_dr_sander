<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />

    <title>Hasil eMCU</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <link href="{{asset('asset/css/pasien_lama.css')}}" rel="stylesheet">
</head>

<body>

    <div class="phone-wrapper">

        <!-- HEADER -->
        <div class="mobile-header">

            <div class="header-content">

                <button class="btn-back" onclick="window.history.back();">
                    <i class="bi bi-arrow-left"></i>
                </button>

                <div class="title-area">
                    <h5>Hasil eMCU</h5>
                    <small>Form Hasil eMCU</small>
                </div>

            </div>

        </div>

        <!-- CONTENT -->
        <div class="content-area">

            <div class="card-mobile">

                <div class="section-title">
                    Hasil eMCU
                </div>

                <div class="section-subtitle">
                    Silahkan isi form riwayat berikut:
                </div>

                <form id="nikFormCari">
                    <div class="form-grid">
                        <div class="form-item full">
                            <label class="form-label">MASUKAN NIK</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="bi bi-person"></i>
                                </span>
                                <input type="text" class="form-control" id="nikInputCari" placeholder="Masukkan NIK">
                            </div>
                        </div>
                    </div>

                    <!-- BUTTON -->
                    <div class="btn-area mt-3">
                        <button type="submit" class="btn btn-primary w-100">
                            <i class="bi bi-check-circle"></i> Cari..
                        </button>
                    </div>

                    <!-- Loading & Result -->
                    <div id="loading" style="display:none; margin-top: 15px;">Loading...</div>
                    <div id="result" style="margin-top: 15px;"></div>

                </form>

            </div>

            <!-- FOOTER -->
            <div class="footer mt-3">
                © 2026 Klinik dr Sander B - PT Daya Adicipta Medika
            </div>

        </div>

    </div>

    <!-- FLOATING BUTTON -->
    <a href="/reservasi" class="floating-back">
        <i class="bi bi-house-door-fill"></i>
    </a>

    <script>
// 3603302905040001
            const form = document.getElementById('nikFormCari');
            const nikInput = document.getElementById('nikInputCari');
            const loading = document.getElementById('loading');
            const result = document.getElementById('result');

            form.addEventListener('submit', function (e) {
                e.preventDefault(); // cegah reload halaman

                const nik = nikInputCari.value.trim();
                if (!nik) {
                    alert('Pastikan Data Terisi Dengan Benar');
                }

                loading.style.display = 'block';
                result.innerHTML = '';
                // contoh 3215150605990002
                const apiUrl = `https://dev.klinikdrsanderb-emcu.com/api/v1/patients/search_hasil_nik/${nik}`;

                fetch(apiUrl)
                    .then(response => {
                        if (!response.ok) throw new Error('Data tidak ditemukan');
                        return response.json();
                    })
                    .then(data => {
                        loading.style.display = 'none';
                        var html = `<div class="table-responsive">
                                    <table class="table" width="100%">
                                    <tr>
                                        <td>Registration Number</td>
                                        <td>NIK</td>
                                        <td>Name</td>
                                        <td>Tanggal MCU</td>
                                    </tr> 
                                    `;
                        data.payload.forEach(element => {
                            html += `
                                    <tr>
                                        <td>${element.registration_number}</td>
                                        <td>${element.nik}</td>
                                        <td>${element.name}</td>
                                        <td>${element.eximining_date}</td>
                                    </tr>    
                                    `;
                        });
                        html += `</table></div>`;
                        result.innerHTML = html;
                    })
                    .catch(err => {
                        loading.style.display = 'none';
                        alert('gagal ambil data');
                    });
            });
    </script>

</body>

</html>