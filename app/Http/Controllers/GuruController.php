<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuruController extends Controller
{
    function index(){
        //return('Ini adalah controller');
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        $guru= \DB::table('t_guru')->get();
        $data = array('guru' => $guru,'content' => 'guru/index');
        //return view ('guru/index', $data);
        return view ('layout/wrapper',$data);
    }
    
    public function add(){
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        $data = array('content'=> 'guru/add');
        return view ('layout/wrapper',$data);

        //return view('guru/add');
     }
 
    function add_proses(Request $request){
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        // jangan lupa menambahkan {{ csrf_field() }} pada form
         \DB::table('t_guru')->insert([
             'nip'           => $request->nip, 
             'nama_pegawai'  => $request->nama_pegawai,  
             'alamat'        => $request->alamat,  
         ]);
       return redirect('guru');
     }
 
     function edit($id){
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
         $guru = \DB::table('t_guru')->where('nip',$id)->first();
         $data = array('rows' => $guru);
        return view ('layout/wrapper',$data);
         //return view('guru/edit',$data);
      }
 
      
     function edit_proses(Request $request){
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
         $ja = \DB::table('t_guru')->where('nip',$request->nip)->update([
            'nip'                   => $request->nip, 
            'nama_pegawai'          => $request->nama_pegawai,  
            'alamat'                => $request->alamat, 
         ]);
         return redirect('guru');
      }
 
      public function delete($id)
      {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
          \DB::table('t_guru')->where('nip',$id)->delete();
          return redirect('guru');
      }
}
