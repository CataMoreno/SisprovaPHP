<?php 
	class Tipo_usuario extends Eloquent { 
	
		protected $table = 'tipo_usuario'; 
		protected $fillable = array('nombre','descripcion'); 
		public $timestamps = false; 
	}

?>