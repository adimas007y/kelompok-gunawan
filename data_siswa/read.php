<?php
include "../includes/db.php";

$id = $_GET['id'];
$sql = "SELECT * FROM siswa WHERE IDsiswa=$id";
$result = $conn->query($sql);
$dates = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Read Data</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <h1>Detail Siswa</h1>
    <p>Nama: <?php echo $dates['nama']; ?></p>
    <p>Alamat: <?php echo $dates['alamat']; ?></p>
    <p>Kelas: <?php echo $dates['kelas']; ?></p>
    <p>Jenis Kelamin: <?php echo $dates['JKL']; ?></p>
    <p>Jurusan: <?php echo $dates['jurusan']; ?></p>
    <p>ID Kelas: <?php echo $dates['IDkelas']; ?></p>
    <a href="../index.php">Kembali ke menu utama</a>
</body>
</html>
