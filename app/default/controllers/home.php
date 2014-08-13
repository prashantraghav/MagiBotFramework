<?php 
//Import::helper('asd');
//Import::library('asd');
//Import::custom('asd', 'asd');

class HomeController extends Controller{
  
  public function index(){
    $home_model =  $this->model('home');
    $home_model->showTables();
    $this->homeView('home/view', array("name"=>"Prashant"));
  }
}
?>
