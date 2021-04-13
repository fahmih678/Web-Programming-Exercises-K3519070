<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <td><b>NAMA TABUNG</b></td>
            <td><b>DIAMETER</b></td>
            <td><b>TINGGI</b></td>
            <td><b>LUAS</b></td>
        </tr>
        <?php 
            $namaFile = "datatabung.dat";
            $openFile = fopen($namaFile, "r") or die("Tidak bisa buka file!");
            
            while(!feof($openFile)) {
                $data = fgets($openFile);
                $break = explode(",", $data);
                
                $tinggi = $break[2];
                $diameter = $break[1];
                $namaTabung = $break[0];
                $luas = "hitungluas.php?n=" . $namaTabung . "&d=" . $diameter. "&t=" . $tinggi;

                echo "<tr>";
                echo "<td>". $namaTabung ."</td>";
                echo "<td>". $diameter ."</td>";
                echo "<td>". $tinggi ."</td>";
                echo "<td> <a href='". $luas ."'>view</a> </td>";
    
                echo "</tr>";
            }
        ?>
        <tr></tr>
    </table>
</body>
</html>