<?php 
//ini sebuah komentar

/* ini buat komentar yg banyak blablablablabla
blablablablalbala
*/

# ini juga komentar

// echo "Hello World <br>";
// echo 'Hello World <br>';
// print_r("Insi");
// var_dump("<br> STT Nurul Fikri");
// var_dump(123);


//Membuat variabel user
$nama = "Insi";
$umur = 18;
$berat = 49.2;
$mahasiswa = true;

// echo "Halo, nama saya $nama";
// echo "<br> Umurku $umur tahun";
// echo "<br> dan memiliki berat badan $berat kg";


//Membuat variabel sistem
// echo "Dokumen root " . $_SERVER['DOCUMENT_ROOT'];
// echo "<br>";
// echo "Nama file " . $_SERVER['PHP_SELF'];


//Membuat variabel konstanta
define('PHI', 3.14);
$jari = 8;
$luas = PHI * $jari * $jari;
$keliling = 2 * PHI * $jari;

// echo "<br> Luas lingkaran dengan jari-jari $jari = $luas cm";
// echo "<br> Keliling lingkaran dengan jari-jari $jari = $keliling cm";


//Membuat array
$programs = ["Php", "Javascript", "HTML", "CSS"];
// echo $programs[3];
echo "jumlah data sebanyak " . count($programs);


?>