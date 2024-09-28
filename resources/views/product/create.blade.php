<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route("store.product") }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="Enter Product name" >
        <input type="number" name="quantity" placeholder="Enter quantity" >
        <input type="number" name="price" placeholder="Enter price" >
        <input type="number" name="category_id" placeholder="Enter category_id" >
        <input type="file" name="image" placeholder="Enter image" >
        <input type="submit" value="Add product">
    </form>
</body>
</html>