<?php
	class Routing{
		public static function buildRoute(){
			$controllerName='IndexController';
			$modelName='IndexModel';
			$action='index';
			$route=explode('/',$_SERVER['REQUEST_URI']);

			if($route[1]!=''){
				$controllerName=ucfirst($route[1]. 'Controller');
				$modelName=ucfirst($route[1]. 'Model');
			}
			require_once controller_path . $controllerName . '.php';
			require_once model_path . $modelName . '.php';
			
			if (isset($route[2])){
				$action=$route[2];
			}
			$controller= new $controllerName();
			$controller->$action();
			
		}
	}