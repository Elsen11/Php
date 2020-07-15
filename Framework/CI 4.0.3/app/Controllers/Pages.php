<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'home | Web Programming',
            'test' => [1, 2, 3, 'hello']
        ];
        echo view('Pages/home', $data);
    }
    public function about()
    {
        $data = [
            'title' => 'About | learn CI4'
        ];
        echo view('Pages/about', $data);
    }
    public function contact()
    {
        $data = [
            'title' => 'contact US',
            'alamat' => [
                [
                    'tipe' => 'rumah',
                    'alamat' => "jalan merdeka no 254",
                    'kota' => "banyuasin"
                ],
                [
                    'tipe' => 'kantor',
                    'alamat' => "jalan rambutan no 326",
                    'kota' => "lubuk linggau"
                ],
            ]
        ];
        return view('Pages/Contact', $data);
    }
    //--------------------------------------------------------------------
}
