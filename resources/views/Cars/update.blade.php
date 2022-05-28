<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stwórz samochód</title>
</head>

<body>
    <div class=container>
        <h1>Dodaj samochód</h1>
        <div class="nav">
            <a href="{{ route('cars.list') }}">Powrót</a>
            <br>
            <br>
        </div>
        <form action="{{ route('cars.update', ['id' => $car->id]) }}" method="post">
            <div>
                <label for="vin">Vin</label>
                <input type="text" name="vin" id="vin" value="{{ $car->vin }}">
            </div>
            <div>
                <label for="description">Opis</label>
                <input type="text" name="description" id="description" value="{{ $car->description }}">
            </div>
            <div>
                <label for="color">Kolor</label>
                <input type="text" name="color" id="color" value="{{ $car->color }}">
            </div>
            <div>
                <label for="price">Cena</label>
                <input type="text" name="price" id="price" value="{{ $car->price }}">
            </div>
            <div>
                <label for="registration_date">Data rejestracji</label>
                <input type="date" name="registration_date" id="registration_date"
                    value="{{ $car->registration_date }}">
            </div>
            <div>
                <label for="brand_id">Marka</label>
                <input type="number" name="brand_id" id="brand_id" value="{{ $car->brand_id }}">
            </div>
            <div>
                <label for="model_id">Model</label>
                <input type="number" name="model_id" id="model_id" value="{{ $car->model_id }}">
            </div>
            <button type="submit">Zaktualizuj</button>
        </form>

    </div>
</body>

</html>
