<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route("store.user") }}" method="POST">
        @csrf
        <input type="text" name="name_user" placeholder="Enter your name ....">
        <input type="email" name="email" placeholder="Enter your email ....">
        <input type="text" name="password" placeholder="Enter your password ....">
        <input type="text" name="phone" placeholder="Enter your phone ....">
        <input type="submit" value="Add user">
    </form>
</body>
</html>