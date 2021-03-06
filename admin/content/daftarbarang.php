<div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Lihat Daftar Produk</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Lihat Daftar Produk</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                    <?php
                            require_once ("koneksi.php");
                            $connection = new ConnectionDB();
                            $conn = $connection -> getConnection();
                            $sql = "SELECT * from tb_kategori g natural join tb_produk p NATURAL JOIN tb_foto order by id_produk";
                            $hasil = $conn->prepare($sql);
                            $hasil->execute();
                    ?>
                        <div class="card">
                            <div class="card-title">
                                <center><h4>Daftar Produk </center></h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th><center>Kode</center></th>
                                                <th><center>Kategori</center></th>
                                                <th><center>Nama</center></th>
                                                <th><center>Produk</center></th>
                                                <th><center>Harga</center></th>
                                                <th><center>Stok</center></th>
                                                <th><center>Aksi</center></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($hasil as $data){ ?>
                                                <tr>
                                                    <td>
                                                         <?php echo $data['id_produk'] ?>
                                                        
                                                    </td>
                                                    <td>
                                                         <?php echo $data['nama_kategori'] ?>
                                                        
                                                    </td>
                                                    <td>
                                                         <?php echo $data['nama_produk'] ?>
                                                        
                                                    </td>
                                                    <td>
                                                         <?="<img src='../media/foto/".$data['nama_foto']."'style='width:150px; height:100px;'>"?>
                                                        
                                                    </td>
                                                    <td>
                                                         <?php echo $data['harga_produk'] ?>
                                                         
                                                    </td>
                                                    <td>
                                                         <?php echo $data['jumlah_produk'] ?>
                                                         
                                                    </td>
                                                    <td>
                                                        <center><a href="editbarang.php?id=<?php echo $data['id_produk'] ?>"><button type="button" class="btn btn-inverse">Edit</button></a>
                                                        <a href="aksi/hapus_barang.php?id=<?php echo $data['id_produk'] ?>"><button type="button" class="btn btn-inverse">Hapus</button></a></center>
                                                    </td>
                                                </tr>
                                            <?php  } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>                  
                <div class="row bg-white m-l-0 m-r-0 box-shadow ">

                    <!-- column -->
                    
                    <!-- column -->

                    <!-- column -->
                    
                    <!-- column -->
                </div>
                </div>
               
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <div class="app-footer app-footer-default" id="footer"><br><br>
            <br>
                <div class="app-footer-line darken">               
                    <div class="copyright wide text-center">Copyright &copy; <script type='text/javascript'>var creditsyear = new Date();document.write(creditsyear.getFullYear());</script> UMKM Jatim - All Rights Reserved
                </div>
            </div>
            <!-- End footer -->
        </div>