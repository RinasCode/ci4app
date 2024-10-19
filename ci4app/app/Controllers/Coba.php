<?php

namespace App\Controllers;

class Coba extends BaseController
{
    public function index()
    {
        echo ("hai $this->nama ini controller Coba yang ada di method index");
    }

    public function ayam()
    {
        echo ('ini 1111 controller Coba yang ada di method index');
    }

}
