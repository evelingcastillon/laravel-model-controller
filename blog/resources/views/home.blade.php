<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>

        <div id="site_main">

            <section class="movies">

                <div class="container">
                    
                    @foreach ($movies as $movie)
                    <a class="movie">
                        <h2 class="">Titolo: {{ $movie->title }}</h2>
                        <h5>Titolo originale: {{$movie->original_title}}</h5>
                        <p>Nationality: {{$movie->nationality}}</p>
                        <p>Voto: {{$movie->vote}}</p>
                    </a>
                    @endforeach
                </div>
            </section>
        </div>
    </body>
</html>
