<html>
    <head>Headings</head>
    <body>
        <?php 
            $i = 1;
            while ($i<=6){
                if ($i%2 == 0){
                    $color = "red";
                } else{
                    $color = "";
                }
                echo "<h$i style='color:$color'>Heading $i</h$i> ";
                $i++;
            }
        ?>
    </body>
</html>