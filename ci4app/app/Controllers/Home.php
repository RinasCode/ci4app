<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function caca($nama='',$umur=0)
    {
        echo "Hai $nama umur kamu $umur";
    }

    public function coba()
    {
        echo "ini controller Home yang ada di method coba";
    }
}
