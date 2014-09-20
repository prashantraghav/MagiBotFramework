<?php 
//Import::helper('asd');
//Import::library('asd');
//Import::custom('asd', 'asd');

class HomeController extends Controller{
  
  public function index(){
    //$ob =  $this->model('home');
    //$table = $ob->showTables();
    $data["name"] = "Deepali";
    $data["lastname"] = "jauhri";
    //$data["tbl"] = $table;
   echo BASE_PATH;
   //echo APP_ROOT;
    $this->fullView('home/test', $data);
  }

  public function asd(){
      
  }
}
?>
