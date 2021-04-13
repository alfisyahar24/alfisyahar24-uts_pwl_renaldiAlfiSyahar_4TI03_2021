<?php
require_once 'models/pegawai.php';

// TANGKAP REQUEST ID di URL
$id = $_REQUEST['id'];
$obj = new Pegawai();
$rs = $obj->getPegawai($id);
// print_r($rs); exit();
?>

<div class="card" style="width: 18rem;">
    <?php
$gambar = (!empty($rs['foto']) ? $rs['foto'] : "not_found.png");
?>
    <img src="images/<?= $gambar ?>" width="35%" class="card-img-top">
    <div class="card-body">
        <h5 class="card-title" style="font-weight: bold;"><?= $rs['nama'] ?></h5>
        <p class="card-text">
        <table>
            <tr>
                <td>NIP</td>
                <td>:</td>
                <td><?= $rs['nip'] ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><?= $rs['email'] ?></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td><?= $rs['agama'] ?></td>
            </tr>
            <tr>
                <td>Divisi</td>
                <td>:</td>
                <td><?= $rs['divisi'] ?></td>
            </tr>
        </table>
        </p>
        <a href="index.php?hal=dataPegawai" class="btn btn-secondary">Kembali</a>
    </div>
</div>