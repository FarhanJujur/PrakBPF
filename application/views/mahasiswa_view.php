<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <a href="<?php echo base_url('index.php/Mahasiswa1/create'); ?>">Tambah Mahasiswa</a>

    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Aksi</th>
        </tr>
        <?php if (!empty($Mahasiswa1)) { ?>
            <?php foreach ($Mahasiswa1 as $key => $m) { ?>
                <tr>
                    <td><?php echo $key + 1; ?></td>
                    <td><?php echo $m['nama']; ?></td>
                    <td><?php echo $m['nim']; ?></td>
                    <td>
                        <a href="<?php echo base_url('index.php/Mahasiswa1/edit/' . $key); ?>">Edit</a>
                        <a href="<?php echo base_url('index.php/Mahasiswa1/delete/' . $key); ?>">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        <?php } else { ?>
            <tr>
                <td colspan="4">Tidak ada data Mahasiswa.</td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
