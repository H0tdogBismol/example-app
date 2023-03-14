<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>@yield('titulo')</title>
    <!-- Enlaces a los archivos CSS de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
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
    <br>
    @yield('content')
    <!-- Enlaces a los archivos JavaScript de Boot  strap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
</html>

