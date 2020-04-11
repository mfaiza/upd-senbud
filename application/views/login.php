
    <div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<div class="logo text-center"><img src="assets/img/WIKRAMA BOGOR.png" width="80" height="80"></div>
								<p class="lead">Silahkan Masuk Dengan Akun Anda</p>
								<?php echo $this->session->flashdata('notify');?>
							</div>
							<?php echo form_open('login/signin',array('class' => 'form-auth-small'));?>
							    
								<div class="form-group">
									<label for="signin-email" class="control-label sr-only">Username</label>
									<input type="text" class="form-control" id="signin-email" name="username" placeholder="Username">
								</div>
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Password</label>
									<input type="password" class="form-control" id="signin-password" name="password" placeholder="Password">
								</div>
								
								<input type="submit" name="submit" class="btn btn-primary btn-lg btn-block" value="Login">
								
							<?php echo form_close();?>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading">Sistem Informasi Senbud & Upd</h1>
							<p>SMK Wikrama Bogor</p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	