<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h3>Samochód</h3>
    <h3>{{ $details['title'] }}</h3>
    <p>
        Marka: {{ $details['brand'] }} <br>
        Model: {{ $details['model'] }} <br>
        Opis: {{ $details['description'] }} <br>
        Kolor: {{ $details['color'] }} <br>
        Cena: {{ $details['price'] }} <br>
        Nr rejestracyjny: {{ $details['registration'] }} <br>
        Data resestracji: {{ $details['registration_date'] }} <br>
    </p>
</body>

</html>
