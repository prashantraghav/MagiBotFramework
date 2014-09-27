<?php
//Import::library('asd');
//Import::custom('asd', 'asd');

class controlController extends Controller{
 public function hello(){
$data["name"]="hi";
    $this->View('home/view2', $data);
  }

}
?>

