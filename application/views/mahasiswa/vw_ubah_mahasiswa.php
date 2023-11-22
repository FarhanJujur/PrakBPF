<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Ubah Data Mahasiswa
                </div>

                <div class="card-body">
                    <form action="<?= base_url('index.php/Mahasiswa/update'); ?>" method="POST">
                        <input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" value="<?= $mahasiswa['nama']; ?>" class="form-control" id="nama" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="text" name="nim" value="<?= $mahasiswa['nim']; ?>" class="form-control" id="nim" placeholder="NIM">
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                <option value="Laki-Laki" <?php if($mahasiswa['jenis_kelamin'] == "Laki-laki") {
                                                                    echo "selected";
                                                                    }?>>Laki-Laki</option>
                                <option value="Perempuan" <?php if($mahasiswa['jenis_kelamin'] == "Perempuan") {
                                                                echo "selected";
                                    }?>>Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" value="<?= $mahasiswa['email']; ?>" class="form-control" id="email" placeholder="Email">
                            <?= form_error('email' , '<small class="text-danger pl-3">', '</small>')?>
                        </div>
                        <div class="form-group">
                        <label for="prodi">Prodi</label>
                        <select name="prodi" id="prodi" class="form-control">
                                <?php foreach ($prodi as $p) :?>
                                    <option value="<?= $p['id']; ?>" <?php if($mahasiswa['prodi'] == $p['id']) {
                                                                            echo "Selected";
                                                                        }?>><?= $p['nama']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                        <div class="form-group">
                            <label for="asal_sekolah">Asal Sekolah</label>
                            <input type="text" name="asal_sekolah" value="<?= $mahasiswa['asal_sekolah']; ?>" class="form-control" id="asal_sekolah" placeholder="Asal Sekolah">
                            <?= form_error('asal_sekolah' , '<small class="text-danger pl-3">', '</small>')?>
                        </div>
                        <div class="form-group">
                            <label for="no_hp">No HP</label>
                            <input type="text" name="no_hp" value="<?= $mahasiswa['no_hp']; ?>" class="form-control" id="no_hp" placeholder="NO HP">
                            <?= form_error('no_hp' , '<small class="text-danger pl-3">', '</small>')?>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" value="<?= $mahasiswa['alamat']; ?>" class="form-control" id="alamat" placeholder="Alamat">
                            <?= form_error('alamat' , '<small class="text-danger pl-3">', '</small>')?>
                        </div>
                        <a href="<?= base_url('index.php/Mahasiswa') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>