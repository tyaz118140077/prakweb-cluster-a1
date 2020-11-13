<html>
    <?php
        $array = ["lanirne", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat"];
        
        for ($i=0; $i<count($array); $i++){
            $target = $i;
            for ($j=$i+1; $j<count($array); $j++){
                $shorter = strlen($array[$i]);

                if (strlen($array[$i])>strlen($array[$j])){
                    $shorter = strlen($array[$j]);
                }
                for ($k=0; $k<$shorter; $k++){
                    if ($array[$j][$k]<$array[$target][$k]){
                        $target = $j;
                        break;
                    }else if ($array[$j][$k]>$array[$target][$k]){
                        break;
                    }
                }  
            }
            $temp = $array[$i];
            $array[$i] = $array[$target];
            $array[$target] = $temp;
        }

        echo "Hasil pengurutan : " . "<br>";

        foreach ($array as $a){
            echo $a . " ";
        }
    ?>
</html>