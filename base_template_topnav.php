<div id="navbar" class="navbar navbar-default          ace-save-state" style="background-color: #8F8F8E">
	<div class="navbar-container ace-save-state" id="navbar-container">
		<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
			<span class="sr-only">Toggle sidebar</span>

			<span class="icon-bar"></span>

			<span class="icon-bar"></span>

			<span class="icon-bar"></span>
		</button>

		<div class="navbar-header pull-left">
			<a href="index.php" class="navbar-brand">
				<small>
					<img src="logoweb.png" width="150" height="60" style="margin-top:-20px;margin-bottom:-20px; margin-left:-20px;" alt="logo">
					<?php //echo $this->config->item('nama_aplikasi')." ".$this->config->item('versi'); ?>
				</small>
			</a>
		</div>

		<div class="navbar-buttons navbar-header pull-right" role="navigation" >
			<ul class="nav ace-nav" >
				<li class="red dropdown-modal">
					<a data-toggle="dropdown" href="#" class="dropdown-toggle">
						
							<img class="nav-user-photo" width="40" height="40" src="<?php echo $baseURL; ?>images/icon css 3.png" alt="" />
						<span class="user-info" >
							<small>Selamat datang</small> Kelompok 7
						</span>

						<i class="ace-icon fa fa-caret-down"></i>
					</a>

					<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
						<li>
							<a href="<?php echo $baseURL;?>usersetting/pengaturan" onclick="return pengaturan_acc();"><i class="ace-icon fa fa-user"></i>Pengaturan Akun</a>
						</li>
						<li class="divider"></li>
						<li><a href="/web1/logout.php" onclick="return confirm('Anda Yakin Mau Keluar ?');"><i class="ace-icon fa fa-power-off"></i>Sign out</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div><!-- /.navbar-container -->
</div>

</script>
