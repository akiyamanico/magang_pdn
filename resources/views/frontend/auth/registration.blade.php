@extends('frontend.auth.template')
@section('title')
  Registration 
@endsection

@section('content')
<div class="flex min-h-screen flex-col sm:py-12 justify-center bg-gray-400">
    <div class="bg-white px-6 pt-10 pb-10 shadow-xl ring-gray-900/5 sm:rounded flex flex-col mx-auto">
      <div class="container flex flex-row text-2xl px-20 mb-4 place-content-center">
        <form action="{{route('register.post')}}" method="post">
          @csrf
    <label>
        Silahkan isi Data!
   <label>
    </div>
    <label class="block text-gray-600 font-serif items-start mb-2 text-xl">
      Nama 
    </label><span>{{$errors->first('name')}}</span>
      <input type="text" name="name" value="{{old('name')}}" class="bg-white border border-gray-500 mb-2 text-2xl">
      <label class="block text-gray-600 font-serif items-start mb-2 text-xl">
      Email
    </label><span>{{$errors->first('email')}}</span>
      <input type="text" name="email" value="{{old('email')}}"  class="bg-white border border-gray-500 mb-2 text-2xl">
       <label class="text-gray-600 font-serif items-start mb-2 text-xl">
      Password
    </label><span>{{$errors->first('password')}}</span>
      <input name="password" class="bg-white border border-gray-500 mb-2 text-2xl" type="password">
      <a href="/login" class="flex place-content-center font-serif bg-gray-400 text-white rounded text-2xl mb-1" type="button">
  <button>
Register Now!
    </button>
</a>

</form>
    </div>
  </div>
</div>

@endsection
