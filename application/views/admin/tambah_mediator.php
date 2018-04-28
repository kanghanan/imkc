<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h2 class="page-title">TAMBAHKAN MEDIATOR</h2> </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="#">Dashboard > Kelola Mediator > Tambahkan</a></li>
                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <form class="form" method="POST" action="">
        <div class="row" style="margin-left: 30px; margin-right: 30px">
            <div class="col-sm-6 b-r">
                <h3 style="color:#695"><b>Identitas akun</b></h3>
                <div class="form-group">
                    <label><i>Username</i></label>
                    <input type="text" name="username_md" placeholder="Username" class="form-control">
                </div>
                <div class="form-group">
                    <label><i>Password</i></label>
                    <input type="password" name="password_md" placeholder="Password" class="form-control">
                </div>
                <div class="form-group">
                    <label><i>Konfirmasi password</i></label>
                    <input type="password" name="confirm_password_md" placeholder="Password" class="form-control">
                </div>
                <div class="form-group">
                    <label><i>Email</i></label>
                    <input type="text" name="email" placeholder="email@domain.com" class="form-control">
                </div>
                <hr>
                <h3 style="color:#695"><b>Informasi Mediator</b></h3>
                <div class="form-group">
                    <label><i>Nama lengkap</i></label>
                    <input type="text" name="name" placeholder="Nama" class="form-control">
                </div>
                <div class="form-group">
                    <label><i>Jenis Kelamin</i></label><br>
                    <input type="radio" name="kelamin" value="L" class="p-l-10 p-r-10"><span class="p-l-10 p-r-40">Laki-laki</span>
                    <input type="radio" name="kelamin" value="P" class="p-l-10 p-r-10"><span class="p-l-10 p-r-40">Perempuan</span>
                </div>
                <div class="form-group">
                    <label><i>Tanggal Lahir</i></label>
                    <input type="date" name="tanggal_lahir" class="form-control" placeholder="">
                </div>
            </div>
            <div class="col-sm-6 b-l">
                <h3 style="color:#695"><b>Detail Informasi Mediator</b></h3>
                <div class="form-group">
                    <label><i>Domisili</i></label>
                    <select name="domisili" class="form-control">
                        <option>Bali</option>
                        <option>Bandung</option>
                        <option>Jakarta</option>
                        <option>Semarang</option>
                        <option>Solo</option>
                        <option>Surabaya</option>
                    </select>
                </div>
                <div class="form-group">
                    <label><i>Alamat rumah</i></label>
                    <input type="text" name="alamat" placeholder="" class="form-control">
                </div>
                <div class="form-group">
                    <label><i>Nomor Telepon</i></label>
                    <input type="text" name="telepon" placeholder="+62xxxxxxxx atau 08xxxxxxxx" class="form-control">
                </div>
                <hr>
                <h3 style="color:#695"><b>Foto</b></h3>
                <div class="form-group">
                    <label class="col-md-12">Upload foto</label>
                    <div class="col-md-12"> 
                        <input type="file" class="image-uploads" name="media[]" multiple accept=".jpg,.jpeg,.png,.gif" />
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-bottom:100px">
            <div class="pull-right">
                <input type="submit" class="btn btn-success" value="Daftar">
            </div>
        </div>
    </form>
        <!-- /.row -->
        <!-- ============================================================== -->
        <!-- Different data widgets -->
        <!-- ============================================================== -->
        <!--row -->
        <!-- /.row -->
       
        
    </div>
    <!-- /.container-fluid -->
    <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by wrappixel.com </footer>
</div>