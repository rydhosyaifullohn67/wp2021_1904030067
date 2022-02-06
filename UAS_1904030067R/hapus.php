<?php
require "function.php";

// agar tidak bisa masuk secara pengetikan manual pada URL
if (!isset($_GET['idAnggota'])) {
  header("location: index.php");
  exit;
}

$idAnggota = $_GET['idAnggota'];
if (hapus($idAnggota) > 0) {
  echo
  "<script>
    alert('data berhasil dihapus');
    document.location.href = 'index.php';
    </script>";
} else {
  echo
  "<script>
    alert('maaf data gagal dihapus');
    </script>";
}
