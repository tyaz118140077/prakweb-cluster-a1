<!DOCTYPE html>
<html>
    <body>
        <?php
            $nrp = $_POST["nrp"];
            $nama = $_POST["nama"];
            $alamat = $_POST["alamat"];
            $id_jur = $_POST["id_jur"];

            $koneksi = mysqli_connect("localhost","root","");
            mysqli_select_db($koneksi, "pemweb_modul7");

            $query = "insert into mahasiswa values ('$nrp','$nama','$alamat','$id_jur')";
            $hasil = mysqli_query($koneksi,$query);

            echo "Simpan Data Berhasil";
        ?>
    </body>
</html>