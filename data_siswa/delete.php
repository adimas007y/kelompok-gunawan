<?php
include "../includes/db.php";

$id = $_GET['id'];

$sql = "DELETE FROM siswa WHERE IDsiswa=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: ../package/data-siswa.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
