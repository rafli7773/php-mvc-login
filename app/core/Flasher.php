<?php

class Flasher
{
    public static function setToasts($pesan)
    {
        $_SESSION['toasts'] = [
            "pesan" => $pesan
        ];
    }

    public static function toasts()
    {
        if (isset($_SESSION['toasts'])) {
            echo '<span class="toasts-gua">' . $_SESSION['toasts']['pesan'] . '<i class="material-icons right">done</i></span>';
        }
        unset($_SESSION['toasts']);
    }

    public static function setValidasiEmail($pesan)
    {
        $_SESSION['validasiEmail'] = ['pesan' => $pesan];
    }
    public static function validasiEmail()
    {
        if (isset($_SESSION['validasiEmail'])) {
            echo '<span class="helper-text red-text">' . $_SESSION['validasiEmail']['pesan'] . '</span>';
        }
        unset($_SESSION['validasiEmail']);
    }
    public static function setValidasiPassword($pesan)
    {
        $_SESSION['validasiPassword'] = ['pesan' => $pesan];
    }
    public static function validasiPassword()
    {
        if (isset($_SESSION['validasiPassword'])) {
            echo '<span class="helper-text red-text">' . $_SESSION['validasiPassword']['pesan'] . '</span>';
        }
        unset($_SESSION['validasiPassword']);
    }
}
