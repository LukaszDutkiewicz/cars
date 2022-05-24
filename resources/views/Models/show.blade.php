<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Model</title>
</head>

<body>
    <div class="container">
        <h1>{{ $model->name }}</h1>
        <h3>Szczegóły</h3>
        <a href="{{ route('models.list') }}">Powrót</a>
    </div>
</body>

</html>
