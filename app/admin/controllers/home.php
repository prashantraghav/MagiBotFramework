<?php 
  
class HomeController extends Controller{
    
  public function index(){
    echo "this is admin";
    $this->View('home/view');
    }
  }
?>
