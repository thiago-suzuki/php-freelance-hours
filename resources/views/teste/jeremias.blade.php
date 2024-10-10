<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>

<body>
    oi jeremias

    @auth
        <span>Você está autenticado</span>
    @endauth

    @foreach (range(1, 20) as $key)
        <li>{{ $key }}</li>
    @endforeach
</body>

</html>