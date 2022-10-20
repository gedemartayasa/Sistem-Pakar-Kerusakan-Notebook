<?php
$dbhost = 'localhost'; 
$dbuser = 'root';
$dbpass = '';
$dbname = 'db_sispak_notebook';

$connect = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die('koneksi gagal');
?>