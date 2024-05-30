@extends('home.template')

@section('title')
Edit Data
@endsection

@section('content')
<form action="{{route('createkota')}}" enctype="multipart/form-data" method="post">
    @csrf
    <div class="flex flex-col gap-2">
    <span>{{$errors->first('nama')}}</span>
        <label for="">Nama Kota</label>
        <input type="text" name="nama_kota" value="{{old('nama_kota')}}" class="p-2 border rounded-md">
    </div>
    <div class="flex flex-col gap-2 py-6">
        <select name="id_provinsi" id="id_provinsi" class="p-2 border rounded-md">
        @foreach($provinsi as $d)    
<option value="{{$d->id}}">{{$d->nama_provinsi}}</option>
    @endforeach
    </select>
    <div class="flex justify-end">
        <button type="submit" class="bg-blue-500 w-1/2 p-2 rounded text-white">Simpan</button>
    </div>
    </div>
</form>
@endsection