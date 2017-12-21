
@extends('principal')

@section('encabezado')
	<h2>Consultar Proyectos</h2>
@stop

@section('contenido')
	<table class="table table-hover">
		<thead>
			<tr>
				<th>#</th>
				<th>Nombre</th>
				<th>RFC</th>
				<th>Estatus</th>
				<th>Opciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach($proveedor as $p)
				<tr>
					<td>{{$p->id}}</td>
					<td>{{$p->nombre}}</td>
					<td>{{$p->rfc}}</td>
					<td>
						@if($p->estatus==0)
							Activo
						@else
							Inactivo
						@endif
					</td>

					<td>
						<a href="{{url('/asignarUsuarios')}}/{{$p->id}}" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-user" aria-hidden="true">Asignar</span></a>
						<a href="" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true">Editar</span></a>

						<a href="{{url('/eliminarProveedor')}}/{{$p->id}}" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove" aria-hidden="true">Eliminar</span></a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@stop








