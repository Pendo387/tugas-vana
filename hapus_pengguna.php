<?php
include 'koneksi.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    $query = "DELETE FROM pengguna WHERE id_pengguna = $id";
    if (mysqli_query($conn, $query)) {
        echo "Pengguna berhasil dihapus!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
