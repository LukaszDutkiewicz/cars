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
        <form action="{{ route('cars.create') }}" method="post">
            <div>
                <label for="vin">Vin</label>
                <input type="text" name="vin" id="vin">
            </div>
            <div>
                <label for="description">Opis</label>
                <input type="text" name="description" id="description">
            </div>
            <div>
                <label for="color">Kolor</label>
                <input type="text" name="color" id="color">
            </div>
            <div>
                <label for="price">Cena</label>
                <input type="text" name="price" id="price">
            </div>
            <div>
                <label for="registration_date">Data rejestracji</label>
                <input type="date" name="registration_date" id="registration_date">
            </div>
            <div>
                <label for="brand_id">Marka</label>
                <input type="number" name="brand_id" id="brand_id">
            </div>
            <div>
                <label for="model_id">Model</label>
                <input type="number" name="model_id" id="model_id">
            </div>
            <button type="submit">Dodaj</button>
        </form>
        <a href="{{ route('cars.list') }}">Powrót</a>
    </div>
</body>

</html>
