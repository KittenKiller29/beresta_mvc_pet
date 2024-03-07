<?php
	class View{
		public function render($tpl){
			require_once root. $tpl;
		}
		public function addMenu($values){
			echo json_encode($values, JSON_UNESCAPED_UNICODE);
		}
	}