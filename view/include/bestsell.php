		<bestsell>
			<div class="category">
				<p>A COMPANION FOR YA</p>
				<h1>SPECIAL <small style="color:black">EDITION</small></h1>
			</div>
			<div class="container" style="width:1200px">
				<div class="hot">
					<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
						<div class="carousel-inner">
						<?php
						$rows=$sanpham->data;
						$i=0;
						foreach($rows as $row)
						{
							$i++;
						?>
							<div class="carousel-item <?php if($i==1)
							echo"active";	
							?> ">
								<div class="show">
									<a href="index.php?module=detail&id=<?=$row['MaSP']?>">
									<img src="<?=$row['img_1']?>" style="width:500px;height:500px;"/>
								</a>
									<div class="sell_conten">
										<a href="#"><?=$row['TenSP']?></a>
										<p>_</p>
										<h3><?=number_format($row['Gia'])?>VNĐ</h3>
										<i>> Sản phẩm nhập khẩu chính hãng.</i></br>
										<i>> Vận chuyển miễn phí toàn quốc.</i></br>
										<i>> Giao hàng trong ngày.</i></br>
										<i>> Thanh toán sau khi nhận hàng.</i></br>
										<i>> Bảo hành 5 năm tại Công ty</i></br>
										<i>> Bảo hành chính hãng toàn cầu.</i></br></br>
										<span style="display: block;border-top: 1px dotted #ddd;padding: 5px 0;border-bottom: 1px dotted #ddd">Mã:<?=$row['MaSP']?></span>
										<span>Danh mục</span>
										<a class="btn btn-outline-warning" style="width:100px;height:40px;font-size:16px;margin-top:20px;" href="index.php?module=detail&id=<?=$row['MaSP']?>" role="button">Đọc thêm</a>
									</div>
								</div>
							</div>
							<?php
							if($i>7)
							{
								break;
							}
						}
							?>
						</div>
						<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
							<span style="color:black;margin-left:-80px">
								<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
									<path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
								</svg>
							</span>
							<span class="visually-hidden">Previous</span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
							<span style="color:black;margin-right:-80px">
								<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
									<path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
								</svg>
							</span>
							<span class="visually-hidden">Next</span>
						</button>
					</div>
				</div>
			</div>
		</bestsell>