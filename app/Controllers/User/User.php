<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\M_data;

class User extends BaseController
{
    public function dashboard()
    {
        echo view('layouts/Header');
        echo view('layouts/Sidebar');
        echo view('user/Dashboard');
        echo view('layouts/Footer');
    }

    public function __construct() 
    {
        $this->model = new M_data; 
    }

    public function data()
    {
        

        $data = [
            'judul' => 'Data Unit',
            'unit' => $this->model->getAllData()
        ];


        echo view('layouts/Header');
        echo view('layouts/Sidebar');
        echo view('user/Data', $data);
        echo view('layouts/Footer');

    }

    public function tambah() {
        $data = [
            'merek' => $this->request->getPost('namaTerdakwa'),
            'no_rangka' => $this->request->getPost('noRangka'),
            'no_mesin' => $this->request->getPost('noMesin'),
            'nama_terdakwa' => $this->request->getPost('namaTerdakwa'),
            'pasal' => $this->request->getPost('pasal'),
            'foto' => $this->request->getPost('foto'),
            'status' => $this->request->getPost('status'),
            'tanggal_masuk' => $this->request->getPost('tanggalMasuk')
        ];

        $success = $this->model->tambah($data);
    }
}
