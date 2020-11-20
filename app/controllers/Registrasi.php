<?php

if (isset($_SESSION['masuk'])) header("location: " . BASEURL . "/dashboard");

class Registrasi extends Controller
{
    public function index()
    {
        $data = [
            "judul" => "Registrasi"
        ];

        $this->view('templates/header', $data);
        $this->view('registrasi/index', $data);
        $this->view('templates/footer');
    }

    public function verifikasi()
    {
        $email = $_POST['email'];
        $_SESSION['valueRegistrasiEmail'] = $email;
        $_SESSION['valueUsername'] = $_POST['username'];
        if ($this->model("RegistrasiModel")->checkEmail($email) === 1) {
            Flasher::setValidasiEmail("Email Sudah Terdaftar");
            header("location: " . BASEURL . "/registrasi");
        } else {
            if ($_POST['password'] === $_POST['password2']) {
                $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
                if ($this->model("RegistrasiModel")->registrasi($_POST) > 0) {
                    unset($_SESSION['valueRegistrasiEmail']);
                    unset($_SESSION['valueUsername']);
                    Flasher::setToasts("Akun anda berhasil di daftarkan");
                    header("location: " . BASEURL . "/login");
                }
            } else {
                Flasher::setValidasiPassword("Password tidak sama");
                header("location: " . BASEURL . "/registrasi");
            }
        }
    }
}
