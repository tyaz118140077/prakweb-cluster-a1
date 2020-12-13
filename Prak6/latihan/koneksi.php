<?php
$host="localhost";
$username="root";
$password="";
$db="belajar_ajax";

$kon = mysqli_connect($host,$username,'',$db);
if (!$kon){
    die("Koneksi gagal:".mysqli_connect_error());
}
?>