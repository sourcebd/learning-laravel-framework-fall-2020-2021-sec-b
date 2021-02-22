<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit User</title>
</head>
<body>
    <h1>Edit User, {{ $user['username'] }}</h1>
	<a href="{{route('home.userlist')}}">Back</a>
	<br><br>

    <form method="post">
    	@csrf
		<fieldset>
			<legend>Edit</legend>
			<table>
				<tr>
					<td>USERNAME </td>
					<td><input type="text" name="username" value="{{ $user['username'] }}"></td>
				</tr>
				<tr>
					<td>PASSWORD </td>
					<td><input type="password" name="password" value="{{ $user['password'] }}"></td>
				</tr>
				<tr>
					<td>NAME </td>
					<td><input type="text" name="name" value="{{ $user['name'] }}"></td>
				</tr>
				<tr>
					<td>EMAIL </td>
					<td><input type="text" name="email" value="{{ $user['email'] }}"></td>
				</tr>
				<tr>
					<td>DEPARTMENT </td>
					<td><input type="text" name="dept" value="{{ $user['dept'] }}"></td>
				</tr>
				<tr>
					<td>CGPA </td>
					<td><input type="text" name="cgpa" value="{{ $user['cgpa'] }}"></td>
				</tr>
                <tr>
					<td>TYPE </td>
					<td>
						<select name='type'>
							<option value="Admin" @if($user['type'] == 'Admin') selected @endif > ADMIN </option>
							<option value="User"  @if($user['type'] == 'User') selected @endif > USER </option>
						</select>
					</td>
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