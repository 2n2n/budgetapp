<!DOCTYPE html>
<html>
<head>
	<title>{{ $title }} | {{ $siteName }}</title>
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">
</head>
<body>
	<div class="container-fluid">
		@yield('content')
	</div>
</body>
</html>