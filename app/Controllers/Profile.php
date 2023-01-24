<?php

namespace App\Controllers;

class Profile extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Profile | Tentang Kami'
        ];
        return view('profile/tentangkami', $data);
    }

    public function visimisi()
    {
        $data = [
            'title' => 'Profile | Visi dan Misi'
        ];

        return view('profile/visimisi', $data);
    }

    public function struktur()
    {
        $data = [
            'title' => 'Profile | Struktur Organisasi'
        ];

        return view('profile/struktur', $data);
    }

    public function fasilitas()
    {
        $data = [
            'title' => 'Profile | Fasilitas'
        ];

        return view('profile/fasilitas', $data);
    }
}
