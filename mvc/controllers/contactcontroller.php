<?php

require_once('models/contactmodel.php');

class Controller 
{
 	private $model;
 
	public function view()
	{
		include 'views/contactview.php';
	}
}

?>