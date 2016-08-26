<?php 
	class Usuario extends Eloquent { 
	
		protected $table = 'usuario'; 
		protected $fillable = array('nombre','apellido','numero_identidad','foto','huella','usuario','contrasena','idcentro','idtipo_usuario','idestado','idtipo_documento','edad','fecha_nacimiento','telefono','direccion'); 
		public $timestamps = false; 

		public function centro(){
			
			return $this ->belongsTo('Centro','idcentro');
	     }
	     public function tipo_usuario(){
			
			return $this ->belongsTo('Tipo_usuario','idtipo_usuario');
	     }
	     public function estado(){
			
			return $this ->belongsTo('Estado','idestado');
	     }
	     public function tipo_documento(){
			
			return $this ->belongsTo('Tipo_documento','idtipo_documento');
	     }
	}


?>