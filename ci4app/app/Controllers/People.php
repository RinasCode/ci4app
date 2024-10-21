<?php

namespace App\Controllers;

use App\Models\PeopleModel; 
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
    
    $keyword = $this->request->getVar('keyword');
    if($keyword) {
      $people = $this->peopleModel->search($keyword);
    }else{
      $people = $this->peopleModel;
    }
    // d($this->request->getVar('keyword'));

    $data = [
      'title' => 'People List',
      'people' => $people->paginate(7, 'people'),
      'pager' => $this->peopleModel->pager,
      'currentPage' => $currentPage
    ];

    return view('people/index', $data);
  }

}

