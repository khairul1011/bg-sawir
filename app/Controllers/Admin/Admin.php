<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Admin extends BaseController
{
    public function index(): string
    {
        return view('user/dashboard');
    }

    public function home(): string
    {
        return view('user/home');
    }
}
