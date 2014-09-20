<?php 

class Controller{

  public $module;

  protected function model($model){
    require_once BASE_PATH.'/app/'.$this->module.'/models/'.$model.'.php';
    $model.='Model';
    return new $model();
  }

  protected function homeView($view, $data = array()){
    $this->showView('home', $view, $data);
  }


  protected function view($view, $data = array()){
    $this->showView('view', $view, $data);
  }

  protected function blankView($view, $data = array()){
    $this->showView('blank', $view, $data);
  }

  protected function fullView($view, $data = array()){
    $this->showView('full', $view, $data);
  }

  private function showView($theme_page, $view, $data=array()){
    if(file_exists(BASE_PATH.THEME_PATH."/$theme_page.php")){
      extract($data);
      ob_start();
      require_once BASE_PATH.'/app/'.$this->module.'/views/'.$view.'.php';
      $content = ob_get_clean();

      require_once BASE_PATH.THEME_PATH."/$theme_page.php";
    }
    else{
      $call_file = debug_backtrace()[1]["file"];
      $line = debug_backtrace()[1]["line"];
      $msg = "(".BASE_PATH.THEME_PATH."/$theme_page.php) failed to open stream: No such file or directory in <b>$call_file</b> on line $line<br/>";
      die($msg);
    }
  }
    protected function redirect($relative_url){
      header('Location: '.$relative_url);
    }

  }
?>
