<?php
$conn = mysqli_connect('localhost', 'root', '', 'uas_1904030067');

//pemanggilan tabel
function query($query)
{
  global $conn;

  //mengambil seluruh data pada tabel
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  //pemanggilan elemen data dengan rapi
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function tambah($data)
{
  global $conn;

  $Nama = htmlspecialchars($data['nama']);
  $Alamat = htmlspecialchars($data['alamat']);
  $Jenis_kelamin = htmlspecialchars($data['jenis_kelamin']);
  $Agama = htmlspecialchars($data['agama']);
  $Foto = htmlspecialchars($data['foto']);

  $query = "INSERT INTO calon_mhs 
  VALUES
  (null,'$nama','$alamat','$jenis_kelamin','$agama','$foto');";
  mysqli_query($conn, $query);

  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function hapus($idAnggota)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM tb_anggota WHERE idAnggota=$idAnggota") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function hapusbuku($Id)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM tb_buku WHERE Id=$Id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}


function edit($data)
{
  global $conn;

  $idAnggota = $data['idAnggota'];
  $Nama = htmlspecialchars($data['nama']);
  $Alamat = htmlspecialchars($data['alamat']);
  $Jenis_kelamin = htmlspecialchars($data['jenis_kelamin']);
  $Agama = htmlspecialchars($data['agama']);
  $Foto = htmlspecialchars($data['foto']);

  $query = "UPDATE tb_anggota SET
  Nama ='$nama',
  Alamat ='$alamat',
  Jenis_kelamin ='$jenis_kelamin',
  Agama ='$agama',
  Foto ='$foto'
  WHERE idAnggota = $idAnggota;";

  mysqli_query($conn, $query);

  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function editbuku($data)
{
  global $conn;

  $id = $data['Id'];
  $Judul_buku = htmlspecialchars($data['Judul_buku']);
  $Penulis = htmlspecialchars($data['Penulis']);
  $Pernebit = htmlspecialchars($data['Penerbit']);
  $Foto = htmlspecialchars($data['Foto']);
  $Tahun = htmlspecialchars($data['Tahun']);

  $query = "UPDATE tb_buku SET
  Judul_buku ='$Judul_Buku',
  Penulis ='$Penulis',
  Penerbit ='$Penerbit',
  Foto ='$Foto_Buku',
  Tahun ='$Tahun',
  WHERE Id = $Id;";

  mysqli_query($conn, $query);

  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}
function cari($keyword)
{
  global $conn;

  $query = "SELECT * FROM tb_anggota WHERE nama LIKE'%$keyword%'";
  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function caridosen($keyword)
{
  global $conn;

  $query = "SELECT * FROM tb_buku WHERE nama LIKE'%$keyword%'";
  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}
