<?php 
 echo "<h3> Beginer</h3>";
$angka = range (1,20);
foreach ($angka as $nomor){
echo $nomor . "<br>";
}
echo "<br>";
echo "<br>";
echo "<br>";

 ?>

<?php
echo "<h3> Intermediate</h3>";
$siswa = [
    [1, "Saepul", "Jl. Melati No.12", "081234567890", "Laki-laki"],
    [2, "Rahman", "Jl. Mawar No.25", "082233445566", "Laki-laki"],
    [3, "Citra ", "Jl. Kenanga No.7", "083112233445", "Perempuan"]
];

foreach ($siswa as $data) {
    echo "NIS : " . $data[0] . "<br>";
    echo "Nama Lengkap : " . $data[ 1] . "<br>";
    echo "Alamat Rumah : " . $data[2] . "<br>";
    echo "No Telp/WA : " . $data[3] . "<br>";
    echo "Jenis Kelamin : " . $data[4] . "<br>";
    echo "<hr>";
}
echo "<br>";
echo "<br>";
echo "<br>";
?>

<?php
echo "<h3> expert</h3>";

$siswa = [
    [101, "saepul", "Jl. Melati No.12", "081234567890", "Laki-laki"],
    [102, "Rahman", "Jl. Mawar No.25", "082233445566", "Laki-laki"],
    [103, "Citra ", "Jl. Kenanga No.7", "083112233445", "Perempuan"]
];

foreach ($siswa as $data) {
    echo "NIS : " . $data[0] . "<br>";
    echo "Nama Lengkap : " . $data[1] . "<br>";
    echo "Alamat Rumah : " . $data[2] . "<br>";
    echo "No Telp/WA : " . $data[3] . "<br>";
    echo "Jenis Kelamin : " . $data[4] . "<br>";
    echo "<hr>";
}

?>