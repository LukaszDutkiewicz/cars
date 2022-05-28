<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Marka</title>
</head>

<body>
    <div class="container">
        <h1>{{ $brand->name }}</h1>
        <div>
            <strong>Id: </strong><span>{{ $brand->id }}</span>
        </div>
        <ol>
            @foreach ($brand->cars as $car)
                <li>
                    <ul>
                        <li><strong>VIN:</strong> {{ $car->vin }}</li>
                        <li><strong>Kolor:</strong> {{ $car->color }}</li>
                        <li><strong>Cena:</strong>{{ $car->price }}</li>
                        <li><strong>Model:</strong> {{ $car->model->name }}</li>
                        <br>
                    </ul>
                </li>
            @endforeach
        </ol>

        <a href="{{ route('brands.list') }}">Powrót</a>
    </div>
</body>

</html>
