
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row">
        <div class="col-md-6"><a href="<?= base_url('index.php/') ?>perpustakaan/tambah" class="btn btn-info mb-2">Pinjam buku</a>
    </div>
    <div class="col-md-12">
        <table class="table">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Nama Buku</td>
                    <td>Genre Buku</td>
                    <td>Tanggal Peminjaman</td>
                    <td>Tanggal Pengembalian</td>
                    <td>Nomor Anggota</td>
                    <td>Nama Peminjam</td>
                </tr>
            </thead>
            <tbody>
            <?php $i = 1; ?>
            <?php foreach ($perpustakaan as $us) : ?>
                <tr>
                <td><?= $i; ?>.</td>
                    <td><?= $us['nama_buku']; ?></td>
                    <td><?= $us['genre_buku']; ?></td>
                    <td><?= $us['tanggal_peminjaman']; ?></td>
                    <td><?= $us['tanggal_pengembalian']; ?></td>
                    <td><?= $us['nomor_anggota']; ?></td>
                    <td><?= $us['nama_peminjam']; ?></td>
                    <td>
                        <a href="<?= base_url('index.php/perpustakaan/hapus/') . $us['id']; ?>" class="badge badge-danger">Hapus</a>
                        <a href="<?= base_url('index.php/perpustakaan/edit/') . $us['id']; ?>" class="badge badge-warning">Edit</a>
                        <a href="<?= base_url('index.php/perpustakaan/detail/') . $us['id']; ?>" class="badge badge-info">Detail</a>
                    </td>
                </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    </div>

