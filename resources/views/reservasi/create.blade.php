<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>eMCU — Registrasi Peserta</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{asset('asset/css/registrasi.css')}}">
</head>
<body>

<div class="toast-wrap" id="toastWrap"></div>

<!-- NAV -->
<nav class="topnav">
  <div class="nav-logo">
    <div class="nav-mark">
      <svg viewBox="0 0 24 24"><circle cx="12" cy="8" r="4"/><path d="M20 21a8 8 0 1 0-16 0"/></svg>
    </div>
    <div>
      <div class="nav-name">Registrasi MCU</div>
      <div class="nav-role">Peserta</div>
    </div>
  </div>
  <span class="nav-badge">MCU 2026</span>
</nav>

<div class="main">

  <!-- Step Tracker -->
  <div style="background:var(--ink);border-radius:var(--r24);padding:1.75rem 2rem;margin-bottom:1.25rem;position:relative;overflow:hidden">
    <div style="position:absolute;width:300px;height:300px;border-radius:50%;background:radial-gradient(circle,rgba(26,111,212,0.2) 0%,transparent 70%);top:-120px;right:-60px;pointer-events:none"></div>
    <div style="font-size:11px;font-weight:600;letter-spacing:2px;text-transform:uppercase;color:rgba(255,255,255,0.35);margin-bottom:.4rem" id="p-eyebrow">Langkah 1 dari 3</div>
    <div style="font-size:22px;font-weight:700;color:white;margin-bottom:.25rem" id="p-header-title">Cari Data Peserta</div>
    <p style="font-size:13px;color:rgba(255,255,255,0.45);margin-bottom:1.25rem" id="p-desc">Masukkan NIK KTP atau Nomor Paspor untuk menemukan data Anda.</p>
    <div style="display:flex;align-items:center;gap:0">
      <div style="display:flex;align-items:center;gap:8px;flex:1">
        <div style="width:28px;height:28px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:12px;font-weight:700;background:var(--blue);color:white;border:2px solid var(--blue);box-shadow:0 0 0 4px rgba(26,111,212,0.25);flex-shrink:0" id="pt1dot">1</div>
        <span style="font-size:12px;font-weight:500;color:rgba(255,255,255,0.85)">Cari &amp; Data Diri</span>
        <div style="flex:1;height:1px;background:rgba(255,255,255,0.1)"></div>
      </div>
      <div style="display:flex;align-items:center;gap:8px;flex:1">
        <div style="width:28px;height:28px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:12px;font-weight:700;background:rgba(255,255,255,0.08);color:rgba(255,255,255,0.3);border:1px solid rgba(255,255,255,0.1);flex-shrink:0" id="pt2dot">2</div>
        <span style="font-size:12px;font-weight:500;color:rgba(255,255,255,0.3)" id="pt2lbl">Riwayat</span>
        <div style="flex:1;height:1px;background:rgba(255,255,255,0.1)"></div>
      </div>
      <div style="display:flex;align-items:center;gap:8px">
        <div style="width:28px;height:28px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:12px;font-weight:700;background:rgba(255,255,255,0.08);color:rgba(255,255,255,0.3);border:1px solid rgba(255,255,255,0.1);flex-shrink:0" id="pt3dot">3</div>
        <span style="font-size:12px;font-weight:500;color:rgba(255,255,255,0.3)" id="pt3lbl">QR Code</span>
      </div>
    </div>
  </div>

  <!-- ═══ SCREEN 1 ═══ -->
  <div id="pscreen1" class="fade-up">
    <div class="card">
      <div class="sect">Tipe Identifikasi</div>
      <div style="display:inline-flex;background:var(--surface);border:1px solid var(--line);border-radius:var(--r12);padding:4px;gap:2px;margin-bottom:1rem">
        <button id="p-opt-nik" onclick="pSwitchId('nik')" style="padding:8px 20px;border-radius:var(--r8);font-size:13px;font-weight:600;cursor:pointer;color:var(--blue);background:var(--white);box-shadow:0 1px 6px rgba(13,28,46,0.1);border:none;font-family:var(--font);transition:all .18s">NIK KTP</button>
        <button id="p-opt-pass" onclick="pSwitchId('passport')" style="padding:8px 20px;border-radius:var(--r8);font-size:13px;font-weight:600;cursor:pointer;color:var(--ink-3);background:transparent;border:none;font-family:var(--font);transition:all .18s">No. Paspor</button>
      </div>

      <div style="background:var(--blue-l);border:2px solid rgba(26,111,212,0.2);border-radius:var(--r16);padding:1.25rem">
        <div style="display:flex;gap:10px;align-items:flex-start">
          <div style="flex:1;position:relative">
            <svg style="position:absolute;left:14px;top:50%;transform:translateY(-50%);width:20px;height:20px;stroke:var(--blue);fill:none;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;pointer-events:none" viewBox="0 0 24 24"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
            <input id="p-nikInp" type="text" maxlength="19" placeholder="0000 0000 0000 0000" inputmode="numeric" autocomplete="off" class="nik-inp"
              style="width:100%;height:52px;border-radius:var(--r12);border:2px solid rgba(26,111,212,0.25);background:white;padding:0 16px 0 48px;color:var(--ink);outline:none;transition:all .18s;font-family:var(--font-mono);font-size:17px;font-weight:600;letter-spacing:2px"
              oninput="pNikInput(this)" onfocus="this.style.borderColor='var(--blue)'" onblur="this.style.borderColor='rgba(26,111,212,0.25)'"/>
            <div style="text-align:right;font-size:11px;color:var(--muted);margin-top:4px;font-weight:600" id="p-nikCount"><span id="p-nc">0</span> / 16 digit</div>
            <div style="font-size:12px;color:var(--blue);margin-top:4px;font-weight:500;display:none" id="p-passHint">Contoh: A1234567</div>
          </div>
          <button onclick="pDoSearch()" style="height:52px;padding:0 22px;background:var(--blue);color:white;border:none;border-radius:var(--r12);font-family:var(--font);font-size:14px;font-weight:600;cursor:pointer;display:flex;align-items:center;gap:8px;flex-shrink:0;transition:background .15s" onmouseover="this.style.background='var(--blue-d)'" onmouseout="this.style.background='var(--blue)'">
            <svg style="width:18px;height:18px;stroke:white;fill:none;stroke-width:2.5;stroke-linecap:round;stroke-linejoin:round" viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>Cari
          </button>
        </div>
        <div id="p-searchStatus" style="display:none;margin-top:10px"></div>
      </div>

      <!-- Form Data Diri -->
      <div id="p-formDiri" style="display:none;margin-top:1.5rem">
        <div id="p-autofillBanner" style="display:none;align-items:center;gap:10px;background:var(--teal-l);border:1px solid rgba(14,159,135,0.25);border-radius:var(--r8);padding:10px 14px;margin-bottom:1rem;font-size:13px;color:#076B5A;font-weight:500">
          <svg style="width:16px;height:16px;stroke:currentColor;fill:none;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;flex-shrink:0" viewBox="0 0 24 24"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg>
          Data peserta lama ditemukan — form telah diisi otomatis. Periksa &amp; perbaiki jika perlu.
        </div>
        <div id="p-newBanner" style="display:none;align-items:center;gap:10px;background:var(--amber-l);border:1px solid rgba(212,130,10,0.2);border-radius:var(--r8);padding:10px 14px;margin-bottom:1rem;font-size:13px;color:#8C5500;font-weight:500">
          <svg style="width:16px;height:16px;stroke:currentColor;fill:none;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;flex-shrink:0" viewBox="0 0 24 24"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
          Data tidak ditemukan — isi form di bawah sebagai peserta baru.
        </div>

        <!-- ERROR SUMMARY -->
        <div class="err-banner" id="p-errBanner">
          <div class="err-banner-title">
            <svg style="width:15px;height:15px;stroke:currentColor;fill:none;stroke-width:2.5" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 8v4M12 16h.01"/></svg>
            Lengkapi field berikut sebelum lanjut:
          </div>
          <ul class="err-banner-list" id="p-errList"></ul>
        </div>

        <div style="display:grid;grid-template-columns:1fr 1fr;gap:14px">

          <!-- Title + Nama -->
          <div style="grid-column:1/-1;display:grid;grid-template-columns:140px 1fr;gap:10px;align-items:start">
            <div>
              <label class="field-label" id="lbl-title">Title <span style="color:#E07520">*</span></label>
              <div class="sel-wrap">
                <select id="p-title-sel" class="sel" onchange="clearFieldError('p-title-sel','lbl-title')"
                  onfocus="this.style.borderColor='var(--blue)';this.style.boxShadow='0 0 0 3px rgba(26,111,212,0.1)'"
                  onblur="this.style.borderColor='var(--line)';this.style.boxShadow='none'">
                  <option value="">— Pilih —</option>
                  <option value="Tn">Tn.</option>
                  <option value="Ny">Ny.</option>
                  <option value="Nn">Nn.</option>
                  <option value="Dr">Dr.</option>
                  <option value="Prof">Prof.</option>
                </select>
                <svg viewBox="0 0 24 24"><path d="M6 9l6 6 6-6"/></svg>
              </div>
              <div class="field-err" id="err-title">Wajib dipilih</div>
            </div>
            <div>
              <label class="field-label" id="lbl-nama">Nama Lengkap <span style="color:#E07520">*</span></label>
              <input id="p-nama" type="text" placeholder="Budi Santoso" class="inp"
                oninput="clearFieldError('p-nama','lbl-nama')"
                onfocus="this.style.borderColor='var(--blue)';this.style.boxShadow='0 0 0 3px rgba(26,111,212,0.1)'"
                onblur="this.style.borderColor='var(--line)';this.style.boxShadow='none'"/>
              <div class="field-err" id="err-nama">Wajib diisi</div>
            </div>
          </div>

          <!-- NIK KTP -->
          <div style="grid-column:1/-1">
            <label class="field-label" id="lbl-nikField">NIK KTP <span style="color:#E07520">*</span></label>
            <div style="position:relative">
              <svg style="position:absolute;left:14px;top:50%;transform:translateY(-50%);width:16px;height:16px;stroke:var(--muted);fill:none;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;pointer-events:none" viewBox="0 0 24 24"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
              <input id="p-nikField" type="text" maxlength="19" placeholder="0000 0000 0000 0000" inputmode="numeric" class="inp nik-inp" style="padding-left:42px"
                oninput="fmtNikField(this);clearFieldError('p-nikField','lbl-nikField')"
                onfocus="this.style.borderColor='var(--blue)';this.style.boxShadow='0 0 0 3px rgba(26,111,212,0.1)'"
                onblur="this.style.borderColor='var(--line)';this.style.boxShadow='none'"/>
            </div>
            <div style="display:flex;justify-content:space-between;align-items:center;margin-top:4px">
              <div class="field-err show" id="err-nikField" style="display:none">NIK harus 16 digit angka</div>
              <div style="text-align:right;font-size:11px;color:var(--muted);font-weight:600;margin-left:auto"><span id="p-nf-nc">0</span> / 16 digit</div>
            </div>
          </div>

          <input type="hidden" id="p_patient_id" value="" name="p_patient_id" />

          <!-- Jenis Kelamin -->
          <div>
            <label class="field-label" id="lbl-jk">Jenis Kelamin <span style="color:#E07520">*</span></label>
            <div style="display:flex;gap:8px">
              <label style="flex:1;display:flex;align-items:center;gap:8px;padding:11px 14px;border:2px solid var(--line);border-radius:var(--r8);cursor:pointer;background:var(--white);transition:all .18s;font-size:13px;font-weight:500;color:var(--ink)" id="jk-laki-label">
                <input type="radio" name="p-jenisKelamin" value="m" id="jk-laki" style="accent-color:var(--blue);width:16px;height:16px;cursor:pointer" onchange="pJKChange();clearJKError()"/>Laki-laki
              </label>
              <label style="flex:1;display:flex;align-items:center;gap:8px;padding:11px 14px;border:2px solid var(--line);border-radius:var(--r8);cursor:pointer;background:var(--white);transition:all .18s;font-size:13px;font-weight:500;color:var(--ink)" id="jk-pr-label">
                <input type="radio" name="p-jenisKelamin" value="f" id="jk-pr" style="accent-color:var(--teal);width:16px;height:16px;cursor:pointer" onchange="pJKChange();clearJKError()"/>Perempuan
              </label>
            </div>
            <div class="field-err" id="err-jk">Pilih salah satu</div>
          </div>

          <!-- Tanggal Lahir -->
          <div>
            <label class="field-label" id="lbl-tglLahir">Tanggal Lahir <span style="color:#E07520">*</span></label>
            <div class="inp-icon-wrap">
              <svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg>
              <input id="p-tglLahir" type="date" class="inp"
                onchange="clearFieldError('p-tglLahir','lbl-tglLahir')"
                onfocus="this.style.borderColor='var(--blue)';this.style.boxShadow='0 0 0 3px rgba(26,111,212,0.1)'"
                onblur="this.style.borderColor='var(--line)';this.style.boxShadow='none'"/>
            </div>
            <div class="field-err" id="err-tglLahir">Wajib diisi</div>
          </div>

          <!-- No HP -->
          <div>
            <label class="field-label" id="lbl-noHp">No. HP / WA <span style="color:#E07520">*</span></label>
            <div class="inp-icon-wrap">
              <svg viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.65 3.35 2 2 0 0 1 3.62 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 9.91a16 16 0 0 0 6.16 6.16l.98-.87a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
              <input id="p-noHp" type="tel" placeholder="08xx-xxxx-xxxx" class="inp"
                oninput="clearFieldError('p-noHp','lbl-noHp')"
                onfocus="this.style.borderColor='var(--blue)';this.style.boxShadow='0 0 0 3px rgba(26,111,212,0.1)'"
                onblur="this.style.borderColor='var(--line)';this.style.boxShadow='none'"/>
            </div>
            <div class="field-err" id="err-noHp">Wajib diisi</div>
          </div>

          <!-- Email -->
          <div>
            <label class="field-label" id="lbl-email">Email <span style="color:#E07520">*</span></label>
            <div class="inp-icon-wrap">
              <svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
              <input id="p-email" type="email" placeholder="nama@perusahaan.com" class="inp"
                oninput="clearFieldError('p-email','lbl-email')"
                onfocus="this.style.borderColor='var(--blue)';this.style.boxShadow='0 0 0 3px rgba(26,111,212,0.1)'"
                onblur="this.style.borderColor='var(--line)';this.style.boxShadow='none'"/>
            </div>
            <div class="field-err" id="err-email">Wajib diisi</div>
          </div>

          <!-- No Karyawan -->
          <div>
            <label class="field-label" id="lbl-noKar">No. Karyawan <span style="color:#E07520">*</span></label>
            <div class="inp-icon-wrap">
              <svg viewBox="0 0 24 24"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
              <input id="p-noKar" type="text" placeholder="EMP-001234" class="inp"
                oninput="clearFieldError('p-noKar','lbl-noKar')"
                onfocus="this.style.borderColor='var(--blue)';this.style.boxShadow='0 0 0 3px rgba(26,111,212,0.1)'"
                onblur="this.style.borderColor='var(--line)';this.style.boxShadow='none'"/>
            </div>
            <div class="field-err" id="err-noKar">Wajib diisi</div>
          </div>

          <!-- Departemen -->
          <div>
            <label class="field-label" id="lbl-dept">Departemen <span style="color:#E07520">*</span></label>
            <div class="sel-wrap">
              <select id="p-dept" class="sel"
                    onchange="clearFieldError('p-dept','lbl-dept')"
                    onfocus="this.style.borderColor='var(--blue)';this.style.boxShadow='0 0 0 3px rgba(26,111,212,0.1)'"
                    onblur="this.style.borderColor='var(--line)';this.style.boxShadow='none'">
                    <option value="">— Pilih Departemen —</option>
                        <option value="HRD">HRD</option>
                        <option value="Finance">Finance</option>
                        <option value="IT">IT</option>
                        <option value="Operations">Operations</option>
                        <option value="Produksi">Produksi</option>
                        <option value="Logistik">Logistik</option>
                        <option value="K3 / HSE">K3 / HSE</option>
                        <option value="Marketing">Marketing</option>
                        <option value="Lainnya">Lainnya</option>
               </select>
                <svg viewBox="0 0 24 24"><path d="M6 9l6 6 6-6"/></svg>
              </div>
            <div class="field-err" id="err-dept">Wajib dipilih</div>
          </div>

          <!-- Perusahaan -->
          <div style="grid-column:1/-1">
            <label class="field-label">Perusahaan</label>
            <div style="background:var(--blue-l);border:2px solid rgba(26,111,212,0.2);border-radius:var(--r8);padding:12px 16px;display:flex;align-items:center;gap:10px">
              <span style="font-size:10px;font-weight:700;background:var(--blue);color:white;padding:3px 8px;border-radius:6px;letter-spacing:.5px;flex-shrink:0">API</span>
              <span style="font-size:14px;font-weight:600;color:var(--ink-2); width:100%;">
				        <select style="width:100%; border: 0px; padding: 4px; display:none;" id="p-company_all" required>
                  
                </select>
				  <span id="viewPerusahaan"></span>
			  </span>
            </div>
          </div>
        </div>

        <div class="footer-row">
          <span style="font-size:12px;color:var(--muted)">Field bertanda <span style="color:#E07520">*</span> wajib diisi</span>
          <button class="btn btn-blue" onclick="pGoStep2()">Lanjut ke Riwayat <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></button>
        </div>
      </div>
    </div>

    <!-- Riwayat Registrasi Tersimpan -->
    <div class="card" id="savedListCard" style="display:none">
      <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:1rem;flex-wrap:wrap;gap:8px">
        <div>
          <div style="font-size:15px;font-weight:700;color:var(--ink)">Data Peserta Tersimpan</div>
          <div style="font-size:12px;color:var(--muted);margin-top:2px">Peserta yang pernah registrasi di perangkat ini</div>
        </div>
        <button class="btn btn-ghost" style="font-size:12px;padding:7px 12px" onclick="renderSavedList()">
          <svg viewBox="0 0 24 24" style="width:13px;height:13px"><path d="M23 4v6h-6"/><path d="M1 20v-6h6"/><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"/></svg>Refresh
        </button>
      </div>
      <div style="overflow-x:auto;border-radius:var(--r12);border:1px solid var(--line)">
        <table class="reg-table">
          <thead><tr><th>Nama</th><th>NIK</th><th>Dept</th><th>Registrasi</th><th></th></tr></thead>
          <tbody id="savedTbody">
            <tr><td colspan="5" style="text-align:center;color:var(--muted);padding:1.5rem">Belum ada data tersimpan.</td></tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- ═══ SCREEN 2 ═══ -->
  <div id="pscreen2" style="display:none" class="fade-up">

    <!-- Keluhan & Riwayat -->
    <div class="card">
      <div class="sect" style="margin-top:0">Anamnesis</div>
      <p style="font-size:13px;color:var(--muted);margin-bottom:1.25rem;line-height:1.6">Isi dengan jujur — bersifat rahasia medis.</p>

      <!-- Color Blind — locked, dokter only (dipindah ke atas keluhan utama) -->
      <div style="background:var(--amber-l);border:1.5px solid rgba(212,130,10,0.25);border-radius:var(--r12);padding:1rem;margin-bottom:1rem">
        <div style="display:flex;align-items:center;gap:8px;margin-bottom:.75rem">
          <svg style="width:14px;height:14px;stroke:var(--amber);fill:none;stroke-width:2;flex-shrink:0" viewBox="0 0 24 24"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
          <span style="font-size:11px;font-weight:700;color:var(--amber);text-transform:uppercase;letter-spacing:.8px">Color Blind / Buta Warna — Diisi oleh Dokter MCU</span>
        </div>
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:8px">
          <div>
            <label style="font-size:11px;font-weight:600;color:var(--amber);display:block;margin-bottom:4px;text-transform:uppercase;letter-spacing:.4px">Hasil</label>
            <div style="position:relative">
              <select id="p-colorBlindResult" disabled
                style="width:100%;height:42px;border-radius:var(--r8);border:2px dashed rgba(212,130,10,0.35);background:rgba(255,255,255,0.6);padding:0 32px 0 12px;font-family:var(--font);font-size:13px;color:var(--muted);appearance:none;cursor:not-allowed;opacity:0.7">
                <option value="">— Belum diperiksa —</option>
                <option value="Negatif">Negatif (Normal)</option>
                <option value="Positif">Positif (Buta Warna)</option>
                <option value="Parsial">Parsial</option>
              </select>
              <svg style="position:absolute;right:10px;top:50%;transform:translateY(-50%);width:13px;height:13px;stroke:var(--muted);fill:none;stroke-width:2.5;pointer-events:none" viewBox="0 0 24 24"><path d="M6 9l6 6 6-6"/></svg>
            </div>
          </div>
          <div>
            <label style="font-size:11px;font-weight:600;color:var(--amber);display:block;margin-bottom:4px;text-transform:uppercase;letter-spacing:.4px">Keterangan</label>
            <input id="p-colorBlindNote" type="text" disabled placeholder="Catatan dokter..."
              style="width:100%;height:42px;border-radius:var(--r8);border:2px dashed rgba(212,130,10,0.35);background:rgba(255,255,255,0.6);padding:0 12px;font-family:var(--font);font-size:13px;color:var(--muted);cursor:not-allowed;opacity:0.7;outline:none"/>
          </div>
        </div>
      </div>

      <div style="display:flex;flex-direction:column;gap:1rem">
        <div>
          <label class="field-label">Chief Complaint <span style="color:var(--muted);font-weight:400;text-transform:none;letter-spacing:0">/ Keluhan Utama</span></label>
          <textarea id="p-chiefComplaint" class="doc-note" placeholder="Contoh: Batuk dan pilek sejak 1 hari yang lalu" style="height:72px"></textarea>
        </div>
        <div>
          <label class="field-label">Past Illness <span style="color:var(--muted);font-weight:400;text-transform:none;letter-spacing:0">/ Riwayat Penyakit</span></label>
          <textarea id="p-pastIllness" class="doc-note" placeholder="Contoh: Tidak ada / Hipertensi sejak 2019" style="height:72px"></textarea>
        </div>
        <div>
          <label class="field-label">Family History <span style="color:var(--muted);font-weight:400;text-transform:none;letter-spacing:0">/ Riwayat Penyakit Keluarga</span></label>
          <textarea id="p-familyHistory" class="doc-note" placeholder="Contoh: Ibu DM / Ayah Hipertensi" style="height:72px"></textarea>
        </div>
      </div>
    </div>

    <!-- Habit -->
    <div class="card">
      <div class="sect" style="margin-top:0">Habit / Kebiasaan</div>
      <div id="p-habitContainer">
        <!-- rendered by JS -->
      </div>
    </div>

    <!-- Physical Examination -->
    <div class="card">
      <div class="sect" style="margin-top:0">Physical Examination / Pemeriksaan Fisik</div>
      <p style="font-size:13px;color:var(--muted);margin-bottom:1rem;line-height:1.6">Toggle <strong>Normal</strong> jika hasil normal. Nonaktifkan dan isi keterangan jika ada temuan.</p>

      <div id="p-examContainer">
        <!-- rendered by JS -->
      </div>
    </div>

    <div class="card" style="padding:1rem 1.5rem">
      <div style="display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:10px">
        <button class="btn btn-ghost" onclick="pGoBack1()"><svg viewBox="0 0 24 24"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>Kembali</button>
        <button class="btn btn-teal" onclick="pSubmit()">Submit &amp; Dapatkan QR <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></button>
      </div>
    </div>
  </div>

  <!-- ═══ SCREEN 3 ═══ -->
  <div id="pscreen3" style="display:none" class="fade-up">
    <div class="card" style="text-align:center;padding:2.5rem 2rem">
      <div style="width:68px;height:68px;border-radius:50%;background:var(--teal-l);display:flex;align-items:center;justify-content:center;margin:0 auto 1.25rem">
        <svg style="width:34px;height:34px;stroke:var(--teal);fill:none;stroke-width:2;stroke-linecap:round;stroke-linejoin:round" viewBox="0 0 24 24"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg>
      </div>
      <div style="font-size:22px;font-weight:700;color:var(--ink);margin-bottom:.5rem">Registrasi Berhasil!</div>
      <p style="font-size:14px;color:var(--muted);margin-bottom:2rem">Tunjukkan QR Code ini kepada petugas MCU saat hari pemeriksaan.</p>
      <div style="width:220px;height:220px;margin:0 auto 1rem;border:3px solid var(--ink);border-radius:var(--r16);display:flex;align-items:center;justify-content:center;background:white;padding:12px">
        <canvas id="p-qrCanvas" width="188" height="188"></canvas>
      </div>
      <div style="font-size:12px;font-weight:700;color:var(--muted);letter-spacing:2px;margin-bottom:1.5rem;font-family:var(--font-mono)" id="p-qrId">ID: MCU-2026---------</div>
      <div style="display:grid;grid-template-columns:1fr 1fr;gap:10px;text-align:left;background:var(--surface);border-radius:var(--r12);padding:1rem;margin-bottom:1.5rem">
        <div><div class="pc-item-label">Nama</div><div class="pc-item-val" id="p-qrNama">—</div></div>
        <div><div class="pc-item-label">NIK</div><div class="pc-item-val" id="p-qrNik" style="font-family:var(--font-mono);font-size:13px">—</div></div>
        <div><div class="pc-item-label">Tanggal MCU</div><div class="pc-item-val">07 Jun 2026</div></div>
        <div><div class="pc-item-label">Perusahaan</div><div class="pc-item-val">PT. Nusantara MS</div></div>
      </div>
      <div style="display:flex;gap:10px;flex-wrap:wrap">
        <button class="btn btn-blue" style="flex:1;justify-content:center;padding:14px" onclick="toast('QR Code disimpan ke perangkat.','ok')">
          <svg viewBox="0 0 24 24"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>Simpan QR Code
        </button>
        <button class="btn btn-ghost" style="flex:1;justify-content:center;padding:14px" onclick="resetForm()">
          <svg viewBox="0 0 24 24"><path d="M23 4v6h-6"/><path d="M1 20v-6h6"/><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"/></svg>Registrasi Baru
        </button>
      </div>
    </div>
  </div>

