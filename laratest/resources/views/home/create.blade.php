<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create User</title>
</head>
<body>
    <h1>Create New User</h1>
	<a href="{{route('home.index')}}">Back</a> |
    <a href="{{route('login.index')}}">Logout</a>
	<br><br>

    <form method="post">
    	@csrf
		<fieldset>
			<legend>Add</legend>
			<table>
				<tr>
					<td>USERNAME </td>
					<td><input type="text" name="username" value="{{old('username')}}"></td>
				</tr>
				<tr>
					<td>PASSWORD </td>
					<td><input type="password" name="password" value="{{old('password')}}"></td>
				</tr>
				<tr>
					<td>NAME </td>
					<td><input type="text" name="name" value="{{old('name')}}"></td>
				</tr>
				<tr>
					<td>EMAIL </td>
					<td><input type="text" name="email" value="{{old('email')}}"></td>
				</tr>
				<tr>
					<td>DEPARTMENT </td>
					<td><input type="text" name="dept" value="{{old('dept')}}"></td>
				</tr>
				<tr>
					<td>CGPA </td>
					<td><input type="text" name="cgpa" value="{{old('cgpa')}}"></td>
				</tr>
                <tr>
					<td>TYPE </td>
					<td>
						<select name='type'>
							<option value="Admin"> ADMIN </option>
							<option value="User"> USER </option>
						</select>
					</td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Save"></td>
				</tr>
			</table>
		</fieldset>
	</form>

	@foreach($errors->all() as $err)
		{{$err}} <br>
	@endforeach

</body>
</html>