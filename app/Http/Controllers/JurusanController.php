<?php

namespace App\Http\Controllers;

use App\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function index (){
        return Jurusan::all(); 
    }

    public function getJurusanById($id){
        return Jurusan::find($id);
    }
    
    public function create(request $request){
        $jurusan = new Jurusan;
        $jurusan->jurusan = $request->jurusan;
        $jurusan->save();

        return $jurusan;
    }

    public function update (request $request, $id){
        $jurusan = Jurusan::find($id);
        $jurusan->jurusan = $request->jurusan;
        $jurusan->save();
        
        return $jurusan;
    }

    public function delete ($id){
        $jurusan = Jurusan::find($id);
        $jurusan->delete();
        
        return "delete sukses";
    }
}