</div><!-- /main -->

<script>
// ══════════════════════════════════════════
//  STORAGE
// ══════════════════════════════════════════
const STORAGE_KEY = 'emcu_peserta_2026';
function getDB(){
    try{
      const r = localStorage.getItem(STORAGE_KEY);
      return r?JSON.parse(r):[]
    }catch{
      return[]
    }
  }
function saveDB(db){
  try{
    localStorage.setItem(STORAGE_KEY,JSON.stringify(db));
    return true
  }catch{
    return false
  }
}

function findByNik(nik){
  const db=getDB();
  const s=db.find(p=>p.nik===nik);
  if(s) return{data:s,source:'saved'};
  const m=MOCK_DB.find(p=>p.nik===nik);
  if(m) {
	  cariPerusahaan(m.patient_id);
	  document.getElementById("p-company_all").style="display:none;";
	  return{data:m,source:'mock'};
  }
  return null;
}
function findByPassport(pass){
  const db=getDB();
  const s=db.find(p=>p.passport&&p.passport.toUpperCase()===pass.toUpperCase());
  return s?{data:s,source:'saved'}:null;
}
function upsertPeserta(peserta){
  const db=getDB();
  const idx=db.findIndex(p=>p.nik===peserta.nik);
  if(idx>=0) db[idx]=peserta; else db.push(peserta);
  return saveDB(db);
}

