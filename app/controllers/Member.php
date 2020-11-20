<?php

class Member extends Controller
{
    public function index()
    {
        $data = [
            "judul" => "Member",
            "member" => $this->navbarActive("member", $_GET['url']),
            "daftarMember" => $this->model("MemberModel")->daftarMember()
        ];

        $this->view('templates/header', $data);
        $this->view('templates/navbar', $data);
        $this->view('member/index', $data);
        $this->view('templates/footerC', $data);
        $this->view('templates/footerS', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $detailMember = $this->model("MemberModel")->detail($id);
        echo json_encode($detailMember);
    }

    public function hapus($id)
    {
        if ($this->model("MemberModel")->hapus($id) > 0) {
            Flasher::setToasts("Member Berhasl Di Hapus");
            header("location: " . BASEURL . "/member");
        } else {
            header("location: " . BASEURL . "/member");
        }
    }

    public function tambah()
    {
        if ($this->model("MemberModel")->tambah($_POST) > 0) {
            Flasher::setToasts("Member Berhasl Di Tambah");
            header("location: " . BASEURL . "/member");
        } else {
            header("location: " . BASEURL . "/member");
        }
    }

    public function edit()
    {
        if ($this->model("MemberModel")->edit($_POST) > 0) {
            Flasher::setToasts("Member Berhasl Di Edit");
            header("location: " . BASEURL . "/member");
        } else {
            header("location: " . BASEURL . "/member");
        }
    }

    public function cari()
    {

        $data = [
            "judul" => "Member",
            "member" => $this->navbarActive("member", $_GET['url']),
            "daftarMember" => $this->model("MemberModel")->cariMember($_POST['keyword'])
        ];

        $this->view('templates/header', $data);
        $this->view('templates/navbar', $data);
        $this->view('member/index', $data);
        $this->view('templates/footerC', $data);
        $this->view('templates/footerS', $data);
        $this->view('templates/footer');
    }
}
