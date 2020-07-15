<?php

namespace App\Controllers;

class Coba extends BaseController
{
    public function index()
    {
        return 'ini controller coba';
    }
    public function about($nama = "", $age = 0)
    {
        return "hello world this is About $nama and age is $age years";
    }

    //--------------------------------------------------------------------
}
