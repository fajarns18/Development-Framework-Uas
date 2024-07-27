<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KurikulumControllerReski extends Controller
{
    function index(){
        //return('Ini adalah controller');
        $kurikulum= \DB::table('t_kurikulum_reski')->get();
        $data = array(
            'kurikulum' => $kurikulum,
            'content' => 'kurikulum/index'
    );
        //return view ('kurikulum/index', $data);
        return view ('layout/wrapper',$data);
    }

    public function add(){
        //return view('kurikulum/add');
        $data = array('content'=> 'kurikulum/add');
        return view ('layout/wrapper',$data);
     }
 
    function add_proses(Request $request){
        // jangan lupa menambahkan {{ csrf_field() }} pada form
         \DB::table('t_kurikulum_reski')->insert([
             'id_kurikulum'       => $request->id_kurikulum, 
             'nama_kurikulum'     => $request->nama_kurikulum,  
             'id_jurusan'         => $request->id_jurusan,  
         ]);
       return redirect('kurikulum');
     }
 
     function edit($id){
         $kurikulum = \DB::table('t_kurikulum_reski')->where('id_kurikulum',$id)->first();
         $data = array('rows' => $kurikulum,'content'=> 'kurikulum/edit');
         return view ('layout/wrapper',$data);
         //return view('kurikulum/edit',$data);
      }
 
      
     function edit_proses(Request $request){
         $jasa = \DB::table('t_kurikulum_reski')->where('id_kurikulum',$request->id_kurikulum)->update([
             'nama_kurikulum'     => $request->nama_kurikulum,  
             'id_jurusan'         => $request->id_jurusan,  
         ]);
         return redirect('kurikulum');
      }
 
      public function delete($id)
      {
          \DB::table('t_kurikulum_reski')->where('id_kurikulum',$id)->delete();
          return redirect('kurikulum');
      }
}
