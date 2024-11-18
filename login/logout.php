<?php
require_once '../includes/db.php'; // Pastikan file ini ada dan berfungsi dengan baik
session_start(); // Memulai session

// Cek apakah pengguna sudah login
if (isset($_SESSION['is_login']) || isset($_COOKIE['_logged'])) {
    // Hapus session
    session_destroy(); // Menghancurkan session

    // Hapus cookie
    setcookie('_logged', '', time() - 3600, '/'); // Menghapus cookie dengan waktu kedaluwarsa di masa lalu

    // Redirect ke halaman utama
    header('Location: /'); // Ganti dengan URL yang sesuai
    exit; // Pastikan untuk keluar setelah pengalihan
} else {
    // Jika tidak ada session atau cookie, redirect ke halaman utama
    header('Location: /'); // Ganti dengan URL yang sesuai
    exit; // Pastikan untuk keluar setelah pengalihan
}
?>