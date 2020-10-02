<?php
	define('INCLUDE_PATH','http://localhost/mvc/');
	define('INCLUDE_PATH_FULL','http://localhost/mvc/Views/pages/');
	class Application
	{
		public function executar(){
			$url = isset($_GET['url']) ? explode('/',$_GET['url'])[0] : 'Home';
			$url = ucfirst($url);
			$url.="Controller";
			if(file_exists('Controllers/'.$url.'.php')){
				$className = 'Controllers\\'.$url;
				#echo 'Estou carregando a classe: '.$url;
				$controler = new $className;
				$controler->executar();
			}else{
				die("Não existe esse controlador.");
			}
		}
	}

?>