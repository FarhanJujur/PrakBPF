<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Tambah Data Buku
                </div>

                <div class="card-body">
                    <form action="<?= base_url('index.php/Perpustakaan/update/'); ?>" method="POST">
                    <input type="hidden" name="id" value="<?= $perpustakaan['id']; ?>">
                        <div class="form-group">
                            <label for="nama_buku">Nama Buku</label>
                            <input type="text" name="nama_buku" class="form-control" id="nama_buku" placeholder="Nama Buku">
                        </div>

                        <div class="form-group">
                            <label for="genre_buku">Genre Buku</label>
                            <input type="text" name="genre_buku" class="form-control" id="genre_buku" placeholder="Genre Buku">
                        </div>

                        <div class="form-group">
                            <label for="tanggal_peminjaman">Tanggal Peminjaman</label>
                            <input type="date" name="tanggal_peminjaman" class="form-control" id="tanggal_peminjaman">
                        </div>

                        <div class="form-group">
                            <label for="tanggal_pengembalian">Tanggal Pengembalian</label>
                            <input type="date" name="tanggal_pengembalian" class="form-control" id="tanggal_pengembalian">
                        </div>

                        <div class="form-group">
                            <label for="nomor_anggota">Nomor Anggota</label>
                            <input type="text" name="nomor_anggota" class="form-control" id="nomor_anggota" placeholder="Nomor Anggota">
                        </div>

                        <div class="form-group">
                            <label for="nama_peminjam">Nama Peminjam</label>
                            <input type="text" name="nama_peminjam" class="form-control" id="nama_peminjam" placeholder="Nama Peminjam">
                        </div>

                        <a href="<?= base_url('index.php/Perpustakaan') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
