<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Samochód</title>
</head>

<body>
    <div class="container">
        <h1>{{ $car->vin }}</h1>
        <h3>Szczegóły</h3>
        <ul>
            <li><strong>Kolor: </strong>{{ $car->color }}</li>
            <li><strong>Cena: </strong>{{ $car->price }}</li>
            <li><strong>Opis: </strong>{{ $car->description }}</li>
        </ul>
        <a href="{{ route('cars.list') }}">Powrót</a>
    </div>
</body>

</html>
