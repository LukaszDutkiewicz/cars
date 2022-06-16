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
            <li><strong>Marka: </strong>{{ $car->brand->name }}</li>
            <li><strong>Model: </strong>{{ $car->model->name }}</li>
            <li><strong>Rejestracja: </strong>{{ $car->registration }}</li>
            <li><strong>Data rejestracji: </strong>{{ $car->registration_date }}</li>

        </ul>
        @if ($car->photo)
            <img src="/storage/{{ $car->photo }}" alt="" width=200>
        @endif
        <form action="{{ route('cars.addPhoto') }}" method='post' enctype="multipart/form-data">
            @csrf
            <div>
                <label for="file">Zdjęcie</label>
                <input type="file" id="file" name='file' accept="image/jpeg">
            </div>
            <div>
                <button type="submit">Dodaj</button>
            </div>
            <input type="hidden" name="id" value="{{ $car->id }}">
        </form>
        <a href="{{ route('cars.list') }}">Powrót</a>
    </div>
</body>

</html>
