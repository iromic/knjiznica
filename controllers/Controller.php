<?php
include_once("models/Model.php");

class Controller {
	public $model;
	
	public function __construct()  
    {  
        $this->model = new Model();

    } 
	
	public function invoke()
	{
		if (!isset($_GET['autor']))
		{
			
			$autor = $this->model->getAutorList();
			include 'views/autorlist.php';
		}
		else
		{
			
			$autor = $this->model->getAutor($_GET['autor']);
			include 'view/viewautor.php';
		}
	}
}

?>