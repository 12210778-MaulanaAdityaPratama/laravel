<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){

        $data = [
            'nim' => '12210778',
            'nama' => 'Maulana Aditya Pratama',
            'alamat' => 'Rasau Jaya',
            'email' => 'aditya.neo5@gmail.com@gmail.com',
            'nohp' => '089693226048',
        ];
        return view('about', $data);
    }
}

