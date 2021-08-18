<?php
require_once("ketnoi_csdl.php");
class clsbrand{
	public $db;
	public $data;
	function clsbrand(){
		$this->db=new cls_ketnoi();
		$this->data= array();
	}
	
	function DSBrand(){
		$sql="select * from tb_brand";
		$ketqua=$this->db->ThucthiSQL($sql);
		$this->data==NULL;
		if($ketqua==true)
			$this->data=$this->db->pdo_stm->fetchAll();
		return $ketqua;
	}
}
?>