// ══════════════════════════════════════════
//  MOCK DATA
// ══════════════════════════════════════════
// const MOCK_DB=[
//   {id:'P001',title:'Tn',nama:'Budi Santoso',nik:'3578010190030001',passport:'',hp:'081234567890',email:'budi@co.com',karyawan:'EMP-001',dept:'Produksi',jenisKelamin:'L',tglLahir:'1990-01-15',chiefComplaint:'Tidak ada keluhan',pastIllness:'Hipertensi sejak 2018',familyHistory:'Ayah DM',habits:{smoke:'NO',alcohol:'NO',coffee:'YES',sport:'NO'},physicalExam:{},registeredAt:'2026-05-10T08:00:00'},
//   {id:'P002',title:'Ny',nama:'Siti Rahayu',nik:'3171025503900002',passport:'',hp:'082345678901',email:'siti@co.com',karyawan:'EMP-002',dept:'HRD',jenisKelamin:'P',tglLahir:'1990-03-15',chiefComplaint:'',pastIllness:'Tidak ada',familyHistory:'Tidak ada',habits:{smoke:'NO',alcohol:'NO',coffee:'NO',sport:'YES'},physicalExam:{},registeredAt:'2026-05-11T09:15:00'},
// ];

let MOCK_DB=[];
window.addEventListener("load", async ()=> {
    await fetch('https://dev.klinikdrsanderb-emcu.com/api/v1/patients/all')
    .then(resp => resp.json())
    .then((bbb) => {
        MOCK_DB = bbb.payload || [];
    })
})
	
	
function cariPerusahaan(patientid){
	fetch('https://dev.klinikdrsanderb-emcu.com/api/v1/companies/getpatient/'+patientid)
	.then(yyy => yyy.json())
	.then((rw) => {
		document.getElementById("viewPerusahaan").innerHTML=rw.data[0].name || "-";
	})
}

