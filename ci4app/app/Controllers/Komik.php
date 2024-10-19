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

      //jika komik tidak ada di tabel
      if(empty($data['komik'])){
        throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul komik ' . $slug . ' tidak ditemukan.');
      }

      return view('komik/detail',$data);
    }

    public function create(){
      // session();
      //ambil validasi dari save
      $data = [
        'title' => 'Form Tambah Data Komik',
        'validation'=>\Config\Services::validation()
      ];
      return view('komik/create',$data);
    }
    
    public function save(){

      //validasi di lakukan sebelum datanya di save 
      if(!$this->validate([
        'judul' => [
          'rules' => 'required|is_unique[komik.judul]',
          'errors' => [
            'required' => '{field} komik harus diisi.',
            'is_unique' => '{field} komik sudah terdaftar.'
          ]
        ]
      ])){
        $validation = \Config\Services::validation();
        // dd($validation);
        // kirima data validasinya ke create
        return redirect()->to('/komik/create')->withInput()->with('validation',$validation);
      }
      // dd($this->request->getVar('judul')); ambil satu ajah 
      // dd($this->request->getVar());
      // - untuk separator kalo ada spasi
      $slug = url_title($this->request->getVar('judul'),'-',true);
      $this->komikModel->save([
        'judul' => $this->request->getVar('judul'),
        'slug' => $slug,
        'penulis' => $this->request->getVar('penulis'),
        'penerbit' => $this->request->getVar('penerbit'),
        'sampul' => $this->request->getVar('sampul')
      ]);

      session()->setFlashdata('pesan','Data berhasil ditambahkan.');

      return redirect()->to('/komik');
    }
}





//flasg data adalah data didalam session yang hanya muncul 1 kali. di dokumentasi.



























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