<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Użytkownicy</title>
</head>

<body>
    <div class="container">
        <h3>Użytkownicy</h3>
        <div class="users">
            <div class="nav">
                <a href="/">Strona główna</a>
                <br>
                <br>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Lp</th>
                        <th>Nazwa</th>
                        <th>Mail</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>


        </div>
    </div>
</body>

</html>
