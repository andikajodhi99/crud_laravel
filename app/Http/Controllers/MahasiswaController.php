<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index (){
        return Mahasiswa::join('jurusan', 'mahasiswa.jurusan_id', '=', 'jurusan.id')->get();
    }

    public function create(request $request){
        $mahasiswa = new Mahasiswa;
        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->tanggal_lahir = $request->tanggal_lahir;
        $mahasiswa->agama = $request->agama;
        $mahasiswa->jenis_kelamin = $request->jenis_kelamin;
        $mahasiswa->jurusan_id = $request->jurusan_id;
        $mahasiswa->save();

        return $mahasiswa;
    }

    public function update (request $request, $nim){
        $mahasiswa = Mahasiswa::where('nim', $nim)->first();
        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->tanggal_lahir = $request->tanggal_lahir;
        $mahasiswa->agama = $request->agama;
        $mahasiswa->jenis_kelamin = $request->jenis_kelamin;
        $mahasiswa->jurusan_id = $request->jurusan_id;

        $mahasiswa->save();
        
        return $mahasiswa;
    }

    public function delete ($nim){
        $mahasiswa = Mahasiswa::where('nim', $nim)->first();
        $mahasiswa->delete();
        
        return "delete sukses";
    }
}
