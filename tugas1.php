<?php
//Beginer
echo "<h3> Beginer</h3>";
$nama_lengkap= "Nashwa Al Fariz";

$Alamat_Rumah= "Kp Bumi Sari Indah 1";
$jenis_kelamin= "Laki Laki";

echo "Nama Lengkap: $nama_lengkap";
echo "<br>";
echo "Alamat: $Alamat_Rumah";
echo "<br>";
echo "jenis Kelamin: $jenis_kelamin";
echo "<br>";
echo "<br>";
echo "<br>";

//Intermediate
echo "<h3> intermediate</h3>";

$y=1;
$x=6;

echo "Umur Saya:".( $y + $x);

//Expert
echo "<h3> Expert</h3>";
$q= 30;
var_dump ($q<30 && $q %2==1);
echo "<br>";
var_dump ($q>30 || $q %2==2);

?>