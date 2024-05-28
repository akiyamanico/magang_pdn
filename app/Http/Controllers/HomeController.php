<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateRequest;
use App\Models\Pengguna;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    public function index()
    {
        $data['user'] = Pengguna::get();
        return view('home/home', $data);
    }

    public function tambah()
    {
        return view('home/tambah');
    }

    public function save(UserRequest $r)
    {
        if ($r->validated()) {
            $foto = $r->foto->hashName();
            $r->foto->move('foto/', $foto);

            Pengguna::create([
                'nama' => $r->nama,
                'email' => $r->email,
                'telepon' => $r->telepon,
                'foto' => $foto,
            ]);
            return redirect('')->with('pesan', 'Data Sukses Ditambahkan');
        }
    }


    public function delete($id)
    {
        Pengguna::where('id',$id)->delete();
        return back();
    }
    public function edit($id){
        $data['pengguna'] = Pengguna::where('id', $id)->first();

        return view('home/edit', $data);
    }
    public function update(UpdateRequest $r, $id){
        if($r->validated()){

            if($r->foto){
                $cek = Pengguna::where('id', $id)->first();
                if(File::exists(public_path('foto/'.$cek->foto))){
                    File::delete(public_path('foto/'.$cek->foto));
                }
                $foto = $r->foto->getClientOriginalName();
                $r->foto->move('foto/', $foto);
                $data['foto'] = $foto;
            }
            // $data->save();
            $data['nama'] = $r->nama;
            $data['email'] = $r->email;
            $data['telepon'] = $r->telepon;

            Pengguna::where('id', $id)->update($data);
            return redirect('')->with('pesan', 'Data Sukses Diubah');
        }
    }
}
