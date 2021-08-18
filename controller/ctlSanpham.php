<?php
require_once("Models/cls_Sanpham.php");
$act="";
$id="";
$module="";
$vl="";
$tt="";
$tieptuc="?module" .$module;
if(isset($_REQUEST["act"]))
{
	$act=$_REQUEST["act"];
}
if(isset($_REQUEST["tt"]))
{
	$tt=$_REQUEST["tt"];
}
if(isset($_REQUEST["vl"]))
{
	$vl=$_REQUEST["vl"];
}
if(isset($_REQUEST["id"]))
{
	$id=$_REQUEST["id"];
}
if(isset($_REQUEST['module']))
{
	$module=$_REQUEST['module'];
}
$sanpham= new clsSanpham();

if($act=="them")
{
	require("");
}
else if($module=="product"&&isset($_REQUEST['vl'])==false)
{
	$ketqua=$sanpham->LayDSSanpham();
	require("view/product/p_product.php");
}
else if($module=="detail")
{
	$ketqua=$sanpham->vSanpham($id);
	require("view/detail/detail.php");
}
else if($act=="brand"&&$tt==""||$tt=="0"&&$act=="brand"){
	$ketqua=$sanpham->vBrand($vl);
	require("view/product/p_product.php");
}
else if($act=="loai"&&$tt==""||$tt=="0"&&$act=="loai")
{
	$ketqua=$sanpham->vSPloai($vl);
	require("view/product/p_product.php");
}
else if($tt=="1"&&$act=="loai")
{
	$ketqua=$sanpham->vSP_1($vl);
	require("view/product/p_product.php");
}
else if($tt=="2"&&$act=="loai")
{
	$ketqua=$sanpham->vSP_2($vl);
	require("view/product/p_product.php");
}
else if($tt=="3"&&$act=="loai")
{
	$ketqua=$sanpham->vSP_3($vl);
	require("view/product/p_product.php");
}
else if($tt=="4"&&$act=="loai")
{
	$ketqua=$sanpham->vSP_4($vl);
	require("view/product/p_product.php");
}
else if($tt=="1"&&$act=="brand")
{
	$ketqua=$sanpham->vBrand_1($vl);
	require("view/product/p_product.php");
}
else if($tt=="2"&&$act=="brand")
{
	$ketqua=$sanpham->vBrand_2($vl);
	require("view/product/p_product.php");
}
else if($tt=="3"&&$act=="brand")
{
	$ketqua=$sanpham->vBrand_3($vl);
	require("view/product/p_product.php");
}
else if($tt=="4"&&$act=="brand")
{
	$ketqua=$sanpham->vBrand_4($vl);
	require("view/product/p_product.php");
}
else{
	$ketqua=$sanpham->SanPhamContent();
	require("view/include/product.php");
	$kq=$sanpham->vHot();
	require("view/include/bestsell.php");
}
?>