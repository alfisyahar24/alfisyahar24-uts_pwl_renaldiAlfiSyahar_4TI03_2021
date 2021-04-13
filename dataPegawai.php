<?php
require_once 'models/pegawai.php';
// CIPTAKAN OBJECT DARI CLASS PEGAWAI
$obj = new Pegawai();
// PANGGIL METHOD UNTUK MENAMPILKAN DATA
$rs = $obj->dataPegawai();
?>
<h3 style="text-align: center; font-weight: bold;">Data Pegawai</h3>
<?php
if(isset($member)) {
?>
<a href="index.php?hal=formPegawai" class="btn btn-success">Tambah</a>
<?php } ?>
<br><br>
<table class="table table-hover table-striped">
    <thead class="table-info">
        <tr>
            <th scope="col">Nomor</th>
            <th scope="col">NIP</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Agama</th>
            <th scope="col">Divisi</th>
            <th scope="col" style="text-align: center;">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($rs as $prod) {
        ?>
        <tr>
            <td><?= $no; ?></td>
            <td><?= $prod['nip']; ?></td>
            <td><?= $prod['nama']; ?></td>
            <td><?= $prod['email']; ?></td>
            <td><?= $prod['agama']; ?></td>
            <td><?= $prod['divisi']; ?></td>
            <td style="text-align: center;">
                <form method="POST" action="controllers/pegawaiController.php">
                    <a href="index.php?hal=detailPegawai&id=<?= $prod['id']; ?>" class="btn btn-info">Detail</a>
                    <?php
                    $role = $member['role'];
                    if(isset($member)) {
                    ?>
                    <a href="index.php?hal=formEditPegawai&id=<?= $prod['id']; ?>" class="btn btn-warning">Edit</a>
                    <?php
                    if($role != 'staff') {
                    ?>
                    <button name="proses" value="hapus" onclick="return confirm('Anda yakin ingin menghapus?')"
                        class="btn btn-danger">Delete
                    </button>
                    <?php } ?>
                    <input type="hidden" name="idx" value="<?= $prod['id'] ?>">
                    <?php } ?>
                </form>
            </td>
        </tr>
        <?php
            $no++;
        } ?>
    </tbody>
</table>