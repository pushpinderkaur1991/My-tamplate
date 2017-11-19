<?php

require_once('models/reg_model.php');
class Controller 
{
 	private $model;
	public function __construct()  
	{  
		$this->models = new Registration();
	}
	public function home()
	{ 	
		$reslt=$this->models->showimage();
		$img = '';
		$title = "";
		$des = "";
		
		if(isset($reslt['image']))
		{
			
			$img=$reslt["image"];
			$title = $reslt['title'];
			$des = $reslt['description'];
		}
		//echo $img;die;
		include 'views/homeview.php';
	}
}

?>