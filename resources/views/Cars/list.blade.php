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
        <div class="cars">
            <form action="{{ route('cars.list') }}" method="get">
                <div style="display: inline-block; margin: 3px;">
                    <label for="vin">Vin</label>
                    <input type="text" name="vin" id="vin">
                </div>
                <div style="display: inline-block; margin: 3px;">
                    <label for="model">Model</label>
                    <input type="text" name="model" id="model">
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
                    <button type="submit">Filtruj</button>
                </div>

                <table>
                    <thead>
                        <tr>
                            <th>Lp</th>
                            <th>VIN</th>
                            <th>Model</th>
                            <th>Kolor</th>
                            <th>Cena</th>
                            <th>Szczegóły</th>
                            <th>Usuń</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cars as $car)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $car->vin }}</td>
                                <td>{{ $car->model }}</td>
                                <td>{{ $car->color }}</td>
                                <td>{{ $car->price }}</td>
                                <td><a href="{{ route('cars.show', ['id' => $car->id]) }}">Zobacz</a></td>
                                <td>
                                    <form action="{{ route('cars.destroy', ['id' => $car->id]) }}" method="get">
                                        <button type="submit">Usuń</button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <a href="/home">Strona główna</a>
        </div>
    </div>
</body>

</html>
