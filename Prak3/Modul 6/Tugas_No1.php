<html>
    <body>
        <form action = "" method = "POST">
            <label>Masukkan Bilangan</label>
            <br>
            <input type="number" name="bil" class=form>
            <br>
            <input type="submit" value="Hitung" name="hitung"></input>
            <br><br>
        </form>
    </body>

    <div>
    <?php
        if(isset($_POST['hitung'])){
            $bil = $_POST['bil'];
        }

        echo "Berikut merupakan hasilnya: ";

        $sum=1;
        for ($i=$bil; $i>0; $i--) {
            $sum*=$i;
        } 

        echo $sum;
    ?>
    </div>
    
</html>