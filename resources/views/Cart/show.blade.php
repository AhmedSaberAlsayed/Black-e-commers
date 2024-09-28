<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php $total_amount= 0 ?>
    <table border="2">
        <tr>
            <th> product name</th>
            <th> user name</th>
            <th> product quantity</th>
            <th> total price </th>
        </tr>
            @foreach ($carts as $cart)
        <tr>
            <td>
                {{ $cart->product->name }}
            </td>
            <td>
                {{ $cart->user->name }}

            </td>
            <td>
                {{ $cart->quantity }}
                
            </td>
            <td>

                {{ $cart->total_price }}
            </td>
        </tr>
        <?php $total_amount = $cart->total_price + $total_amount ?>
        @endforeach
    </table>

    <h1> total amount:<?php echo $total_amount; ?> </h1>

    <form action="{{ route("cashh") }}" method="post">
        @csrf
        <input type="submit" value="Make order">
    </form>
    {{-- <a href="{{ route("cashh") }}"> make order</a> --}}
    
</body>
</html>