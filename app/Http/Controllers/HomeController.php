<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // $data = [
        //     'Nama' => 'Putra',
        //     'Pekerjaan' => 'Ngerjain orang',
        // ];

        $Nama = "Putra";
        $Pekerjaan = "Programmer";
        $umur = '18';
        return view('home', compact('Nama', 'Pekerjaan', 'umur'));
    }
    public function contact()
    {
        return view('contact');
    }
}
