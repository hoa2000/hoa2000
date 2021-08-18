<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Hòa Thân Shop</title>
<link type="text/css" rel="stylesheet" href="style.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"/>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha384-vk5WoKIaW/vJyUAd9n/wmopsmNhiy+L2Z+SBxGYnUkunIxVxAv/UtMOhba/xskxh" crossorigin="anonymous"></script>
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<script src="dist/zoomy.js"></script>
<link type="text/css" rel="stylesheet" href="dist/zoomy.css">
<!--<script language="JavaScript" type="text/JavaScript" src="Scripts/kt-trinhduyet.js"></script>-->


<!--<script type="text/javascript" src="ajax.js"></script>-->

</head>

<body>
	<div class="containe">
		<?php
		include("view/include/header.php");
		include("view/include/menu.php");
		?>
		<?php 
		   $module="";
		   if(isset($_REQUEST["module"]))
		   $module=$_REQUEST["module"];
		   {
			   switch($module)
			   {
				   case"";
				   include("view/include/banner.php");
				   include("view/include/content.php");
				   include("controller/ctlSanpham.php");
				   include("view/include/believe.php");
				   include("view/include/news.php");
				   }
				 switch($module)
			   {
				   case"product";
					include("controller/ctlSanpham.php");
				}
				 switch($module)
			   {
				   case"gioithieu";
					include("");
				}
				 switch($module)
			   {
				   case"lienhe";
					include("");
				}
				 switch($module)
			   {
				   case"cart";
					include("view/cart/cart.php");
				}
				 switch($module)
			   {
				   case"detail";
					include("controller/ctlSanpham.php");
				}
		   }
		   ?> 
		<?php
			include("view/include/footer.php");
		?>
	</div>
</body>
</html>