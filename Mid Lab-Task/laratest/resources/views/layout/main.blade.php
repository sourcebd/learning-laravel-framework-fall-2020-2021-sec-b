<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>

	<div id="page_title">
		@yield('page_title')
	</div>


	<div id="header">
		<nav>
			@yield('nav_bar')
		</nav>	
	</div>

	<div id="page_content">
			@yield('main_content')
	</div>

	<div id="footer">
		copyright@2021
	</div>

</body>
</html>