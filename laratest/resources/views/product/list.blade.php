<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Product List</title>
</head>
<body>
    <h1>Product List</h1>
    <a href="{{route('product.index')}}"> Back</a> |
    <a href="{{route('home.index')}}"> Home</a> |
    <a href="{{route('logout.index')}}"> Logout</a>
    <br><br>

    <table border="1" style="text-align:center">
        <tr>
            <td>PRODUCT ID</td>
            <td>PRODUCT NAME</td>
            <td>PRODUCT PRICE</td>
            <td>PRODUCT QUANTITY</td>
            <td>ACTION</td>
        </tr>

        @for($i=0; $i < count($list); $i++)
        <tr>
            <td>{{ $list[$i]['product_id'] }}</td>
            <td>{{ $list[$i]['product_name'] }}</td>
            <td>{{ $list[$i]['product_price'] }}</td>
            <td>{{ $list[$i]['product_quantity'] }}</td>
            <td>
                <a href="{{ route('product.edit', [$list[$i]['product_id']]) }}">Edit</a> |
                <a href="{{ route('product.delete', [$list[$i]['product_id']]) }}">Delete</a> |
                <a href="{{ route('product.show', [$list[$i]['product_id']]) }}">Details</a>
            </td>
        </tr>
        @endfor
    </table>
    {{session('msg')}}
</body>
</html>