@extends('principal')

@section('encabezado')
	<h2>Resgitar Usuario</h2>
@stop

@section('contenido')
	<form action="{{url('/guardarUsuario')}}" method="POST">
		<input type="hidden" name="_token" value="{{csrf_token() }}">
		<div class="form-group">
			<label for="nombre">Nombre</label>
			<input type="text" class="form-control" name="nombre" required>
		</div>
		<div class="form-group">
			<label for="apellido">Apellido</label>
			<input type="text" class="form-control" name="apellido" required>
		</div>
		<div class="form-group">
			<label for="Fecha de Inicio">Fecha de Nacimiento:</label>
			<input type="date" class="form-control" required name="f_nacimiento">
		</div>
		<div class="form-group">
			<label for="correo">Correo</label>
			<input type="email" class="form-control" name="correo" required>
		</div>
		<div class="form-group">
			<label for="status">Status:</label>
			<select name="status" class="form-control" required>
				<option value="">Status</option>
				<option value="0">Activo</option>
				<option value="1">Inactivo</option>
			</select>
		</div>

		<input type="submit" class="btn btn-primary">
		<a href="{{url('/home')}}" class="btn btn-danger">Cancelar</a>
	</form>
@stop





