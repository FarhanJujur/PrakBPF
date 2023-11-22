<!DOCTYPE html>
<html>
<head>
    <title>Form Peminjaman Buku</title>
</head>
<body>
    <h1>Form Peminjaman Buku</h1>
    <form method="post" action="<?php echo base_url('index.php/peminjaman/simpan'); ?>">
    <label for="judul_buku">Judul Buku:</label>
    <input type="text" name="judul_buku" required>
    <label for="nama_peminjam">Nama Peminjam:</label>
    <input type="text" name="nama_peminjam" required>
    <label for="tanggal_peminjaman">Tanggal Peminjaman:</label>
    <input type="date" name="tanggal_peminjaman" required>
    <label for="tanggal_pengembalian">Tanggal Pengembalian:</label>
    <input type="date" name="tanggal_pengembalian" required>
    <input type="submit" value="Simpan">
</form>

</body>
</html>
