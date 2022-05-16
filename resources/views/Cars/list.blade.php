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
            <table>
                <thead>
                    <tr>
                        <th>Lp</th>
                        <th>Marka</th>
                        <th>Model</th>
                        <th>Kolor</th>
                        <th>Szczegóły</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($cars as $car)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $car[0] }}</td>
                            <td>{{ $car[1] }}</td>
                            <td>{{ $car[2] }}</td>
                            <th><a href="/cars/show/{{ $loop->iteration }}">Zobacz</a></th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="/home">Strona główna</a>
        </div>
    </div>
</body>

</html>
