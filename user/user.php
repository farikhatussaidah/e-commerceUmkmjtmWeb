<?php
session_start();
require_once 'koneksi.php';
    $connection = new ConnectionDB();
    $conn = $connection->getConnection();
    $sql1 = "SELECT * from tb_toko where id_toko = '1'";
    $query1 = $conn->prepare($sql1);
    $query1->execute();
    foreach($query1 as $data1){
        $logo = $data1['logo'];
        $nama = $data1['nama_toko'];
    }
if(empty($_SESSION['username'])){
    header('location: index.php');
}else{?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="icon" type="image/png" sizes="16x16" href="images/<?php echo $logo;?>">
	<title><?php echo $nama;?></title>
    <?php include 'asset/css.php'?>
</head>
<body class="animsition">

	<!-- Header -->
	<?php 
		include 'asset/header_user.php';
		?>

	<!-- Slide1 -->
	
	<?php 
		error_reporting(0);
		if(empty($_GET['page'])&&empty($_GET['pesanan'])){
			include 'content/pesanan.php';
		}
		elseif(isset($_GET['pesanan'])){
			include 'content/detailpesanan.php';
		}elseif(isset($_GET['notif'])){
			include 'content/pesanan.php';
		}
		
		

	?>

	<!-- Iklan -->



	<!-- Shipping -->
	<?php include 'asset/shipping.php'?>


	<!-- Footer -->
    <?php include 'asset/footer.php'?>



	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>

	<?php include 'asset/modal-user.php' //Mengimport Konfigurasi Modal/Popup User?>
<!-- import javascript dan JQuery -->
<?php include 'asset/js.php'?>

</body>
</html>
<?php } ?>