<?php
require "function.php";

// agar tidak bisa masuk secara pengetikan manual pada URL
if (!isset($_GET['Id'])) {
  header("location: index.php");
  exit;
}

$Id = $_GET['Id'];
if (hapusbuku($Id) > 0) {
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
