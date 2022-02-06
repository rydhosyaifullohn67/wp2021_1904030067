<?php
date_default_timezone_set("Asia/Jakarta");

require 'function.php';

$idAnggota = $_GET['idAnggota'];
$camaba = query("SELECT * FROM tb_anggota WHERE idAnggota = $idAnggota");
// var_dump($camaba['nama']);

if (isset($_POST['edit'])) {
  if (edit($_POST) > 0) {
    echo
    "<script>
    alert('data berhasil diedit');
    document.location.href = 'index.php';
    </script>";
  } else {
    echo
    "<script>
    alert('maaf data gagal diedit');
    </script>";
  }
}


?>

 <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Perpustakaan Agony</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">Perpustakaan Agony</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Anggota</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Daftar Buku</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Tabel Buku</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container px-4 px-lg-5">
                <div class="col-md-10 p-4 pt-4">
      <!-- konten -->
      <div class="col-md-10 pd-5 pt-5">
      <!-- konten -->
      <h3><i class="fas fa-users"></i> Edit Data Calon Mahasiswa</h3>
      <hr>

      <form method="POST" action="">

        <input type="hidden" class="form-control" value="<?= $camaba['idAnggota'] ?>" name="idAnggota">

        <div class="form-group">
          <label for="nama">Nama : </label>
          <input type="text" class="form-control" id="nama" value="<?= $camaba['nama'] ?>" placeholder="nama lengkap" name="nama" autofocus required autocomplete="off">
        </div>
        <div class="form-group">
          <label for="alamat">Alamat : </label>
          <input type="text" class="form-control" id="alamat" value="<?= $camaba['alamat'] ?>" placeholder="alamat lengkap" name="alamat" required autocomplete="off">
        </div>
        <div class="form-group">
          <label for="jenis_kelamin">Jenis Kelamin : </label>
          <input type="text" class="form-control" id="jenis_kelamin" value="<?= $camaba['jenis_kelamin'] ?>" placeholder="jenis kelamin" name="jenis_kelamin" required autocomplete="off">
        </div>
        <div class="form-group">
          <label for="agama">Agama : </label>
          <input type="text" class="form-control" id="agama" value="<?= $camaba['agama'] ?>" placeholder="agama anda" name="agama" required autocomplete="off">
        </div>
        <div class="form-group">
          <label for="foto">Foto : </label>
          <input type="text" class="form-control" id="foto" value="<?= $camaba['foto'] ?>" placeholder="input foto anda" name="foto" required autocomplete="off">
        </div>
        <button type="submit" class="btn btn-primary" name="edit">Simpan</button>
      </form>
    </div>
  </div>
        <!-- Portfolio-->
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
