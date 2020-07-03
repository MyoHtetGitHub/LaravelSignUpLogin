<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="{!!asset('bootstrap/css/bootstrap.min.css')!!}">
</head>
<body>
    @include('layouts.navbar')
	@yield('content')

	<script src="{!!asset('bootstrap/js/jquery.js')!!}"></script>
	<script src="{!!asset('bootstrap/js/bootstrap.min.js')!!}"></script>

</body>
</html>
