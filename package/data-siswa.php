<?php
include("../includes/db.php");

// Cek apakah ada input pencarian
$searchTerm = isset($_GET['search']) ? $_GET['search'] : '';

// Siapkan query SQL
$sql = "SELECT * FROM siswa";
if ($searchTerm) {
    $sql .= " WHERE nama LIKE '%" . $conn->real_escape_string($searchTerm) . "%'";
}
$sql .= " ORDER BY nama ASC"; // Pindahkan ORDER BY ke sini

$result = $conn->query($sql);

if ($conn->error) {
    echo "Error: " . $conn->error;
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SMK Taman Siswa Jetis Yogyakarta</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div class="container">
        <img class="gambar" src="https://www.smastamansiswa.sch.id/wp-content/uploads/2020/05/cropped-logo-hd-NEW-1.png">
        <h1>RPL SMK TamanSiswa Jetis Yogyakarta</h1>
        <div class="search-container">
            <form method="GET" action="">
                <input type="text" id="searchInput" name="search" value="<?php echo htmlspecialchars($searchTerm); ?>" placeholder="Cari dengan nama..">
                <button type="submit">Cari</button>
            </form>
        </div>
        <table id="siswaTable">
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Kelas</th>
                <th>Jenis Kelamin</th>
                <th>Jurusan</th>
                <th>IDkelas</th>
                <th>Opsi</th>
            </tr>
            <?php while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['alamat']; ?></td>
                <td><?php echo $row['kelas']; ?></td>
                <td><?php echo $row['JKL']; ?></td>
                <td><?php echo $row['jurusan']; ?></td>
                <td><?php echo $row['IDkelas']; ?></td>
                <td>
                    <a href="../data_siswa/update.php?id=<?php echo $row['IDsiswa']; ?>">Edit</a>
                    <a href="../data_siswa/delete.php?id=<?php echo $row['IDsiswa']; ?>">Hapus</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
        <div id="noResults" class="no-results" style="<?php echo ($result->num_rows > 0) ? 'display:none;' : ''; ?>">Data tidak ditemukan</div>
        <a href="../data_siswa/create.php">Buat Data Baru</a>
        <a class="balik" href="../index.php">Kembali Ke Beranda</a>
    </div>
</body>
</html>