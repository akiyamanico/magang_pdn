@extends('home.template')

@section('title')
Halaman Home
@endsection

@section('content')
<div class="flex justify-between">
    <div class="text-xl font-bold">Data User</div>
    <div>
        <a href="{{route('tambah')}}" class="bg-blue-500 hover:bg-blue-700 text-white">
            Tambah Data
        </a>
    </div>
</div>
<table class="table w-full mt-5 border border-5">
    <thead>
        <tr class="border p-3 justify-center p-4">
            <th class="border p-3">No</th>
            <th class="border p-3">Nama</th>
            <th class="border p-3">Email</th>
            <th class="border p-3">Telepon</th>
            <th class="border p-3">Foto</th>
            <th class="border p-3">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($user as $i => $a)
            <tr class="relative items-center">
                <td>{{$i + 1}}</td>
                <td>{{$a->nama}}</td>
                <td>{{$a->email}}</td>
                <td>{{$a->telepon}}</td>
                <td class="flex justify-center border"><img src="{{asset('foto/' . $a->foto)}}" alt="" class="w-16"></td>
                <td><div class="flex gap-3 justify-center">
                    <a href="{{route('edit', $a->id)}}" class="bg-blue-500 flex items-center justify-center text-sm hover:bg-blue-400 text-white rounded-md w-14 h-8">Edit</a>

                   
                
                    <a href="{{route('delete', $a->id)}}" class="bg-red-500 flex items-center justify-center text-sm hover:bg-red-400 text-white rounded-md w-14 h-8">Hapus</a>

                </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection