@extends('home.template')

@section('title')
Halaman Home
@endsection

@section('content')
<div class="flex justify-between">
    <div class="text-xl font-bold">Data User</div>
    <div>
        <a href="{{route('tambahkota')}}" class="bg-blue-500 hover:bg-blue-700 text-white">
            Tambah Data
        </a>
    </div>
</div>
<table class="table w-full mt-5 border border-5">
    <thead>
        <tr class="border p-3 justify-center p-4">
            <th class="border p-3">No</th>
            <th class="border p-3">Nama Provinsi</th>
            <th class="border p-3">Nama Kota</th>
            <th class="border p-3">#</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($kota as $i => $d)
            <tr class="relative items-center">
                <td>{{$i + 1}}</td>
                <td>{{$d->nama_provinsi}}</td>
                <td>{{$d->nama_kota}}</td>
                <td>
                    <div class="flex gap-3 justify-center">
                        <a href="{{route('edit', $d->id)}}"
                            class="bg-blue-500 flex items-center justify-center text-sm hover:bg-blue-400 text-white rounded-md w-14 h-8">Edit</a>
                        <a href="{{route('delete', $d->id)}}"
                            class="bg-red-500 flex items-center justify-center text-sm hover:bg-red-400 text-white rounded-md w-14 h-8">Hapus</a>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection