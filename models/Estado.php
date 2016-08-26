<?php 
	class Estado extends Eloquent { 
	
		protected $table = 'estado'; 
		protected $fillable = array('nombre'); 
		public $timestamps = false; 
	
	}


?>