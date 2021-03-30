@extends('base')


@section('content')

        <img src="{{asset('img/book.png')}}" alt="Book">

        <h1>Hello from Quebec!</h1>

        <p>It's currently {{ date("H:i A") }}.</p>

@endsection
