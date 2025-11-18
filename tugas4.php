<?php
// Beginer
 echo "<h3> Beginer</h3>";
 $hari = array ("Senin", "selasa", "rabu", "kamis","Jumat","sabtu","minggu");
 var_dump ($hari);
echo "<br>";
echo "<br>";
echo "<br>";

?>


<?php
echo "<h3> Intermediate</h3>";
$akhirTahun= " (Libur Akhir Tahun)";

$bulan = [
    "Januari",
    "Februari",
    "Maret",
    "April",
    "Mei",
    "Juni",
    "Juli",
    "Agustus",
    "September",
    "Oktober",
    "November"
];

$bulan12 = "Desember" . $akhirTahun;

$bulan[] = $bulan12;

foreach ($bulan as $b) {
    echo $b . "<br>";
}
echo "<br>";
echo "<br>";
echo "<br>";
?>


<!DOCTYPE html>
<html lang="en">
<head>
<style>
    div {
        width: 50px;
        height: 50px;
        background-color: salmon;
        text-align: center;
        line-height: 50px;
        margin: 3px;
        float: left;
    }
</style>
</head>
<body>

<?php
echo "<h3> Expert</h3>";
$hari = array("Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu");

for($i = 0; $i < 7; $i++) { 
    echo "<div>" . $hari[$i] . "</div>";
}
?>

</body>
</html>
