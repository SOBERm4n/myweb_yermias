<?php
$host = "localhost";	//nama host
$user = "root";	//username phpMyAdmin
$name = "database";	//nama database

$koneksi = mysql_connect($host, $user ) or die("Koneksi ke database gagal!");
mysql_select_db($name, $koneksi) or die("Tidak ada database yang dipilih!");
?>