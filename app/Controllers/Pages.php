<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'tittle' => 'Home | anda Gay'
        ];

        return view('pages/home', $data);
    }
    public function about()
    {
        $data = [
            'tittle' => 'About Me | anda Gay'
        ];
        return view('pages/about', $data);
    }
    public function contact()
    {
        $data = [
            'tittle' => 'Contact Us | anda Gay',
            'alamat' => [
                [
                    'bentuk' => 'rumah',
                    'kota' => 'pnk'
                ],
                [
                    'bentuk' => 'kontakan',
                    'kota' => 'tbs'
                ]
            ]
        ];
        return view('pages/contact', $data);
    }
}
