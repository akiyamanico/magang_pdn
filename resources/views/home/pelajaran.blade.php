@extends('home.template')

@section('title')
Halaman Home
@endsection

@section('content')

<div class="flex justify-between">
    <div class="text-xl font-bold">Data User</div>
    <div>
        <a href="{{route('tambahmapel')}}" class="bg-blue-500 hover:bg-blue-700 text-white">
            Tambah Data
        </a>
    </div>
</div>
<table class="table w-full mt-5 border border-5">
    <thead>
        <tr class="border p-3 justify-center p-4">
            <th class="border p-3">No</th>
            <th class="border p-3">Mata Pelajaran</th>
            <th class="border p-3">Jadwal</th>
            <th class="border p-3">Nama Guru</th>
            <th class="border p-3">Tugas</th>
            <th class="border p-3">Deadline Tugas</th>
            <th class="border p-3">Aksi</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($matapelajaran as $i => $a)
            <tr class="relative items-center">
                <td>{{$i + 1}}</td>
                <td>{{$a -> matapelajaran}}</td>
                <td>{{$a -> jadwal}}</td>
                <td>{{$a -> namaguru}}</td>
                <td><img src="{{asset('foto/' . $a->tugas)}}" class="w-32"</td>
                <td>{{$a -> deadlinetugas}}</td>
                <td><div class="flex gap-3 justify-center">
                    <a href="{{route('editmapel', $a->id)}}" class="bg-blue-500 flex items-center justify-center text-sm hover:bg-blue-400 text-white rounded-md w-14 h-8">Edit</a>

                   
                
                    <a href="{{route('deletemapel', $a->id)}}" class="bg-red-500 flex items-center justify-center text-sm hover:bg-red-400 text-white rounded-md w-14 h-8">Hapus</a>
@endforeach
                </div>
                </td>
            </tr>

    </tbody>
</table>

@endsection