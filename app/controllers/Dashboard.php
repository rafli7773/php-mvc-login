<?php

if (!isset($_SESSION['masuk'])) header("location: " . BASEURL . "/login");

class Dashboard extends Controller
{
    public function index()
    {
        $data = [
            "judul" => "Dashboard",
            "jumlahMember" => $this->model("DashboardModel")->jumlahMember(),
            "dashboard" => $this->navbarActive("dashboard", $_GET['url'])
        ];
        $this->view('templates/header', $data);
        $this->view('templates/navbar', $data);
        $this->view('dashboard/index', $data);
        $this->view('templates/footerC');
        $this->view('templates/footer');
    }

    public function logout()
    {
        session_destroy();
        unset($_SESSION['masuk']);
        header("location: " . BASEURL . "/login");
    }
}
