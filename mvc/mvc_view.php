<?php

class View
{
	private $model;
	private $controller;
	
	public function __construct($controller,$model)
{
	$this->controller = $controller;
	$this->model = $model;
}
	public function output()
{
	return $this->model->string;
}
}
//$str = new View('Lets strat php with MVC','abc');
//echo $str->string;

?>