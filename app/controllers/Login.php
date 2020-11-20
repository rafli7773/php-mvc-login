<?php
if (isset($_SESSION['masuk'])) header("location: " . BASEURL . "/dashboard");

class Login extends Controller
{
    public function index()
    {
        $data = [
            "judul" => "Login"
        ];

        $this->view('templates/header', $data);
        $this->view('login/index', $data);
        $this->view('templates/footer');
    }

    public function verifikasi()
    {
        if ($this->model("LoginModel")->checkEmail($_POST['email']) === 1) {
            $data = $this->model("LoginModel")->checkPassword($_POST);
            $password = $data['password'];
            if (password_verify($_POST['password'], $password)) {
                Flasher::setToasts("Akun Berhasil Masuk");
                $_SESSION['masuk'] = $data;
                header("location: " . BASEURL . "/dashboard");
            } else {
                Flasher::setValidasiPassword("Password salah!");
                header("location: " . BASEURL . "/login");
            }
        } else {
            Flasher::setValidasiEmail("Email Belum Terdaftar");
            header("location: " . BASEURL . "/login");
        }
    }
}
