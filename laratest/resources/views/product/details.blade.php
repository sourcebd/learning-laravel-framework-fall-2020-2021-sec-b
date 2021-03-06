@extends('layout.main')
	
	@section('title')
	Product Details
	@endsection

	@section('main_content')	
	<div class="regblock">

	@section('nav_bar')
	<a href="{{route('home.index')}}"> Home</a>
	<a href="{{route('product.create')}}"> Add Product</a>
    <a href="{{route('product.index')}}"> Product</a>
    <a href="{{route('logout.index')}}"> Logout</a>
    <br><br>
	@endsection

	@section('page_title')
	<div class="logintitleblock">
    <h1>Product Details</h1>
	</div>
	@endsection

	<div class="block">
			<table>
				<td colspan="2">
					<img src="{{asset('/upload')}}/{{$product['product_img']}}" height="100px" width="100px">
				</td>
                <tr>
					<td>Product Name </td>
					<td>{{ $product['product_name'] }}</td>
				</tr>
                <tr>
					<td>Product Price </td>
					<td>{{ $product['product_price'] }}</td>
				</tr>
				<tr>
					<td>Product Quantity </td>
					<td>{{ $product['product_quantity'] }}</td>
				</tr>
				<tr>
					<td>Image </td>
					<td>{{ $product['product_img'] }}</td>
				</tr>
</div>
				<tr>
				<td><div class="link"><a href="{{route('product.productlist')}}">Back</a></div></td>
				</tr>

			</table>
</div>

@endsection