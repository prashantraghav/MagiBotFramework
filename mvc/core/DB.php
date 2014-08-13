<?php 

class DB{

  private $db;

  public function __construct($host=DB_HOST, $user=DB_USER, $pass=DB_PASS, $db=DB_NAME){
    $this->db = new mysqli($host, $user, $pass, $db);
  }

  public function query($sql){
    $this->db->query($sql);
  }

  public function getResult($sql){
    $result = array();
    $res = $this->db->query($sql);
    while($row = $res->fetch_assoc()){
      array_push($result, $row);
    }
    return $result;
  }
  }
?>