// ══════════════════════════════════════════
//  STATE
// ══════════════════════════════════════════
let pIdType='nik', pStep=1, pCurrentData=null;

// ══════════════════════════════════════════
//  INIT
// ══════════════════════════════════════════
window.addEventListener('DOMContentLoaded',()=>{
  renderPStep(1);
  buildHabitGrid();
  buildExamGrid();
  renderSavedList();
  getCompanyAll();
});

// ══════════════════════════════════════════
//  STEP NAVIGATION
// ══════════════════════════════════════════
function renderPStep(n){
  pStep=n;
  ['pscreen1','pscreen2','pscreen3'].forEach((id,i)=>{
    document.getElementById(id).style.display=i+1===n?'block':'none';
  });
  const labels=[
    ['Langkah 1 dari 3','Cari Data Peserta','Masukkan NIK KTP atau Nomor Paspor untuk menemukan data Anda.'],
    ['Langkah 2 dari 3','Riwayat Kesehatan','Centang kondisi yang pernah / sedang Anda alami.'],
    ['Selesai!','QR Code Anda','Simpan dan tunjukkan QR Code ini kepada petugas MCU.'],
  ];
  document.getElementById('p-eyebrow').textContent=labels[n-1][0];
  document.getElementById('p-header-title').textContent=labels[n-1][1];
  document.getElementById('p-desc').textContent=labels[n-1][2];
  [2,3].forEach(i=>{
    const dot=document.getElementById('pt'+i+'dot');
    const lbl=document.getElementById('pt'+i+'lbl');
    const active=n>=i;
    dot.style.background=active?'var(--blue)':'rgba(255,255,255,0.08)';
    dot.style.color=active?'white':'rgba(255,255,255,0.3)';
    dot.style.border=active?'2px solid var(--blue)':'1px solid rgba(255,255,255,0.1)';
    dot.style.boxShadow=active?'0 0 0 4px rgba(26,111,212,0.25)':'none';
    lbl.style.color=active?'rgba(255,255,255,0.85)':'rgba(255,255,255,0.3)';
  });
  if(n===3) pBuildQR();
  window.scrollTo({top:0,behavior:'smooth'});
}

