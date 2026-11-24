<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="{{route('administrators.store')}}" method="POST">
        <input type="text" name="user">
        <input type="password" name="password">
        <input type="submit" value="Enviar">

    </form>
</body>

</html>