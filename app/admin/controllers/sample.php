<?php 
class SampleController extends Controller{

  public function index(){
     $data["print"] = "This is index";
     $this->view('/sample/view', $data); 
  }

  public function test(){
     $data["print"] = "This is test";
     $this->view('/sample/view', $data); 
  }
  }
?>
