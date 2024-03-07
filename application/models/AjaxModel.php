<?php
	class AjaxModel extends Model{
		public function getALLMenu(){
			$menu=[];
			$catalog=$this->db->getCatalogTable();
			$tags=$this->db->getTagsTable();
			for($i=0;$i<count($catalog);$i++){
				$menu[$i]=[$catalog[$i]];
				for($j=0;$j<count($tags);$j++){
					if($catalog[$i][1]==$tags[$j][1]){
						$menu[$i][]=$tags[$j];
					}
				}
			}
			return $menu;
		}
	}