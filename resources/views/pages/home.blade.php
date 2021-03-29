@extends('base')

    
@section('content')

        <h1>Hello from Quebec!</h1>

        <p>It's currently {{ date("H:i A") }}.</p>

        @section('footer')
            <footer>
                <p>
                    &copy; Copyright {{date("Y")}} 
                    &middot; <a href="/about_us">About Us</a> 
                </p>
            </footer>
        @endsection

@endsection