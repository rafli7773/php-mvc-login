<?php

class RegistrasiModel
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function checkEmail($email)
    {
        $this->db->query("SELECT email FROM user where email = :email");
        $this->db->bind("email", $email);

        return $this->db->hitungRow();
    }

    public function registrasi($data)
    {
        $this->db->query("INSERT INTO user VALUES('', :email, :username, :password)");
        $this->db->bind("email", $data['email']);
        $this->db->bind("username", $data['username']);
        $this->db->bind("password", $data['password']);
        return $this->db->hitungRow();
    }
}
