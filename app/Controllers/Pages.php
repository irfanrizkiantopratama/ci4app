<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Web Programming Unpas'
        ];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Me',
        ];
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Jl abc No 123',
                    'kota' => 'Bandung',
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Jl Setiabudi no 44',
                    'kota' => 'bandung'
                ]
            ]
        ];

        return view('pages/contact', $data);
    }
}