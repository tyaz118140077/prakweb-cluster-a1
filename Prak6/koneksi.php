<?php
$host="localhost";
$user="root";
$password="";
$db="belajar_ajax";

$kon = mysqli_connect($host,$username,$password,$db);
id (!$kon){
    die ("Koneksi gagal:".mysqli_connect_error());
}
?>