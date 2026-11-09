<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dragon Ball saga card</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container mt-5">
        <div class="card mx-auto" style="width: 22rem;">
            <div class="card-body">
                <h2 class="card-title">{{ $film['title'] }}</h2>
                <p class="card-text">Genere: {{ $film['genere'] }}</p>
                <p class="card-text">Anno di uscita: {{ $film['anno di uscita'] }}</p>
                <p class="card-text">Regista: {{ $film['regista'] }}</p>
            </div>
        </div>
    </div>
    
</body>
</html>