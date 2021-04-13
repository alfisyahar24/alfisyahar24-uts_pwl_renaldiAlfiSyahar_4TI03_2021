<?php
class Pegawai {
    // MEMBER 1 VARIABEL
    private $koneksi;
    
    // MEMBER 2 KONSTRUKTOR
    public function __construct()    
    {
        global $dbh;
        $this->koneksi = $dbh;
    }

    // MEMBER 3 METHOD CRUD
    public function dataPegawai()
    {
        $sql = "SELECT pegawai.*, divisi.nama AS divisi FROM pegawai 
                INNER JOIN divisi ON divisi.id = pegawai.iddivisi
                ORDER BY pegawai.id DESC";

        // PREPARE STATEMENT PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }

    public function dataDivisi()
    {
        $sql = "SELECT * FROM divisi";

        // FUNGSI QUERY EKSEKUSI QUERY DAN AMBIL DATANYA        
        $rs = $this->koneksi->query($sql);
        return $rs;
    }    

    public function getPegawai($id)
    {
        $sql = "SELECT pegawai.*, divisi.nama AS divisi FROM pegawai 
                INNER JOIN divisi ON divisi.id = pegawai.iddivisi
                WHERE pegawai.id = ?";

        // PREPARE STATEMENT
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }

    public function simpan($data)
    {
        $sql = "INSERT INTO pegawai(nip, nama, email, agama, iddivisi, foto)
                VALUES (?,?,?,?,?,?)";

        // PREPARE STATEMENT
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function ubah($data)
    {
        $sql = "UPDATE pegawai SET nip=?, nama=?, email=?, agama=?, iddivisi=?, foto=?
                WHERE id=?";

        // PREPARE STATEMENT
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function hapus($id)
    {
        $sql = "DELETE FROM pegawai WHERE id=?";

        // PREPARE STATEMENT
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($id);
    }
}