<?php

namespace App\Http\Controllers;

use App\Http\Requests\KotaRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KotaController extends Controller
{
    public function index(){
        $data['kota'] = DB::table('kota')->leftJoin('provinsi', 'provinsi.id', 'kota.id_provinsi')->get();
        return view('kota/index', $data);
    }

    public function create(){
        $data['provinsi'] = DB::table('provinsi')->get();
       return view('kota/tambahkota', $data);
    }
    
    public function createKota(KotaRequest $r){
        if($r->validated()){
            DB::table('kota')->insert([
                'id_provinsi' => $r->id_provinsi,
                'nama_kota' => $r->nama_kota,
            ]);
            return redirect('/kota');
        }

    }
}
