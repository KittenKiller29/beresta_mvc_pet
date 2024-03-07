<?php
	class AjaxController extends Controller{
		public function __construct(){
			$this->model=new AjaxModel();
			$this->view=new View();
		}
		public function menu(){
			$this->view->addMenu($this->model->getALLMenu());
		}
	}