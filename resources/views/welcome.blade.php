<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/welcome-style.css') }}">
    
</head>
<body>
    <div class="card">
        
        <div class="title">Welcome To Cheque Management System</div>
        <div class="btn-container">
        @if (Route::has('login'))
            @auth
                <a href="{{ url('/home') }}" >Home</a>
            @else
                <a href="{{ route('login') }}">Log in</a>
    
                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
            @endif
        </div>
    </div>
</body>
</html>


{{-- @if (Route::has('login'))
    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
        @auth
            <a href="{{ url('/home') }}" >Home</a>
        @else
            <a href="{{ route('login') }}">Log in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
            @endif
        @endauth
    </div>
@endif --}}