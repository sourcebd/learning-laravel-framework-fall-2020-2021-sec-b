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

	<div id="footer"><br>
		<h3 style="margin:0%">Copyright @ 2021 | ClientManagement.com</h3>
		Powered by <a href="https://sourcebd.github.io/nafi.com/">nafi.com</a>
	</div>

</body>
</html>