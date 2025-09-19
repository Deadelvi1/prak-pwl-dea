<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        $data = [
            'nama' => 'Dea Delvinata Riyan',
            'npm' => '2317051027',
            'kelas' => 'A'
        ];
        return view('profile', $data);
    }
}
