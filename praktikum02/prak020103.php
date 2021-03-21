<html>
    <head>Headings</head>
    <body>
        <?php 
            for($i=1; $i<=6;$i++){
                if ($i%2 == 0){
                    $color = "red";
                } else{
                    $color = "";
                }
                echo "<h$i style='color:$color'>Heading $i</h$i> ";
            }
        ?>
    </body>
</html>