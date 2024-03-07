<?php
interface IDB{
	public function getLink();
	public function getCatalogTable();
	public function getTagsTable();
}
class DB implements IDB{
	private $link;
	private $dbhost;
	private $dbuser;
	private $dbpassword;
	private $dbname;
	function __construct($dbhost,$dbuser,$dbpassword,$dbname){
		$this->dbhost=$dbhost;
		$this->dbuser=$dbuser;
		$this->dbpassword=$dbpassword;
		$this->dbname=$dbname;
	}
	public function getLink(){
		return $this->link;
	}
	public function getCatalogTable(){
		$this->link=mysqli_connect(
			$this->dbhost,
			$this->dbuser,
			$this->dbpassword,
			$this->dbname
		);
		$catalog=[];
		$result=mysqli_query($this->link,"select * from catalog");
		while($row=mysqli_fetch_array($result)){
			$catalog[]=[$row['name'],$row['cat_id']];
		}
		mysqli_close($this->link);
		return $catalog;
	}
	public function getTagsTable(){
		$this->link=mysqli_connect(
			$this->dbhost,
			$this->dbuser,
			$this->dbpassword,
			$this->dbname
		);
		$tags=[];
		$result=mysqli_query($this->link,"select * from tags");
		while($row=mysqli_fetch_array($result)){
			$tags[]=[$row['name'],$row['cat_id'],$row['idtags']];
		}
		mysqli_close($this->link);
		return $tags;

	}
}