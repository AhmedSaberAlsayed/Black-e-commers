<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route("store.category") }}" method="post">
        @csrf
        <input type="text" name="category_name">
        <input type="submit" value="Add category">
    </form>
</body>
</html>