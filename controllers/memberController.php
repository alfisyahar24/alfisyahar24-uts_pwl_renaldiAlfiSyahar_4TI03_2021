<?php
session_start();
require_once '../koneksi.php';
require_once '../models/member.php';

// 1. TANGKAP REQUEST ELEMENT FORM
$username = $_POST['username'];
$password = $_POST['password'];

// 2. MENYIMPAN DATA-DATA DI ATAS SEBUAH ARRAY
$data = [
    $username, // ?1
    $password // ?2
];

// 3. PROSES
$obj = new Member();
$rs = $obj->cekLogin($data);
if(!empty($rs)) {
    // SIMPAN SESSION
    $_SESSION['MEMBER'] = $rs;

    // 4. LANDING PAGE
    header('Location:http://localhost:8012/uts/index.php?hal=dataPegawai');
}
else {
    header('Location:http://localhost:8012/uts/index.php?hal=gagalLogin');
}