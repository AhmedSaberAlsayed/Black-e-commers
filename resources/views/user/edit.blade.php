<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route("update.user") }}" method="POST">
        @csrf
        <input type="hidden" name="id"  value="{{ $user->id }}" >
        <input type="text" name="name_user" placeholder="Enter your name ...." value="{{ $user->name }}" >
        <input type="email" name="email" placeholder="Enter your email ...." value="{{ $user->email }}">
        <input type="text" name="password" placeholder="Enter your password ...." value="{{ $user->password }}" >
        <input type="text" name="phone" placeholder="Enter your phone ...." value="{{ $user->phone }}">
        <input type="submit" value="update user">
    </form>
</body>
</html>
