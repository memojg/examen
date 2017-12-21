<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Principal</title>
	<script src="{{ asset("js/jquery.js") }}"></script>
	<link rel="stylesheet" href="{{asset("css/bootstrap.css")}}">
</head>
<body>
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="{{url('/home')}}">Inicio</a>
	    </div>

	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">comentarios<span class="caret"></span></a>
	          <ul class="dropdown-menu" role="menu">
	            <li><a href="{{url('#')}}">agregar comentario</a></li>
	            <li><a href="{{url('#')}}">Consultar comentarios</a></li>
	          </ul>
	        </li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Productos<span class="caret"></span></a>
	          <ul class="dropdown-menu" role="menu">
	            <li><a href="{{url('/registrarProducto')}}">agregar Producto</a></li>
	            <li><a href="{{url('/consultarProducto')}}">Consultar Productos</a></li>
	          </ul>
	        </li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Usuarios<span class="caret"></span></a>
	          <ul class="dropdown-menu" role="menu">
	            <li><a href="{{url('/registrarUsuario')}}">Registrar</a></li>
	            <li><a href="{{url('/consultarUsuarios')}}">Consultar usuarios</a></li>
	            <li><a href="#">Asignar Proveedor</a></li>
	          </ul>
	        </li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Proveedores<span class="caret"></span></a>
	          <ul class="dropdown-menu" role="menu">
	            <li><a href="{{url('/registrarProveedor')}}">Registrar</a></li>
	            <li><a href="{{url('/consultarProveedores')}}">Consultar proveedores</a></li>
	          </ul>
	        </li>
	      </ul>
	     
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="#">Link</a></li>
	      </ul>
	    </div>
	  </div>
	</nav>
	<div class="container">
		<div class="row">

			<div class="col-xs-12">
				@yield('encabezado')
				<hr>
				@yield('contenido')
			</div>
			
	  	</div>
	</div>

	<footer>
		<hr>
		<div class="text-center">Ing.Guillermo Ibarra Silva &copy; 2017</div>
	</footer>
	<script src="{{ asset("js/bootstrap.js") }}"></script>
</body>
</html>