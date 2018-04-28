<div class="container-fluid">
	<br>
	<div class="row">
		<center><b><h1>Registrasi</h1></b></center>
	</div>
	<br>
	<form class="form" method="POST" action="<?php echo base_url ('home/login'); ?>">
		<div class="row" style="margin-left: 30px; margin-right: 30px">
			<div class="col-sm-6 b-r">
				<h3 style="color:#695"><b>Identitas akun</b></h3>
				<div class="form-group">
					<label><i>Username</i></label>
					<input type="text" name="username" placeholder="Username" class="form-control" required>
				</div>
				<div class="form-group">
					<label><i>Password</i></label>
					<input type="password" name="password" placeholder="Password" class="form-control" required>
				</div>
				<div class="form-group">
					<label><i>Konfirmasi password</i></label>
					<input type="password" name="konfirmasi_password" placeholder="Password" class="form-control" required>
				</div>
				<div class="form-group">
					<label><i>Email</i></label>
					<input type="text" name="email" placeholder="email@domain.com" class="form-control" required>
				</div>
				<hr>
				<h3 style="color:#695"><b>Informasi pengguna</b></h3>
				<div class="form-group">
					<label><i>Nama lengkap</i></label>
					<input type="text" name="nama" placeholder="Nama" class="form-control" required>
				</div>
				<div class="form-group">
					<label><i>Jenis Kelamin</i></label><br>
					<input type="radio" name="kelamin" value="L" class="p-l-10 p-r-10"><span class="p-l-10 p-r-40">Laki-laki</span>
					<input type="radio" name="kelamin" value="P" class="p-l-10 p-r-10"><span class="p-l-10 p-r-40">Perempuan</span>
				</div>
				<div class="form-group">
					<label><i>Tanggal Lahir</i></label>
					<input type="date" name="tanggal_lahir" class="form-control" placeholder="" required>
				</div>
			</div>
			<div class="col-sm-6 b-l">
				<h3 style="color:#695"><b>Detail informasi pengguna</b></h3>
				<div class="form-group">
					<label><i>Status pernikahan</i></label>
					<select name="status" class="form-control">
						<option>Belum menikah</option>
						<option>Menikah</option>
						<option>Janda/Duda</option>
					</select>
				</div>
				<div class="form-group">
					<label><i>Domisili</i></label>
					<select name="domisili" class="form-control">
						<option>Jakarta</option>
						<option>Semarang</option>
						<option>Bandung</option>
						<option>Surabaya</option>
						<option>Bali</option>
					</select>
				</div>
				<div class="form-group">
					<label><i>Alamat rumah</i></label>
					<input type="text" name="alamat" placeholder="" class="form-control" required>
				</div>
				<div class="form-group">
					<label><i>Nomor Telepon</i></label>
					<input type="text" name="telepon" placeholder="08xxxxxxxx" class="form-control" required>
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
</div>
<script src="<?php echo base_url ('assets/admin-lte/plugins/datepicker/bootstrap-datepicker.js'); ?>"></script>
<script type="text/javascript">
	$('.datepicker').datepicker({
      format : 'dd-mm-yyyy',
    });
	console.log ("haha");
</script>