// ══════════════════════════════════════════
//  ID TYPE SWITCH
// ══════════════════════════════════════════
function pSwitchId(t){
  pIdType=t;
  const inp=document.getElementById('p-nikInp');
  ['nik','pass'].forEach(k=>{
    const btn=document.getElementById('p-opt-'+k);
    const active=(k==='nik'&&t==='nik')||(k==='pass'&&t==='passport');
    btn.style.background=active?'var(--white)':'transparent';
    btn.style.color=active?'var(--blue)':'var(--ink-3)';
    btn.style.boxShadow=active?'0 1px 6px rgba(13,28,46,0.1)':'none';
  });
  inp.value='';
  document.getElementById('p-nc').textContent='0';
  document.getElementById('p-nikCount').style.display=t==='nik'?'block':'none';
  document.getElementById('p-passHint').style.display=t==='passport'?'block':'none';
  inp.placeholder=t==='nik'?'0000 0000 0000 0000':'A1234567';
  inp.inputMode=t==='nik'?'numeric':'text';
  inp.maxLength=t==='nik'?19:12;
  document.getElementById('p-formDiri').style.display='none';
  document.getElementById('p-searchStatus').style.display='none';
}

// ══════════════════════════════════════════
//  NIK INPUT FORMATTERS
// ══════════════════════════════════════════
function pNikInput(el){
  if(pIdType!=='nik') return;
  let d=el.value.replace(/\D/g,'').slice(0,16);
  el.value=d.match(/.{1,4}/g)?.join(' ')||d;
  const n=d.length;
  document.getElementById('p-nc').textContent=n;
  document.getElementById('p-nc').style.color=n===16?'var(--blue)':n>0?'var(--amber)':'';
}
function fmtNikField(el){
  let d=el.value.replace(/\D/g,'').slice(0,16);
  el.value=d.match(/.{1,4}/g)?.join(' ')||d;
  document.getElementById('p-nf-nc').textContent=d.length;
}

// ══════════════════════════════════════════
//  SEARCH
// ══════════════════════════════════════════
function pDoSearch(){
  document.getElementById("p-company_all").style="display:block; width: 100%; padding : 4px;";
  const raw=document.getElementById('p-nikInp').value;
  const d=raw.replace(/\s/g,'');
  const st=document.getElementById('p-searchStatus');
  if(pIdType==='nik'&&(d.length!==16||!/^\d+$/.test(d))){
    st.style.display='block';
    st.innerHTML=statusChip('notfound','NIK KTP harus tepat 16 digit angka.');
    return;
  }
  if(pIdType==='passport'&&d.length<5){
    st.style.display='block';
    st.innerHTML=statusChip('notfound','Nomor paspor tidak valid.');
    return;
  }
  const result=pIdType==='nik'?findByNik(d):findByPassport(d);
  st.style.display='block';
  if(result){
    const src=result.source==='saved'?'Data registrasi Anda ditemukan':'Data peserta ditemukan dari sistem';
    st.innerHTML=statusChip('found',src+' — form telah diisi otomatis.');
    pAutofill(result.data);
    document.getElementById('p-autofillBanner').style.display='flex';
    document.getElementById('p-newBanner').style.display='none';
    pCurrentData=result.data;
  } else {
    st.innerHTML=statusChip('notfound','Data tidak ditemukan — isi form sebagai peserta baru.');
    pClearForm();
    if(pIdType==='nik'){
      document.getElementById('p-nikField').value=raw;
      document.getElementById('p-nf-nc').textContent=d.length;
    }
    document.getElementById('p-autofillBanner').style.display='none';
    document.getElementById('p-newBanner').style.display='flex';
    pCurrentData=null;
  }
  const fd=document.getElementById('p-formDiri');
  fd.style.display='block';
  setTimeout(()=>fd.scrollIntoView({behavior:'smooth',block:'start'}),100);
}

function statusChip(type,msg){
  const isOk=type==='found';
  const color=isOk?'#076B5A':'#8C5500';
  const bg=isOk?'var(--teal-l)':'var(--amber-l)';
  const ico=isOk
    ?'<svg style="width:15px;height:15px;stroke:currentColor;fill:none;stroke-width:2.5;flex-shrink:0" viewBox="0 0 24 24"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg>'
    :'<svg style="width:15px;height:15px;stroke:currentColor;fill:none;stroke-width:2.5;flex-shrink:0" viewBox="0 0 24 24"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>';
  return `<div style="display:flex;align-items:center;gap:8px;padding:10px 14px;border-radius:8px;background:${bg};color:${color};font-size:13px;font-weight:600">${ico}${msg}</div>`;
}

// ══════════════════════════════════════════
//  FORM HELPERS
// ══════════════════════════════════════════
function pJKChange(){
  const laki=document.getElementById('jk-laki').checked;
  const pr=document.getElementById('jk-pr').checked;
  document.getElementById('jk-laki-label').style.borderColor=laki?'var(--blue)':'var(--line)';
  document.getElementById('jk-laki-label').style.background=laki?'var(--blue-l)':'var(--white)';
  document.getElementById('jk-pr-label').style.borderColor=pr?'var(--teal)':'var(--line)';
  document.getElementById('jk-pr-label').style.background=pr?'var(--teal-l)':'var(--white)';
}
function clearJKError(){
  document.getElementById('err-jk').classList.remove('show');
  document.getElementById('lbl-jk').classList.remove('error-label');
  document.getElementById('jk-laki-label').style.outline='none';
  document.getElementById('jk-pr-label').style.outline='none';
}

