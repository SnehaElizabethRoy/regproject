<?php

namespace App\Controllers;
use SebastianBergmann\Template\Template;

class Users extends BaseController
{
    public function index()
    {
        $data = [];
        helper(['form']);
        echo view('template/header',$data);
        echo view('login', $data);
        echo view('template/footer', $data);
        
    }
}
