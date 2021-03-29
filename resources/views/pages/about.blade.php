@extends('base')

@section('title', 'About-Us | ' . env('APP_NAME'))

@section('content')

        <p>Build viwth &hearts; by Yvs Kilunga.</p>

        <p> <a href="/">Revenir à la page d'accueil</a> </p>

        @section('footer')
            <footer> <p> &copy; Copyright {{date("Y")}}</p></footer>
        @endsection

        
@endsection