function pAutofill(p){
  document.getElementById('p-title-sel').value=p.title||'Tn';
  document.getElementById('p-nama').value=p.fullname||'';
  document.getElementById('p-noHp').value=p.mobile_phone||'';
  document.getElementById('p-email').value=p.email||'';
  document.getElementById('p-noKar').value=p.karyawan||'';
  document.getElementById('p-dept').value=p.department||'';
  document.getElementById('p-tglLahir').value=p.birth||'';
  document.getElementById('p_patient_id').value=p.patient_id||'';
  
  const nikRaw=p.nik||'';
  document.getElementById('p-nikField').value=nikRaw.match(/.{1,4}/g)?.join(' ')||nikRaw;
  document.getElementById('p-nf-nc').textContent=nikRaw.replace(/\s/g,'').length;
  if(p.gender==='m') document.getElementById('jk-laki').checked=true;
  else if(p.gender==='f') document.getElementById('jk-pr').checked=true;
  pJKChange();
}

function pClearForm(){
  ['p-nama','p-noHp','p-email','p-noKar'].forEach(id=>{
    const el=document.getElementById(id); if(el) el.value='';
  });
  document.getElementById('p-dept').value='';
  document.getElementById('p-title-sel').value='';
  document.getElementById('p-tglLahir').value='';
  document.getElementById('p-nikField').value='';
  document.getElementById('p-nf-nc').textContent='0';
  document.querySelectorAll('input[name="p-jenisKelamin"]').forEach(r=>r.checked=false);
  pJKChange();
  clearAllErrors();
}

// ══════════════════════════════════════════
//  ERROR HANDLING — INLINE + SUMMARY
// ══════════════════════════════════════════
function setFieldError(inputId, labelId, errId){
  const el=document.getElementById(inputId);
  const lbl=document.getElementById(labelId);
  const err=document.getElementById(errId);
  if(el){el.classList.add('error'); el.style.borderColor='var(--red)'; el.style.boxShadow='0 0 0 3px rgba(201,53,53,0.1)'; el.style.background='var(--red-l)'}
  if(lbl) lbl.classList.add('error-label');
  if(err) err.classList.add('show');
}

function clearFieldError(inputId, labelId){
  const el=document.getElementById(inputId);
  const lbl=document.getElementById(labelId);
  if(el){el.classList.remove('error'); el.style.borderColor='var(--line)'; el.style.boxShadow='none'; el.style.background='';}
  if(lbl) lbl.classList.remove('error-label');
  // hide inline err
  const errId=inputId.replace('p-','err-').replace('-sel','');
  const errEl=document.getElementById(errId);
  if(errEl) errEl.classList.remove('show');
  // also attempt to hide errBanner if all clear
  hideBannerIfClean();
}

function clearAllErrors(){
  const fieldPairs=[
    ['p-title-sel','lbl-title'],['p-nama','lbl-nama'],['p-nikField','lbl-nikField'],
    ['p-tglLahir','lbl-tglLahir'],['p-noHp','lbl-noHp'],['p-email','lbl-email'],
    ['p-noKar','lbl-noKar'],['p-dept','lbl-dept']
  ];
  fieldPairs.forEach(([inp,lbl])=>{
    const el=document.getElementById(inp);
    const lblEl=document.getElementById(lbl);
    if(el){el.classList.remove('error');el.style.borderColor='var(--line)';el.style.boxShadow='none';el.style.background='';}
    if(lblEl) lblEl.classList.remove('error-label');
  });
  document.querySelectorAll('.field-err').forEach(e=>e.classList.remove('show'));
  document.getElementById('err-jk').classList.remove('show');
  document.getElementById('lbl-jk').classList.remove('error-label');
  document.getElementById('p-errBanner').classList.remove('show');
}

function hideBannerIfClean(){
  const anyErr=document.querySelectorAll('.field-err.show, .inp.error, .sel.error');
  if(anyErr.length===0) document.getElementById('p-errBanner').classList.remove('show');
}

// ══════════════════════════════════════════
//  STEP 1 → 2 VALIDATION (FIXED)
// ══════════════════════════════════════════
function pGoStep2(){
  clearAllErrors();
  const errors=[];
  let firstErrorEl=null;

  // Helper
  function markErr(inputId, labelId, errId, msg){
    setFieldError(inputId, labelId, errId);
    errors.push(msg);
    if(!firstErrorEl) firstErrorEl=document.getElementById(inputId);
  }

  // Title
  if(!document.getElementById('p-title-sel').value){
    markErr('p-title-sel','lbl-title','err-title','Title (Tn./Ny./dll) belum dipilih');
  }
  // Nama
  if(!document.getElementById('p-nama').value.trim()){
    markErr('p-nama','lbl-nama','err-nama','Nama Lengkap belum diisi');
  }
  // NIK Field
  const nikRaw=document.getElementById('p-nikField').value.replace(/\s/g,'');
  if(nikRaw.length!==16||!/^\d+$/.test(nikRaw)){
    setFieldError('p-nikField','lbl-nikField','err-nikField');
    errors.push('NIK KTP harus 16 digit angka');
    if(!firstErrorEl) firstErrorEl=document.getElementById('p-nikField');
    document.getElementById('err-nikField').textContent='NIK harus 16 digit angka';
    document.getElementById('err-nikField').classList.add('show');
  }
  // Jenis Kelamin
  if(!document.querySelector('input[name="p-jenisKelamin"]:checked')){
    document.getElementById('err-jk').classList.add('show');
    document.getElementById('lbl-jk').classList.add('error-label');
    document.getElementById('jk-laki-label').style.borderColor='var(--red)';
    document.getElementById('jk-pr-label').style.borderColor='var(--red)';
    errors.push('Jenis Kelamin belum dipilih');
    if(!firstErrorEl) firstErrorEl=document.getElementById('jk-laki-label');
  }
  // Tanggal Lahir
  if(!document.getElementById('p-tglLahir').value){
    markErr('p-tglLahir','lbl-tglLahir','err-tglLahir','Tanggal Lahir belum diisi');
  }
  // No HP
  if(!document.getElementById('p-noHp').value.trim()){
    markErr('p-noHp','lbl-noHp','err-noHp','No. HP / WA belum diisi');
  }
  // Email
  if(!document.getElementById('p-email').value.trim()){
    markErr('p-email','lbl-email','err-email','Email belum diisi');
  }
  // No Karyawan
  if(!document.getElementById('p-noKar').value.trim()){
    markErr('p-noKar','lbl-noKar','err-noKar','No. Karyawan belum diisi');
  }
  // Departemen
  if(!document.getElementById('p-dept').value){
    markErr('p-dept','lbl-dept','err-dept','Departemen belum dipilih');
  }

  if(errors.length>0){
    // Show summary banner
    const banner=document.getElementById('p-errBanner');
    const list=document.getElementById('p-errList');
    list.innerHTML=errors.map(e=>`<li>${e}</li>`).join('');
    banner.classList.add('show');
    // Scroll to first error
    if(firstErrorEl){
      firstErrorEl.scrollIntoView({behavior:'smooth',block:'center'});
      setTimeout(()=>firstErrorEl.focus(),300);
    }
    return;
  }

  renderPStep(2);
}

function pGoBack1(){renderPStep(1);}

