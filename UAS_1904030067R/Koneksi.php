<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'uas_1904030067';

$conn = mysqli_connect($host, $user, $pass, $db);

$result = mysqli_query($conn, 'SELECT * FROM tb_anggota');


?> 