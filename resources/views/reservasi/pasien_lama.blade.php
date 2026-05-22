<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />

    <title>Registrasi MCU</title>

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
                    <h5>Registrasi MCU</h5>
                    <small>Form Identitas Peserta Lama</small>
                </div>

            </div>

        </div>

        <!-- CONTENT -->
        <div class="content-area">

            <div class="card-mobile">

                <div class="section-title">
                    Data Peserta Lama
                </div>

                <div class="section-subtitle">
                    Silahkan isi data pribadi dengan lengkap
                </div>

                <form id="nikForm">

                    <div class="form-grid">

                        <div class="form-item full">
                            <label class="form-label"> NIK </label>

                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="bi bi-person"></i>
                                </span>

                                <input type="text" class="form-control" id="nikInput" placeholder="Masukkan NIK">
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
    <a href="index.html" class="floating-back">
        <i class="bi bi-house-door-fill"></i>
    </a>

    <script>
// 3603302905040001
            const form = document.getElementById('nikForm');
            const nikInput = document.getElementById('nikInput');
            const loading = document.getElementById('loading');
            const result = document.getElementById('result');

            form.addEventListener('submit', function (e) {
                e.preventDefault(); // cegah reload halaman

                const nik = nikInput.value.trim();
                if (!nik) {
                    alert('Pastikan Data Terisi Dengan Benar');
                }

                loading.style.display = 'block';
                result.innerHTML = '';
                const apiUrl = `https://dev.klinikdrsanderb-emcu.com/api/v1/patients/search_nik/${nik}`;

                fetch(apiUrl)
                    .then(response => {
                        if (!response.ok) throw new Error('Data tidak ditemukan');
                        return response.json();
                    })
                    .then(data => {
                        const [day, month, year] = data?.payload?.birth.split('-');
                        const formatted = `${year}-${month}-${day}`;
                        const array = data?.payload?.fullname;
                        const words = array.split(" ");
                        const nd = words[0];
                        const nb = words[words.length - 1];

                        loading.style.display = 'none';
                        result.innerHTML = `
                        <input type="hidden" id="uuid_patient" value="${data?.payload?.patient_id || '-'}">
                        <div class="form-grid">  
                            <div class="form-item">
                                <label class="form-label">Nama Depan</label>

                                <div class="input-group">
                                    <span class="input-group-text">
                                    <i class="bi bi-person"></i>
                                    </span>

                                    <input type="text" id="nama_depan" class="form-control" value="${nd || '-'}">
                                </div>
                            </div>

                            <div class="form-item">
                                <label class="form-label">Nama Belakang</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                    <i class="bi bi-person"></i>
                                    </span>

                                    <input type="text" id="nama_belakang" value="${nb || '-'}" class="form-control">
                                </div>
                            </div> 

                            <div class="form-item">
                                <label class="form-label"> NIK </label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="bi bi-credit-card"></i>
                                    </span>
                                    <input type="text" class="form-control" id="nikInsert" value="${data?.payload?.nik || '-'}">
                                </div>
                            </div>

                            <div class="form-item">
                                <label class="form-label"> Nama Lengkap </label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="bi bi-card-list"></i>
                                    </span>
                                    <input type="text" class="form-control" id="fullnameInsert" value="${data?.payload?.fullname || '-'}">
                                </div>
                            </div>
                            <div class="form-item">
                                <label class="form-label"> Tanggal Lahir </label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="bi bi-calendar"></i>
                                    </span>
                                    <input type="date" class="form-control" id="tgl_lahir" value="${data?.payload?.birth || '-'}">
                                </div>
                            </div>
                            <div class="form-item">
                                <label class="form-label"> No Telphon </label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="bi bi-person"></i>
                                    </span>
                                    <input type="number" class="form-control" id="phone_number" value="${data?.payload?.mobile_phone || '-'}">
                                </div>
                            </div>
                            <div class="form-item">
                                <label class="form-label">Email</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                    <i class="bi bi-envelope"></i>
                                    </span>

                                    <input type="email" class="form-control" id="email" value="${data?.payload?.email || '-'}" placeholder="Masukkan email">
                                </div>
                            </div>

                            <div class="form-item">
                                <label class="form-label">Departemen</label>

                                <div class="input-group">
                                    <span class="input-group-text">
                                    <i class="bi bi-diagram-3"></i>
                                    </span>

                                    <input type="text" class="form-control" id="department" value="${data?.payload?.department || '-'}" placeholder="Masukkan departemen">
                                </div>
                            </div>

                            <div class="form-item full">
                                <label class="form-label">Alamat</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                    <i class="bi bi-card-text"></i>
                                    </span>

                                    <textarea class="form-control" id="address" placeholder="Masukkan alamat lengkap">${data?.payload?.address || '-'}</textarea>
                                </div>
                            </div>
                        </div>
                         <div class="btn-area mt-3">
                            <button type="submit" class="btn btn-primary w-100" onclick="updateDataPasien()">
                                <i class="bi bi-check-circle"></i> Submit
                            </button>
                        </div>
                    `;
                    })
                    .catch(err => {
                        loading.style.display = 'none';
                        alert('gagal ambil data');
                    });
            });

            function updateDataPasien(){
                const hidd = document.getElementById("uuid_patient").value;
                fetch("https://dev.klinikdrsanderb-emcu.com/api/v1/patients/updatepatientapi/"+hidd, {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json"
                    },
                    body: JSON.stringify({
                        nik: document.getElementById("nikInsert")?.value || "",
                        fullname: document.getElementById("fullnameInsert")?.value || "",
                        birth: document.getElementById("tgl_lahir")?.value || "",
                        mobile_phone: document.getElementById("phone_number")?.value || "",
                        email: document.getElementById("email")?.value || "",
                        department: document.getElementById("department")?.value || "",
                        address: document.getElementById("address")?.value || ""
                    })
                })
                .then(response => {
                    if (!response.ok) throw new Error("Gagal mengirim data");
                    return response.json();
                })
                .then(result => {
                    console.log("Sukses update:", result);
                    alert("Data berhasil diupdate");
                    
                })
                .catch(err => {
                    console.error(err);
                    alert("Gagal update data");
                });
            }
    </script>

</body>

</html>