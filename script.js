// Buka modal untuk tambah pengguna
function tambahPengguna() {
    document.getElementById('tambahModal').style.display = 'block';
}

// Tutup modal
function tutupModal() {
    document.getElementById('tambahModal').style.display = 'none';
}

// Tambah pengguna menggunakan AJAX
document.getElementById('form-tambah-pengguna').addEventListener('submit', function(e) {
    e.preventDefault();
    var nomor_kamar = document.getElementById('nomor_kamar').value;
    var jumlah_tagihan = document.getElementById('jumlah_tagihan').value;
    var status = document.getElementById('status').value;

    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'tambah_pengguna.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onload = function() {
        if (this.status == 200) {
            alert(this.responseText);
            location.reload(); // Refresh halaman
        }
    };
    xhr.send('nomor_kamar=' + nomor_kamar + '&jumlah_tagihan=' + jumlah_tagihan + '&status=' + status);
});

// Hapus pengguna
function hapusPengguna(id) {
    if (confirm('Apakah Anda yakin ingin menghapus pengguna ini?')) {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'hapus_pengguna.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.onload = function() {
            if (this.status == 200) {
                alert(this.responseText);
                location.reload();
            }
        };
        xhr.send('id=' + id);
    }
}
