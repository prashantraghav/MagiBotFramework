<?php 

class HomeModel{

  private $db;

  public function __construct(){
    $this->db  = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
  }

  public function showTables(){
    $db = new DB();
    $tables = $db->getResult('show tables');
    return $tables;
  }
}
?>
