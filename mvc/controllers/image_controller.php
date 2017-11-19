<?php

require_once('models/reg_model.php');

class Controller 
	{
		private $model;
		public function __construct()  
		{  
			$this->models = new Registration();
		}
		public function viewdata()
		{
			$success = "";
			$error = "";
			
			if(isset($_POST['submit']))
			{
				if($_POST['image']=="")
				{
					$error="IMAGE is required";
				}
					else if($_POST['title']=="")
					{
						$error="TITLE is required";
					}
					else if($_POST['description']=="")
						{
							$error="DESCRIPTION is required";
						}
					
						else{
							$reslt=$this->models->getimage('image','title', 'description', 'required');
							if($reslt=='true')
								
							{
								$success = "Successfully inserted ";
							}
							else
							{
								$error =  "Not insert";
							}
						}
			}
			include 'views/image_view.php';
		}
	}
?>