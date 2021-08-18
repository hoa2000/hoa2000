<detail>
<?php
					$row=$sanpham->data;
					?>
			<div class="container" style="width:1500px">
				<div class="d_conten">
					<div class="d_column" style="background-color:white">
						<div id="el" class="d_type">
							<script>
    var urls = [
        '<?=$row['img_1']?>',
        '<?=$row['img_2']?>',
    ];
    $('#el').zoomy(urls);
 </script>
						</div>
					</div>
					<div class="d_column">
						<div class="d_title">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
									<li class="breadcrumb-item active" aria-current="page">Đồng hồ nam</li>
								</ol>
							</nav>
						</div>
						<div class="d_name">
							<h1><?=$row['TenSP']?></h1>
						</div>
						<div style="color:#ddd">
							<svg xmlns="http://www.w3.org/2000/svg" width="50" height="30" fill="currentColor" class="bi bi-dash-lg" viewBox="0 0 16 16">
								<path d="M0 8a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2H1a1 1 0 0 1-1-1z"/>
							</svg>
						</div>
						<div class="d_money">
							<span><?=number_format($row['Gia'],0.3)?> VNĐ</span>
						</div>
						<div class="d_more">
							<p>› Sản phẩm nhập khẩu chính hãng.</br>
							› Vận chuyển miễn phí toàn quốc.</br>
							› Giao hàng trong ngày.</br>
							› Thanh toán sau khi nhận hàng.</br>
							› Bảo hành 5 năm tại Công ty.</br>
							› Bảo hành chính hãng toàn cầu.</p>
						</div>
						<div class="d_buy">
							<form action="#">
								<input type="number" id="quantity" value="1" name="quantity" min="1" max="1000">
								<button type="submit" class="d_button"> Thêm vào giỏ</button>
							</form>
						</div>
						<div class="d_id">
							<p>mã: <?=$row['MaSP']?></p>
						</div>
						<div class="d_id">
							<p>Danh mục: Đồng hồ nam</p>
						</div>
					</div>
				</div>
				<div class="d_coment">
					<nav>
						<div class="nav nav-tabs" id="nav-tab" role="tablist"">
							<button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">MÔ TẢ</button>
							<button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">ĐÁNH GIÁ</button>
						</div>
					</nav>
					<div class="tab-content d_view" id="nav-tabContent" style="height:auto">
						<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
							<p><?=$row['MoTa']?>.</p>
							<ul>
								<li>Ballon Bleu de Cartier watch.</li>
								<li>Mechanical movement with automatic winding.</li>
								<li>Steel case, fluted crown decorated with a synthetic spinel cabochon, silvered guilloché opaline dial,
									Roman numerals, blued-steel sword-shaped hands.</li>
								<li>Sapphire crystal.</li>
								<li>Steel bracelet.</li>
								<li>Case dimensions diameter: 33 mm.</li>
								<li>Thickness: 9.96 mm.</li>
								<li>Water-resistant to 3 bar (approx. 30 meters/100 feet).</li>
							</ul>
						</div>
						<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"style="height:auto">
							<div class="d_star">
								<h5>tên người dùng</h5>
								<p>đánh giá</p>
							</div>
							<div class="d_star">
								<h5>tên người dùng</h5>
								<p>đánh giá</p>
							</div>
							<div class="d_star">
								<h5>tên người dùng</h5>
								<p>đánh giá</p>
							</div>
							<div class="d_star">
								<h5>tên người dùng</h5>
								<p>đánh giá</p>
							</div>
							<div class="d_star">
								<h5>tên người dùng</h5>
								<p>đánh giá</p>
							</div>
							<div class="d_star">
								<h5>tên người dùng</h5>
								<p>đánh giá</p>
							</div>
							<div class="d_email">
							<form style="margin:0 20px 50px 20px">
								<div class="mb-3">
									<label for="exampleFormControlInput1" style="margin-top:30px" class="form-label">*Email</label>
									<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
								</div>
								<div class="mb-3">
									<label for="exampleFormControlTextarea1" class="form-label">*Đánh giá</label>
									<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
								</div>
								<input class="button" type="submit" value="Gửi Đi"/>
							</form>
							</div>
						</div>
					</div>
				</div>
					<?php
					include("sp_tuongtu.php");
					?>
			</div>
		</detail>