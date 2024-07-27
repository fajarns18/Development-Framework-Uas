<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NIlaiControllerReski extends Controller
{
    function index(){
        //return('Ini adalah controller');
        $nilai= \DB::table('t_nilai_reski')->get();
        $data = array(
        'nilai' => $nilai, 'content' => 'nilai/index'
    );
        return view ( 'layout/wrapper',$data);
        //return view ('nilai/index', $data);
    }

    public function add(){
        //return view('nilai/add');
        $data = array('content'=> 'nilai/add');
        return view ('layout/wrapper',$data);
     }
 
    function add_proses(Request $request){
        // jangan lupa menambahkan {{ csrf_field() }} pada form
         \DB::table('t_nilai_reski')->insert([
             'id_nilai_reski'            => $request->id_nilai_reski, 
             'nilai_uts_reski'           => $request->nilai_uts_reski,  
             'nilai_tugas_reski'         => $request->nilai_tugas_reski,
             'nilai_kehadiran_reski'     => $request->nilai_kehadiran_reski,
             'nilai_uas_reski'           => $request->nilai_uas_reski,
             
         ]);
       return redirect('nilai');
     }
 
     function edit($id){
         $nilai = \DB::table('t_nilai_reski')->where('id_nilai_reski',$id)->first();
         $data = array('rows' => $nilai,'content'=> 'nilai/edit');
        return view ('layout/wrapper',$data);
         //return view('nilai/edit',$data);
      }
 
      
     function edit_proses(Request $request){
         $jasa = \DB::table('t_nilai_reski')->where('id_nilai_reski',$request->id_nilai_reski)->update([
             'nilai_uts_reski'        => $request->nilai_uts_reski,  
             'nilai_tugas_reski'      => $request->nilai_tugas_reski,
             'nilai_kehadiran_reski'  => $request->nilai_kehadiran_reski,
             'nilai_uas_reski'        => $request->nilai_uas_reski,
             
         ]);
         return redirect('nilai');
      }
 
      public function delete($id)
      {
          \DB::table('t_nilai_reski')->where('id_nilai_reski',$id)->delete();
          return redirect('nilai');
      }
}
