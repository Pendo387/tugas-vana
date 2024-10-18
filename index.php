<?php
// Koneksi database
include 'koneksi.php';

// Ambil data pengguna
$query = "SELECT * FROM pengguna";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Pengguna</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Manajemen Pengguna</h1>
    <table>
        <thead>
            <tr>
                <th>Nomor Pengguna</th>
                <th>Nomor Kamar</th>
                <th>Jumlah Tagihan</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody id="pengguna-data">
            <?php while($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['id_pengguna']; ?></td>
                <td><?php echo $row['nomor_kamar']; ?></td>
                <td><?php echo $row['jumlah_tagihan']; ?></td>
                <td><?php echo $row['status']; ?></td>
                <td>
                    <button class="action-btn" onclick="editPengguna(<?php echo $row['id_pengguna']; ?>)">✏️</button>
                    <button class="action-btn" onclick="hapusPengguna(<?php echo $row['id_pengguna']; ?>)">🗑️</button>
                    <button class="action-btn" onclick="lihatDetail(<?php echo $row['id_pengguna']; ?>)">👁️</button>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

    <button class="add-btn" onclick="tambahPengguna()">➕ Tambah Pengguna</button>

    <!-- Modal Tambah Pengguna -->
    <div id="tambahModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="tutupModal()">&times;</span>
            <h2>Tambah Pengguna</h2>
            <form id="form-tambah-pengguna">
                <input type="text" id="nomor_kamar" placeholder="Nomor Kamar" required>
                <input type="number" id="jumlah_tagihan" placeholder="Jumlah Tagihan" required>
                <input type="text" id="status" placeholder="Status (lunas/belum lunas)" required>
                <button type="submit">Tambah</button>
            </form>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>

<!-- coba coba -->
<?php
include 'koneksi.php';

$query_login = "SELECT id_login, username FROM login";
$result_login = mysqli_query($conn, $query_login);
?>
<!-- 
<form id="form-tambah-pengguna" action="tambah_pengguna.php" method="POST">
    <label for="login_id">Pilih ID Pengguna:</label>
    <select id="login_id" name="login_id" required>
        <option value="">Pilih ID Pengguna</option>
        <?php while($row_login = mysqli_fetch_assoc($result_login)) { ?>
            <option value="<?php echo $row_login['id_login']; ?>">
                <?php echo $row_login['id_login'] . " - " . $row_login['username']; ?>
            </option>
        <?php } ?>
    </select>
    <input type="text" id="nomor_kamar" name="nomor_kamar" placeholder="Nomor Kamar" required>
    <input type="number" id="jumlah_tagihan" name="jumlah_tagihan" placeholder="Jumlah Tagihan" required>
    <input type="text" id="status" name="status" placeholder="Status (lunas/belum lunas)" required>
    <button type="submit">Tambah</button>
</form> -->
