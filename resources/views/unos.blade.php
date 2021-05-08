<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        </h2>


        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="dashboard">Prikaz <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="unos">Unos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="greeting">Razno</a>
                    </li>
                </ul>
            </div>
        </nav>

        <form action="#" method="POST">
            @csrf
            <div class="form-group col-md-4">
                <label">Naziv</label>
                <input type="text" class="form-control" name="naziv">
            </div>
            <div class="form-group col-md-4">
                <label>Broj clanova</label>
                <input type="number" class="form-control" name="brojClanova">
            </div>
            <div class="form-group col-md-4">
                <label>Dan</label>
                <input type="text" class="form-control" name="dan">
            </div>
            <div class="form-group col-md-4">
                <label>Zavrsen</label>
                <input type="number" class="form-control" name="zavrsen">
            </div>
           <div class="form-group col-md-4">
                <label>User ID</label>
                <input type="number" class="form-control" name="user_id">
            </div>
            <div class="form-group col-md-4">
                <label>Jacina treninga</label>
                <input type="text" class="form-control" name="jacinaTreninga">
            </div>

            <button type="submit" class="btn btn-primary">Dodaj</a>
        </form>
    </x-slot>
</x-app-layout>