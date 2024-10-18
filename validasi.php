<?php
session_start();
require 'koneksidb.php'; // Koneksi database

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk memeriksa username dan password dari database
    $query = "SELECT * FROM login WHERE username = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();

        // Memeriksa kecocokan password tanpa hashing
        if ($password == $user['password']) {
            // Set session berdasarkan user yang login
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role']; // Role diambil dari database (admin/user)

            // Cek role user untuk merespons ke AJAX
            if ($user['role'] == 'admin') {
                echo 'admin'; // Kirim respons ke AJAX untuk redirect admin
            } else if ($user['role'] == 'user') {
                echo 'user'; // Kirim respons ke AJAX untuk redirect user
            }
        } else {
            // Password salah
            echo 'error';
        }
    } else {
        // Jika username tidak ditemukan
        echo 'error';
    }
}
?>