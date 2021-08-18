		<product>
			<div class="container" style="width:1200px">
				<p style="text-align:center;font-size:24px">360° COLLECTION</p>
				<h1 class="font_product">FEATURED <prod style="color:black">PRODUCTS</prod></h1>
				<div class="view_product">
					<ul>
					<?php
						$rows=$sanpham->data;
						$i=0;
						foreach($rows as $row)
						{
							$i++;
							if($i<7){
					?>
						<li class="hover-shadow">
							<a href="index.php?module=detail&id=<?=$row["MaSP"]?>" >
								<div class="img_product">
									<img src="<?=$row["img_1"]?>"/>
								</div>
								<div style="display:block">
								<div class="name">
								<p><?=$row["TenSP"]?></p>
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
						</li>
						<?php
							}
							else
								break;
						}
						?>
					</ul>
				</div>
			</div>
		</product>