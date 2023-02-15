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
                    <h1 class="mb-5"> Comics </h1>
                </div>
                <div class="col-12 mb-3 d-flex justify-content-between">
                    <a href=" {{route('home')}} " class="btn-primary">Back</a>
                    <a href=" {{route('comics.create')}} " class="btn btn-info">Create</a>
                </div>
                <div class="col-12">

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">title</th>
                                {{-- <th scope="col">description</th> --}}
                                {{-- <th scope="col">thumb</th> --}}
                                <th scope="col">price</th>
                                <th scope="col">series</th>
                                <th scope="col">sale_date</th>
                                <th scope="col">type</th>
                                <th scope="col">CRUD</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($comics as $comic)
                                <tr>
                                    <td>{{$comic->id}}</td>
                                    <td>{{$comic->title}}</td>
                                    {{-- <td>{{$comic->description}}</td> --}}
                                    {{-- <td>{{$comic->thumb}}</td> --}}
                                    <td>{{$comic->price}}</td>
                                    <td>{{$comic->series}}</td>
                                    <td>{{$comic->sale_date}}</td>
                                    <td>{{$comic->type}}</td>
                                    <td>
                                        <a href=" {{route('comics.show', $comic->id)}} " class="btn btn-primary">Show</a>
                                        <a href=" {{route('comics.edit', $comic->id)}} " class="btn btn-warning">Edit</a>
                                        <form action="{{ route('comics.destroy', $comic)}}" method="post" class="d-inline-block">
                                            @csrf
                                            @method('DELETE')

                                            <input type="submit" value="Cancella" class="btn btn-danger">
                                        </form>
                                        
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>

        </div>
    </main>

</body>

</html>
