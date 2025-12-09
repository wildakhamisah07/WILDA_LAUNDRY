<?php

$host_koneksi = "localhost";
$username_koneksi = "root";
$password_koneksi = "";
$database_name = "web_wilda_laundry";

$config = mysqli_connect($host_koneksi, $username_koneksi, $password_koneksi, $database_name);
if (!$config) echo "Koneksi Gagal";
