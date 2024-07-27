<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JadwalControllerReski extends Controller
{
    public function index(){
        $jadwal = \DB::table('t_jadwal_reski')->get();
        $data = array(
            'jadwal' => $jadwal,
            'content' => 'jadwal/index'
        );
        return view('layout.wrapper', $data);
    }

    public function add(){
        $data = array('content' => 'jadwal.add');
        return view('layout.wrapper', $data);
    }

    public function add_proses(Request $request){
        \DB::table('t_jadwal_reski')->insert([
            'id_jadwal_reski' => $request->id_jadwal_reski,
            'nama_pelajaran_reski' => $request->nama_pelajaran_reski,
            'waktu_reski' => $request->waktu_reski,
        ]);
        return redirect('jadwal');
    }

    public function edit($id){
        $jadwal = \DB::table('t_jadwal_reski')->where('id_jadwal_reski', $id)->first();
        $data = array(
            'rows' => $jadwal,
            'content' => 'jadwal.edit'
        );
        return view('layout.wrapper', $data);
    }

    public function edit_proses(Request $request){
        \DB::table('t_jadwal_reski')->where('id_jadwal_reski', $request->id_jadwal_reski)->update([
            'id_jadwal_reski' => $request->id_jadwal_reski,
            'nama_pelajaran_reski' => $request->nama_pelajaran_reski,
            'waktu_reski' => $request->waktu_reski,
        ]);
        return redirect('jadwal');
    }

    public function delete($id){
        \DB::table('t_jadwal_reski')->where('id_jadwal_reski', $id)->delete();
        return redirect('jadwal');
    }
}
