@extends('frontend.auth.template')
@section('title')
  Login
@endsection

@section('content')
<div class="flex min-h-screen flex-col sm:py-12 justify-center bg-gray-400">
    <div class="bg-white px-6 pt-10 pb-10 shadow-xl ring-gray-900/5 sm:rounded flex flex-col mx-auto">
      <div class="container flex flex-row text-2xl px-20 mb-4 place-content-center">
        <form action="{{route('login')}}" method="post">
        @csrf
    <label>
      Selamat Datang !
   <label>
    </div>
    <label class="block text-gray-600 font-serif items-start mb-2 text-xl">
      Email
    </label>
      <input name="email" class="bg-white border border-gray-500 mb-2 text-2xl">
       <label class="text-gray-600 font-serif items-start mb-2 text-xl">
      Password
    </label>
      <input name="password" class="bg-white border border-gray-500 mb-2 text-2xl" type="password">
  <button class="flex place-content-center font-serif bg-gray-400 text-white rounded text-2xl mb-1" type="submit">
  Login
    </button>
      <div class="flex flex-row items-end">
        <a href="{{route('register')}}">
      <span class="text-gray-600">
        Don't have account yet?
</span>
<br>
@if(session('pesan'))
    <span>{{session('pesan')}}</span>
      @endif
        </a>
</form>
      </div>
    </div>
  </div>
</div>

@endsection