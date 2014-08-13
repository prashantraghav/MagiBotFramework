<?php 

class Import{

  public static function helper($helper){
    self::imp("helpers/$helper");
  }

  public static function library($library){
    self::imp("library/$library");
  }

  public static function others($file){
    self::imp($file);
  }

  public static function imp($file){
    if(file_exists(BASE_PATH."/$file.php"))
      require_once BASE_PATH."/$file.php";
    else{
      $call_file = debug_backtrace()[1]["file"];
      $line = debug_backtrace()[1]["line"];
      $msg = "(".BASE_PATH."/$file.php) failed to open stream: No such file or directory in <b>$call_file</b> on line $line<br/>";
      die($msg);
    }
  }
}
?>
