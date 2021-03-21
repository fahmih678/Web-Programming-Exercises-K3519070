<html>
    <head>Headings</head>
    <body>
        <?php 

        $baris = 4;
        $colom = 5;
        $urutan = 1;
        echo "<table border='1'>";
        for ($i=0 ;$i<$baris;$i++){
            echo "<tr>";
            for($j=0;$j<$colom;$j++){
                if ($urutan%2==0){
                    $color ="color:red; background-color:white";
                } else {
                    $color ="background-color:red; color:white";
                }
                echo "<td style='$color'>$urutan</td>";
                $urutan++;
            }
            echo "</tr>"; 
        }
        echo "</table>"

        ?>
    </body>
</html>