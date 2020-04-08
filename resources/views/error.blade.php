<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Something went wrong</title>

    <!-- Styles --> 
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet"> 
    <link href="{{ asset('css/error.css') }}" rel="stylesheet">
</head>
<body>
    <div class="error">
        <h1>Something went wrong!</h1>
    
        <ul>
            @if(is_array(Session::get('errors')))
                @foreach (Session::get('errors') as $error)
                    <li>{{$error}}</li>
                @endforeach
            @else
                @foreach (Session::get('errors')->messages() as $error)
                    @foreach ($error as $messageError)
                        <li>{{$messageError}}</li>
                    @endforeach
                @endforeach
            @endif
        </ul>
    
        <audio src="/sounds/error.mp3" id="error" autoplay="autoplay"></audio>
    </div>

    <script>
        window.onload=function(){
            document.getElementById("error").play();
        }
    </script>
</body>
</html>