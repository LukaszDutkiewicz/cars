<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Samochody</title>
</head>

<body>
    <div class="container">
        <h3>Samochody</h3>
        <div class="nav">
            <div><a href="/">Strona główna</a></div>
            <br>
            <div><a href="{{ route('cars.create') }}">Stwórz samochód</a></div>
            <br>

        </div>
        <div class="cars">
            <div class="filters">
                <form action="{{ route('cars.list') }}" method="get">
                    <div style="display: inline-block; margin: 3px;">
                        <label for="vin">Vin</label>
                        <input type="text" name="vin" id="vin">
                    </div>
                    <div style="display: inline-block; margin: 3px;">
                        <label for="color">Kolor</label>
                        <input type="text" name="color" id="color">
                    </div>
                    <div style="display: inline-block; margin: 3px;">
                        <label for="minPrice">Cena</label>
                        <input type="text" name="minPrice" id="minPrice">
                    </div>
                    <div style="display: inline-block; margin: 3px;">
                        <label for="description">Opis</label>
                        <input type="text" name="description" id="description">
                    </div>
                    <div style="display: inline-block; margin: 3px;">
                        <button type="submit">Filtruj</button>
                    </div>
            </div>

            <table>
                <thead>
                    <tr>
                        <th>Lp</th>
                        <th>VIN</th>
                        <th>Kolor</th>
                        <th>Cena</th>
                        <th>Opis</th>
                        <th>Szczegóły</th>
                        <th>Edytuj</th>
                        <th>Usuń</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($cars as $car)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $car->vin }}</td>
                            <td>{{ $car->color }}</td>
                            <td>{{ $car->price }}</td>
                            <td>{{ $car->description }}</td>
                            <td><a href="{{ route('cars.show', ['id' => $car->id]) }}">Zobacz</a></td>
                            <td><a href="{{ route('cars.update', ['id' => $car->id]) }}">Edytuj</a></td>
                            <td>
                                <form action="{{ route('cars.destroy', ['id' => $car->id]) }}" method="post">
                                    <button type="submit">Usuń</button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
