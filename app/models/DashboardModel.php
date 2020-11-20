<?php


class DashboardModel
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function jumlahMember()
    {
        $this->db->query("SELECT * FROM member");
        return  $this->db->hitungRow();
    }
}
