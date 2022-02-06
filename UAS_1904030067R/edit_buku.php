<?php

require 'function.php';

$Id = $_GET['Id'];
$camaba = query("SELECT * FROM tb_buku WHERE Id = $Id");
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
                        <li class="nav-item"><a class="nav-link" href="index.php">Anggota</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Daftar Buku</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Tabel Buku</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
       
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container px-4 px-lg-5">
               <h3><i class="fas fa-users"></i> Edit Buku</h3>
      <hr>

      <form method="POST" action="">

        <input type="hidden" class="form-control" value="<?= $camaba['Id'] ?>" name="Id">

        <div class="form-group">
          <label for="Nama_Buku">Nama : </label>
          <input type="text" class="form-control" id="Nama_Buku" value="<?= $camaba['Nama_Buku'] ?>" placeholder="nama lengkap" name="Nama_Buku" autofocus required autocomplete="off">
        </div>
        <div class="form-group">
          <label for="alamat">Penulis : </label>
          <input type="text" class="form-control" id="Penulis" value="<?= $camaba['Penulis'] ?>" placeholder="penulis" name="Penulis" required autocomplete="off">
        </div>
        <div class="form-group">
          <label for="jenkel">Penerbit : </label>
          <input type="text" class="form-control" id="Penerbit" value="<?= $camaba['Penerbit'] ?>" placeholder="penerbit" name="Penerbit" required autocomplete="off">
        </div>
        <div class="form-group">
          <label for="agama">Foto Buku : </label>
          <input type="text" class="form-control" id="Agama" value="<?= $camaba['Foto_Buku'] ?>" placeholder="agama anda" name="Agama" required autocomplete="off">
        </div>
        <div class="form-group">
          <label for="foto">Tahun : </label>
          <input type="text" class="form-control" id="Tahun" value="<?= $camaba['Tahun'] ?>" placeholder="Tahun" name="Tahun" required autocomplete="off">
        </div>
        <button type="submit" class="btn btn-primary" name="edit">Simpan</button>
      </form>
    </div>
  </div>



          
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
