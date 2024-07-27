<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelasControllerReski extends Controller
{
    function index(){
        //return('Ini adalah controller');
        $kelas= \DB::table('t_kelas_reski')->get();
        $data = array(
            'kelas' => $kelas,
            'content'=> 'kelas/index'
        );
        
        //return view ('kelas/index', $data);
        return view ('layout/wrapper',$data);
    }

    public function add(){
        //return view('kelas/add');
        $data = array('content'=> 'kelas/add');
        return view ('layout/wrapper',$data);
     }
 
    function add_proses(Request $request){
        // jangan lupa menambahkan {{ csrf_field() }} pada form
         \DB::table('t_kelas_reski')->insert([
             'id_kelas_reski'       => $request->id_kelas_reski, 
             'nama_kelas_reski'     => $request->nama_kelas_reski,  
             'lantai_kelas_reski'   => $request->lantai_kelas_reski,  
         ]);
       return redirect('kelas');
     }
 
     function edit($id){
         $kelas = \DB::table('t_kelas_reski')->where('id_kelas_reski',$id)->first();
         $data = array('rows' => $kelas,'content'=> 'kelas/edit');
         return view ('layout/wrapper',$data);
        //return view('kelas/edit',$data);
      }
 
      
     function edit_proses(Request $request){
         $jasa = \DB::table('t_kelas_reski')->where('id_kelas_reski',$request->nis)->update([
             'nama_kelas_reski'     => $request->nama_siswa,  
             'lantai_kelas_reski'         => $request->alamat,  
         ]);
         return redirect('kelas');
      }
 
      public function delete($id)
      {
          \DB::table('t_kelas_reski')->where('id_kelas_reski',$id)->delete();
          return redirect('kelas');
      }
}
