<?php 
//Import::helper('asd');
//Import::library('asd');
//Import::custom('asd', 'asd');

class HomeController extends Controller{
  
  public function index(){
	session_start();
	$_SESSION["page"] = "home";
    //$ob =  $this->model('home');
    //$table = $ob->showTables();
    $data["name"] = "Deepali";
    $data["lastname"] = "jauhri";
 // $data["tbl"] = $table;
  // echo BASE_PATH;
//echo APP_ROOT;
    $this->View('home/view', $data);

  }

  public function asd(){
$this->View('home/view2', $data);

      
  }
}
?>
