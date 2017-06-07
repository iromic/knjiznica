<?php

class Autor {
	public $id;
	public $naziv_autora;
	
	
	public function __construct($id, $naziv_autora)  
    {  
        $this->id = $id;
	    $this->naziv_autora = $naziv_autora;
	   
    } 
}

?>