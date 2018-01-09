<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Templating Laravel</title>
</head>
<body>
	

{{-- <h1>Master Template</h1> --}}

	{{-- ================ CHILD VIEW WILL SHOW HERE ================= --}}

			@yield('content')
	{{-- ============================================================ --}}


</body>
</html>