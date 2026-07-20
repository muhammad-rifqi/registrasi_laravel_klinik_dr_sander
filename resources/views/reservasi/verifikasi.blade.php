<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Verifikasi Data Peserta</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, Helvetica, sans-serif;
}

body{
    background:#f3f4f6;
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
}

.container{
    width:380px;
    background:#fff;
    padding:30px;
    border-radius:12px;
    box-shadow:0 10px 25px rgba(0,0,0,.1);
}

h2{
    text-align:center;
    color:#333;
    margin-bottom:10px;
}

p{
    text-align:center;
    color:#666;
    font-size:14px;
    margin-bottom:25px;
}

.form-group{
    margin-bottom:18px;
}

label{
    display:block;
    margin-bottom:6px;
    color:#444;
    font-size:14px;
    font-weight:bold;
}

input{
    width:100%;
    padding:12px;
    border:1px solid #ccc;
    border-radius:8px;
    font-size:14px;
}

input:focus{
    border-color:#2563eb;
    outline:none;
}

button{
    width:100%;
    padding:12px;
    border:none;
    background:#2563eb;
    color:#fff;
    border-radius:8px;
    font-size:15px;
    cursor:pointer;
    transition:.3s;
}

button:hover{
    background:#1d4ed8;
}

.info{
    margin-top:15px;
    text-align:center;
    font-size:13px;
    color:#666;
}

.info a{
    color:#2563eb;
    text-decoration:none;
}
</style>
</head>

<body>

<div class="container">
    <h2>Verifikasi Data Peserta</h2>
    <p>Masukkan email atau nomor HP untuk proses verifikasi.</p>

    <form onSubmit="checkemailnohp(); return false;">
        <div class="form-group">
            <label>Email</label>
            <input type="email" id="email" placeholder="contoh@email.com">
        </div>

        <div class="form-group">
            <label>Nomor HP</label>
            <input type="tel" id="no_hp" placeholder="08xxxxxxxxxx">
        </div>
        <button type="submit">Check Data</button>
    </form>

    <!--div class="info">
        Sudah menerima kode?
        <a href="#">Verifikasi Sekarang</a>
    </div-->
</div>

</body>
	<script>
		function checkemailnohp() {
			const em = document.getElementById("email").value;
			const hp = document.getElementById("no_hp").value;
			if(em === "" && hp === ""){
				alert(" Pastikan Data Terisi "); return false;
			}else{	
				
				if(em !== ""){
					fetch(`https://klinikdrsanderb-emcu.com/api/v1/patients/search/${em}`)
					.then(response => {
						if (response.ok) {
							window.location.href='/reservasi/daftar';
						} else {
							alert('Maaf Data Anda Belum Ada di Database!');
						}
					})
					.catch(err => {
						alert(err.message);
					});
				}else{
					fetch(`https://klinikdrsanderb-emcu.com/api/v1/patients/searchhp/${hp}`)
					.then(response => {
						if (response.ok) {
							window.location.href='/reservasi/daftar';
						} else {
							alert('Maaf Data Anda Belum Ada di Database!');
						}
					})
					.catch(err => {
						alert(err.message);
					});
				}
			}
		}
	</script>
</html>