<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Place</title>
</head>
<body>
    <h1>Criar Local</h1>
    <form action="/places/store" method="POST">
        @csrf
        <input name="name" placeholder="Nome do Local" type="text">
        <input name="description" placeholder="Descrição" type="text">
        <input name="address" placeholder="Endereço" type="text">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>