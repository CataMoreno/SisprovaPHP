@extends('plantilla')

@section('contenido')
<form method="POST" action="guardar">
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
	    <label class="form-label">Apellidos</label>
        </div>
        </div>
	    <div class="form-group form-float">
	    <div class="form-line">
	     <select class="form-control" name="documento" requiered>
	    		<option value="">-----Tipo de Documentos----</option>
	     @foreach( $tipodocumentos as $tipodocumento)
			<option value="{{ $tipodocumento-> id }}">{{ $tipodocumento-> descripcion }}</option>
		@endforeach
		</select>
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
	      <input type="date" name="fecha_nac" class="datepicker form-control" required>
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
	        <select class="form-control" name="tipousuario" requiered>
	    		<option value="">-----Tipo de Usuario----</option>
	     @foreach( $tipousuarios as $tipousuario)
			<option value="{{ $tipousuario-> id }}">{{ $tipousuario-> nombre }}</option>
		@endforeach
		</select>
        </div>
        </div>
        <div class="form-group form-float">
	    <div class="form-line success">
	        <input type="text" class="form-control" name"user" required>
	    <label class="form-label">Usuario</label>
        </div>
        </div>
        <div class="form-group form-float">
	    <div class="form-line success">
	        <input type="text" class="form-control" name="pass" required>
	    <label class="form-label">Contraseña</label>
        </div>
        </div>
        <div class="form-group form-float">
	    <div class="form-line success">
	        <input type="text" class="form-control"  name="foto" >
	    <label class="form-label">Foto</label>
        </div>
        </div>
        <div class="form-group form-float">
	    <div class="form-line success">
	        <input type="text" class="form-control" name="huella">
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