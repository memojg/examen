@extends('principal')

@section('encabezado')
	<h2>Consultar Usuarios</h2>
@stop

@section('contenido')
	<table class="table table-hover">
		<thead>
			<tr>
				<th>#</th>
				<th>Nombre</th>
				<th>Descripción</th>
				<th>Status</th>
				<th>Opciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach($producto as $p)
				<tr>
					<td>{{$p->id}}</td>
					<td>{{$p->nombre}}</td>
					<td>{{$p->descripcion}}</td>
					<td>
						@if($p->estatus==0)
							Activo
						@else
							Inactivo
						@endif
					</td>
					<td>
						<a href="{{url('/actualizarProducto')}}/{{$p->id}}" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true">Editar</span></a>

						<a href="{{url('/eliminarProducto')}}/{{$p->id}}" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove" aria-hidden="true">Eliminar</span></a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{!! $producto->render() !!}
@stop