
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <title>Document</title>
</head>
<body>
  <div class="container">
    <div class="form-bio">
      <form action="" method="">
        <div class="form-header">
          <h3 class="text">Biodata Anda</h3>
        </div>
        <div class="form-group">
          <label for="">NAMA</label>
          <input type="text" disabled value="<?php echo $_GET['nama'];  ?>" class="form-control">
        </div>
        <div class="form-group">
          <label for="">NIM</label>
          <input type="text" disabled value="<?php echo $_GET['nim'];  ?>" class="form-control">
        </div>
        <div class="form-group">
          <label for="">ALAMAT</label>
          <input type="text" disabled value="<?php echo $_GET['alamat'];  ?>" class="form-control">
        </div>
        <div class="form-group">
          <label for="">AGAMA</label>
          <input type="text" disabled value="<?php echo $_GET['agama'];  ?>" class="form-control">
        </div>
        <div class="form-group">
          <label for="">TANGGAL LAHIR</label>
          <input type="text" disabled value="<?php echo $_GET['tanggalLahir'];  ?>" class="form-control">
        </div>
        <div class="form-group">
          <label for="">JENIS KELAMIN</label>
          <input type="text" disabled value="<?php echo $_GET['jenisKelamin'];  ?>" class="form-control">
        </div>
        <div class="form-group">
          <label for="">HOBI</label>
          <input type="text" value="<?php for ($i=0; $i < sizeof($_GET['hobi']); $i++) {
                  if($i === sizeof($_GET['hobi']) - 1){
                      echo $_GET['hobi'][$i];
                  } else {
                      echo $_GET['hobi'][$i].", ";
                  }
                } ?>" disabled class="form-control">
        </div>
        <button type="submit" name="submit" class="btn btn-primary"><a href="index.php">KEMBALI</a></button>
      </form>
    </div>
  </div>

</body>
</html>
