<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="mb-3"> Single Comic </h1>
                    <div class="mb-3">
                        <a href=" {{route('comics.index')}} " class="btn-primary">Back</a>
                    </div>
                    <div class="card">
                        <div class="card-title">
                            <h3>{{$comic->title}}</h3>
                        </div>
                        <div class="card-img">
                            <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
                        </div>
                        <div class="card-body">
                            <h5>Description:</h5>
                            <p>{{$comic->description}}</p>
                            <h5>Price: </h5>
                            <p>{{$comic->price}}</p>
                            <h5>Series: </h5>
                            <p>{{$comic->series}}</p>
                            <h5>Sale Date: </h5>
                            <p>{{$comic->sale_date}}</p>
                            <h5>Type: </h5>
                            <p>{{$comic->type}}</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </main>

</body>

</html>
