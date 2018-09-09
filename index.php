<?php
  if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $alamat = $_POST['alamat'];
    $agama = $_POST['agama'];
    $tanggalLahir = $_POST['tanggalLahir'];
    $jenisKelamin = $_POST['jenisKelamin'];
    $hobi = $_POST['hobi'];

    if($nama && $nim && $alamat && $agama && $tanggalLahir && $jenisKelamin){
      $url = "result.php?";
      $url .= "nama=".$nama;
      $url .= "&nim=".$nim; // isi dari variabel url akan ditambahkan dengan data yang baru
      $url .= "&alamat=".$alamat; // isi dari variabel url akan ditambahkan dengan data yang baru
      $url .= "&agama=".$agama; // isi dari variabel url akan ditambahkan dengan data yang baru
      $url .= "&tanggalLahir=".$tanggalLahir; // isi dari variabel url akan ditambahkan dengan data yang baru
      $url .= "&jenisKelamin=".$jenisKelamin; // isi dari variabel url akan ditambahkan dengan data yang baru
      for ($i=0; $i < sizeof($hobi); $i++) {
          $url .= "&hobi[".$i."]=".$hobi[$i]; // isi dari variabel url akan ditambahkan dengan data yang baru
      }
      header("location: ".$url);
    }
    else{
      header("refresh:0");
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Form Biodata Mahasiswa</title>
</head>
<body>
    <div class="container">
      <div class="form-bio">
        <form class="" action="#" method="POST">
          <div class="form-header">
            <h3 class="text">Form Biodata Mahasiswa</h3>
            <h5 class="text">silakan masukan biodata anda</h5>
          </div>
          <div class="form-group">
            <label for="nama">NAMA *</label>
            <input type="text" class="form-control" name="nama" id="nama">
          </div>
          <div class="form-group">
            <label for="nim">NIM *</label>
            <input type="number" class="form-control" name="nim" id="nim">
          </div>
          <div class="form-group">
            <label for="alamat">ALAMAT *</label>
            <input type="text" class="form-control" name="alamat" id="alamat">
          </div>
          <div class="form-group">
            <label>AGAMA *</label>
            <select name="agama" id="" class="form-control">
              <option value="Hindu">Hindu</option>
              <option value="Islam">Islam</option>
              <option value="Buddha">Buddha</option>
              <option value="Kristen">Kristen</option>
            </select>
          </div>
          <div class="form-group">
            <label for="tanggalLahir">TANGGAL LAHIR *</label>
            <input type="date" name="tanggalLahir" id="tanggalLahir" class="form-control">
          </div>
          <div class="form-group">
            <label>JENIS KELAMIN *</label>
            <div class="radio">
              <label class="radio-inline"><input type="radio" name=jenisKelamin value="Pria">Pria</label>
              <label class="radio-inline"><input type="radio" name=jenisKelamin value="Wanita">Wanita</label>
            </div>
          </div>
          <div class="form-group">
            <label>HOBI (OPSIONAL)</label>
            <div class="form-checkbox">
              <label><input type="checkbox" id="Traveling" name="hobi[]" value="Traveling">Traveling</label>
              <label><input type="checkbox" id="Hiking" name="hobi[]" value="Hiking">Hiking</label>
              <label><input type="checkbox" id="Gaming" name="hobi[]" value="Gaming">Gaming</label>
              <label><input type="checkbox" id="Running" name="hobi[]" value="Running">Running</label>
            </div>
          </div>
          <button type="submit" name="submit" class="btn btn-primary">KIRIM</button>
        </form>
      </div>
    </div>
</body>
</html>
