<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home'
        ];

        return view('home', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact'
        ];
        return view('contact', $data);
    }
}
