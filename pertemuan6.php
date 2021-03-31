<?php 

echo strlen("Hello world");
echo ("<br>");
echo str_word_count("Hello world, i'am here!!!");
echo ("<br>");
echo strrev("Kasur rusak");
echo ("<br>");
echo strpos("Hello world", "world");
echo ("<br>");
echo str_replace("world", "dolly", "hello world");
echo ("<br>");

$str = "Hello World. It's a beautiful day";
// print_r(",", $str);
$hasil = explode(" ", $str);
echo $hasil[0];

echo "<br>";
$hari = array ('Monday' => 'Senin',
			'Thuesday' =>'Selasa',
			'Wednesday' => 'Rabu',
			'Thursday' => 'Kamis',
			'Friday' => 'Jumat',
			'Saturday' => 'Sabtu',
			'Sunday' => 'Minggu'
		);
echo "hari ini " .date("y/m/d l");
echo "<br>";
echo date('l');
echo "<br>";
echo $hari[date('l')];

?>