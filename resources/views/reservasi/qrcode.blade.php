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
            Untuk proses berikutnya, silahkan isi
            <a href="riwayat.html">
                Form Riwayat Kesehatan →
            </a>
        </div>

    </div>

    <!-- Footer -->
    <div class="footer">
        © 2026 Klinik dr Sander B
    </div>

    <script>

        window.addEventListener("load", onLoad, false);

        function onLoad() {

            // Data pasien
            const dataQR = {
                nama: "Budi Santoso",
                nik: "7871123456789011"
            };

            // Set data ke HTML
            document.getElementById("nama").innerText = dataQR.nama;
            document.getElementById("nik").innerText =
                maskNIK(dataQR.nik);

            // Generate QR
            new QRCode(document.getElementById("qrcode"), {
                text: JSON.stringify(dataQR),
                width: 180,
                height: 180,
                colorDark: "#1e3a5f",
                colorLight: "#ffffff",
                correctLevel: QRCode.CorrectLevel.H
            });

            // Event save
            document
                .getElementById("btnSave")
                .addEventListener("click", saveQRToGallery);
        }

        // Masking NIK
        function maskNIK(nik) {
            return nik.substring(0, 4) + "********" + nik.substring(12);
        }

        // Simpan QR
        function saveQRToGallery() {

            const canvas =
                document.querySelector("#qrcode canvas");

            if (!canvas) {
                alert("QR belum tersedia");
                return;
            }

            const image = canvas.toDataURL("image/png");

            // Download biasa
            const link = document.createElement("a");
            link.href = image;
            link.download = "qr-pasien.png";
            link.click();

            alert("QR berhasil disimpan");
        }

    </script>

</body>

</html>