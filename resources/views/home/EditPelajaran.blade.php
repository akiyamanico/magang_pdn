@extends('home.template')

@section('title')
Tambah Mapel
@endsection

@section('content')
<form action="{{route('updatemapel', $matapelajaran->id)}}" enctype="multipart/form-data" method="post">
    @csrf
    <div class="flex flex-col gap-2">
    <span>{{$errors->first('')}}</span>
        <label for="">Mata Pelajaran</label>
        <input type="text" name="matapelajaran" value="{{$matapelajaran->matapelajaran}}" class="p-2 border rounded-md">

    </div>
    <div class="flex flex-col gap-2">
        <label for="">Jadwal</label>
        <input type="text" name="jadwal" value="{{$matapelajaran->jadwal}}" class="p-2 border rounded-md">
        <span>{{$errors->first('email')}}</span>
    </div>
    <div class="flex flex-col gap-2">
        <label for="">Nama Guru</label>
        <input type="text" name="namaguru" value="{{$matapelajaran->namaguru}}" class="p-2 border rounded-md">
        <span>{{$errors->first('telepon')}}</span>
    </div>
    <div class="flex flex-col gap-2">
        <label for="">Tugas</label>
        <input type="file" name="tugas" class="p-2 border rounded-md">
        <span>{{$errors->first('foto')}}</span>
    </div>
    <div class="flex flex-col gap-2">
        <label for="">Deadline Tugas</label>
        <input type="text" name="deadlinetugas" value="{{$matapelajaran->deadlinetugas}}" class="p-2 border rounded-md">
        <span>{{$errors->first('telepon')}}</span>
    </div>
    <div class="flex justify-end">
        <button type="submit" class="bg-blue-500 w-1/2 p-2 rounded text-white">Simpan</button>
    </div>
</form>
@endsection