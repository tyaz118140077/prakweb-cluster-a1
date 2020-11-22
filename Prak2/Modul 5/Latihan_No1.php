<html>
    <body>
        <form action = "" method = "POST">
            <label>Bilangan 1</label>
            <br>
            <input type="number" name="bil1" class=form>
            <br>
            <label>Bilangan 2</label>
            <br>
            <input type="number" name="bil2" class=form>
            <br>
            <input type="submit" value="Hitung" name="data"></input>
            <br><br>
        </form>
    </body>

    <div>
    <?php
        if(isset($_POST['data'])){
            $bil1 = $_POST['bil1'];
            $bil2 = $_POST['bil2'];
        }

        $operator = ["+", "-", "*", "/", "%"];
        
        echo "bilangan 1 = " . $bil1 . "<br>";
        echo "bilangan 2 = " . $bil2 . "<br><br>";
        echo "Berikut merupakan hasil dari setiap operasi";

        foreach ($operator as $op) {
            echo "<br><br>";
            echo "PENJUMLAHAN" . "<br>";
            echo "Operator : " . $op . "<br>";
            echo "Hasil : ";
            if ($op == '+'){
                echo $bil1 + $bil2;
            }else if ($op == '-'){
                echo $bil1 - $bil2;
            }else if ($op == '*'){
                echo $bil1 * $bil2;
            }else if ($op == '/'){
                echo $bil1 / $bil2;
            }else{
                echo $bil1 % $bil2;
            }
        } 
    ?>
    </div>
    
</html>