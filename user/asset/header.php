<header class="header1">
		<!-- Header desktop -->
		<div class="container-menu-header">
			<div class="topbar">
				
			

				<div class="topbar-child2">
					<span class="topbar-email">
					<?php
						require_once 'koneksi.php';
						$connection = new ConnectionDB();
						$conn = $connection->getConnection();
						$sql1 = "SELECT * from tb_toko where id_toko = '1'";
						$query1 = $conn->prepare($sql1);
						$query1->execute();
						foreach($query1 as $data1){
							$hasil1 = $data1['email_toko'];
							$logo = $data1['logo'];
							echo $hasil1;
						}

					?>
					</span>
				</div>
			</div>

			<div class="wrap_header">
				<!-- Logo -->
				<a href="index.php" >
					<img src="images/<?php echo $logo;?>" alt="IMG-LOGO" style="width:100px; display: block;position: absolute;left: 150px;top: 75%;-webkit-transform: translateY(-50%);-moz-transform: translateY(-50%);-ms-transform: translateY(-50%);-o-transform: translateY(-50%);transform: translateY(-50%);">
				</a>

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
						<?php
						$sq = "SELECT * from tb_kategori where id_kategori not in(0) limit 4";
						$que = $conn->prepare($sq);
						$que->execute();
						foreach($que as $item){
						?>
							<li>
								<a href="index.php?page=<?php echo $item['id_kategori'];?>"><?php echo $item['nama_kategori'];?></a>
							</li>
						<?php } ?>
							<li>
								<a href="index.php?page=5">Lainnya</a>
							</li>
						</ul>
					</nav>
				</div>

				<!-- Header Icon -->
				<div class="header-icons">
					<a href="index.php?page=daftar" class="header-wrapicon1 dis-block">
						Daftar
					</a>
					<span class="linedivide1"></span>
					<!--a href="login.php" class="header-wrapicon1 dis-block">
						Masuk
					</a-->
					<a href="" data-toggle="modal" data-target="#login">Masuk</a>

					<span class="linedivide1"></span>

					<div class="header-wrapicon2">
						<a href="index.php?page=cart"><i class="fa fa-shopping-cart js-show-header-dropdown"style="color:blue"></i></a>
						<span class="header-icons-noti">
							<?php
								if(empty($_SESSION['sesi'])){
									echo '0';
								}else{
									$id = $_SESSION['sesi'];
									$sql = "SELECT count(*) from tmp_detailcart where id_cart = '$id'";
									$query = $conn->prepare($sql);
									$query->execute();
									foreach($query as $data){}
									$hasil = $data[0];
									echo $hasil;
								}
							?>
						</span>
						
						<!-- Header cart noti -->

					</div>
				</div>
			</div>
			<div class"col-md-12">
			<form action="pencarian.php" method='get'>
				<input type="text" name="cari" id="" class="form-control" placeholder="&#xF002; Pencarian" style="font-family:Arial, FontAwesome;text-align: center;">
				<input type="submit" value="Cari" hidden>
			</form>
		</div>
		</div>
		
	</header>