<?php

class LoginModel
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function checkEmail($email)
    {
        $this->db->query("SELECT email FROM user WHERE email = :email");
        $this->db->bind("email", $email);
        return $this->db->hitungRow();
    }

    public function checkPassword($data)
    {
        $this->db->query("SELECT * FROM user WHERE email = :email");
        $this->db->bind("email", $data['email']);
        return $this->db->ambilSatuData();
    }
}
