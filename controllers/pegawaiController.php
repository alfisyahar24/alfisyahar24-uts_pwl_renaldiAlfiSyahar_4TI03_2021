<?php
require_once '../koneksi.php';
require_once '../models/pegawai.php';

// 1. TANGKAP REQUEST ELEMENT FORM
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$agama = $_POST['agama'];
$iddivisi = $_POST['divisi'];
$foto = $_POST['foto'];
$tombol = $_POST['proses'];

// 2. MENYIMPAN DATA-DATA DI ATAS SEBUAH ARRAY
$data = [
    $nip, // ?1
    $nama, // ?2
    $email, // ?3
    $agama, // ?4
    $iddivisi, // ?5
    $foto // ?6
];

// 3. PROSES
$obj = new Pegawai();
switch ($tombol) {
    case 'simpan':
        $obj->simpan($data);
        break;
    case 'ubah':
        $data[] = $_POST['idx']; // MENANGKAP HIDDEN FIELD UNTUK ? KE-8
        $obj->ubah($data);
        break;
    case 'hapus':
        $id[] = $_POST['idx']; // MENANGKAP HIDDEN FIELD UNTUK ? KE-8
        $obj->hapus($id);
        break;
    default: // UNTUK TOMBOL BATAL
    header('Location:http://localhost:8012/uts/index.php?hal=dataPegawai');
        break;
}

// 4. LANDING PAGE
header('Location:http://localhost:8012/uts/index.php?hal=dataPegawai');