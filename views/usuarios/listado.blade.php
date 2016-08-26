@extends('plantilla')

@section('contenido')
<h1>USUARIOS</h1>
     <div class="header">
        <ul class="header-dropdown m-r--5">
            <li class="dropdown">
	            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
	           	 <i class="material-icons">more_vert</i>
	            </a>
	             <ul class="dropdown-menu pull-right">
		            <li><a href="crearUsuarios">Agregar Usuarios</a></li>
	            </ul>
            </li>
        </ul>
     </div>
<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
     <thead>
         <tr>
         	 <th>ID</th>
             <th>NOMBRE</th>
             <th>APELLIDO</th>
             <th>DOCUMENTO</th>
             <th>CENTRO</th>
             <th>EDAD</th>
             <th>TELEFONO</th>
             <th>DIRECCION</th>
             <th>ESTADO</th>
         </tr>
    </thead>
    <tbody>
		@foreach( $usuarios as $usuario)
			<tr>
				<td>{{ $usuario->id }}</td>
				<td>{{ $usuario->nombre }}</td>
				<td>{{ $usuario->apellido }}</td>
				<td>{{ $usuario->numero_identidad }}</td>
		        <td>{{ $usuario->Centro->abreviatura }}</td>
				<td>{{ $usuario->edad}}</td>
				<td>{{ $usuario->telefono}}</td>
				<td>{{ $usuario->direccion}}</td>
				<td>{{ $usuario->estado->nombre}}</td>
			</tr>
		@endforeach
		</tbody>
	</table>
                              

@stop()





