@extends('plantilla')

@section('contenido')
<form method="POST" action="{{ url() }}/editarusuario/{{ $usuario->id }}">
	<div class="row clearfix">
	    <div class="col-md-6">
	        <h3> Actualizacion De Datos Personales</h3>
	        <br>
	        <div class="form-group form-float">
           <div class="form-line">
           	<label >Nombre</label>
                <input type="text" class="form-control" name="nombre" value="{{ $usuario->nombre }}">
        </div>
    </div>
	    <div class="form-group form-float">
	    <div class="form-line">
	    	<label >Apellido</label>
	        <input type="text" name="apellido" class="form-control" value="{{ $usuario->apellido }}">
	   </div>
        </div>
       
         <div class="form-group form-float">
	    <div class="form-line">
	    	<label >Tipo de Documento</label>
	     <select class="form-control" name="documento" requiered value="{{ $usuario->tipodocumento->descripcion}}">
	     	<option value="">-----Tipo de Documento----</option>
	     @foreach( $tipodocumentos as $tipodocumento)
	     @if($usuario->idtipodocumento == $tipodocumento->id)
			<option value="{{ $tipodocumento-> id }}" selected>{{ $tipodocumento-> descripcion }}</option>
				@else
			<option value="{{ $tipodocumento-> id }}" >{{ $tipodocumento-> descripcion }}</option>
					
				@endif
		@endforeach
		</select>
        </div>
    </div>

	    <div class="form-group form-float">
	    <div class="form-line">
	    	<label >Numero de Identidad</label>
	        <input type="text" name="numero_identidad" class="form-control" value="{{ $usuario->numero_identidad }}" required>

        </div>
        </div>
	    <div class="form-group form-float">
	    <div class="form-line">
	    	<label >Direccion</label>
	        <input type="text" name="direccion" class="form-control" value="{{ $usuario->direccion}}" required>

        </div>
        </div>
	    <div class="form-group form-float">
	    <div class="form-line">
	    	<label >Telefono</label>
	        <input type="number" min="0" name="telefono" class="form-control" value="{{ $usuario->telefono }}" required>
        </div>
        </div>
	     <div class="form-group form-float">
	    <div class="form-line">
          <label>Fecha de Nacimiento</label>
	      <input type="date" name="fecha_nac" class="datepicker form-control" value="{{ $usuario->fecha_nacimiento}}" required>
        </div>
      
	    <div class="form-group form-float">
	    <div class="form-line">
	    	<label >Edad</label>
	      <input type="text" name="edad" class="form-control" value="{{ $usuario->edad }}" required>

        </div>
	    </div>
	 </div>
     </div>
	    <div class="col-md-6">
	        <h3> Actualizacion De Datos Institucionales</h3>
	        <br>
	    <div class="form-group form-float">
	    <div class="form-line success">
	    	<label>Centro</label>
	    	<select class="form-control" name="centro" requiered>
	    		<option value="">-----Centros----</option>
	     @foreach( $centros as $centro)
             @if($usuario->idcentro == $centro->id)
			<option value="{{ $centro-> id }}" selected>{{ $centro-> nombre }}</option>
			@else
			<option value="{{ $centro-> id }}" >{{ $centro-> nombre }}</option>
			@endif
		@endforeach
		</select>
        </div>
        </div>
        <div class="form-group form-float">
	    <div class="form-line success">
	    	<label >Tipo de Usuario</label>
	        <select class="form-control" name="tipousuario" value="{{ $usuario->tipousuario->descripcion}}" requiered>
	    		<option value="">-----Tipo de Usuario----</option>
	     @foreach( $tipousuarios as $tipousuario)
	        @if($usuario->idtipousuario == $tipousuario->id)
			<option value="{{ $tipousuario-> id }}" selected>{{ $tipousuario-> nombre }}</option>
			@else
			<option value="{{ $tipousuario-> id }}" >{{ $tipousuario-> nombre }}</option>	
				@endif
		@endforeach
		</select>
        </div>
        </div>
        <div class="form-group form-float">
	    <div class="form-line success">
	    	<label>Nombre de usuario</label>
	        <input type="text" class="form-control" name"user" value="{{ $usuario->user }}" required>
        </div>
        </div>
        <div class="form-group form-float">
	    <div class="form-line success">
	    	<label>Contraseña</label>
	        <input type="text" class="form-control" name="pass" value="{{ $usuario->contrasena }}" required>
        </div>
        </div>
        <div class="form-group form-float">
	    <div class="form-line success">
	    	<label>foto</label>
	        <input type="text" class="form-control" value="{{ $usuario->foto }}" name="foto" >
        </div>
        </div>
        <div class="form-group form-float">
	    <div class="form-line success">
	    	<label>Huella</label>
	        <input type="text" class="form-control" name="huella" value="{{ $usuario->huela }}">
        </div>
        </div>
        <div class="form-group form-float">
	    <div class="form-line success">
	    	<label>Estado</label>
	        <select class="form-control" name="estado" requiered>
	        	<option value="">---Estado---</option>
				@foreach( $estados as $estado)
					@if($usuario->idestado == $estado->id)
					<option value="{{ $estado-> id }}" selected>{{ $estado-> nombre }}</option>
					@else
					<option value="{{ $estado-> id }}" >{{ $estado-> nombre }}</option>
					@endif
				@endforeach
			
		</select>
        </div>
	    </div>
	</div>
	    <button type="submt" class="btn btn-success waves-effect" style="margin-left:150px;">Guardar</button>
	    </div>
</form>

@stop()