<?php 
//Import::helper('asd');
//Import::library('asd');
//Import::others('logs/logs');

class HomeController extends Controller{
  
  public function index(){
    $home_model =  $this->model('home');
    $this->fullView('home/view', array("name"=>"Prashant"));
  }
}
?>
