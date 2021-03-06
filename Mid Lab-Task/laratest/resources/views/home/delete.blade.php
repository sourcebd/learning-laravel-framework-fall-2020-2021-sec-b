<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home | Delete Customer</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>

<div class="title">
 	<div class="align">
    	<div class="sign">
      		<span class="fast-flicker">Client&nbsp;&nbsp;</span>Management&nbsp;&nbsp;<span class="flicker">System</span>
    	</div>
	</div>
</div>

    <h1>Delete Customer, {{ $user['id'] }}</h1>
	<a href="{{route('logout.index')}}">Logout</a> |
	<a href="{{route('home.index')}}">Home</a> |
	<a href="{{route('home.Clist')}}">Customer List</a> |
	<br><br>
	<center>
			<table width=30% style="min-height:95vh; margin-left:10%">
				<td colspan="2">
					<img src="{{asset('/upload')}}/{{$user['profile_img']}}" height="100px" width="100px">
				</td>
				<tr>
					<td>Name: </td>
					<td>{{$user['full_name']}}</td>
				</tr>
				<tr>
					<td>Username</td>
					<td>{{ $user['username']}}</td>
				</tr>
				<tr>
					<td>Password:</td>
					<td>{{ $user['password']}}</td>
				</tr>
                <tr>
					<td>Email</td>
					<td>{{ $user['email'] }}</td>
				</tr>
				<tr>
					<td>Country</td>
					<td>{{ $user['country'] }}</td>
				</tr>

				<tr>
					<td>Phone</td>
					<td>{{ $user['phone'] }}</td>
				</tr>
				<tr>
					<td>City</td>
					<td>{{ $user['city'] }}</td>
				</tr>
				<tr>
					<td>Comapny Name</td>
					<td>{{ $user['company_name'] }}</td>
				</tr>
				<tr>
					<td>User Type</td>
					<td>{{ $user['user_type'] }}</td>
				</tr>
				<tr>
					<td>Date Added</td>
					<td>{{ $user['date_added'] }}</td>
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
							<input type="submit" class="btn" name="submit" value="Confirm">
						</form>
					</td>
				</tr>
			</table>
	</center>
			@extends('layout.footer')
</body>
</html>
