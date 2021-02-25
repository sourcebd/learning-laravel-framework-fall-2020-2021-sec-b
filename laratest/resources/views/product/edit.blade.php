<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Product</title>
</head>
<body>
    <h1>Edit Product, {{ $product['product_name'] }}</h1>
	<a href="{{route('product.productlist')}}"> Back</a>
	<br><br>

    <form method="post">
    	@csrf
		<fieldset>
			<legend>Edit</legend>
			<table>
				<tr>
					<td>PRODUCT NAME </td>
					<td><input type="text" name="product_name" value="{{ $product['product_name'] }}"></td>
				</tr>
				<tr>
					<td>PRODUCT PRICE </td>
					<td><input type="text" name="product_price" value="{{ $product['product_price'] }}"></td>
				</tr>
				<tr>
					<td>PRODUCT QUANTITY </td>
					<td><input type="text" name="product_quantity" value="{{ $product['product_quantity'] }}"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Update"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>