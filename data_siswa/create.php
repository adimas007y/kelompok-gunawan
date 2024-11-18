<?php
include "../includes/db.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $kelas = $_POST['kelas'];
    $JKL = $_POST['JKL'];
    $jurusan = $_POST['jurusan'];
    $IDkelas = $_POST['IDkelas'];

    $sql = "INSERT INTO siswa (nama, alamat, kelas, JKL, jurusan, IDkelas) 
            VALUES ('$nama', '$alamat', '$kelas', '$JKL', '$jurusan', '$IDkelas')";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: ../package/data-siswa.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Masukkan Data Baru</title>
    <style>
                /* Import Google Fonts */
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');

        /* Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            padding: 20px;
            line-height: 1.6;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 2.5em;
            color: #4CAF50;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
            font-weight: 500;
        }

        input[type="text"],
        button[type="submit"] {
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1em;
        }

        input[type="text"]:focus,
        button[type="submit"]:hover {
            border-color: #4CAF50;
        }

        button[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-weight: 500;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 25px;
            background-color: #4CAF50;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s ease;
            text-align: center;
            font-weight: 500;
        }

        a:hover {
            background-color: #45a049;
        }

    </style>
</head>
<body>
    <div class="container">
        <h1>Buat Data Baru</h1>
        <form method="POST">
            <label>Nama:</label><input type="text" name="nama" required><br>
            <label>Alamat:</label><input type="text" name="alamat" required><br>
            <label>Kelas:</label><input type="text" name="kelas" required><br>
            <label>Jenis Kelamin:</label><input type="text" name="JKL" required><br>
            <label>Jurusan:</label><input type="text" name="jurusan" required><br>
            <label>ID Kelas:</label><input type="text" name="IDkelas" required><br>
            <button type="submit">Buat</button>
        </form>
        <a href="../package/data-siswa.php">Kembali Ke Halaman Utama</a>
    </div>
</body>
</html>
