<?php
// Koneksi database
include 'koneksi.php';

// Ambil data tagihan
$query = "SELECT * FROM tagihan";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Tagihan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Manajemen Tagihan</h1>
    <table>
        <thead>
            <tr>
                <th>Nomor Tagihan</th>
                <th>ID Pengguna</th>
                <th>Jumlah Tagihan</th>
                <th>Status Pembayaran</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <input type="file">
        <tbody>
            <?php while($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['tagihan_id']; ?></td>
                <td><?php echo $row['pengguna_id']; ?></td>
                <td><?php echo $row['jumlah_tagihan']; ?></td>
                <td><?php echo $row['status_pembayaran']; ?></td>
                <td>
                    <button class="action-btn" onclick="editTagihan(<?php echo $row['tagihan_id']; ?>)">✏️</button>
                    <button class="action-btn" onclick="hapusTagihan(<?php echo $row['tagihan_id']; ?>)">🗑️</button>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <script src="script.js"></script>
</body>
</html>
