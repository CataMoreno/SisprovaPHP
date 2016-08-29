<?php 
	class TipoDocumento extends Eloquent { 
	
		protected $table = 'tipodocumento'; 
		protected $fillable = array('descripcion','abreviatura'); 
		public $timestamps = false; 

	}


?>