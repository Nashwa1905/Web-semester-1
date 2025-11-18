<?php
$nama = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama = $_POST["nama"];
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Beginner</title>
</head>
<body>
    <h2>Form Input Nama</h2>

    <form method="POST">
        <input type="text" name="nama" placeholder="Masukkan Nama">
        <button type="submit">Kirim</button>
    </form>

    <?php if ($nama != ""): ?>
        <h3>Nama Anda: <?= $nama ?></h3>
    <?php endif; ?>
</body>
</html>