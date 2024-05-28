<?php

namespace App\Http\Controllers;

use App\Http\Requests\pelajaran\TambahPelajaran;
use App\Models\Pelajaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class PelajaranController extends Controller
{
    public function index(){
        $data['matapelajaran'] = Pelajaran::get();
        return view('home/pelajaran', $data);
    }

    public function tambahmapel(){
        return view('home/TambahPelajaran');
    }

    
    public function save(TambahPelajaran $r)
    {
        if ($r->validated()) {
            $foto = $r->tugas->hashName();
            $r->tugas->move('foto/', $foto);

            Pelajaran::create([
                'matapelajaran' => $r->matapelajaran,
                'jadwal' => $r->jadwal,
                'namaguru' => $r->namaguru,
                'tugas' => $foto,
                'deadlinetugas' => $r->deadlinetugas,
            ]);
            return redirect('pelajaran')->with('pesan', 'Data Sukses Ditambahkan');
        }
    }
    public function edit($id){
        $data['matapelajaran'] = Pelajaran::where('id', $id)->first();

        return view('home/EditPelajaran', $data);
    }

    public function update(TambahPelajaran $r, $id){

        if($r->validated()){
            
            if($r->tugas){
                $cek = Pelajaran::where('id', $id)->first();
                if(File::exists(public_path('foto/.$cek->tugas'))){
                    File::delete(public_path('foto/.$cek->tugas'));
                }
                $foto = $r->tugas->getClientOriginalName();
                $r->tugas->move('foto/', $foto);
                $data['tugas'] = $foto;
            }
            $data['matapelajaran'] = $r->matapelajaran;
            $data['jadwal'] = $r->jadwal;
            $data['namaguru'] = $r->namaguru;
            $data['deadlinetugas'] = $r->deadlinetugas;

            Pelajaran::where('id',$id)->update($data);
            return redirect('pelajaran')->with('pesan', 'Data Sukses Diubah');
        } 
    }


    public function delete($id){
        Pelajaran::where('id',$id)->delete();
        return back();
    }
}
