<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
</head>	
<body>
	@include('layouts.menu')
	@include('layouts.sidebarLeft')
	@yield('body')
</body>
</html>