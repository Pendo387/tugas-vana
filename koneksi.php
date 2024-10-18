<?php
$host = 'localhost';     // Host database (biasanya localhost)
$user = 'root';          // Username database (sesuaikan dengan database Anda)
$password = '';          // Password database (sesuaikan dengan database Anda)
$dbname = 'koskosan'; // Nama database yang digunakan

// Membuat koneksi
$conn = new mysqli($host, $user, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
} else {
    // Jika koneksi berhasil, Anda bisa menjalankan query di sini atau di file lain yang menyertakan database.php
    // echo "Koneksi berhasil";
}
?>