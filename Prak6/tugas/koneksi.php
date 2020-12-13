<?php
$host="localhost";
$username="root";
$password="";
$db="pemweb_modul12";

$kon = mysqli_connect($host,$username,'',$db);
if (!$kon){
    die("Koneksi gagal:".mysqli_connect_error());
}
?>