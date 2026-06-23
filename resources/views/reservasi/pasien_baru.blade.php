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

            <div class="form-item">
              <label class="form-label">Title</label>

              <div class="input-group">
                <span class="input-group-text">
                  <i class="bi bi-person"></i>
                </span>

                <select id="title" class="form-control" required>
                <option value="NULL"> Choose Title </option>
                <option value="Tn">Tn</option>
                <option value="Ny">Ny</option>
                <option value="Mr">Mr</option>
                <option value="Mrs">Mrs</option>
                <option value="Nn">Nn</option>
                </select>
              </div>
            </div>

            <div class="form-item">
              <label class="form-label">Nama Lengkap</label>

              <div class="input-group">
                <span class="input-group-text">
                  <i class="bi bi-person"></i>
                </span>

                <select id="fullname_all" class="form-control" required>

                </select>
              </div>
            </div>

            <!-- Nama Belakang -->
            <!-- <div class="form-item">
              <label class="form-label">Nama Belakang (Optional)</label>

              <div class="input-group">
                <span class="input-group-text">
                  <i class="bi bi-person"></i>
                </span>

                <input type="text" id="nama_belakang" class="form-control" placeholder="Masukkan nama belakang"> 
              </div>
            </div> -->

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

                <input type="number" id="nik" class="form-control" placeholder="Masukkan NIK" required>
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

            <div class="form-item">
              <label class="form-label"> Company Master (MCU) </label>

              <div class="input-group">
                <span class="input-group-text">
                  <i class="bi bi-building"></i>
                </span>

                <select class="form-control" id="companies_all" required>
                  
                </select>
              </div>
            </div>

            <div class="form-item">
              <label class="form-label"> Company Tera(API) </label>

              <div class="input-group">
                <span class="input-group-text">
                  <i class="bi bi-building"></i>
                </span>

                <select class="form-control" id="id_perusahaan" required>
                  
                </select>
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

                <input type="number" class="form-control" id="mobile_phone" placeholder="Masukkan nomor telephone" required>
              </div>
            </div>

            
            <div class="form-item">
              <label class="form-label"> Doctor Coordinator </label>

              <div class="input-group">
                <span class="input-group-text">
                  <i class="bi bi-building"></i>
                </span>

                <select class="form-control" id="coordinator_all" required>
                  
                </select>
              </div>
            </div>

            <div class="form-item full">
              <label class="form-label"> Package </label>

              <div class="input-group">
                <span class="input-group-text">
                  <i class="bi bi-building"></i>
                </span>

                <select class="form-control" id="packages_all" onchange="getDoctorPackage(this)" required>
                  
                </select>
              </div>
            </div>

            <div class="form-item full" id="resultDokterPackage">

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
          
          <input type="hidden" name="id_jenis_dokter" id="id_jenis_dokter">

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
  <a href="/reservasi" class="floating-back">
    <i class="bi bi-house-door-fill"></i>
  </a>

</body>

