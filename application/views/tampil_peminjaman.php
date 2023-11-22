<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row">
        <div class="col-md-6">
            <a href="<?= base_url('index.php/peminjaman/tambah'); ?>" class="btn btn-info mb-2">Tambah Data</a>
        </div>
    </div>
    <div class="col-md-12">
<table>
    <tr>
        <th>Judul Buku</th>
        <th>Nama Peminjam</th>
        <th>Tanggal Peminjaman</th>
        <th>Tanggal Pengembalian</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($peminjaman as $pinjam): ?>
        <tr>
            <td><?php echo $pinjam['judul_buku']; ?></td>
            <td><?php echo $pinjam['nama_peminjam']; ?></td>
            <td><?php echo $pinjam['tanggal_peminjaman']; ?></td>
            <td><?php echo $pinjam['tanggal_pengembalian']; ?></td>
            <td>
                <a href="<?php echo base_url('index.php/peminjaman/edit/') . $pinjam['id']; ?>">Edit</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </div>
</div>
</table>
</body>
</html>