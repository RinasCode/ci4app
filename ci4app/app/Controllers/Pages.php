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
        return view('pages/home', $data);
    }

    public function about()
    {   
        $data = [
            'title' => 'About | Komik Apps'
        ];
        return view('pages/about', $data);
    }

    public function contact()
    { 
        $data = [
            'title' => 'Contact | Komik Apps',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Jl. Abc No. 123',
                    'kota' => 'Bandung'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Jl. Setiabudi No. 193',
                    'kota' => 'Bandung'
                ]
            ]
        ];
        return view('pages/contact', $data);
    }

}
