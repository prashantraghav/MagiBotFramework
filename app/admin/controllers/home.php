<?php 
  
class HomeController extends Controller{
    
  public function index(){
$data["name"]="deepali";

   $this->View('home/view',$data);
    }
	
	public function form($msg=null){
			$data["msg"] = $msg;
		$data["this"]="forms";
		$this->fullView('home/product',$data);
	}

	public function save(){
		$p_model = $this->model('product');
		$p_model->insert($_POST);
		$this->form("data inserted");
	}
  }
?>
