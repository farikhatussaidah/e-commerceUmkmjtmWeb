<div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Tambah Kategori</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Tambah Kategori</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-title">
                               <center><h4>Tambah Kategori</center></h4>

                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="aksi/tambah_kategori.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <input type="text" class="form-control Nama" placeholder="Nama" name="nama_kategori">
                                        </div>
                                        <div class="form-group">
                                            <input type="file" name="foto" id="foto" class="form-control">
                                        </div>
                                        <center>
                                            <input type="submit" value="Ok" class="btn btn-inverse" name="submit">
                                        </center>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    
                    <!-- /# column -->
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
    </div>
</div>