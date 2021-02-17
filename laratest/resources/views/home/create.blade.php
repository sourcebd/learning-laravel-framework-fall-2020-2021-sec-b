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
	<a href="/home">Back</a> |
    <a href="/logout">Logout</a>
	<br><br>

    <form method="post">
    	@csrf
		<fieldset>
			<legend>Add</legend>
			<table>
				<tr>
					<td>USERNAME </td>
					<td><input type="text" name="username" value=""></td>
				</tr>
				<tr>
					<td>PASSWORD </td>
					<td><input type="password" name="password" value=""></td>
				</tr>
				<tr>
					<td>NAME </td>
					<td><input type="text" name="name" value=""></td>
				</tr>
				<tr>
					<td>EMAIL </td>
					<td><input type="text" name="email" value=""></td>
				</tr>
				<tr>
					<td>DEPARTMENT </td>
					<td><input type="text" name="dept" value=""></td>
				</tr>
				<tr>
					<td>CGPA </td>
					<td><input type="text" name="cgpa" value=""></td>
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
</body>
</html>