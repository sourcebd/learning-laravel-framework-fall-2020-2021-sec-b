<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
	<link rel="stylesheet" type="text/css" href="../../../css/app.css">
</head>
<body>

<div class="dadblock">

<div class="logintitleblock">

	<h1>Access Account</h1>

</div>

<div class="block">

	<form method="post">
		<!-- @csrf -->
		{{csrf_field()}}
		
			<legend><h3 style="margin:0">Login</h3></legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" class="textbox" name="username"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" class="textbox" name="password"></td>
				</tr>
				<tr>
					<td><input type="submit" class="button" name="submit" value="Submit"></td>
					<td><div class="link"><a href="{{route('main.index')}}" class="link">Back</a></div></td>
				</tr>
			</table>
	</form>
	</div>

	<div class="sessionmsg">
    {{session('msg')}}
	</div>

	</div>
	
</body>
</html>
