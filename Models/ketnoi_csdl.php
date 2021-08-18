<?php
class cls_ketnoi{
	public $conn =NULL;
	public $pdo_stm=NULL;
	
	function cls_ketnoi()
	{
		try{
			$this->conn= new PDO("mysql:host=localhost;dbname=test","root","");
			$this->conn->exec("SET NAMES UTF8");
		}
		catch(PDOException $ex){
			echo"<h3>".$ex->getMessage()."</h3>";
			die("<h3>lỗi kết nối csdl</h3>");
		}
	}
	function ThucthiSQL($sql,$data=NULL){
		$this->pdo_stm = $this->conn->prepare($sql);
		$ketqua=false;
		if($data!=NULL)
			$ketqua = $this->pdo_stm->execute($data);
		else
			$ketqua = $this->pdo_stm->execute();
		return $ketqua;
	}
}
?>