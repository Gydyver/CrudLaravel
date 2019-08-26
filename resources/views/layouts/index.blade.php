<html>
	<head>
		<title>@yield('judulhalaman')</title>
		<link rel="stylesheet" href="{{ url('/') }}/css/app.css">
	</head>
	<body>
		<nav class="navbar navbar-light bg-light">
			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
     			<li class="nav-item active">
     				<a class="nav-link" href="#">Home</a>
     			</li>
			</ul>
		</nav>
		<div class="container">
			@yield('isihalaman')
		</div>
	</body>
</html>
