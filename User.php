<?php
require 'validasi.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="asset/css/user-admin.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login User</title>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <div class="icon">
                <i class="fas fa-home">
                </i>
            </div>
            <a href="index.php" class="button">HOME</a>
            <a href="Fasilitas.php" class="button">FASILITAS</a>
        </div>
        <div class="konten">
            <div class="title">
                <h1>LOGIN</h1>
            </div>
            <div class="kos">
                <h1>Kos iCa</h1>
            </div>
        </div>
    </div>
    <div class="login-container">
        <div class="login-box-next">
            <img src="profile.svg" alt="Login Image" class="login-image">
            <h1>USER</h1>
            <form id="formuser">
                <div class="input-group">
                    <label for="username">Username:</label>
                    <input type="text" id="usernameuser" name="username" required>
                </div>
                <div class="input-group">
                    <label for="password">Password:</label>
                    <input type="password" id="passworduser" name="password" required>
                </div>
                <button type="submit" class="admin-button">Masuk</button>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#formuser').on('submit', function(e) {
            e.preventDefault(); // Mencegah submit form secara default

            var username = $('#usernameuser').val();
            var password = $('#passworduser').val();

            $.ajax({
                url: 'validasi.php', // Proses login di sesion.php
                type: 'POST',
                data: {
                    username: username,
                    password: password
                },
                success: function(response) {
                    // if (response === 'admin') {
                    //     window.location.href = 'dashboard.php'; // Redirect ke dashboard admin
                    // } 
                    // else 
                    if (response === 'user') {
                        window.location.href = 'dashboardUSER.php'; // Redirect ke dashboard user
                    } else if (response === 'error') {
                        alert('Username atau password salah, silakan coba lagi!');
                    } else {
                        alert('Terjadi kesalahan. Silakan coba lagi.');
                    }
                },
                error: function(xhr, status, error) {
                    alert('Terjadi kesalahan dalam koneksi. Silakan coba lagi.');
                }
            });
        });
    });
</script>
</body>
</html>