<script src="https://dev.klinikdrsanderb-emcu.com/assets/js/jquery-3.5.1.js"></script>
<script>

  window.addEventListener("load", async () => {
    await getCompanyAll();
    await getCompanyTera();
    await getPackageMcu();
    await getDoctorCoordinator();
    await getFullname();
  })

  function getCompanyAll(){
    fetch('https://dev.klinikdrsanderb-emcu.com/api/v1/companies/all')
    .then(resp => resp.json())
    .then((comp) => {
      // console.log(comp)
        var ddd = `<option value="NULL">Choose Company</option>`;
        comp?.payload?.forEach((element , index) => {
            ddd += `<option value="${element?.company_id}">${element?.name}</option>`;
        })
        document.getElementById("companies_all").innerHTML= ddd;
    })
  }

  function getCompanyTera(){
    fetch('https://dev.klinikdrsanderb-emcu.com/api/v1/upload-mcu/get-company')
    .then(respo => respo.json())
    .then((compa) => {
      // console.log(compa)
        var dddd = `<option value="NULL">Choose Company Tera</option>`;
        compa?.payload?.forEach((elements , index) => {
            dddd += `<option value="${elements?.id_perusahaan}">${elements?.nama_perusahaan}</option>`;
        })
        document.getElementById("id_perusahaan").innerHTML= dddd;
    })
  }

  function getPackageMcu(){
    fetch('https://dev.klinikdrsanderb-emcu.com/api/v1/upload-mcu/get-package')
    .then(res => res.json())
    .then((packages) => {
        var rrr = `<option value="NULL">Choose Package</option>`;
        packages?.payload?.forEach((rows , index) => {
            rrr += `<option value="${rows.id_paket}" data-doctor="${rows.id_jenis_dokter}">${rows.nama_paket}</option>`;
        })
        document.getElementById("packages_all").innerHTML= rrr;
    })
  }

  function getDoctorCoordinator(){
    fetch('https://dev.klinikdrsanderb-emcu.com/api/v1/upload-mcu/get-doctor-coordinator')
    .then(respon => respon.json())
    .then((coordination) => {
        var rrrr = `<option value="NULL">Choose Coordinator</option>`;
        coordination?.payload?.forEach((rowss , index) => {
            rrrr += `<option value="${rowss.id_dokter}">${rowss.nama_dokter}</option>`;
        })
        document.getElementById("coordinator_all").innerHTML= rrrr;
    })
  }

  async function getDoctorPackage(e) {
    document.getElementById('id_jenis_dokter').value =
        e.selectedOptions[0].dataset.doctor;
    const split = e.selectedOptions[0].dataset.doctor.split(',');
    const requests = split.map(id =>
        fetch(
            `https://dev.klinikdrsanderb-emcu.com/api/v1/upload-mcu/get-doctor-package?id_jenis_dokter=${id}`
        ).then(res => res.json())
    );
    const results = await Promise.all(requests);
    let html = '';
    results.forEach(data => {
        let title = '';
        let option = '';
        data.payload.forEach((val, key) => {
            if (val.id_dokter && val.nama_dokter && val.jenis_dokter) {
                if (key === 0) title = val.jenis_dokter;
                option += `
                    <option value="${val.id_dokter}">
                        ${val.nama_dokter}
                    </option>
                `;
            }
        });
        html += `
              <label class="form-label"> Doctor Package (${title})</label>

              <div class="input-group">
                <span class="input-group-text">
                  <i class="bi bi-building"></i>
                </span>

                 <select id="id_dokter[]" name="id_dokter[]" class="form-control">
                      <option>Choose</option>
                      ${option}
                  </select>
              </div>
        `;
    });
    document.getElementById("resultDokterPackage").innerHTML = html;
  }

  function getFullname(){
    fetch('https://dev.klinikdrsanderb-emcu.com/api/v1/list-patienst')
    .then(respons => respons.json())
    .then((fullnames) => {
        var rrrrr = `<option value="NULL">Choose Fullname</option>`;
        fullnames?.payload?.forEach((rowsss , index) => {
            rrrrr += `<option value="${rowsss.patient_id}|${rowsss.fullname}">${rowsss.fullname} - ${rowsss.birth}</option>`;
        })
        document.getElementById("fullname_all").innerHTML= rrrrr;
    })
  }

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
    // const namaBelakang = document.getElementById('nama_belakang').value || " - ";

    const payload = {
      title: document.getElementById('title').value,
      fullname: namaDepan,
      nik: document.getElementById('nik').value,
      gender: document.getElementById('gender').value,
      email: document.getElementById('email').value,
      place: document.getElementById('address').value,
      department: document.getElementById('department').value,
      mobile_phone: document.getElementById('mobile_phone').value,
      status: "active",
      company_all: document.getElementById('companies_all').value,
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


<!--  -->
<!-- 
alamat: "",
company_id: "137bf434-3f71-4a7c-8033-7511b9f3b44e,
department: "staff",
id_dokter[]: "4100",
id_dokter_koordinator: "4082",
id_jenis_dokter: "-2,-1,1,2"
id_paket: "1501"
id_perusahaan: "305"
jenis_kelamin: "m"
kode_area_telp: "62"
lokasi: "jakarta"
nama_lengkap: "ANTOK SETYAWAN"
nik: "23423498234"
no_hp: "472394289384"
no_rm: "057668"
no_telp: "237492387492384"
tanggal_lahir: "1987-04-20"
tempat_lahir: "ACEH"
title: "" -->

<!-- redirect nanti dengan status code 201 || 200  -->
</html>