<?php
namespace App\Http\Controllers;

// use App\Models\GuruController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MapelController extends Controller{

    public function proses(Request $request){
        // insert data ke table guru
        // DB::table('guru')->insert([
        //     'nama' => $request->nama,
        //     'alamat' => $request->alamat,
        //     'tempatlahir' => $request->tempatlahir,
        //     'tanggallahir' => $request->tanggallahir
        // ]);

        // return redirect('/crudguru');
    }

    // public function tambah(){

    //     return view('crudtambah');
    // }


    public function index(){
        // mengambil data dari table guru
        $subjek = DB::table('subjek')->get();

        // mengirim data guru ke view index
        return view('crudsubjek', ['subjek' => $subjek]);
    }
}

