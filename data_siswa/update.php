<?php
include "../includes/db.php";

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $kelas = $_POST['kelas'];
    $JKL = $_POST['JKL'];
    $jurusan = $_POST['jurusan'];
    $IDkelas = $_POST['IDkelas'];

    $sql = "UPDATE siswa 
            SET nama='$nama', alamat='$alamat', kelas='$kelas', JKL='$JKL', jurusan='$jurusan', IDkelas='$IDkelas' 
            WHERE IDsiswa=$id";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: ../package/data-siswa.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    $sql = "SELECT * FROM siswa WHERE IDsiswa=$id";
    $result = $conn->query($sql);
    $dates = $result->fetch_assoc();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Data</title>
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

        @media screen and (max-width: 768px) {
            .container {
                padding: 15px;
            }

            h1 {
                font-size: 2em;
            }

            input[type="text"],
            button[type="submit"] {
                font-size: 0.9em;
            }

            a {
                font-size: 0.9em;
                padding: 10px 20px;
            }
        }

    </style>
</head>
<body>
    <h1>Update Data</h1>
    <form method="POST">
        <label>Nama:</label><input type="text" name="nama" value="<?php echo $dates['nama']; ?>" required><br>
        <label>Alamat:</label><input type="text" name="alamat" value="<?php echo $dates['alamat']; ?>" required><br>
        <label>Kelas:</label><input type="text" name="kelas" value="<?php echo $dates['kelas']; ?>" required><br>
        <label>Jenis Kelamin:</label><input type="text" name="JKL" value="<?php echo $dates['JKL']; ?>" required><br>
        <label>Jurusan:</label><input type="text" name="jurusan" value="<?php echo $dates['jurusan']; ?>" required><br>
        <label>ID Kelas:</label><input type="text" name="IDkelas" value="<?php echo $dates['IDkelas']; ?>" required><br>
        <button type="submit">Perbarui</button>
    </form>
    <a href="../package/data-siswa.php">Kembali ke menu utama</a>
</body>
</html>
