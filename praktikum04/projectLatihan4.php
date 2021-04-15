<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><center>Data Mahasiswa</center></h1>
    
    <table border="1">
        <tr>
            <td>No</td>
            <td>NIM</td>
            <td>Nama Mahasiswa</td>
            <td>Tanggal Lahir</td>
            <td>Tempat Lahir</td>
            <td>Usia (thn)</td>
        </tr>
        
        <?php 
            include('usia.php');

            $namaFile = "datamhs.dat";
            $myfile = fopen($namaFile, "r") or die("Tidak bisa buka file!");
            $no = 1;
            
            while(!feof($myfile)) {
                $data = fgets($myfile);
                $break = explode("|", $data);
                $alamat = $break[3];
                $tglLahir = $break[2];
                $nama = $break[1];
                $nim = $break[0];
                $usia = hitungUsia($tglLahir);
                echo "<tr>";
                echo "<td> ". $no ."</td>";
                echo "<td>". $nim ."</td>";
                echo "<td>". $nama ."</td>";
                echo "<td>". $tglLahir ."</td>";
                echo "<td>". $alamat ."</td>";
                echo "<td>". $usia ."</td>";
                echo "</tr>";
                $no ++;
            }
            
            fclose($myfile);
        ?>
        
        
    </table>
    <p>Jumlah Data: <?php echo $no-1 ?></p>
</body>
</html>