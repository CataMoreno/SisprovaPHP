<?php 
	class Equipo extends Eloquent { 
	
		protected $table = 'equipo'; 
		protected $fillable = array('nombre','descripcion','serial','color','idtipo_equipo','idusuario','idestado'); 
		public $timestamps = false; 

		public function tipoEquipo(){
	
			return $this ->belongsTo('Tipoequipo','idtipo_equipo');
	     }
		public function usuario(){
			
			return $this ->belongsTo('Usuario','idusuario');
	     }

	     public function estado(){
			
			return $this ->belongsTo('Estado','idestado');
	     }
	}


?>