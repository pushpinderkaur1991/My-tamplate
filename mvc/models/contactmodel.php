<?php

require_once("models/contactmodel.php");

class Model {

 public function getdata()
 {
 
  if(isset($_REQUEST['email']) && isset($_REQUEST['password'])){
  
   if($_REQUEST['email']=='admin@gmail.com' && $_REQUEST['password']=='admin')
   {
    return 'login';
   }
    else{
    return 'invalid username or password';
   }
  }
 }
}


?>