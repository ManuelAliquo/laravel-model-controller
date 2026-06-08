<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(["resources/sass/app.scss", "resources/js/app.js"])
    <title>Document</title>
</head>
<body class="bg-secondary">
    <header class="bg-light pt-4 pb-3">
        <h1 class="text-center m-0 fw-bold">My Favorite Movies</h1>
    </header>
    <div class="container my-5">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-3 justify-content-center">
            @foreach ($movies as $movie)
                <div class="col">
                    <ul class="h-100 list-unstyled m-0 card py-4 d-flex flex-column align-items-center gap-2">
                        <li class="fs-4 text-center fw-bold">{{$movie["original_title"]}}</li>
                        <li>{{$movie["date"]}}</li>
                        <li>IMDb: <b>{{$movie["vote"]}}/10</b></li>
                    </ul>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>