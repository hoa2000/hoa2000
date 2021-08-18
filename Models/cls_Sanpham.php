<?php
require_once("ketnoi_csdl.php");
class clsSanpham{
	public $db;
	public $data;
	function clsSanpham(){
		$this->db= new cls_ketnoi();
		$this->data=array();
	}
	
	function LayDSSanpham(){
		$sql="select * from tb_product";
		$ketqua= $this->db->ThucthiSQL($sql);
		$this->data==NULL;
		if($ketqua==true)
			$this->data=$this->db->pdo_stm->fetchAll();
		return $ketqua;
	}
	function SanPhamContent(){
		$sql="select * from tb_product where content=1";
		$ketqua= $this->db->ThucthiSQL($sql);
		$this->data==NULL;
		if($ketqua==true)
			$this->data=$this->db->pdo_stm->fetchAll();
		return $ketqua;
	}
	function vSanpham($MaSP){
		$sql="select * from tb_product where MaSP=?";
		$data[]=$MaSP;
		$ketqua= $this->db->ThucthiSQL($sql,$data);
		$this->data==NULL;
		if($ketqua==true)
			$this->data=$this->db->pdo_stm->fetch();
		return $ketqua;
		
	}
	function vHot(){
		$sql="select * from tb_product where hot=1";
		$kq= $this->db->ThucthiSQL($sql);
		$this->data==NULL;
		if($kq==true)
			$this->data=$this->db->pdo_stm->fetchAll();
		return $kq;
	}
	function vBrand($vl){
		$sql="select * from tb_product where brand=?";
		$data[]=$vl;
		$ketqua= $this->db->ThucthiSQL($sql,$data);
		$this->data==NULL;
		if($ketqua==true)
			$this->data=$this->db->pdo_stm->fetchAll();
		return $ketqua;
	}
	function vSPloai($vl)
	{
		$sql="select * from tb_product where loai=?";
		$data[]=$vl;
		$ketqua=$this->db->ThucthiSQL($sql,$data);
		$this->data==NULL;
		if($ketqua==true)
		{
			$this->data=$this->db->pdo_stm->fetchAll();
		}
		return $ketqua;
	}
	function vSP_3($vl)
	{
		$sql="select * from tb_product where loai=? order by Gia";
		$data[]=$vl;
		$ketqua= $this->db->ThucthiSQL($sql,$data);
		$this->data==NULL;
		if($ketqua==true)
			$this->data=$this->db->pdo_stm->fetchAll();
		return $ketqua;
	}
	function vSP_4($vl)
	{
		$sql="select * from tb_product where loai=? order by Gia DESC";
		$data[]=$vl;
		$ketqua= $this->db->ThucthiSQL($sql,$data);
		$this->data==NULL;
		if($ketqua==true)
			$this->data=$this->db->pdo_stm->fetchAll();
		return $ketqua;
	}
	function vSP_2($vl)
	{
		$sql="select * from tb_product where loai=? order by MaSP DESC";
		$data[]=$vl;
		$ketqua= $this->db->ThucthiSQL($sql,$data);
		$this->data==NULL;
		if($ketqua==true)
			$this->data=$this->db->pdo_stm->fetchAll();
		return $ketqua;
	}
	function vSP_1()
	{}
	
	function vBrand_1()
	{}
	function vBrand_2($vl)
	{
		$sql="select * from tb_product where brand=? order by MaSP DESC";
		$data[]=$vl;
		$ketqua= $this->db->ThucthiSQL($sql,$data);
		$this->data==NULL;
		if($ketqua==true)
			$this->data=$this->db->pdo_stm->fetchAll();
		return $ketqua;
	}
	function vBrand_3($vl)
	{
		$sql="select * from tb_product where brand=? order by Gia";
		$data[]=$vl;
		$ketqua= $this->db->ThucthiSQL($sql,$data);
		$this->data==NULL;
		if($ketqua==true)
			$this->data=$this->db->pdo_stm->fetchAll();
		return $ketqua;
	}
	function vBrand_4($vl)
	{
		$sql="select * from tb_product where brand=? order by Gia DESC";
		$data[]=$vl;
		$ketqua= $this->db->ThucthiSQL($sql,$data);
		$this->data==NULL;
		if($ketqua==true)
			$this->data=$this->db->pdo_stm->fetchAll();
		return $ketqua;
	}
	
}
?>