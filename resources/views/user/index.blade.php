<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="2">
        <tr>
            <th>#</th>
            <th>name</th>
            <th>email</th>
            <th>password</th>
            <th>phone</th>
            <th>update</th>
            <th>delete</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }} </td>
            <td>{{ $user->name }} </td>
            <td>{{ $user->email }} </td>
            <td>{{ $user->password }} </td>
            <td>{{ $user->phone }} </td>
            <td>
                <a href="{{ route('edit.user',$user->id) }}">update</a>
            </td>
            <td>
                <a href="{{route("delete.user",$user->id)}}">delete</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>