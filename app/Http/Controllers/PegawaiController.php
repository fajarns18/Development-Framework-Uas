<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    function index(){
        //return('Ini adalah controller');
        $pegawai= \DB::table('t_pegawai')->get();
        $data = array('pegawai' => $pegawai, 'content'=>'pegawai/index');

        return view ( 'layout/wrapper',$data);
        //return view ('pegawai/index', $data);
    }

    public function add(){
        $data = array('content' => 'pegawai/add');
        return view ( 'layout/wrapper',$data);
        //return view('pegawai/add');
     }
 
    function add_proses(Request $request){
        // jangan lupa menambahkan {{ csrf_field() }} pada form
         \DB::table('t_pegawai')->insert([
             'id_pegawai'       => $request->id_pegawai, 
             'nama_pegawai'     => $request->nama_pegawai,  
             'alamat'         => $request->alamat,  
         ]);
       return redirect('pegawai');
     }
 
     function edit($id){
         $pegawai = \DB::table('t_pegawai')->where('id_pegawai',$id)->first();
         $data = array('rows' => $pegawai, 'content' => 'pegawai/edit');
         return view ('layout/wrapper',$data);
        //return view('pegawai/edit',$data);
      }
 
      
     function edit_proses(Request $request){
         $jasa = \DB::table('t_pegawai')->where('id_pegawai',$request->id_pegawai)->update([
             'nama_pegawai'     => $request->nama_pegawai,  
             'alamat'         => $request->alamat,  
         ]);
         return redirect('pegawai');
      }
 
      public function delete($id)
      {
          \DB::table('t_pegawai')->where('id_pegawai',$id)->delete();
          return redirect('pegawai');
      }
}
