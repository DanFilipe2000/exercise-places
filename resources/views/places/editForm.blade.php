<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Place</title>
</head>
<body>
    <h1>Editar Local</h1>
    <form action="/places/update/{{ $place->id }}" method="POST">
        @csrf
        <input name="name" value="{{ $place->name }}" placeholder="Nome do Local" type="text">
        <input name="description" value="{{ $place->description }}" placeholder="Descrição" type="text">
        <input name="address" value="{{ $place->address }}" placeholder="Endereço" type="text">
        <button type="submit">Enviar</button>
    </form>
    <a href="/places/delete/{{ $place->id }}">Deletar</a>
</body>
</html>