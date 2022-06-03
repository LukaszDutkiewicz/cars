<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <div class="container">
        <h1>Home</h1>
        <ul>
            <li><a href="{{ route('cars.list') }}">Samochody</a></li>
            <li><a href="{{ route('brands.list') }}">Marki</a></li>
            <li><a href="{{ route('models.list') }}">Modele</a></li>
            <li><a href="{{ route('cars.create') }}">Stwórz samochód</a></li>
            <li><a href="{{ route('users.list') }}">Lista użytkowników</a></li>
        </ul>
    </div>
</body>

</html>
