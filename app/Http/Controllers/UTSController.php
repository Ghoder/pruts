<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UTSController extends Controller
{
    public function index()
    {
        return view('uts.index');
    }
    public function create()
    {
        return view('uts.create');
    }
    public function list()
    {
        $mhs = [
            [
                "id" => "1",
                "nama_lengkap" => "Risky ratama",
                "nim" => "22104410126",
                "jurusan" => "Teknik Informatika",
                "semester" => "4",
            ],
            [
                "id" => "2",
                "nama_lengkap" => "Ramadhan Ilham Nugroho",
                "nim" => "22104410097",
                "jurusan" => "Teknik Informatika",
                "semester" => "4",
            ],
            [
                "id" => "3",
                "nama_lengkap" => "Fathu Sony Zamzami",
                "nim" => "22104410076",
                "jurusan" => "Teknik Informatika",
                "semester" => "4",
            ],
            [
                "id" => "4",
                "nama_lengkap" => "Muhamad Khabibud Dhakhiya ",
                "nim" => "22104410103",
                "jurusan" => "Teknik Informatika",
                "semester" => "4",
            ],
            [
                "id" => "1",
                "nama_lengkap" => "Muhammad Kharisudin",
                "nim" => "22104410094",
                "jurusan" => "Teknik Informatika",
                "semester" => "4",
            ],
        ];
        $mhs = json_decode(json_encode($mhs));
        return view('uts.list', [
            "mhs" => $mhs
        ]);
    }
    public function store(Request $req)
    {
        dd($req);
        
        $mhs = [
            "nama_lengkap" => $req->nama_lengkap,
            "nim" => $req->nim,
            "jurusan" => $req->jurusan,
            "alamat" => $req->alamat,
            "telp" => $req->telp,
            "semester" => $req->semester,
        ];
        $mhs = json_decode(json_encode($mhs));
        return redirect('/uts/create')->with('pass-key', "Data Mahasiswa Berhasil Disimpan")->with('mhs', $mhs);
    }
}
