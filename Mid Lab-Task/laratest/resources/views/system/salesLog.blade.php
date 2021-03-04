<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home | Sales Log</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>

@extends('layout.nav_bar')

@section('nav_bar')
<br><br>
<a href="{{route('logout.index')}}">Logout</a> |
<a href="{{route('home.index')}}">Home</a> |
<a href="{{route('system.physicalStore')}}">Physical Store</a> |
@endsection

    <h1>Sales Log</h1>

    <form method="post">
    	@csrf
		<fieldset>
			<legend>Product Sell</legend>
			<table>
				<tr>
					<td>Customer Name</td>
					<td><input type="text" name="customer_name" value="{{old('customer_name')}}"></td>
				</tr>
				<tr>
					<td>Customer Address</td>
					<td><input type="text" name="customer_address" value="{{old('customer_address')}}"></td>
				</tr>
				<tr>
					<td>Phone</td>
					<td><input type="text" name="phone" value="{{old('phone')}}"></td>
				</tr>
				<tr>
					<td>Product Name</td>
					<td><input type="text" name="product_name" value="{{old('product_name')}}"></td>
				</tr>
				<tr>
					<td>Product Id</td>
					<td><input type="text" name="product_id" value="{{old('product_id')}}"></td>
				</tr>
				<tr>
					<td>Unit Price</td>
					<td><input type="text" name="unit_price" value="{{old('unit_price')}}"></td>
				</tr>
				<tr>
					<td>Quantity</td>
					<td><input type="text" name="quantity" value="{{old('quantity')}}"></td>
				</tr>
				<tr>
					<td>Total Price</td>
					<td><input type="text" name="total_price" value="{{old('total_price')}}"></td>
				</tr>
				<tr>
					<td>Date Sold</td>
					<td><input type="date" name="date_sold" value="{{old('date_sold')}}"></td>
					<td></td>
					<td><input type="submit" name="submit" value="Save"></td>
				</tr>
				<tr>
					<td>Payment Type</td>
					<td>
						<select name='payment_type'>
							<option value="Bkash"> BKASH </option>
							<option value="Nogod"> NOGOD </option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Status</td>
					<td>
						<select name='status'>
							<option value="Sold"> SOLD </option>
							<option value="Pending"> PENDING </option>
						</select>
					</td>
				</tr>
				
			</table>
		</fieldset>
	</form>

<br><br>
	@foreach($errors->all() as $err)
		{{$err}} <br>
	@endforeach

</body>
</html>