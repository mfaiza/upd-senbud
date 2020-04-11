<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="#"><b>Sistem Informasi Senbud & Upd </b></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
			
			
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								
								<li><a href="<?php echo base_url('login/signout');?>"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>
						
					</ul>
				</div>
			</div>
		</nav>
		
	<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
                        <?php if($this->session->userdata('role') == 1){ ?>
					    
						<li><a href="<?php echo site_url('admin');?>" ><i class="fa fa-home fa-lg"></i> <span>Dashboard</span></a></li>
						<li><a href="<?php echo site_url('admin/siswa');?>" ><i class="fa fa-users fa-lg"></i> <span>Data Siswa</span></a></li>
						<li><a href="<?php echo site_url('admin/pengguna');?>" ><i class="fa fa-user fa-lg"></i> <span>Data Pengguna</span></a></li>
						<li><a href="<?php echo site_url('admin/ekskul');?>" ><i class="fa fa-tags fa-lg"></i><span>Data Ekstrakurikuler</span></a></li>
						<li><a href="<?php echo site_url('admin/galeriEkskul');?>" ><i class="fa fa-image fa-lg"></i><span>Galeri Ekstrakurikuler</span></a></li>
						<li><a href="<?php echo site_url('admin/senbud');?>" ><i class="fa fa-tags fa-lg"></i><span>Data Seni Budaya</span></a></li>
						<li><a href="<?php echo site_url('admin/galeriSenbud');?>" ><i class="fa fa-image fa-lg"></i><span>Galeri Seni Budaya</span></a></li>
						<li><a href="<?php echo site_url('admin/tambahadmin');?>"> <i class="fa fa-user fa-lg"></i><span>Data Administrator</span></a></li>
						
                        <?php } else { ?>
                            
                            <li><a href="<?php echo site_url('user/registerEkskul');?>"><i class="fa fa-list fa-lg"></i><span>Registrasi Ekskul</span></a></li>
                           	<li><a href="<?php echo site_url('user/galeriEkskul');?>"><i class="fa fa-image fa-lg"></i><span>Galeri Ekstrakurikuler</span></a></li>
                            <li><a href="<?php echo site_url('user/registerSenbud');?>"><i class="fa fa-list fa-lg"></i><span>Registrasi Senbud</span></a></li>
                           	<li><a href="<?php echo site_url('user/galeriSenbud');?>"><i class="fa fa-image fa-lg"></i><span>Galeri Seni Budaya</span></a></li>
                            
                        <?php } ?>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->