@extends('base')

@section('title', 'About-Us | ' . config('app.name'))

@section('content')
        <img src="{{asset('img/chp.png')}}" alt="Book">

        <p>Build viwth &hearts; by Yvs Kilunga.</p>

        <p> <a href="{{route('home')}}">Revenir à la page d'accueil</a> </p>

@endsection
