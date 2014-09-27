<?php 
//Import::helper('asd');
//Import::library('asd');
//Import::custom('asd', 'asd');

class blankController extends Controller{
  
  public function index(){
	$_SESSION["page"] = "about";
    //$ob =  $this->model('home');
    //$table = $ob->showTables();
    $data["name"] = "Deepali";
    $data["lastname"] = "jauhri";
 // $data["tbl"] = $table;
  // echo BASE_PATH;
//echo APP_ROOT;
    $this->blankView('home/view', $data);

  }

  public function home(){
 $_SESSION["page"] = "about";
    //$ob =  $this->model('home');
    //$table = $ob->showTables();
    $data["name"] = "Deepali";
    $data["lastname"] = "jauhri";
 // $data["tbl"] = $table;
  // echo BASE_PATH;
//echo APP_ROOT;


$this->homeView('home/view2', $data);

      
  }
 public function gallery(){
 $_SESSION["page"] = "about";
    //$ob =  $this->model('home');
    //$table = $ob->showTables();
    $data["name"] = "Deepali";
    $data["lastname"] = "jauhri";
 // $data["tbl"] = $table;
  // echo BASE_PATH;
//echo APP_ROOT;

$this->fullView('home/view2',$data);

}
public function contact()
{
 $_SESSION["page"] = "about";
    //$ob =  $this->model('home');
    //$table = $ob->showTables();
    $data["name"] = "Deepali";
    $data["lastname"] = "jauhri";
 // $data["tbl"] = $table;
  // echo BASE_PATH;
//echo APP_ROOT;

$this->contactView('home/view2',$data);
}
}
?>


































































































