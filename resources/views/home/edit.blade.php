@extends('home.template')

@section('title')
Edit Data
@endsection

@section('content')
<form action="{{route('update', $pengguna->id)}}" enctype="multipart/form-data" method="post">
    @csrf
    <div class="flex flex-col gap-2">
    <span>{{$errors->first('nama')}}</span>
        <label for="">Nama</label>
        <input type="text" name="nama" value="{{$pengguna->nama}}" class="p-2 border rounded-md">

    </div>
    <div class="flex flex-col gap-2">
        <label for="">Email</label>
        <input type="text" name="email" value="{{$pengguna->email}}" class="p-2 border rounded-md">
        <span>{{$errors->first('email')}}</span>
    </div>
    <div class="flex flex-col gap-2">
        <label for="">Telpon</label>
        <input type="text" name="telepon" value="{{$pengguna->telepon}}" class="p-2 border rounded-md">
        <span>{{$errors->first('telepon')}}</span>
    </div>
    <div class="flex flex-col gap-2">
        <label for="">Foto</label>
        <input type="file" name="foto" class="p-2 border rounded-md">
        <span>{{$errors->first('foto')}}</span>
    </div>
    <div class="flex justify-end">
        <button type="submit" class="bg-blue-500 w-1/2 p-2 rounded text-white">Simpan</button>
    </div>
</form>
@endsection