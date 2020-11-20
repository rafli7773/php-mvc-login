<?php

class Controller
{
    public function view($view, $data = [])
    {
        require_once "app/views/" . $view . ".php";
    }

    public function model($model)
    {
        require_once "app/models/" . $model . ".php";
        return new $model;
    }

    public function navbarActive($namaUrl, $urlRoot)
    {
        if ($namaUrl == $urlRoot) {
            $navbarActive = $namaUrl;
            return $navbarActive;
        } else {
            return false;
        }
    }
}