// ══════════════════════════════════════════
//  SUBMIT
// ══════════════════════════════════════════
async function pSubmit(){
  const title=document.getElementById('p-title-sel').value;
  const nikRaw=document.getElementById('p-nikField').value.replace(/\s/g,'');
  const searchNik=document.getElementById('p-nikInp').value.replace(/\s/g,'');
  const peserta={
    id:pCurrentData?.id||'REG-'+Date.now(),
    title,
    nama:document.getElementById('p-nama').value.trim(),
    nik:nikRaw,
    passport:pIdType==='passport'?searchNik:'',
    hp:document.getElementById('p-noHp').value.trim(),
    email:document.getElementById('p-email').value.trim(),
    karyawan:document.getElementById('p-noKar').value.trim(),
    dept:document.getElementById('p-dept').value,
    jenisKelamin:document.querySelector('input[name="p-jenisKelamin"]:checked')?.value||'',
    tglLahir:document.getElementById('p-tglLahir').value,
    chiefComplaint:document.getElementById('p-chiefComplaint').value.trim(),
    pastIllness:document.getElementById('p-pastIllness').value.trim(),
    familyHistory:document.getElementById('p-familyHistory').value.trim(),
    patient_id : document.getElementById('p_patient_id').value.trim(),
	p_company_all:document.getElementById('p-company_all').value.trim(),
    habits:getHabitData(),
    physicalExam:getExamData(),
    registeredAt:new Date().toISOString(),
  };

  console.log(peserta);

     const payload = {
      title: peserta.title,
      fullname: peserta.nama,
      nik: peserta.nik,
      gender: peserta.jenisKelamin,
      email: peserta.email,
      place: '-',
      department: peserta.dept,
      mobile_phone: peserta.hp,
      status: "active",
      company_all: peserta.p_company_all,
      address: '-',
      birth: peserta.tglLahir,
      phone_code: "62",
      medical_record_number: null,
      place_of_birth: '-',
      patients_id : peserta.patient_id
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
        // window.location.href=`/reservasi/qrcode/${result?.payload?.patient_id}`
            console.log(result);
            if(result.status == 201){
              await fetch('https://dev.klinikdrsanderb-emcu.com/api/v1/patients/inserthistory', {
                      method: 'POST',
                      headers: {
                        'Content-Type': 'application/json'
                      },
                      
                      body: JSON.stringify({
                        patient_id : peserta.patient_id || result?.payload?.patient_id,
                        color_blind : 1,
                        eye : peserta.physicalExam.eye.normal,
                        tht : ' - ',
                        grievence : peserta.chiefComplaint,
                        post_ilness: peserta.pastIllness,
                        family_history_ilness: peserta.familyHistory,
                        thoraks : peserta.physicalExam.thorax.normal,
                        extremitas : peserta.physicalExam.extremity.normal,
                        is_smoke : peserta.habits.smoke,
                        smoke_a_day : '-',
                        is_alcohol : peserta.habits.alcohol,
                        is_coffe : peserta.habits.coffee,
                        is_sport : peserta.habits.sport,
                        sport_type : '-',
                        sport_freek_or_sunday : '-',
                        neck : peserta.physicalExam.neck.normal,
                        tooth_or_mouth : peserta.physicalExam.tooth.normal + '##' + peserta.physicalExam.tooth.note,
                        abdomen : peserta.physicalExam.abdomen.normal,
                        etc : peserta.physicalExam.etc.normal,
                      })
                    })
                      .then(response => {
                        if (!response.ok) {
                          throw new Error('Request gagal');
                        }
                        return response.json();
				  		localStorage.removeItem('emcu_peserta_2026'); 
                      })
                      .then(data => {
                        console.log('Sukses:', data);
                      })
                      .catch(error => {
                        console.error('Error:', error);
                      });
            }else{

            }
      } else {
        alert(result.message || 'Gagal menyimpan data');
      }
    }catch (error) {
      console.error(error);
      alert('Terjadi kesalahan koneksi');
    }

  const saved=upsertPeserta(peserta);
  pCurrentData=peserta;
  renderPStep(3);
  //renderSavedList();
  toast(saved?'Data berhasil disimpan & QR siap ditunjukkan.':'Data tersimpan sementara (storage penuh).',saved?'ok':'err');

}

// ══════════════════════════════════════════
//  RESET
// ══════════════════════════════════════════
function resetForm(){
  pCurrentData=null;
  pClearForm();
  document.getElementById('p-nikInp').value='';
  document.getElementById('p-nc').textContent='0';
  document.getElementById('p-formDiri').style.display='none';
  document.getElementById('p-searchStatus').style.display='none';
  document.getElementById('p-autofillBanner').style.display='none';
  document.getElementById('p-newBanner').style.display='none';
  document.getElementById('p-chiefComplaint').value='';
  document.getElementById('p-pastIllness').value='';
  document.getElementById('p-familyHistory').value='';
  resetHabits();
  resetExams();
  renderPStep(1);
}

// ══════════════════════════════════════════
//  HABIT & PHYSICAL EXAM DATA
// ══════════════════════════════════════════
const HABIT_LIST=[
  {id:'smoke',  label:'Smoke',  sub:'Merokok'},
  {id:'alcohol',label:'Alcohol',sub:'Alkohol'},
  {id:'coffee', label:'Coffee', sub:'Kopi'},
  {id:'sport',  label:'Sport',  sub:'Olahraga'},
];
const EXAM_LIST=[
  {id:'eye',       label:'Eye',        sub:'Mata'},
  {id:'ent',       label:'ENT',        sub:'THT'},
  {id:'thorax',    label:'Thorax',     sub:'Thoraks'},
  {id:'extremity', label:'Extremity',  sub:'Extremitas'},
  {id:'neck',      label:'Neck',       sub:'Leher'},
  {id:'tooth',     label:'Tooth',      sub:'Gigi'},
  {id:'mouth',     label:'Mouth',      sub:'Mulut'},
  {id:'abdomen',   label:'Abdomen',    sub:'Perut'},
  {id:'etc',       label:'Etc',        sub:'Lain-lain'},
];

function buildHabitGrid(){
  const c=document.getElementById('p-habitContainer');
  c.innerHTML=HABIT_LIST.map(h=>`
    <div class="habit-row" id="habit-row-${h.id}">
      <div class="habit-label">${h.label} <span>${h.sub}</span></div>
      <div class="yn-group">
        <label class="yn-btn" id="yn-yes-${h.id}" onclick="setHabit('${h.id}','YES')">
          <input type="radio" name="habit-${h.id}" value="YES" style="accent-color:var(--teal)"> YES
        </label>
        <label class="yn-btn no-sel" id="yn-no-${h.id}" onclick="setHabit('${h.id}','NO')">
          <input type="radio" name="habit-${h.id}" value="NO" checked style="accent-color:var(--red)"> NO
        </label>
      </div>
    </div>`).join('');
}

function setHabit(id, val){
  const yes=document.getElementById('yn-yes-'+id);
  const no=document.getElementById('yn-no-'+id);
  const yInp=yes.querySelector('input');
  const nInp=no.querySelector('input');
  if(val==='YES'){
    yInp.checked=true; nInp.checked=false;
    yes.classList.add('yes-sel'); no.classList.remove('no-sel');
  } else {
    nInp.checked=true; yInp.checked=false;
    no.classList.add('no-sel'); yes.classList.remove('yes-sel');
  }
}

function getHabitData(){
  const result={};
  HABIT_LIST.forEach(h=>{
    const checked=document.querySelector(`input[name="habit-${h.id}"]:checked`);
    result[h.id]=checked?checked.value:'NO';
  });
  return result;
}

function resetHabits(){
  HABIT_LIST.forEach(h=>setHabit(h.id,'NO'));
}

