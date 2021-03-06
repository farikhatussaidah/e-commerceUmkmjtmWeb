	

	<!-- Cart -->
	<section class="cart bgwhite p-t-70 p-b-100">
        <div class="col-md-12">
            <div class="bgwhite" style="padding:20px">
                <center><h3 style="margin-bottom:25px">Daftar Pesanan</h3></center>
                        <table class="table-shopping-cart">
                            <tr class="table-head">
                                <th >Kode Pesanan</th>
                                <th>Tanggal Pemesanan</th>
                                <th>Status Pesanan</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                            <?php
                            require_once ('koneksi.php');
                            $no = 1;
							$connection = new ConnectionDB();
                            $conn = $connection -> getConnection();
                            $id_pelanggan = $_SESSION['id_pelanggan'];
							$sql = "SELECT * from tb_pesanan where id_pelanggan='$id_pelanggan' ORDER BY statuspesanan DESC";
							$query = $conn->prepare($sql);
							$query->execute();
							foreach($query as $data){
                                $status = $data['statuspesanan'];
                                $no++;
						    ?>
                            <tr class="table-row">
                                <td ><?= $data['id_pesanan']?></td>
                                <td ><?= $data['tanggal']?></td>
                                <td><?= $data['statuspesanan']?></td>
                                <td><?= "Rp. ".number_format($data['total'], 2, ',','.') ?></td>
                            <td><center>
                                <a href="user.php?pesanan=<?= $data['id_pesanan']?>"><button class="btn btn-primary">Lihat Pesanan</button></a>
                                <?php if($status == 'Pesanan Di Kirim'){ ?><a href="aksi/terima_pesanan.php?id=<?= $data['id_pesanan'] ?>"><button class="btn btn-danger">Terima Pesanan</button></a><?php }?>
                                <?php if($status != 'Pesanan Di Kirim' && $status != 'Pesanan Di Terima' && $status != 'Pesanan Di Batalkan' ){ ?><a href="aksi/batal_pesanan.php?id=<?= $data['id_pesanan'] ?>"><button class="btn btn-danger">Batalkan Pesanan</button></a><?php }?>
                                <center></td>
                            </tr>
                            <?php } ?>
                        </table>
            </div>
        </div>
	</section>