<div class="container-fluid">
	<div class="row">
		<div style="width: 300px; margin-right: 5%" class="pull-right">
			<h2>Login</h2>
			<?php
				if(isset($_POST["username"]) && isset($_POST["password"])){
	$username = $_POST["username"];
	$password = $_POST["password"];
	if($username == 'user' && $password == '123'){
		header("location: ../user");
	}
	 else {
        $err=1;
    }
}
				if(isset($err)){
			?>
					<script>
					alert("Username atau Password Salah!");
					</script>
			<?php
				}
			?>
			<form class="form" method="POST">
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
						<input type="submit" value="Masuk" class="btn btn-info">
					</div>
				</div>
				<div class="row p-t-10">
					<div class="pull-right">
						<i>Lupa password? Klik <a href="" onclick="message()">disini</a></i>
					</div>
					<div class="pull-right">
						<i>Atau belum memiliki akun? Silahkan daftar <a href="<?php echo base_url ('home/registrasi'); ?>">disini</a></i>
						<script>
							function message(){
							alert("Password telah kami kirim ke email anda. Silakan buka email anda!");
						}
						</script>
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