<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Tambah Data Prodi
                </div>

                <div class="card-body">
                    <form action="<?= base_url('index.php/prodi/upload'); ?>" method="POST" enctype="multipart/form-data">
                    <div action="form-group">
                        <label for="nama">Nama Prodi</label>
                        <select name="nama" id="nama" class="form-control">
                            <option value="">Nama Prodi</option>
                            <option value="TeknikInformatika">Teknik Informatika</option>
                            <option value="SInformasi">Sistem Informasi</option>
                            <option value="TeknikListrik">Teknik Listrik</option>
                            <option value="TeknikMesin">Teknik Mesin</option>
                            <option value="Akutansi">Akutansi Perpajakan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="ruangan">Ruangan</label>
                        <input type="text" name="ruangan" class="form-control" id="ruangan" placeholder="ruangan">
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <input type="text" name="jurusan" class="form-control" id="jurusan" placeholder="jurusan">
                    </div>
                    <div class="from-group">
                        <label for="akreditasi">Akreditasi</label>
                        <select name="akreditasi" id="akreditasi" class="form-control">
                            <option value="">Akreditasi</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nama_kaprodi">Nama Kaprodi</label>
                        <input type="text" name="nama_kaprodi" class="form-control" id="nama_kaprodi" placeholder="nama_kaprodi">
                    </div>
                    <div class="form-group">
                        <label for="tahun_berdiri">Tahun Berdiri</label>
                        <input type="text" name="tahun_berdiri" class="form-control" id="tahun_berdiri" placeholder="tahun_berdiri">
                    </div>
                    <div class="form-group">
                        <label for="output_lulusan">Lulusan</label>
                        <input type="text" name="output_lulusan" class="form-control" id="output_lulusan" placeholder="output_lulusan">
                    </div>
                    <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="gambar" id="gambar">
                            <label for="gamber" class="custom-file-label">Choose File</label>
                            </div>
                        </div>
                    <a href="<?= base_url('index.php/Prodi') ?>" class="btn btn-danger">Tutup</a>
                    <button type="Sumbit" name="tambah" class="btn btn-primary float-right">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>