<?php 
class HomeModel{

  private $db;

  public function __construct(){
    $this->db  = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
  }

  public function showTables(){
    //$result = $this->db->query('show tables');
    //print_r($result->fetch_assoc());
    $db = new DB();
    $tables = $db->getResult('show tables');
    print_r($tables);
  }
}
?>
