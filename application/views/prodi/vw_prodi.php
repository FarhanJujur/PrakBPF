
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row">
        <div class="col-md-6"><a href="<?= base_url('index.php/') ?>Prodi/tambah" class="btn btn-info mb-2">Tambah Prodi</a>
    </div>
    <div class="col-md-12">
        <table class="table">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Nama</td>
                    <td>Ruangan</td>
                    <td>jurusan</td>
                    <td>Akreditasi</td>
                    <td>Nama Kaprodi</td>
                    <td>Tahun Berdiri</td>
                    <td>Output Kelulusan</td>
                    <td>Gambar</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
            <?php $i = 1; ?>
                <?php foreach ($prodi as $us) : ?>
                <tr>
                    <td><?= $i; ?>.</td>
                    <td><?= $us['nama']; ?></td>
                    <td><?= $us['ruangan']; ?></td>
                    <td><?= $us['jurusan']; ?></td>
		            <td><?= $us['akreditasi']; ?></td>
                    <td><?= $us['nama_kaprodi']; ?></td>
                    <td><?= $us['tahun_berdiri']; ?></td>
		            <td><?= $us['output_lulusan']; ?></td>
                    <td><img src="<?= base_url('assets/assets/img/prodi/') . $us['gambar']; ?>" style="width:100px;" class="img-thumbnail" alt="gambar"></td>
                    <td>
                        <a href="<?= base_url('index.php/Prodi/hapus/') . $us['id']; ?>" class="badge badge-danger">Hapus</a>
                        <a href="<?= base_url('index.php/Prodi/edit/') . $us['id']; ?>" class="badge badge-warning">Edit</a>
                        <a href="<?= base_url('index.php/Prodi/detail/') . $us['id']; ?>" class="badge badge-info">Detail</a>
                    </td>
                </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    </div>
