<?php
// Konfigurasi koneksi
$host = "localhost"; // Host
$user = "root"; // Username, default XAMPP adalah 'root'
$password = ""; // Password, default XAMPP tidak ada password
$database = "db_test"; // Nama database yang telah dibuat

// Membuat koneksi
$koneksi = mysqli_connect($host, $user, $password, $database);

// Memeriksa koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
echo "Koneksi berhasil!";
?>