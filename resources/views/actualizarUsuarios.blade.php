@extends('principal')

@section('encabezado')
	<h2>Actualizar Usuario</h2>
@stop

@section('contenido')
	<form action="{{url('/actualizar')}}/{{$user->id}}" method="POST">
		<input type="hidden" name="_token" value="{{csrf_token() }}">
		<div class="form-group">
			<label for="nombre">Nombre</label>
			<input type="text" class="form-control" name="nombre" required value="{{$user->nombre}}">
		</div>
		<div class="form-group">
			<label for="apellido">Apellido</label>
			<input type="text" class="form-control" name="apellido" required value="{{$user->apellido}}">
		</div>
		<div class="form-group">
			<label for="Fecha de Inicio">Fecha de Nacimiento:</label>
			<input type="date" class="form-control" required name="f_nacimiento" value="{{$user->f_nacimiento}}">
		</div>
		<div class="form-group">
			<label for="correo">Correo</label>
			<input type="email" class="form-control" name="correo" required value="{{$user->correo}}">
		</div>
		<div class="form-group">
			<label for="status">Status:</label>
			<select name="status" class="form-control" required>
				<option value="">Status</option>
				@if($user->status==0)
				<option value="0" selected>Activo</option>
				<option value="1">Inactivo</option>
				@else
				<option value="0">Activo</option>
				<option value="1" selected>Inactivo</option>
				@endif
			</select>
		</div>
		<input type="submit" class="btn btn-primary" value="Actualizar">
		<a href="{{url('/consultarUsuarios')}}" class="btn btn-danger">Cancelar</a>
	</form>
@stop





