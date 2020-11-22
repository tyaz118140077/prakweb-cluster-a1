<html>
    <body>
        <form action = "" method = "POST">
            <label>Masukkan Nama</label>
            <br>
            <input type="text" name="nama" class=form>
            <br>
            <label>Masukkan Warna</label>
            <br>
            <input type="text" name="warna" class=form>
            <br>
            <input type="submit" value="Submit" name="submit"></input>
            <br><br>
        </form>
    </body>

    <div>
    <?php
        if(isset($_POST['submit'])){
            $nama = $_POST['nama'];
            $warna = $_POST['warna'];
        }

        if ($warna != NULL){
            echo "<div style = color:". $warna . ";>". $nama . "</div>";
        }else{
            echo "<div style= color:red;>". $nama . "</div>";
        }
        
    ?>
    </div>
    
</html>