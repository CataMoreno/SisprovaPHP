<?php 
	class Vehiculo extends Eloquent { 
	
		protected $table = 'vehiculo'; 
		protected $fillable = array('matricula','marca','color','idtipo_vehiculo','idestado','idusuario'); 
		public $timestamps = false; 

		 public function Tipo_vehiculo(){
			
			return $this ->belongsTo('Tipo_vehiculo','idtipo_vehiculo');
	     }    
	     public function Estado(){
			
			return $this ->belongsTo('Estado','idestado');
	     }
	     public function Usuario(){
			
			return $this ->belongsTo('Usuario','idusuario');
	     }
	}
?>