<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ruang_model;

class RuangController extends Controller
{
    public function index(){
        $myruang = new Ruang_model();
        $ruang = $myruang->tampil_ruang();
        
        $data = array('ruang' => $ruang);
        return view('ruang/index', $data);
    }
    public function tambah(){
        // return ('Testing');
        return view('ruang/tambah');
     }
 
     public function tambah_proses(Request $request){
         // return ('Testing Proses');
         $query = \DB::table('ruang')
         ->insert([
             'nama_ruang'  =>  $request->nama_ruang,
             'nomor'  =>  $request->nomor,
             
         ]);
         return redirect('ruang');
     }
 
     public function edit($id){
         // return ('Testing');
         $ruang = \DB::table('ruang')->where('id', $id)->first();
         //dd($akun);
         $data = array('ruang' => $ruang);
         return view('ruang/edit', $data);
     }
 
     public function edit_proses(Request $request){
         // return ('Testing Proses');
         $query = \DB::table('ruang')->where('id',$request->id)
         ->update([
            'nama_ruang'  =>  $request->nama_ruang,
            'nomor'  =>  $request->nomor,
            
            
         ]);
         return redirect('ruang');
     }
 
     public function delete ($id){
         $query = \DB::table('ruang')->where('id',$id)->delete();
         return redirect('ruang');
     }
}
