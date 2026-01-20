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
            'nama' => 'Rakha',
            'kelas' => 'XI PPLG 1',
            'sekolah' => 'SMK RADEN UMAR SAID',
            'hobi' => 'Org Ganteng',
            'email' => 'rakhanoor12@gmail.com',
            'nomorhp' => '081334142387'
        ];
        return view('profile', $data, [
            'title' => 'Profile'
        ]);
    }


}