<p_product>
		<div class="container" style="width:1200px">
			<div class="p_tittle">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#" style="text-decoration:none;color:rgba(102,102,102,0.7)">Trang chủ</a></li>
						<li class="breadcrumb-item active" aria-current="page" style="color:black">Sản phẩm hot</li>
					</ol>
				</nav>
				<div class="p_rtittle">
					<p>Hiển thị một kết quả duy nhất: 
						<select name="sTT" id="sTT" onChange="sTT_Change(this.value);">
							<option value="">sắp xếp</option>
							<option value="0">Thứ tự mặc định</option>
							<option value="1">Thứ tự theo mức độ phổ biến</option>
							<option value="2">Mới nhất</option>
							<option value="3">Thứ tự theo giá: từ thấp đến cao</option>
							<option value="4">Thứ tự theo giá: từ cao đến thấp</option>
						</select>
						 <script>
                function sTT_Change(new_value)
                {
                 if(new_value!="")
                  window.location.href=
                   "?module=product&act=<?=$_REQUEST['act']?>&vl=<?=$_REQUEST['vl']?>&tt="+new_value;
                }
                </script>
					</p>
				</div>
			</div>
		</div>
		<div class="container" style="width:1200px">
			<div class="p_row">
				<div class="p_left">
					<div class="row" style="height:430px;">
						<h3>DANH MỤC SẢN PHẨM</h3>
						<div class="p_table" style="height:329px;">
						<table class="table">
							<tbody>
								<tr>
									<td><a href="#">Casio</a></td>
								</tr>
								<tr>
									<td><a href="#">Mark</a></td>
								</tr>
								<tr>
									<td><a href="#">Mark</a></td>
								</tr>
								<tr>
									<td><a href="#">Mark</a></td>
								</tr>
								<tr>
									<td><a href="#">Mark</a></td>
								</tr>
								<tr>
									<td><a href="#">Mark</a></td>
								</tr>
								<tr>
									<td><a href="#">Mark</a></td>
								</tr>
								<tr>
									<td><a href="#">Mark</a></td>
								</tr>
							</tbody>
						</table>
						</div>
					</div>
					<div class="row" style="width:90%;height:150px;margin-left:10px">
							<h3>LỌC THEO GIÁ</h3>
							<input type="range" min="800000" max="800000000" value="800000" class="form-range" id="customRange1">
							<p>từ 800.000 VND đến :<span id="demo"></span>VND</p>
							<button type="submit">Lọc</button>
					</div>
					<script>
						var slider = document.getElementById("customRange1");
						var output = document.getElementById("demo");
						output.innerHTML = slider.value;

						slider.oninput = function() {
						output.innerHTML = this.value;
						}
					</script>
					<div class="row" style="height:470px;margin-top:50px">
						<h3>QUAN TÂM</h3>
						<div class="p_table" style="height:421px">
						<table class="table">
							<tbody>
								<tr class="p_tr">
									<td><a href="#"><img src="http://mauweb.monamedia.net/rolex/wp-content/uploads/2018/11/22-480x480.jpg"/></a></td>
									<td style="overflow:hidden;">
										<a href="#">BULOVA CORPORATION AUTOMATIC MEN'S </a>
										<p>hello</p>
									</td>
								</tr>
								<tr class="p_tr">
									<td><a href="#"><img src="http://mauweb.monamedia.net/rolex/wp-content/uploads/2018/11/22-480x480.jpg"/></a></td>
									<td style="overflow:hidden;">
										<a href="#">BULOVA CORPORATION AUTOMATIC MEN'S </a>
										<p>hello</p>
									</td>
								</tr>
								<tr class="p_tr">
									<td><a href="#"><img src="http://mauweb.monamedia.net/rolex/wp-content/uploads/2018/11/22-480x480.jpg"/></a></td>
									<td style="overflow:hidden;">
										<a href="#">BULOVA CORPORATION AUTOMATIC MEN'S </a>
										<p>hello</p>
									</td>
								</tr>
								<tr class="p_tr">
									<td><a href="#"><img src="http://mauweb.monamedia.net/rolex/wp-content/uploads/2018/11/22-480x480.jpg"/></a></td>
									<td style="overflow:hidden;">
										<a href="#">BULOVA CORPORATION AUTOMATIC MEN'S </a>
										<p>hello</p>
									</td>
								</tr>
							</tbody>
						</table>
						</div>
					</div>
				</div>
				<div class="p_right">
					<div class="r_row">
					<?php
					$rows=$sanpham->data;
					foreach($rows as $row)
					{
					?>
						<div class="r_column">
							<a href="index.php?module=detail&id=<?=$row['MaSP']?>" >
								<div class="p_img1">
									<img src="<?=$row['img_1']?>"/>
								</div>
								<div class="p_img2">
									<img src="<?=$row['img_2']?>"/>
								</div>
								<div style="display:block">
								<div class="name">
								<p><?=$row['TenSP']?></p>
								</div>
								<p style="margin-top:20px"><?=number_format($row["Gia"])?>VNĐ</p>
								</div>
							</a>
							<icon>
								<a href="##">
									<div class="addcart1">
										<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
										<path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z"/>
										<path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
										</svg>
									</div>
									<div class="addcart2">
										<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bag-plus-fill" viewBox="0 0 16 16">
										<path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zM8.5 8a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V12a.5.5 0 0 0 1 0v-1.5H10a.5.5 0 0 0 0-1H8.5V8z"/>
										</svg>
									</div>
								</a>
							</icon>
						</div>
						<?php
					}
						?>
					</div>
				</div>
			</div>
		</div>
	</p_product>