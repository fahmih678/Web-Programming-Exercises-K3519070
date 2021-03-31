<?php 

function buatBintangLagi($n){
    echo "<pre>";
    for($i=0; $i<$n+1; $i++){
        for($j=$n; $j>$i; $j--){
            echo "*";
        }
        echo "\n";
    }
    echo "</pre>";
}

buatBintangLagi(11)

?>