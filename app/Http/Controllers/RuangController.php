<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RuangController extends Controller
{
    function index(){
        //return('Ini adalah controller');

        $ruang= \DB::table('t_ruang')->get();
        $data = array('ruang' => $ruang,'content' => 'ruang/index');
        //return view ('guru/index', $data);
        return view ('layout/wrapper',$data);
    }
    
    public function add(){
        $data = array('content'=> 'ruang/add');
        return view ('layout/wrapper',$data);

        //return view('guru/add');
     }
 
    function add_proses(Request $request){
        // jangan lupa menambahkan {{ csrf_field() }} pada form
         \DB::table('t_ruang')->insert([
             'id_ruang'           => $request->id_ruang, 
             'nama_ruang'  => $request->nama_ruang,  
             'kapasitas'        => $request->kapasitas,  
         ]);
       return redirect('ruang');
     }
 
     function edit($id){
         $ruang = \DB::table('t_ruang')->where('id_ruang',$id)->first();
         $data = array('rows' => $ruang, 'content' => 'ruang/edit');
        return view ('layout/wrapper',$data);
         //return view('guru/edit',$data);
      }
 
      
     function edit_proses(Request $request){
         $ja = \DB::table('t_ruang')->where('id',$request->id)->update([
            'id_ruang'                   => $request->id_ruang, 
            'nama_ruang'          => $request->nama_ruang,  
            'kapasitas'                => $request->kapasitas, 
         ]);
         return redirect('ruang');
      }
 
      public function delete($id)
      {
          \DB::table('t_ruang')->where('id',$id)->delete();
          return redirect('ruang');
      }
}
