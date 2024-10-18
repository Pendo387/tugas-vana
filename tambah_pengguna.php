<?php
include 'koneksi.php';

if (isset($_POST['nomor_kamar']) && isset($_POST['jumlah_tagihan']) && isset($_POST['status'])) {
    $nomor_kamar = $_POST['nomor_kamar'];
    $jumlah_tagihan = $_POST['jumlah_tagihan'];
    $status = $_POST['status'];

    $query = "INSERT INTO pengguna (nomor_kamar, jumlah_tagihan, status) VALUES ('$nomor_kamar', '$jumlah_tagihan', '$status')";
    if (mysqli_query($conn, $query)) {
        echo "Pengguna berhasil ditambahkan!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
