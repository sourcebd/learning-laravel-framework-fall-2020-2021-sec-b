<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Details</title>
</head>
<body>
    <h1>User Details</h1>
    <a href="{{route('home.userlist')}}"> Back</a>
	<br><br>

			<table>
				<tr>
					<td colspan="2">
					<img src="{{asset('/upload')}}/{{$user['profile_img']}}" height="100px" width="100px">
					</td>
				</tr>
                 <tr>
					<td>USERNAME:</td>
					<td>{{ $user['username'] }}</td>
				</tr>
				<tr>
					<td>PASSWORD:</td>
					<td>{{ $user['password'] }}</td>
				</tr>
                <tr>
					<td>NAME:</td>
					<td>{{ $user['name'] }}</td>
				</tr>
                <tr>
					<td>EMAIL:</td>
					<td>{{ $user['email'] }}</td>
				</tr>
				<tr>
					<td>DEPARTMENT:</td>
					<td>{{ $user['dept'] }}</td>
				</tr>
                <tr>
					<td>CGPA:</td>
					<td>{{ $user['cgpa'] }}</td>
				</tr>
                <tr>
					<td>TYPE:</td>
					<td>{{ $user['type'] }}</td>
				</tr>
				<tr>
					<td>IMAGE</td>
					<td>{{ $user['profile_img'] }}</td>
				</tr>
			</table>
</body>
</html>