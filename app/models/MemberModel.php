<?php

class MemberModel
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }
    public function daftarMember()
    {
        $this->db->query("SELECT * FROM member ORDER BY id DESC");
        return $this->db->ambilSemuaData();
    }

    public function detail($id)
    {
        $this->db->query("SELECT * FROM member WHERE id = :id");
        $this->db->bind("id", $id);
        return $this->db->ambilSatuData();
    }

    public function hapus($id)
    {
        $this->db->query("DELETE FROM member WHERE id = :id");
        $this->db->bind("id", $id);
        return $this->db->hitungRow();
    }

    public function tambah($data)
    {
        $this->db->query("INSERT INTO member VALUES('', :nama, :umur, :jenis_kelamin, :alamat, :pekerjaan, :no_hp)");
        $this->db->bind("nama", $data['nama']);
        $this->db->bind("umur", $data['umur']);
        $this->db->bind("jenis_kelamin", $data['jenisKelamin']);
        $this->db->bind("alamat", $data['alamat']);
        $this->db->bind("pekerjaan", $data['pekerjaan']);
        $this->db->bind("no_hp", $data['noHp']);
        return $this->db->hitungRow();
    }

    public function edit($data)
    {
        $this->db->query("UPDATE member SET nama = :nama, umur = :umur, jenis_kelamin = :jenis_kelamin, alamat = :alamat, pekerjaan = :pekerjaan, no_hp = :no_hp WHERE id = :id");
        $this->db->bind('id', $data['id']);
        $this->db->bind("nama", $data['nama']);
        $this->db->bind("umur", $data['umur']);
        $this->db->bind("jenis_kelamin", $data['jenisKelamin']);
        $this->db->bind("alamat", $data['alamat']);
        $this->db->bind("pekerjaan", $data['pekerjaan']);
        $this->db->bind("no_hp", $data['noHp']);
        return $this->db->hitungRow();
    }

    public function cariMember($keyword)
    {
        $this->db->query("SELECT * FROM member WHERE nama LIKE :keyword OR pekerjaan LIKE :keyword ORDER BY id DESC");
        $this->db->bind("keyword", "%$keyword%");
        return $this->db->ambilSemuaData();
    }
}
