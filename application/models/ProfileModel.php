<?php
	class ProfileModel extends Model{
		public function getSessionStatus(){
			if (!isset($_SESSION['authorized'])){
				return 0;
			}
			else{
				return 1;
			}
		}
		public function startSession($email,$pasw){
			$users=$this->db->getUsersTable();
			for($i=0;$i<count($users);$i++){
				if($users[$i][0]==$email && $users[$i][2]==$pasw){
					$_SESSION['authorized']=1;
					return;
				}
			}
		}
	}