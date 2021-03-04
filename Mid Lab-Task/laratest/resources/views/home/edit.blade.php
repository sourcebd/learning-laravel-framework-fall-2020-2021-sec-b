<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home | Edit User</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>
    <h1>Edit User, {{ $user['id'] }}</h1>
	<a href="/logout">Logout</a> |
	<a href="/home">Home</a> |
	<a href="/home/userlist">User List</a> |
	<br><br>

    <form method="post">
    	@csrf
		<fieldset>
			<legend>Edit</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" value="{{$user['username']}}"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value="{{ $user['password'] }}"></td>
				</tr>
				<tr>
					<td>Full Name</td>
					<td><input type="text" name="full_name" value="{{ $user['full_name'] }}"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email" value="{{ $user['email'] }}"></td>
				</tr>
				<tr>
					<td>Country</td>
					<td><input type="text" name="country" value="{{ $user['country'] }}"></td>
				</tr>
				<tr>
					<td>Phone</td>
					<td><input type="text" name="phone" value="{{ $user['phone'] }}"></td>
				</tr>
				<tr>
					<td>City</td>
					<td><input type="text" name="city" value="{{ $user['city'] }}"></td>
				</tr>
				<tr>
					<td>Company Name</td>
					<td><input type="text" name="company_name" value="{{ $user['company_name'] }}"></td>
				</tr>
				<tr>
					<td>User Type</td>
					<td>
						<select name='user_type'>
							<option value="Active"> ACTIVE </option>
							<option value="Inactive"> INACTIVE </option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Date Added</td>
					<td><input type="date" name="date_added" value="{{$user['date_added']}}"></td>
					<td></td>
					<td><input type="submit" name="submit" value="Update"></td>
				</tr>
			</table>
		</fieldset>
	</form>

	@extends('layout.footer')

</body>
</html>
