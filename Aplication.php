<?php 
	class Aplication
	{
		public function executar(){
			if(isset($_GET['del']) == ''){
				$url = isset($_GET['url']) ? explode('/', $GET['url'])[0] : "Home";
				$url = ucfirst($url);
			}
			else{
				$url = 'Home';
			}
			$url.='Controller';
			if(file_exists('Controller/'.$url.'.php')){
				$className = 'Controller\\'.$url;
				$controller = new $className;
				$controller->executar();
			}
			else{
				die("Não existe esse controlador");
			}
		}
	}
 ?>