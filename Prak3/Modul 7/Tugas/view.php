<?php
    $koneksi = mysqli_connect("localhost","root","");
    mysqli_select_db($koneksi, "pemweb_modul7");
    $hasil = mysqli_query($koneksi, "select * from mahasiswa");
    $jumlah = mysqli_num_rows ($hasil);
    echo "<center>Daftar Mahasiswa</center>";
    echo "Jumlah Data : $jumlah <br>";
    $no=1;

    while ($baris = mysqli_fetch_array($hasil)){
        echo "<br>";
        echo "Data $no <br>";
        echo "NRP: $baris[0] <br>";
        echo "Nama: $baris[1] <br>";
        echo "Alamat: $baris[2] <br>";
        echo "ID Jurusan: $baris[3] <br>";
        $no++;
    }
?>