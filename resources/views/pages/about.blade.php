@extends('base')

@section('title', 'About-Us | ' . config('app.name'))

@section('content')
        <img src="{{asset('img/chp.png')}}" alt="Book" class="my-12 raounded shadow-md h-32">

        <h2 class="mb-3 text-lg text-gray-700">
          Build with <span class="text-pink-500">&hearts;</span> by Yvs Kilunga.
        </h2>

        <p> <a href="{{route('home')}}" class="text-indigo-500 hover:text-indigo-900">Revenir à la page d'accueil</a> </p>

@endsection
