<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home | Create Customer</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>

    <h1>Create New Customer</h1>
	<a href="{{route('logout.index')}}">Logout</a> |
	<a href="{{route('home.index')}}">Home</a> |
	<br><br>
	
    <form method="post" enctype="multipart/form-data">
    	@csrf
		<fieldset>
			<legend>Add</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" value="{{old('username')}}"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value="{{old('password')}}"></td>
				</tr>
				<tr>
					<td>Full Name</td>
					<td><input type="text" name="full_name" value="{{old('full_name')}}"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email" value="{{old('email')}}"></td>
				</tr>
				<tr>
					<td>Country</td>
					<td><input type="text" name="country" value="{{old('country')}}"></td>
				</tr>
				<tr>
					<td>Phone</td>
					<td><input type="text" name="phone" value="{{old('phone')}}"></td>
				</tr>
				<tr>
					<td>City</td>
					<td><input type="text" name="city" value="{{old('city')}}"></td>
				</tr>
				<tr>
					<td>Company Name</td>
					<td><input type="text" name="company_name" value="{{old('company_name')}}"></td>
				</tr>
				<tr>
					<td>User Type</td>
					<td>
						<select name='user_type'>
							<option value="Customer"> CUSTOMER </option>
							<option value="Admin"> ADMIN </option>
							<option value="Vendor"> VENDOR </option>
							<option value="Sales"> SALES </option>
							<option value="Accountant"> ACCOUNTANT </option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Date Added</td>
					<td><input type="date" name="date_added" value="{{old('date_added')}}"></td>
					<td></td>
					<td><input type="submit" name="submit" value="Save"></td>
				</tr>
				<tr>
					<td>Upload Image </td>
					<td><input type="file" name="myfile" value="{{old('myfile')}}"></td>
				</tr>
			</table>
		</fieldset>
	</form>

<br><br>
	@extends('layout.footer')

	@foreach($errors->all() as $err)
		{{$err}} <br>
	@endforeach
<br><br>

</body>
</html>
