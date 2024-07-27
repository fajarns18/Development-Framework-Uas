<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    function index(){
        //return('Ini adalah controller');

        $buku= \DB::table('t_buku')->get();
        $data = array('buku' => $buku,'content' => 'buku/index');
        //return view ('guru/index', $data);
        return view ('layout/wrapper',$data);
    }
    
    public function add(){
        $data = array('content'=> 'buku/add');
        return view ('layout/wrapper',$data);

        //return view('guru/add');
     }
 
    function add_proses(Request $request){
        // jangan lupa menambahkan {{ csrf_field() }} pada form
         \DB::table('t_buku')->insert([
             'id_buku'           => $request->id_buku, 
             'judul_buku'  => $request->judul_buku,  
             'Pengarang'        => $request->pengarang,  
         ]);
       return redirect('buku');
     }
 
     function edit($id){
         $buku = \DB::table('t_buku')->where('id',$id)->first();
         $data = array('rows' => $buku,'content' => 'buku/edit');
        return view ('layout/wrapper',$data);
         //return view('guru/edit',$data);
      }
 
      
     function edit_proses(Request $request){
         $ja = \DB::table('t_buku')->where('id',$request->id)->update([
            'id_buku'                   => $request->id_buku, 
            'judul_buku'          => $request->judul_buku,  
            'pengarang'                => $request->pengarang, 
         ]);
         return redirect('buku');
      }
 
      public function delete($id)
      {
          \DB::table('t_buku')->where('id',$id)->delete();
          return redirect('buku');
      }
}
