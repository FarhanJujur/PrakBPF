<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="<?php echo base_url('index.php/peminjaman/update'); ?>">
    <label for="judul_buku">Judul Buku:</label>
    <input type="text" name="judul_buku" value="<?php echo $peminjaman['judul_buku']; ?>" required>
    <label for="nama_peminjam">Nama Peminjam:</label>
    <input type="text" name="nama_peminjam" value="<?php echo $peminjaman['nama_peminjam']; ?>" required>
    <label for="tanggal_peminjaman">Tanggal Peminjaman:</label>
    <input type="date" name="tanggal_peminjaman" value="<?php echo $peminjaman['tanggal_peminjaman']; ?>" required>
    <label for="tanggal_pengembalian">Tanggal Pengembalian:</label>
    <input type="date" name="tanggal_pengembalian" value="<?php echo $peminjaman['tanggal_pengembalian']; ?>" required>
    <input type="hidden" name="id" value="<?php echo $peminjaman['id']; ?>">
    <input type="submit" value="Update">
</form>

</body>
</html>