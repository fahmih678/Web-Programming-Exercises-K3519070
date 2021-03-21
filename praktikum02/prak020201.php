<html>
    <head>Headings</head>
    <body>
        <?php 
        
        $baris = 4;
        $colom = 5;
        echo "<table border='1'>";
        for ($i=0 ;$i<$baris;$i++){
            echo "<tr>";
            for($j=0;$j<$colom;$j++){

                echo "<td>Baris Ke ". ($i+1) .", Kolom ke ". ($j+1) ."</td>";
            }
            echo "</tr>";
        }
        echo "</table>"

        ?>
    </body>
</html>