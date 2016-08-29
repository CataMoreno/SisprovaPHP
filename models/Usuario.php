<?php 
	class Usuario extends Eloquent { 
	
		protected $table = 'usuario'; 
		protected $fillable = array('nombre','apellido','numero_identidad','foto','huella','usuario','contrasena','idcentro','idtipousuario','idestado','idtipodocumento','edad','fecha_nacimiento','telefono','direccion'); 
		public $timestamps = false; 

		public function centro(){
			
			return $this ->belongsTo('Centro','idcentro');
	     }
	     public function tipoUsuario(){
			
			return $this ->belongsTo('TipoUsuario','idtipousuario');
	     }
	     public function estado(){
			
			return $this ->belongsTo('Estado','idestado');
	     }
	     public function tipoDocumento(){
			
			return $this ->belongsTo('TipoDocumento','idtipodocumento');
	     }
	}


?>