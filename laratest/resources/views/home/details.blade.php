<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Details</title>
</head>
<body>
    <h1>All User's Details</h1>
    <a href="/home/userlist"> Back</a>
	<br><br>

			<table>
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
			</table>
</body>
</html>