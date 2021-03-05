<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home | Delete Upcoming Product</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>
    <h1>Delete Upcoming Product, {{ $upcoming['product_name'] }}</h1>
	<a href="{{route('logout.index')}}">Logout</a> |
	<a href="{{route('system.product')}}">Product-Management</a> |
	<a href="{{route('product.Elist')}}">Existing Product List</a> |
	<a href="{{route('product.Ulist')}}">Upcoming Product List</a> |
	<a href="{{route('product.Pcreate')}}">Add Product</a> |
	<br><br>

	<table style="width:20%">
				<tr>
					<td>Product Name</td>
					<td>{{ $upcoming['product_name'] }}</td>
				</tr>
				<tr>
					<td>Category</td>
					<td>{{ $upcoming['category'] }}</td>
				</tr>
				<tr>
					<td>Unit Price</td>
					<td>{{ $upcoming['unit_price'] }}</td>
				</tr>
                <tr>
					<td>Status</td>
					<td>{{ $upcoming['status'] }}</td>
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

			@extends('layout.footer')
</body>
</html>