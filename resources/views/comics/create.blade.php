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
                    <h1 class="mb-3"> Create Comic </h1>
                </div>
                <div class="col-12 mb-5">
                    <a href=" {{route('comics.index')}} " class="btn-primary">Back</a>
                </div>
                <div class="col-12">
                    <form action="{{ route('comics.store') }}" method="POST">
                        @csrf
                        <div class="row g-4">
                            <div class="col-4">
                                <label for="title">Title</label>
                                <input type="text" name="title" id="title">
                            </div>
                            <div class="col-4">
                                <label for="description">Description</label>
                                <input type="text" name="description" id="description">
                            </div>
                            <div class="col-4">
                                <label for="thumb">Thumb</label>
                                <input type="text" name="thumb" id="thumb">
                            </div>
                            <div class="col-3">
                                <label for="price">price</label>
                                <input type="number" step="0.01" name="price" id="price">
                            </div>
                            <div class="col-3">
                                <label for="series">Series</label>
                                <input type="text" name="series" id="series">
                            </div>
                            <div class="col-3">
                                <label for="sale_date">aale date</label>
                                <input type="date" name="sale_date" id="sale_date">
                            </div>
                            <div class="col-3">
                                <label for="type">Type</label>
                                <input type="text" name="type" id="type">
                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                <button type="submit">Invia</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

</body>

</html>
