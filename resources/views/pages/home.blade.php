@extends('base')


@section('content')

        <img src="{{asset('img/book.png')}}" alt="Book" class="mt-12 raounded shadow-md h-32">

        <h1 class="my-5 text-3xl sm:text-5xl font-semibold text-indigo-600">Hello from Lubumbashi!</h1>

        <p class="text-lg text-gray-800">It's currently {{ date("H:i A") }}.</p>

@endsection
