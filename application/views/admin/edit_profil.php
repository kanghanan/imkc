<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h2 class="page-title">EDIT PROFIL</h2> </div>
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
                        <div class="overlay-box">
                            <div class="user-content">
                                <div class="">
                                    <a href="javascript:void(0)"> <p align="center"><img src="<?php echo base_url ('assets/admins/images/nicolaus-copernicus.jpeg'); ?>" class="thumb-lg img-circle" alt="img"></p></a>
                                    <h4 class="text-black"> <p align="center">Admin Nicolaus </p></h4>
                                    <h5 class="text-black"> <p align="center">Laki Laki. 30 Tahun</p></h5>
                                </div>
                            </div>
                        </div>
                    <br>
                    <br>
                    <br>
                    <div class="white-box">
                        <form class="form-horizontal form-material">
                            <div class="form-group">
                                <label class="col-md-12">Ubah foto</label>
                                <div class="col-md-12"> 
                                    <input type="file" class="image-uploads" name="media[]" multiple accept=".jpg,.jpeg,.png,.gif" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <b>ID Admin</b>
                                    <div class="col-md-12">
                                        <p>AD001</p><br>
                                     </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <b>Nama Lengkap</b>
                                    <div class="col-md-12">
                                        <p>Nicolaus Copernicus</p><br>
                                     </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Tanggal Lahir</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="DD-MM-YYYY" class="form-control form-control-line" name="dob" id="admin-dob"> </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12">Alamat</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Keputih Gang 3C No.4" class="form-control form-control-line" name="address" id="admin-address"> </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">No HP</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="123 456 7890" class="form-control form-control-line" name="mobile" id="admin-email"> </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Domisili</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Surabaya" class="form-control form-control-line" name="dom" id="admin-dom"> </div>
                            </div>
                            <div class="form-group pull-right">
                                <div class="col-sm-12 ">
                                    <button class="btn btn-success" href="<?php echo base_url ('Admin/profil'); ?>">Update Profil</button>
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