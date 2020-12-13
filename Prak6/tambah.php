<?php
include "koneksi.php";

$nim=$_POST["nim"];
$nama=$_POST["nama"];
$prodi=$_POST["prodi"];

$sql="insert into mahasiswa (nim,nam,prodi) values('$nim','$nama','$prodi')";

$hasil=mysqli_query($kon,$sql);
?>