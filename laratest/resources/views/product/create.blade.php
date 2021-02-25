<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Product</title>
</head>
<body>
    <h1>Add New Product</h1>
	<a href="{{route('product.index')}}"> Back</a> |
	<a href="{{route('home.index')}}"> Home</a> |
    <a href="{{route('logout.index')}}"> Logout</a>
	<br><br>

    <form method="post" enctype="multipart/form-data">
    	@csrf
		<fieldset>
			<legend>Add</legend>
			<table>
				<tr>
					<td>PRODUCT NAME </td>
					<td><input type="text" name="product_name" value="{{old('product_name')}}"></td>
				</tr>
				<tr>
					<td>PRODUCT PRICE </td>
					<td><input type="text" name="product_price" value="{{old('product_price')}}"></td>
				</tr>
				<tr>
					<td>PRODUCT QUANTITY </td>
					<td><input type="text" name="product_quantity" value="{{old('product_quantity')}}"></td>
				</tr>
				<tr>
					<td>UPLOAD IMAGE </td>
					<td><input type="file" name="myfile" value="{{old('myfile')}}"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Save"></td>
				</tr>
			</table>
		</fieldset>
	</form>

	@foreach($errors->all() as $err)
		{{$err}} <br>
	@endforeach

</body>
</html>