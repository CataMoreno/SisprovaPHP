@extends('plantilla')

@section('contenido')
<form method="POST" action="usuarios">
	<div class="row clearfix">
	    <div class="col-md-6">
	        <h3>Datos Personales</h3>
	        <br>
	      <div class="form-group form-float">
           <div class="form-line">
                <input type="text" class="form-control" name="nombre" required>
            <label class="form-label">Nombre</label>
        </div>
        </div>
	    <div class="form-group form-float">
	    <div class="form-line">
	        <input type="text" name="apellido" class="form-control" required>
	    <label class="form-label">Apellido</label>
        </div>
        </div>
	    <div class="form-group form-float">
	    <div class="form-line">
	    
        </div>
        </div>
	    <div class="form-group form-float">
	    <div class="form-line">
	        <input type="text" name="numero_identidad" class="form-control" required>
	    <label class="form-label">Número de Identidad</label>
        </div>
        </div>
	    <div class="form-group form-float">
	    <div class="form-line">
	        <input type="text" name="direccion" class="form-control" required>
	    <label class="form-label">Dirección</label>
        </div>
        </div>
	    <div class="form-group form-float">
	    <div class="form-line">
	        <input type="text" name="telefono" class="form-control" required>
	    <label class="form-label">Teléfono</label>
        </div>
        </div>
	    <div class="form-group form-float">
	    <div class="form-line">
	      <input type="text" name="fecha_nac" class="form-control" required>
	    <label class="form-label">Fecha de Nacimiento</label>
        </div>
        </div>
	    <div class="form-group form-float">
	    <div class="form-line">
	      <input type="text" name="edad" class="form-control" required>
	    <label class="form-label">Edad</label>
        </div>
	    </div>
	    </div>
	    <div class="col-md-6">
	        <h3>Datos Institucionales</h3>
	        <br>
	    <div class="form-group form-float">
	    <div class="form-line success">
	    	<select class="form-control" name="centro" requiered>
	    		<option value="">-----Centros----</option>
	     @foreach( $centros as $centro)
			<option value="{{ $centro-> id }}">{{ $centro-> nombre }}</option>
		@endforeach
		</select>
        </div>
        <div class="form-group form-float">
	    <div class="form-line success">
	        <input type="text" class="form-control" required>
	    <label class="form-label">Tipo de Usuario</label>
        </div>
        </div>
        <div class="form-group form-float">
	    <div class="form-line success">
	        <input type="text" class="form-control" required>
	    <label class="form-label">Usuario</label>
        </div>
        </div>
        <div class="form-group form-float">
	    <div class="form-line success">
	        <input type="text" class="form-control" required>
	    <label class="form-label">Contraseña</label>
        </div>
        </div>
        <div class="form-group form-float">
	    <div class="form-line success">
	        <input type="text" class="form-control"required>
	    <label class="form-label">Foto</label>
        </div>
        </div>
        <div class="form-group form-float">
	    <div class="form-line success">
	        <input type="text" class="form-control" required>
	   <label class="form-label">Huella</label>
        </div>
        </div>
        <div class="form-group form-float">
	    <div class="form-line success">
	        <select class="form-control" name="estado" requiered>
	        	<option value="">---Estado---</option>
				@foreach( $estados as $estado)
					<option value="{{ $estado-> id }}">{{ $estado-> nombre }}</option>
				@endforeach
		</select>
        </div>
        </div>
	    </div>
	    <button type="submt" class="btn btn-success waves-effect" style="margin-left:150px;">Guardar</button>
</form>

@stop()