function buildExamGrid(){
  const c=document.getElementById('p-examContainer');
  c.innerHTML=EXAM_LIST.map(e=>`
    <div class="exam-row">
      <div class="exam-label">${e.label}<span>${e.sub}</span></div>
      <div class="toggle-wrap">
        <label class="toggle" title="Normal">
          <input type="checkbox" id="exam-chk-${e.id}" checked onchange="examToggleChange('${e.id}')">
          <span class="toggle-track"></span>
          <span class="toggle-thumb"></span>
        </label>
        <span style="font-size:12px;font-weight:600;color:var(--teal);min-width:48px" id="exam-status-${e.id}">Normal</span>
      </div>
      <div class="exam-note">
        <textarea id="exam-note-${e.id}" placeholder="Keterangan..." disabled
          style="opacity:0.4;cursor:not-allowed;background:var(--surface)"></textarea>
      </div>
    </div>`).join('');
}

function examToggleChange(id){
  const chk=document.getElementById('exam-chk-'+id);
  const status=document.getElementById('exam-status-'+id);
  const note=document.getElementById('exam-note-'+id);
  if(chk.checked){
    status.textContent='Normal'; status.style.color='var(--teal)';
    note.disabled=true; note.style.opacity='0.4'; note.style.cursor='not-allowed'; note.style.background='var(--surface)';
  } else {
    status.textContent='Abnormal'; status.style.color='var(--red)';
    note.disabled=false; note.style.opacity='1'; note.style.cursor='text'; note.style.background='white';
    note.focus();
  }
}

function getExamData(){
  const result={};
  EXAM_LIST.forEach(e=>{
    const normal=document.getElementById('exam-chk-'+e.id)?.checked!==false;
    const note=document.getElementById('exam-note-'+e.id)?.value.trim()||'';
    result[e.id]={normal, note:normal?'Normal':note||'Abnormal'};
  });
  return result;
}

function resetExams(){
  EXAM_LIST.forEach(e=>{
    const chk=document.getElementById('exam-chk-'+e.id);
    if(chk){ chk.checked=true; examToggleChange(e.id); }
    const note=document.getElementById('exam-note-'+e.id);
    if(note) note.value='';
  });
}

// ══════════════════════════════════════════
//  SAVED LIST
// ══════════════════════════════════════════
function renderSavedList(){
  const db=getDB();
  const card=document.getElementById('savedListCard');
  const tbody=document.getElementById('savedTbody');
  if(db.length===0){card.style.display='none';return;}
  card.style.display='block';
  tbody.innerHTML=db.map(p=>{
    const nikFmt=(p.nik||'').match(/.{1,4}/g)?.join(' ')||p.nik||'—';
    const tgl=p.registeredAt?new Date(p.registeredAt).toLocaleDateString('id-ID',{day:'2-digit',month:'short',year:'numeric'}):'—';
    return `<tr>
      <td style="font-weight:600;color:var(--ink)">${p.nama}</td>
      <td style="font-family:var(--font-mono);font-size:12px;color:var(--ink-3)">${nikFmt}</td>
      <td>${p.dept}</td>
      <td style="font-size:12px;color:var(--muted)">${tgl}</td>
      <td><button onclick="loadFromSaved('${p.nik}')" style="padding:5px 12px;border-radius:6px;border:1.5px solid var(--line);background:var(--surface);font-family:var(--font);font-size:12px;font-weight:600;color:var(--blue);cursor:pointer;transition:all .15s" onmouseover="this.style.borderColor='var(--blue)'" onmouseout="this.style.borderColor='var(--line)'">Panggil</button></td>
    </tr>`;
  }).join('');
}

function loadFromSaved(nik){
  const db=getDB();
  const p=db.find(x=>x.nik===nik);
  if(!p){toast('Data tidak ditemukan.','err');return;}
  const nikFmt=nik.match(/.{1,4}/g)?.join(' ')||nik;
  document.getElementById('p-nikInp').value=nikFmt;
  document.getElementById('p-nc').textContent=nik.length;
  document.getElementById('p-nc').style.color='var(--blue)';
  pAutofill(p);
  pCurrentData=p;
  const st=document.getElementById('p-searchStatus');
  st.style.display='block';
  st.innerHTML=statusChip('found','Data Anda ditemukan dari riwayat registrasi.');
  document.getElementById('p-autofillBanner').style.display='flex';
  document.getElementById('p-newBanner').style.display='none';
  document.getElementById('p-formDiri').style.display='block';
  setTimeout(()=>document.getElementById('p-formDiri').scrollIntoView({behavior:'smooth',block:'start'}),100);
  toast(`Data ${p.nama} berhasil dipanggil.`,'ok');
}

// ══════════════════════════════════════════
//  QR
// ══════════════════════════════════════════
function pBuildQR(){
  const title=document.getElementById('p-title-sel')?.value||'';
  const nama=(title?title+'. ':'')+( document.getElementById('p-nama')?.value||'');
  const nik=document.getElementById('p-nikField')?.value||'—';
  const uid='MCU-2026-'+Math.random().toString(36).substr(2,8).toUpperCase();
  document.getElementById('p-qrNama').textContent=nama||'—';
  document.getElementById('p-qrNik').textContent=nik;
  document.getElementById('p-qrId').textContent='ID: '+uid;
  drawQR('p-qrCanvas',uid+'|'+nik+'|'+nama);
}

function drawQR(canvasId,data){
  const canvas=document.getElementById(canvasId); if(!canvas) return;
  const ctx=canvas.getContext('2d');
  const size=188,cell=7,cols=Math.floor(size/cell);
  ctx.clearRect(0,0,size,size); ctx.fillStyle='#fff'; ctx.fillRect(0,0,size,size);
  let h=5381; for(let i=0;i<data.length;i++) h=((h<<5)+h)+data.charCodeAt(i);
  function rand(){h=Math.imul(h^(h>>>16),0x45d9f3b);h^=h>>>11;return((h>>>0)/0xffffffff)}
  function finder(ox,oy){ctx.fillStyle='#0D1C2E';ctx.fillRect(ox,oy,7*cell,7*cell);ctx.fillStyle='#fff';ctx.fillRect(ox+cell,oy+cell,5*cell,5*cell);ctx.fillStyle='#0D1C2E';ctx.fillRect(ox+2*cell,oy+2*cell,3*cell,3*cell)}
  finder(0,0); finder((cols-7)*cell,0); finder(0,(cols-7)*cell);
  ctx.fillStyle='#0D1C2E';
  for(let r=0;r<cols;r++) for(let c=0;c<cols;c++){
    if((r<8&&c<8)||(r<8&&c>cols-9)||(r>cols-9&&c<8)) continue;
    if(rand()>0.52) ctx.fillRect(c*cell,r*cell,cell,cell);
  }
}

// ══════════════════════════════════════════
//  TOAST
// ══════════════════════════════════════════
function toast(msg,type='ok'){
  const w=document.getElementById('toastWrap');
  const t=document.createElement('div');
  const ico=type==='ok'
    ?'<svg viewBox="0 0 24 24"><path d="M9 11l3 3L22 4"/></svg>'
    :'<svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 8v4M12 16h.01"/></svg>';
  t.className='toast t-'+(type==='ok'?'green':'red');
  t.innerHTML=ico+msg;
  w.appendChild(t);
  setTimeout(()=>{t.classList.add('out');setTimeout(()=>t.remove(),300);},3500);
}
	

function getCompanyAll(){
    fetch('https://dev.klinikdrsanderb-emcu.com/api/v1/companies/all')
    .then(resp => resp.json())
    .then((comp) => {
      // console.log(comp)
        var ddd = `<option value="NULL">Choose Company</option>`;
        comp?.payload?.forEach((element , index) => {
            ddd += `<option value="${element?.company_id}">${element?.name}</option>`;
        })
        document.getElementById("p-company_all").innerHTML= ddd;
    })
 }
	
</script>
</body>
</html>
