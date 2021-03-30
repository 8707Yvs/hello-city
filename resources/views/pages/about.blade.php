@extends('base')

@section('title', 'About-Us | ' . config('app.name'))

@section('content')

        <p>Build viwth &hearts; by Yvs Kilunga.</p>

        <p> <a href="{{route('home')}}">Revenir à la page d'accueil</a> </p>

        @section('footer')
            <footer> <p> &copy; Copyright {{date("Y")}}</p></footer>
        @endsection


@endsection
