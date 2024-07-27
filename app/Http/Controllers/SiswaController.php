<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    function index(){
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        $siswa= \DB::table('t_siswa')->get();
        $data = array('siswa' => $siswa,'content'=>'siswa/index');
        return view ('layout/wrapper',$data);
        //return view ('siswa/index', $data);
    }

    public function add(){
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        $data = array('content'=>'siswa/add');
        return view ('layout/wrapper',$data);
        //return view('siswa/add');
     }
 
    function add_proses(Request $request){
        // jangan lupa menambahkan {{ csrf_field() }} pada form
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
         \DB::table('t_siswa')->insert([
             'nis'       => $request->nis, 
             'nama_siswa'     => $request->nama_siswa,  
             'alamat'         => $request->alamat,  
         ]);
       return redirect('siswa');
     }
 
     function edit($id){
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
         $siswa = \DB::table('t_siswa')->where('nis',$id)->first();
         $data = array('rows' => $siswa, 'content'=>'siswa/edit');
        return view ('layout/wrapper',$data);
         //return view('siswa/edit',$data);
      }
 
      
     function edit_proses(Request $request){
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
         $jasa = \DB::table('t_siswa')->where('nis',$request->nis)->update([
             'nama_siswa'     => $request->nama_siswa,  
             'alamat'         => $request->alamat,  
         ]);
         return redirect('siswa');
      }
 
      public function delete($id)
      {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
          \DB::table('t_siswa')->where('nis',$id)->delete();
          return redirect('siswa');
      }

      //cetak semua siswa
      function cetak_siswa(){
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
         //$siswa = \DB::table('t_siswa')->where('nis',$id)->first();
         $siswa = \DB::table('t_siswa')->get();
         $data = array('siswa' => $siswa);
        return view ('siswa/cetak_data_siswa',$data);     
      }

      //cetak per siswa
      function cetak_biodata($id){
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
         $siswa = \DB::table('t_siswa')->where('nis',$id)->first();
         $data = array('siswa' => $siswa);
        return view ('siswa/cetak_biodata_siswa',$data);
      
      }
}
