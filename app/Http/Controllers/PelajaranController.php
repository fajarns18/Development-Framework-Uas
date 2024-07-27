<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelajaranController extends Controller
{
    function index(){
        //return('Ini adalah controller');

        $pelajaran= \DB::table('t_pelajaran')->get();
        $data = array('pelajaran' => $pelajaran, 'content' => 'pelajaran/index');
        return view ('layout/wrapper',$data);
        //return view ('pelajaran/index', $data);
    }

    public function add(){
        $data = array('content' => 'pelajaran/add');
        return view ( 'layout/wrapper',$data);
        return view('pelajaran/add');
     }
 
    function add_proses(Request $request){
        // jangan lupa menambahkan {{ csrf_field() }} pada form
         \DB::table('t_pelajaran')->insert([
             'id_pelajaran'       => $request->id_pelajaran, 
             'nama_pelajaran'     => $request->nama_pelajaran,  
             'id_kurikulum'       => $request->id_kurikulum,  
         ]);
       return redirect('pelajaran');
     }
 
     function edit($id){
         $pelajaran = \DB::table('t_pelajaran')->where('id_pelajaran',$id)->first();
         $data = array('rows' => $pelajaran, 'content' => 'pelajaran/edit');
         return view ('layout/wrapper',$data);
        //return view('pelajaran/edit',$data);
      }
 
      
     function edit_proses(Request $request){
         $jasa = \DB::table('t_pelajaran')->where('id_pelajaran',$request->id_pelajaran)->update([
            'id_pelajaran'       => $request->id_pelajaran, 
            'nama_pelajaran'     => $request->nama_pelajaran,  
            'id_kurikulum'         => $request->id_kurikulum,   
         ]);
         return redirect('pelajaran');
      }
 
      public function delete($id)
      {
          \DB::table('t_pelajaran')->where('id_pelajaran',$id)->delete();
          return redirect('pelajaran');
      }
}

