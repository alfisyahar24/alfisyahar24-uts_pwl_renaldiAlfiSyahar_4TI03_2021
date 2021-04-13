<?php
class Member {
    // MEMBER 1 VARIABEL
    private $koneksi;
    
    // MEMBER 2 KONSTRUKTOR
    public function __construct()    
    {
        global $dbh;
        $this->koneksi = $dbh;
    }

    // MEMBER 3 METHOD CRUD 
    public function cekLogin($data)
    {
        $sql = "SELECT * FROM member 
                WHERE username = ? AND password = SHA1(MD5(?))";

        // PREPARE STATEMENT
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
        $rs = $ps->fetch();
        return $rs;
    }
}