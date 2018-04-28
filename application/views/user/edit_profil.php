<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Profil</h4> </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="#">Profil > Edit Profil</a></li>
                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <!-- ============================================================== -->
        <!-- Different data widgets -->
        <!-- ============================================================== -->
        <!--row -->
        <!-- /.row -->
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="white-box">
                    <div class="user-bg"> <img width="100%" alt="user" src="<?php echo base_url ('assets/ample-admin-lite/plugins/images/large/img1.jpg'); ?>">
                        <div class="overlay-box">
                            <div class="user-content">
                                <a href="javascript:void(0)"><img src="<?php echo base_url ('assets/ample-admin-lite/plugins/images/users/varun.jpg'); ?>" class="thumb-lg img-circle" alt="img"></a>
                                <h4 class="text-white">Nama Pengguna</h4>
                                <h5 class="text-white">Laki-laki. 24 Tahun</h5>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <div class="white-box">
                        <form class="form-horizontal form-material" method="POST" action="<?php echo base_url ('User/profil'); ?>">
                            <div class="form-group">
                                <label class="col-md-12">Ubah foto</label>
                                <div class="col-md-12"> 
                                    <input type="file" class="image-uploads" name="media[]" multiple accept=".jpg,.jpeg,.png,.gif" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Nama lengkap</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="John Doe" class="form-control form-control-line"> </div>
                            </div>
                            <div class="form-group">
                                <label for="example-email" class="col-md-12">Nama panggilan</label>
                                <div class="col-md-12">
                                    <input type="email" placeholder="John" class="form-control form-control-line" name="example-email" id="example-email"> </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Umur</label>
                                <div class="col-md-12">
                                    <input type="email" placeholder="24" class="form-control form-control-line" name="example-email" id="example-email"> </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Tempat lahir</label>
                                <div class="col-md-12">
                                    <input type="email" placeholder="Kediri" class="form-control form-control-line" name="example-email" id="example-email"> </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Tanggal lahir</label>
                                <div class="col-md-12">
                                    <input type="email" placeholder="20 Juli 1996" class="form-control form-control-line" name="example-email" id="example-email"> 
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Asal</label>
                                <div class="col-md-12">
                                    <input type="email" placeholder="Surabaya" class="form-control form-control-line" name="example-email" id="example-email"> </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Domisili</label>
                                <div class="col-md-12">
                                    <input type="email" placeholder="Surabaya" class="form-control form-control-line" name="example-email" id="example-email"> </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Pekerjaan</label>
                                <div class="col-md-12">
                                    <input type="email" placeholder="Dosen" class="form-control form-control-line" name="example-email" id="example-email"> </div>
                            </div>

                            <div class="form-group pull-right">
                                <div class="col-sm-12 ">
                                    <button class="btn btn-success">Update Profil</button>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <!-- /.container-fluid -->
    <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by wrappixel.com </footer>
</div>