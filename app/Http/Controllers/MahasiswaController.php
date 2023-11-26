<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {

        $data_mahasiswa=Mahasiswa::all();
        return view ('alumni',compact('data_mahasiswa'));

    }

}
