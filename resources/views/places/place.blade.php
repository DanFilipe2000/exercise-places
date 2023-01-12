<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Local</h1>
    <ul>
        <li>Nome: {{ $place->name }}</li>
        <li>Descrição: {{ $place->description }}</li>
        <li>Endereço: {{ $place->address }}</li>
    </ul>
    <a href="/places/edit/{{ $place->id }}">Editar</a>
</body>
</html>