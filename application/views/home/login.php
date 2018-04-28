<div class="container-fluid">
	<div class="row">
		<div style="width: 300px; margin-right: 5%" class="pull-right">
			<h2>Login</h2>
			<form class="form" method="POST" action="check-login.php">
				<div class="form-group">
					<label>Username </label><label id="euser"></label>
					<input type="text" id="username" name="username" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Password</label><label id="epass"></label>
					<input type="password" id="password" name="password" class="form-control" required>
				</div>
				<div class="row">
					<div class="pull-right">
						<input type="submit" value="Masuk" onclick="login()" class="btn btn-info">
					</div>
				</div>
				<div class="row p-t-10">
					<div class="pull-right">
						<i>Belum memiliki akun? Silahkan daftar <a href="<?php echo base_url ('home/registrasi'); ?>">disini</a></i>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<script type="text/javascript">
	function login() {
	    var user = document.getElementsById("username").val;
	    var pass = document.getElementsById("password").val;
	    if (user !="user"){
	    	document.find("label#euser").append("User name salah !!!")
	    }              // The function returns the product of p1 and p2
	}
</script>>
<?php //echo base_url ('user'); ?>