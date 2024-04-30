<?php 

class Mahasiswa_model {
    private $table = 'karyawan';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMahasiswa()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' JOIN golongan ON karyawan.id = :id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataMahasiswa($data)
    {
        $query = "INSERT INTO " . $this->table . " (nip, nik, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, whatsapp, alamat, golongan_id)
                    VALUES
                  (:nip, :nik, :nama, :jenis_kelamin, :tempat_lahir, :tanggal_lahir, :whatsapp, :alamat, :golongan_id)";
        var_dump($data);
        $this->db->query($query);
        $this->db->bind('nip', $data['nip']);
        $this->db->bind('nik', $data['nik']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
        $this->db->bind('tempat_lahir', $data['tempat_lahir']);
        $this->db->bind('tanggal_lahir', $data['tanggal_lahir']);
        $this->db->bind('whatsapp', $data['whatsapp']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('golongan_id', $data['golongan_id']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataMahasiswa($id)
    {
        // var_dump($id);
        $query = "DELETE FROM " . $this->table . " WHERE id=:id";
        
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function ubahDataMahasiswa($data)
    {
        $query = "UPDATE " . $this->table . " SET
                    nip = :nip,
                    nik = :nik,
                    nama = :nama,
                    jenis_kelamin = :jenis_kelamin,
                    tempat_lahir = :tempat_lahir,
                    tanggal_lahir = :tanggal_lahir,
                    whatsapp = :whatsapp,
                    alamat = :alamat,
                    golongan_id = :golongan_id
                WHERE id = :id";
        // var_dump($query);
        var_dump($data);
        $this->db->query($query);
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':nip', $data['nip']);
        $this->db->bind(':nik', $data['nik']);
        $this->db->bind(':nama', $data['nama']);
        $this->db->bind(':jenis_kelamin', $data['jenis_kelamin']);
        $this->db->bind(':tempat_lahir', $data['tempat_lahir']);
        $this->db->bind(':tanggal_lahir', $data['tanggal_lahir']);
        $this->db->bind(':whatsapp', $data['whatsapp']);
        $this->db->bind(':alamat', $data['alamat']);
        $this->db->bind(':golongan_id', $data['golongan_id']);
        $this->db->execute();

        return $this->db->rowCount();
    }


    public function cariDataMahasiswa()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM " . $this->table . " WHERE nama LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }

    public function getAllGolongan(){
        $this->db->query('SELECT * FROM ' . "golongan");
        return $this->db->resultSet();
    }

}