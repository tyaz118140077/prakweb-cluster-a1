<!DOCTYPE html>
<html>
    <body>
        <?php
            $nama = $_POST["nama"];
        
            $koneksi = mysqli_connect("localhost","root","");
            mysqli_select_db($koneksi, "pemweb_modul7");

            $query = "select * from mahasiswa inner join jurusan on mahasiswa.id_jur = jurusan.id_jur where mahasiswa.nama = '$nama';";
            $hasil = mysqli_query($koneksi,$query);

            $jumlah = mysqli_num_rows($hasil);

            if ($jumlah > 0){
                echo "Jumlah Data : $jumlah <br>";
                $no=1;

                while ($baris = mysqli_fetch_array($hasil)){
                    echo "<br>";
                    echo "Data $no <br>";
                    echo "NRP: $baris[0] <br>";
                    echo "Nama: $baris[1] <br>";
                    echo "Jurusan: $baris[2] <br>";
                    $no++;
                }
            }else{
                echo "<br>";
                echo "Data tidak ditemukan";
            }
            
        ?>
    </body>
</html>