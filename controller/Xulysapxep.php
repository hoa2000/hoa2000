<?php
require_once("Models/cls_Sanpham.php");
	$tt=$_REQUEST['tt'];
	$loai=$_REQUEST['act'];
	$vl=$_REQUEST['vl'];
	if($tt==1)
	{
		$ketqua=$sanpham->vSPloai($vl);
		require("view/product/p_product.php");
	}
?>