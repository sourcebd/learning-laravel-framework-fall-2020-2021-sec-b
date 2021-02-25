<!DOCTYPE html>
<html lang="en">
<head>
    <title>Product Page</title>
</head>
<body>
    <h1>Welcome home! {{ session('username') }} </h1>
    <h1>Hey {{ session('type') }}!</h1>
    <a href="{{route('product.create')}}"> Create Product</a> |
    <a href="{{route('product.productlist')}}"> View Product List</a> |
    <a href="{{route('home.index')}}"> Home</a> |
    <a href="{{route('logout.index')}}"> Logout</a>
</body>
</html>
