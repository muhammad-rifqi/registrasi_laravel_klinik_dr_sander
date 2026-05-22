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

  <link href="{{asset('asset/css/pasien_baru.css')}}" rel="stylesheet">
</head>

<body>

  <div class="phone-wrapper">

    <!-- HEADER -->
    <div class="mobile-header">

      <div class="header-content">

        <!-- <button class="btn-back" onclick="window.location.href='index.html'">
          <i class="bi bi-arrow-left"></i>
        </button> -->

        <div class="title-area">
          <h5>Registrasi MCU</h5>
          <small>Form Input Peserta Baru</small>
        </div>

      </div>

    </div>

    <!-- CONTENT -->
    <div class="content-area">

      <div class="card-mobile">

        <div class="section-title">
          Data Peserta Baru
        </div>

        <div class="section-subtitle">
          Silahkan isi data pribadi dengan lengkap
        </div>

        <form action="{{route('reservasi.qrcode')}}" method="get">

          <div class="form-grid">

            <!-- Nama Depan -->
            <div class="form-item">
              <label class="form-label">Nama Depan</label>

              <div class="input-group">
                <span class="input-group-text">
                  <i class="bi bi-person"></i>
                </span>

                <input type="text" class="form-control" placeholder="Masukkan nama depan">
              </div>
            </div>

            <!-- Nama Belakang -->
            <div class="form-item">
              <label class="form-label">Nama Belakang</label>

              <div class="input-group">
                <span class="input-group-text">
                  <i class="bi bi-person"></i>
                </span>

                <input type="text" class="form-control" placeholder="Masukkan nama belakang">
              </div>
            </div>

            <!-- Jenis Kelamin -->
            <div class="form-item">
              <label class="form-label">Jenis Kelamin</label>

              <div class="input-group">
                <span class="input-group-text">
                  <i class="bi bi-gender-ambiguous"></i>
                </span>

                <select class="form-select">
                  <option selected disabled>
                    Pilih jenis kelamin
                  </option>

                  <option>Laki-laki</option>
                  <option>Perempuan</option>
                </select>
              </div>
            </div>

            <!-- NIK -->
            <div class="form-item">
              <label class="form-label">NIK KTP</label>

              <div class="input-group">
                <span class="input-group-text">
                  <i class="bi bi-credit-card"></i>
                </span>

                <input type="text" class="form-control" placeholder="Masukkan NIK">
              </div>
            </div>

            <!-- Tanggal Lahir -->
            <div class="form-item">
              <label class="form-label">Tanggal Lahir</label>

              <div class="input-group">
                <span class="input-group-text">
                  <i class="bi bi-calendar"></i>
                </span>

                <input type="date" class="form-control">
              </div>
            </div>

            <!-- Email -->
            <div class="form-item">
              <label class="form-label">Email</label>

              <div class="input-group">
                <span class="input-group-text">
                  <i class="bi bi-envelope"></i>
                </span>

                <input type="email" class="form-control" placeholder="Masukkan email">
              </div>
            </div>

            <!-- Departemen -->
            <div class="form-item">
              <label class="form-label">Departemen</label>

              <div class="input-group">
                <span class="input-group-text">
                  <i class="bi bi-diagram-3"></i>
                </span>

                <input type="text" class="form-control" placeholder="Masukkan departemen">
              </div>
            </div>

            <!-- Telephone -->
            <div class="form-item">
              <label class="form-label">No Telephone</label>

              <div class="input-group">
                <span class="input-group-text">
                  <i class="bi bi-phone"></i>
                </span>

                <input type="text" class="form-control" placeholder="Masukkan nomor telephone">
              </div>
            </div>

            <!-- Alamat -->
            <div class="form-item full">
              <label class="form-label">Alamat</label>

              <div class="input-group">
                <span class="input-group-text">
                  <i class="bi bi-card-text"></i>
                </span>

                <textarea class="form-control" placeholder="Masukkan alamat lengkap"></textarea>
              </div>
            </div>

          </div>

          <!-- BUTTON -->
          <div class="btn-area">

            <button type="submit" class="btn-submit">
              <i class="bi bi-check-circle"></i>
              Submit
            </button>

            <button type="reset" class="btn-cancel">
              <i class="bi bi-x-circle"></i>
              Cancel
            </button>

          </div>

        </form>

      </div>

      <!-- FOOTER -->
      <div class="footer">
        © 2026 Klinik dr Sander B - PT Daya Adicipta Medika
      </div>

    </div>

  </div>

  <!-- FLOATING BUTTON -->
  <a href="index.html" class="floating-back">
    <i class="bi bi-house-door-fill"></i>
  </a>

</body>

</html>