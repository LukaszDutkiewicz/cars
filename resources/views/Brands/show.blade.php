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
        <h3>Szczegóły</h3>
        <a href="{{ route('brands.list') }}">Powrót</a>
    </div>
</body>

</html>
