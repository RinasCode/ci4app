<?php

namespace App\Controllers;

use App\Models\KomikModel;

class Komik extends BaseController
{   
    //ini pakai cara instenciate OOP banget kan ini atau lebih cakep lagi taro di base controller ====> tekan aku ke basecontroller
    protected $komikModel;
    public function __construct()
    {
        $this->komikModel = new KomikModel();
    }
   
    public function index()
    {   
      // $komik = $this->komikModel->findAll();
      
      $data = [
        'title' => 'Daftar Komik',
        'komik' => $this->komikModel->getKomik()
      ];

      //ccara konek ke database tanpa model
    //   $db = \Config\Database::connect();
    //     $komik = $db->query("SELECT * FROM komik");
    //     // dd($komik);
    //     foreach ($komik->getResultArray() as $row)
    //     {
    //         d($row);
    //     }

    //cara konek ke database dengan model
    // $komikModel = new \App\Models\KomikModel();
    
    
    // $komik = $this->komikModel->findAll();

    // dd($komik); //hasilny dalam bentuk tabel

      return view('komik/index',$data);  
    }

    public function detail($slug)
    {
      //  $komik = $this->komikModel->getKomik($slug);
      //  dd($komik);

      $data = [
        'title' => 'Detail Komik',
        'komik' => $this->komikModel->getKomik($slug)
      ];

      return view('komik/detail',$data);
    }

}

































/*
Dependency Injection:

Di dalam BaseController, objek dari UserModel di-inject ke dalam properti $userModel melalui constructor.
Dengan ini, semua controller yang mewarisi BaseController bisa langsung mengakses model tersebut melalui $this->userModel.
Inheritance (Pewarisan):

UserController mewarisi BaseController. Jadi, tanpa perlu membuat objek UserModel lagi, controller ini bisa menggunakan properti dan metode yang ada di BaseController.
Pemanggilan Model di Controller:

Kamu bisa memanggil metode dari model seperti ini:
php
Salin kode
$this->userModel->findAll();
Proses ini sering disebut sebagai Dependency Injection melalui Constructor dan Inheritance dalam Object-Oriented Programming (OOP). Dengan cara ini, kode jadi lebih bersih, terstruktur, dan mudah dikelola.*/ 