<?php

namespace App\Controllers;

use App\Models\PeopleModel; // Ensure this path is correct and the PeopleModel class exists in this namespace
use CodeIgniter\HTTP\Files\UploadedFile;

class People extends BaseController
{
  protected $peopleModel;
  public function __construct()
  {
    $this->peopleModel = new PeopleModel();
  }

  public function index()
  {
    // $komik = $this->komikModel->findAll();
    $currentPage = $this->request->getVar('page_people') ? $this->request->getVar('page_people') : 1;

    $data = [
      'title' => 'People List',
      'people' => $this->peopleModel->paginate(7, 'people'),
      'pager' => $this->peopleModel->pager,
      'currentPage' => $currentPage
    ];

    return view('people/index', $data);
  }

}

