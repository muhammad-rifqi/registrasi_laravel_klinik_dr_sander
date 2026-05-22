<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

    <title>Registrasi Berhasil</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- QRCode -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>

    <link href="{{asset('asset/css/qrcode.css')}}" rel="stylesheet" type="text/css">
</head>

<body>

    <div class="container-app">

        <!-- Logo -->
        <div class="logo">
            DAYA Medika
            <small class="text-muted d-block">
                Klinik dr. Sander B
            </small>
        </div>

        <!-- Success -->
        <div class="success-icon">
            ✓
        </div>

        <div class="title">
            <h3 class="fw-bold">Registrasi Berhasil</h3>
            <p class="text-primary">
                Data Anda telah berhasil disimpan!
            </p>
        </div>

        <!-- Card -->
        <div class="card-custom">

            <!-- QR -->
            <div id="qrcode"></div>

            <!-- Info -->
            <div class="patient-info">
                <p>
                    <strong>Nama Pasien :</strong>
                    <span id="nama"></span>
                </p>

                <p>
                    <strong>NIK :</strong>
                    <span id="nik"></span>
                </p>
            </div>

            <p class="text-primary text-center mt-3">
                Tunjukkan kode ini kepada admin MCU saat proses absensi
            </p>

            <!-- Button -->
            <button class="btn-custom" id="btnSave">
                Simpan QR ke Galeri
            </button>

        </div>

        <!-- Next -->
        <div class="next-step">
            Kembali ke halaman depan
            <a href="{{route('reservasi.index')}}">
                Kembali →
            </a>
        </div>

    </div>

    <!-- Footer -->
    <div class="footer">
        © 2026 Klinik dr Sander B
    </div>

    <script>
        // https://dev.klinikdrsanderb-emcu.com/api/v1/patients/search_uuid/ebe3bdcb-98a0-459b-b5bd-d883b2f4c6a4

        window.addEventListener("load", onLoad, false);

           async function onLoad() {
                try {
                    const uuid = window.location.pathname.split("/").pop();
                    const response = await fetch(
                        `https://dev.klinikdrsanderb-emcu.com/api/v1/patients/search_uuid/${uuid}`
                    );
                    const result = await response.json();
                    const patient = result.payload;

                    const dataQR = {
                        nama: patient.fullname,
                        nik: patient.nik
                    };

                    document.getElementById("nama").innerText = dataQR.nama;
                    // text: JSON.stringify(dataQR),
                    document.getElementById("nik").innerText =
                        maskNIK(dataQR.nik);
                    new QRCode(document.getElementById("qrcode"), {
                        text: dataQR.nik,
                        width: 180,
                        height: 180,
                        colorDark: "#1e3a5f",
                        colorLight: "#ffffff",
                        correctLevel: QRCode.CorrectLevel.H
                    });

                    document
                        .getElementById("btnSave")
                        .addEventListener("click", saveQRToGallery);

                } catch (error) {
                    console.error("Gagal fetch data:", error);
                }
            }

            function maskNIK(nik) {
                return nik.substring(0, 4) + "********" + nik.substring(12);
            }

        function saveQRToGallery() {
            const canvas =
                document.querySelector("#qrcode canvas");
                    if (!canvas) {
                        alert("QR belum tersedia");
                        return;
                    }
                    const image = canvas.toDataURL("image/png");
                    const link = document.createElement("a");
                    link.href = image;
                    link.download = "qr-pasien.png";
                    link.click();
                    alert("QR berhasil disimpan");
        }

    </script>

</body>

</html>