<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        return view("beranda", [
            "title" => "Beranda"
        ]);
    }
    public function profil()
    {
        $data = [
            'nama' => 'Zaky',
            'kelas' => 'XI PPLG 1',
            'sekolah' => 'SMK RADEN UMAR SAID',
            'hobi' => 'Tidur, Makan, Belajar, Main Roblox',
            'email' => 'zack.aryasatya@gmail.com',
            'nomorhp' => '081312341020 / 08889797791'
        ];
        return view('profile', $data, [
            'title' => 'Profile'
        ]);
    }


}