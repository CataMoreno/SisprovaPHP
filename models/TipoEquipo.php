<?php 
	class TipoEquipo extends Eloquent { 
	
		protected $table = 'tipoequipo'; 
		protected $fillable = array('nombre','descripcion'); 
		public $timestamps = false; 

	}


?>