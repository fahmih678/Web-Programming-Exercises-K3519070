<html>
    <head>Headings</head>
    <body>
        <?php 
            $i = 1;
            do {
                if ($i%2 == 0){
                    $color = "red";
                } else{
                    $color = "";
                }
                echo "<h$i style='color:$color'>Heading $i</h$i> ";
                $i++;
            } while ($i<=6)
        ?>
    </body>
</html>