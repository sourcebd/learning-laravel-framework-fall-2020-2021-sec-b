<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete Product</title>
</head>
<body>
    <h1>Delete Product</h1>
    <a href="{{route('product.productlist')}}"> Back</a>
    <br><br>

			<table>
				<td colspan="2">
					<img src="{{asset('/upload')}}/{{$product['product_img']}}" height="100px" width="100px">
				</td>
                <tr>
					<td>PRODUCT NAME:</td>
					<td>{{ $product['product_name'] }}</td>
				</tr>
                <tr>
					<td>PRODUCT PRICE:</td>
					<td>{{ $product['product_price'] }}</td>
				</tr>
				<tr>
					<td>PRODUCT QUANTITY:</td>
					<td>{{ $product['product_quantity'] }}</td>
				</tr>
				<tr>
					<td>IMAGE:</td>
					<td>{{ $product['product_img'] }}</td>
				</tr>
				<tr>
					<td>
						<h3>Are you sure?</h3>
					</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<form method="post">
							@csrf
							<input type="submit" name="submit" value="Confirm">
						</form>
					</td>
					<td></td>
				</tr>
			</table>
</body>
</html>