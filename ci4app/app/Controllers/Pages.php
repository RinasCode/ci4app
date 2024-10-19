<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {   
        $data = [
            'title' => 'Home | Komik Apps',
            'tes' => ['satu', 'dua', 'tiga']
        ];
        // return view('pages/home');
        echo view('layout/header', $data);
        echo view('pages/home');
        echo view('layout/footer');
    }

    public function about()
    {   
        $data = [
            'title' => 'About | Komik Apps'
        ];
        echo view('layout/header', $data);
        echo view('pages/about');
        echo view('layout/footer');
    }

    public function contact()
    { 
        $data = [
            'title' => 'Contact | Komik Apps'
        ];
        echo view('layout/header', $data);
        echo view('pages/contact');
        echo view('layout/footer');
    }

}
