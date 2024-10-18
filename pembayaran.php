<?php
// Koneksi database
include 'koneksi.php';

// Ambil data pembayaran
$query = "SELECT * FROM pembayaran";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Pembayaran</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Manajemen Pembayaran</h1>
    <table>
        <thead>
            <tr>
                <th>ID Pembayaran</th>
                <th>ID Tagihan</th>
                <th>Tanggal Pembayaran</th>
                <th>Jumlah Pembayaran</th>
                <th>Metode Pembayaran</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['pembayaran_id']; ?></td>
                <td><?php echo $row['tagihan_id']; ?></td>
                <td><?php echo $row['tanggal_pembayaran']; ?></td>
                <td><?php echo $row['jumlah_pembayaran']; ?></td>
                <td><?php echo $row['metode_pembayaran']; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <script src="script.js"></script>
</body>
</html>
