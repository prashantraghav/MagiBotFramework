<?php 
//Import::helper('asd');
//Import::library('asd');
//Import::custom('asd', 'asd');

class HomeController extends Controller{
  
public function index(){
$_SESSION["page"] = "home";
$data["name"]="deepali";
$this->View('home/view', $data);
}
 public function asd(){


      
  }
}
?>
