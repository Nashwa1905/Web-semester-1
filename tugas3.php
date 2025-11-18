<?php 
//BEGINER
 echo "<h3> Beginer</h3>";
function hari_ini(){
    return "Saya Bahagia hari Ini";
}
echo hari_ini();
echo "<br>";
echo "<br>";
echo "<br>";

?>


<?php
//Intermediate
echo "<h3> Intermediate</h3>";
$nama="Nashwa Al fariz";
function bahagia(){
    return "Bahagia hari Ini";
}
echo  "Saya " .$nama." ". bahagia();
echo "<br>";
echo "<br>";
echo "<br>";
?>  


<?php
echo "<h3>Expert</h3>";

function hitung($umur) {
    $angka = str_split((string)$umur);

    $hasil = array_sum($angka);


    echo "Jumlah angka umur saya: " . $hasil;
}


hitung(16);
?>
