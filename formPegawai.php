<?php
require_once 'models/pegawai.php';
$ar_agama = ['Islam','Kristen Protestan','Kristen Katholik','Hindu','Budha','Konghucu'];
$obj = new Pegawai();
$rs = $obj->dataDivisi();
?>

<h3 style="text-align: center;">Form Pegawai</h3>
<form method="POST" action="controllers/pegawaiController.php">
    <div class="form-group row">
        <label for="nip" class="col-4 col-form-label">NIP</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"
                        style="width:1.2cm; display: flex; align-items: center; justify-content:center;">
                        <i class="fa fa-address-card"></i>
                    </div>
                </div>
                <input id="nip" name="nip" type="text" class="form-control" required="required"
                    aria-describedby="nipHelpBlock">
            </div>
            <span id="nipHelpBlock" class="form-text text-muted">*max 5 digit</span>
        </div>
    </div>
    <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Nama</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"
                        style="width:1.2cm; display: flex; align-items: center; justify-content:center;">
                        <i class="fa fa-address-book"></i>
                    </div>
                </div>
                <input id="nama" name="nama" type="text" class="form-control" required="required">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="email" class="col-4 col-form-label">Email</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"
                        style="width:1.2cm; display: flex; align-items: center; justify-content:center;">
                        <i class="fa fa-envelope"></i>
                    </div>
                </div>
                <input id="email" name="email" type="text" class="form-control" required="required"
                    aria-describedby="emailHelpBlock">
            </div>
            <span id="emailHelpBlock" class="form-text text-muted">ex: alfisyahar@dac-solution.com</span>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-4">Agama</label>
        <div class="col-8">
            <?php
        $no = 0;
        foreach($ar_agama as $agama) {
        ?>
            <div class="custom-control custom-radio custom-control-inline">
                <input name="agama" id="agama_<?= $no ?>" type="radio" class="custom-control-input"
                    value="<?= $agama ?>" required="required">
                <label for="agama_<?= $no ?>" class="custom-control-label"><?= $agama ?></label>
            </div>
            <?php $no++; } ?>
        </div>
    </div>
    <div class="form-group row">
        <label for="divisi" class="col-4 col-form-label">Divisi</label>
        <div class="col-8">
            <select id="divisi" name="divisi" class="custom-select" required="required">
                <option value="0">Pilih Divisi</option>
                <?php
                foreach($rs as $d) {
                ?>
                <option value="<?= $d['id'] ?>"><?= $d['nama'] ?></option>
                <?php } ?>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="foto" class="col-4 col-form-label">Foto</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"
                        style="width:1.2cm; display: flex; align-items: center; justify-content:center;">
                        <i class="fa fa-picture-o"></i>
                    </div>
                </div>
                <input id="foto" name="foto" type="text" class="form-control" required="required">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-4 col-8">
            <button name="proses" type="submit" value="simpan" class="btn btn-primary">Simpan</button>
        </div>
    </div>
</form>