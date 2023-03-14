<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
	<title>@yield('titulo')</title>
	<!-- Agregamos el enlace al archivo CSS de Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	
	<style>
		body {
			background-color: #a4f9c8;
		}
		.container {
			background-color: white;
			padding: 20px;
			margin-top: 50px;
			border-radius: 10px;
		}
	</style>
</head>
<body>
	<div class="container">
        @yield('content')
	</div>
	<!-- Agregamos los archivos JavaScript de jQuery y Bootstrap -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
