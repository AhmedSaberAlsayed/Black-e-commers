<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="{{ asset("css/style.css")}}"> --}}
    <title>Document</title>
</head>
<body>
    <table border="2">
        <tr>
            <th> product name </th>
            <th> product quantity </th>
            <th> product price </th>
            <th> product category </th>
            <th> product image </th>
            <th> Quantity </th>
            <th> cart </th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>
                {{  $product->name }}
            </td>
            <td>
                {{  $product->quantity }}
            </td>
            <td>
                {{  $product->price }}
            </td>
            <td>
                {{$product->category->name}}
            </td>
            <td>
                <img src="{{ asset($product->image) }}" width="200px" height="200px" alt="image product">
            </td>
            
            
                <form action="{{ route("addtocart", $product->id) }}" method="post">
                    @csrf
                    <td>

                        <input type="number" min="1" name="quantity" >
                    </td>
                    <td>
                        <input type="submit" value="Add to cart">

                    </td>

                </form>
            
        </tr>
        @endforeach
    </table>

</body>
</html>
