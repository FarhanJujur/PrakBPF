<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Detail Buku Perpustakaan
                </div>
                <div class="card-body">
                    <h2 class="card-title"><?= $buku['nama_buku']; ?></h2>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $buku['genre_buku']; ?></h6>
                    <div class="row">
                        <div class="col-md-4">Nomor Anggota</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $buku['nomor_anggota']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Nama Peminjam</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $buku['nama_peminjam']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Tanggal Peminjaman</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $buku['tanggal_peminjaman']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Tanggal Pengembalian</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $buku['tanggal_pengembalian']; ?></div>
                    </div>
                </div>
                <div class="card-footer justify-content-center">
                    <a href="<?= base_url('Perpustakaan') ?>" class="btn btn-danger">Tutup</a>
                </div>
            </div>
        </div>
    </div>
</div>
