<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('profile')}}" method="post">
        {{csrf_field()}}
        <label for="nom">nom</label>
        <input type="text" name="nom"> 
        <label for="email">email</label>
        <input type="text" name="email">
        <input type="number" name="n1">
        <input type="number" name="n2">
        <input type="submit">
    </form>
</body>
</html>