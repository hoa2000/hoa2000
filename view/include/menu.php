		<menu id="navbar">
		<div class="container">
			<ul class="nav  nav-fill center ">
				<li class="nav-item hi">
					<a class="nav-link" href="index.php">TRANG CHỦ</a>
				</li>
				<li><p class="drives">|</p></li>
				<li class="nav-item hi">
					<a class="nav-link"href="index.php?module=product">SẢN PHẨM HOT</a>
				</li>
				<li><p class="drives">|</p></li>
				<li class="nav-item hi">
					<a class="nav-link"href="index.php?module=product">SALE</a>
				</li>
				<li><p class="drives">|</p></li>
				<li class="nav-item hi">
					<a class="nav-link"href="index.php?module=product&act=loai&vl=0">ĐỒNG HỒ NỮ</a>
				</li>
				<li><p class="drives">|</p></li>
				<li class="nav-item hi">
					<a class="nav-link"href="index.php?module=product&act=loai&vl=1">ĐỒNG HỒ NAM</a>
				</li>
				<li><p class="drives">|</p></li>
				<li class="nav-item hello hi">
					<a class="nav-link" href="index.php?module=product">BRANDS<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
						<path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
					</svg></a>
					<div class="dropdown-content">
					<?php
					require_once("Models/cls_brand.php");
					$brand=new clsbrand();
					$ketqua=$brand->DSbrand();
					$rows=$brand->data;
					foreach($rows as $row)
					{
					?>
					<a href="index.php?module=product&act=brand&vl=<?=$row['id_brand']?>"><?=$row['ten']?></a>
					<?php
					}
					?>
					</div>
				</li>
				<li><p class="drives">|</p></li>
				<li class="nav-item hi">
					<a class="nav-link"href="index.php?module=lienhe">LIÊN HỆ</a>
				</li>
				<li><p class="drives">|</p></li>
				<li class="nav-item hi">
					<a class="nav-link"href="index.php?module=gioithieu">GIỚI THIỆU</a>
				</li>
			</ul>
		</div>
		</menu>
		<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>