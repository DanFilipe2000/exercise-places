<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Praça Central</title>
</head>
<body>
    <h1>Praça Central</h1>

    <ul>
        @foreach ($places as $item)
            <li>{{ $item->name }}</li>
            <a href="/places/show/{{ $item->id }}">Detalhes</a>
        @endforeach
    </ul>
</body>
</html>