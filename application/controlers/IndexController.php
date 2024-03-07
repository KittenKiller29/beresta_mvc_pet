<?php
	class IndexController extends Controller{
		private $page='/application/views/main.tpl.php';
		public function __construct(){
			$this->model=new IndexModel();
			$this->view=new View();
		}
		public function index(){
			$this->view->render($this->page);
		}
	}