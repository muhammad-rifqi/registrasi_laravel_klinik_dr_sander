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

        <button class="btn-back" onclick="window.history.back();">
          <i class="bi bi-arrow-left"></i>
        </button>

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

        <form id="formPasien">

          <div class="form-grid">

            <!-- Nama Depan -->
            <div class="form-item">
              <label class="form-label">Nama Depan</label>

              <div class="input-group">
                <span class="input-group-text">
                  <i class="bi bi-person"></i>
                </span>

                <input type="text" id="nama_depan" class="form-control" placeholder="Masukkan nama depan" required>
              </div>
            </div>

            <!-- Nama Belakang -->
            <div class="form-item">
              <label class="form-label">Nama Belakang (Optional)</label>

              <div class="input-group">
                <span class="input-group-text">
                  <i class="bi bi-person"></i>
                </span>

                <input type="text" id="nama_belakang" class="form-control" placeholder="Masukkan nama belakang"> 
              </div>
            </div>

            <!-- Jenis Kelamin -->
            <div class="form-item">
              <label class="form-label">Jenis Kelamin</label>

              <div class="input-group">
                <span class="input-group-text">
                  <i class="bi bi-gender-ambiguous"></i>
                </span>

                <select class="form-select" id="gender" required>
                  <option selected disabled>
                    Pilih jenis kelamin
                  </option>

                  <option value="m">Laki-laki</option>
                  <option value="F">Perempuan</option>
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

                <input type="text" id="nik" class="form-control" placeholder="Masukkan NIK" required>
              </div>
            </div>

            <!-- Tanggal Lahir -->
            <div class="form-item">
              <label class="form-label">Tanggal Lahir</label>

              <div class="input-group">
                <span class="input-group-text">
                  <i class="bi bi-calendar"></i>
                </span>

                <input type="date" id="birth" class="form-control" required>
              </div>
            </div>

            <!-- Email -->
            <div class="form-item">
              <label class="form-label">Email</label>

              <div class="input-group">
                <span class="input-group-text">
                  <i class="bi bi-envelope"></i>
                </span>

                <input type="email" class="form-control" id="email" placeholder="Masukkan email" required>
              </div>
            </div>

            <!-- Departemen -->
            <div class="form-item">
              <label class="form-label">Departemen</label>

              <div class="input-group">
                <span class="input-group-text">
                  <i class="bi bi-diagram-3"></i>
                </span>

                <input type="text" class="form-control" id="department" placeholder="Masukkan departemen" required>
              </div>
            </div>

            <!-- Telephone -->
            <div class="form-item">
              <label class="form-label">No Telephone</label>

              <div class="input-group">
                <span class="input-group-text">
                  <i class="bi bi-phone"></i>
                </span>

                <input type="text" class="form-control" id="mobile_phone" placeholder="Masukkan nomor telephone" required>
              </div>
            </div>

            <!-- Alamat -->
            <div class="form-item full">
              <label class="form-label">Alamat</label>

              <div class="input-group">
                <span class="input-group-text">
                  <i class="bi bi-card-text"></i>
                </span>

                <textarea class="form-control" id="address" placeholder="Masukkan alamat lengkap" required></textarea>
              </div>
            </div>

          </div>

          <!-- BUTTON -->
          <div class="btn-area">
            <button type="submit" class="btn-submit" id="btnSubmit">
              <span id="btnText">
                <i class="bi bi-check-circle"></i>
                Submit
              </span>
              <span id="btnLoading" style="display:none;">
                <span class="spinner-border spinner-border-sm"></span>
                Loading...
              </span>
            </button>

            <button type="reset" class="btn-cancel">
              <i class="bi bi-x-circle"></i>
              Reset
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

<script>
  const form = document.getElementById('formPasien');

  form.addEventListener('submit', async function (e) {
    e.preventDefault();

    const btnSubmit = document.getElementById('btnSubmit');
    const btnText = document.getElementById('btnText');
    const btnLoading = document.getElementById('btnLoading');

    // loading ON
    btnSubmit.disabled = true;
    btnText.style.display = 'none';
    btnLoading.style.display = 'inline-block';

    const namaDepan = document.getElementById('nama_depan').value || " - ";
    const namaBelakang = document.getElementById('nama_belakang').value || " - ";

    const payload = {
      title: namaDepan,
      fullname: namaDepan + ' ' + namaBelakang,
      nik: document.getElementById('nik').value,
      gender: document.getElementById('gender').value,
      email: document.getElementById('email').value,
      place: document.getElementById('address').value,
      department: document.getElementById('department').value,
      mobile_phone: document.getElementById('mobile_phone').value,
      status: "active",
      address: document.getElementById('address').value,
      birth: document.getElementById('birth').value,
      phone_code: "62",
      medical_record_number: null,
      place_of_birth: null
    };

    try {

      const response = await fetch(
        'https://dev.klinikdrsanderb-emcu.com/api/v1/patients/storepatients',
        {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json'
          },
          body: JSON.stringify(payload)
        }
      );

      const result = await response.json();

      if (response.ok) {
        // form.reset();
        window.location.href=`/reservasi/qrcode/${result?.payload?.patient_id}`
      } else {
        alert(result.message || 'Gagal menyimpan data');
      }

    } catch (error) {

      console.error(error);
      alert('Terjadi kesalahan koneksi');

    } finally {

      // loading OFF
      btnSubmit.disabled = false;
      btnText.style.display = 'inline-block';
      btnLoading.style.display = 'none';

    }
  });
</script>

</html>