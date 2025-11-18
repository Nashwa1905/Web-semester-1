<?php
//Beginer
echo "<h3> Beginer</h3>";
$x= 10;
if($x=10){
    echo "Benar";
}  else 
 {
  echo "salah";
}
echo "<br>";
echo "<br>";
echo "<br>";
?>

<?php
//Intermediate
echo "<h3> Intermediate</h3>";
$x= 10;
if($x<20){
    echo "Benar";
}  else if ($x==20){
    echo "binggo";
} else {
  echo "salah";
}
echo "<br>";
echo "<br>";
echo "<br>";
?>
 

<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px;
        }
        td {
            width: 50px;
            height: 40px;
            text-align: center;
            border: 1px solid #000;
            font-family: Arial, sans-serif;
        }
        .silver {
            background-color: silver;
        }
    </style>
</head>
<body>
<p> Expert</p>
<table>
    <?php
    // expert
    for ($i = 0; $i <= 7; $i++) {     // Perintah Ke 1
        echo "<tr>";

        for ($j = 0; $j <= 7; $j++) {// Perintah Ke 2

            // // Perintah Ke 3, Jika angkanya GENAP → warna silver
            $class = ($j % 2 == 0) ? "silver" : "";

            echo "<td class='$class'>$i-$j</td>";
        }

        echo "</tr>";
    }
    ?>
</table>

</body>
</html>