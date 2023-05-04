<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
         @vite('resources/js/app.js')
    </head>
    <body>

        <h1 class="text-center py-3">MOVIES</h1>
       
        <div class="contain d-flex flex-row flex-wrap col-8 gap-3 mx-auto">
            {{-- <div class="card flex-row" style="width: 18rem;"> --}}
                @foreach ($movies as $movie )
                    {{-- <ul class="list-group ">
                        <li class="list-group-item">Title: {{ $movie->title }}</li>
                        <li class="list-group-item">Original title: {{ $movie->original_title }}</li>
                        <li class="list-group-item">Nationality: {{ $movie->nationality }}</li>
                        <li class="list-group-item">Release date: {{ $movie->date }}</li>
                        <li class="list-group-item">Vote :{{ $movie->vote }}</li>
                    </ul> --}}
                    <div class="card" style="width: 18rem;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Title: {{ $movie->title }}</li>
                            <li class="list-group-item">Original title: {{ $movie->original_title }}</li>
                            <li class="list-group-item">Nationality: {{ $movie->nationality }}</li>
                            <li class="list-group-item">Release date: {{ $movie->date }}</li>
                            <li class="list-group-item">Vote :{{ $movie->vote }}</li>
                        </ul>
                    </div>
                    
                @endforeach
            {{-- </div> --}}
        </div>
    </body>
</html>
