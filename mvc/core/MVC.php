<?php 

class MVC{

  protected $module = 'default';
  protected $controller = 'home';
  protected $method = 'index';
  protected $params = array();

  public function __construct(){
    $url  = $this->parseUrl();      //url[0] is controller name, url[1] is method name, url[2] is perameters to be pass in method.

    $this->routeUrl($url);   // must be call at last 
  }



  // parse the url after base_url
  public function parseUrl(){
    if(isset($_GET['url'])){
      $url =  filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL);     // filter special chars from url
      return explode('/', $url);
    }
  }


  private function routeUrl($url){
    $controller_index = 0;
    $module = BASE_PATH.'/app/'.$url[0];
    if(isset($url[0]) && is_dir($module)){
      $this->module = $url[0];
      unset($url[0]);
      $controller_index = 1;
    }
    $this->setThemePath();


    $controller = (isset($url[$controller_index]))?$url[$controller_index]:null;
    $this->setController($controller);     
    unset($url[$controller_index]);

    if(isset($url[$controller_index+1])){
      $this->setMethod($url[$controller_index+1]);
      unset($url[$controller_index+1]);
    }

    $this->params = ($url)?array_values($url):array();

    if(isset($this->controller) && isset($this->method)){
      $this->controller->module = $this->module;
      call_user_func_array(array($this->controller, $this->method), $this->params);   // call the user function in users controller. 
    }
    else
      $this->pageNotFound();
  }

  private function setController($controller){
    if(isset($controller))
      if(file_exists(BASE_PATH.'/app/'.$this->module.'/controllers/'.$controller.'.php'))
        $this->controller = $controller;
      else
        $this->controller = null;

    if(isset($this->controller)){
      require_once BASE_PATH.'/app/'.$this->module.'/controllers/'.$this->controller.'.php';
      $this->controller = ucwords($this->controller).'Controller';

      $this->controller =  class_exists($this->controller)?new $this->controller():null;
    }
  }

  private function setMethod($method){
    $this->method = (method_exists($this->controller, $method))? $method:null;
  }

  private function setThemePath(){
    $theme ='';
    if(defined(strtoupper($this->module).'_THEME'))
      $theme = constant(strtoupper($this->module).'_THEME');
    else
       $theme = DEFAULT_THEME;

    define('THEME_PATH', '/themes/'.$theme);
    define('THEME', (defined('APP_ROOT'))?'./'.APP_ROOT.'/themes/'.$theme:'./themes/'.$theme);
  }

  private function pageNotFound(){
    if(file_exists(BASE_PATH.THEME_PATH.'/404.php'))
      require_once BASE_PATH.THEME_PATH.'/404.php';
    else
      require_once BASE_PATH.'/mvc/pages/page_not_found.php';
  }

}
?>
