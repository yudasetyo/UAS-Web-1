<script type="text/javascript">
	try{ace.settings.loadState('main-container')}catch(e){}
</script>

<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
	<script type="text/javascript">
		try{ace.settings.loadState('sidebar')}catch(e){}
	</script>
	
	<ul class="nav nav-list">
		<li class="active">
			<a href="<?php echo $baseURL ; ?>home">
				<i class="menu-icon fa fa-tachometer"></i>
				<span class="menu-text"> Dashboard </span>
			</a>

			<b class="arrow"></b>
		</li>
				<li class="">
					<a href="#" class="dropdown-toggle">
						<i class="menu-icon fa fa-users"></i>
						<span class="menu-text">
							Data Staff
						</span>
						<b class="arrow fa fa-angle-down"></b>
					</a>
					<b class="arrow"></b>
					
					<ul class="submenu">
											<li class="">
												<a href="<?php echo $baseURL;?>staff/staffoutsource/viewdata"><i class="menu-icon fa fa-caret-right"></i>Staff Outsource</a>
											</li>
											<b class="arrow"></b>
											<li class="">
												<a href="<?php echo $baseURL;?>staff/staffpegawai/viewdata"><i class="menu-icon fa fa-caret-right"></i>Staff Pegawai</a>
											</li>
											<b class="arrow"></b>
					</ul>
					<li class="">
					<a href="#" class="dropdown-toggle">
						<i class="menu-icon fa fa-users"></i>
						<span class="menu-text">
							Akademik
						</span>
						<b class="arrow fa fa-angle-down"></b>
					</a>
					<b class="arrow"></b>
					
					<ul class="submenu">
											<li class="">
												<a href="#"><i class="menu-icon fa fa-caret-right"></i>Buat Jadwal Pelatihan</a>
											</li>
											<b class="arrow"></b>
					</ul>
				<li class="">
					<a href="#" class="dropdown-toggle">
						<i class="menu-icon fa fa-eye"></i>
						<span class="menu-text">
							Data Kantor
						</span>
						<b class="arrow fa fa-angle-down"></b>
					</a>
					<b class="arrow"></b>
					
					<ul class="submenu">
											<li class="">
												<a href="folder/data"><i class="menu-icon fa fa-caret-right"></i>Mitra Kerja</a>
											</li>
											<b class="arrow"></b>
											<li class="">
												<a href="folder/data"><i class="menu-icon fa fa-caret-right"></i>Kantor Cabang</a>
											</li>
											<b class="arrow"></b>
					</ul>
					<li class="">
					<a href="#" class="dropdown-toggle">
						<i class="menu-icon fa fa-map"></i>
						<span class="menu-text">
							Penempatan Staff
						</span>
						<b class="arrow fa fa-angle-down"></b>
					</a>
					<b class="arrow"></b>
					
					<ul class="submenu">
											<li class="">
												<a href="<?php echo $baseURL;?>penempatan/outsource/viewdata"><i class="menu-icon fa fa-caret-right"></i>Staff Outsource</a>
											</li>
											<li class="">
												<a href="<?php echo $baseURL;?>penempatan/pegawai/viewdata"><i class="menu-icon fa fa-caret-right"></i>Staff Pegawai Kantor</a>
											</li>
											<b class="arrow"></b>
					</ul>
					<li class="">
					<a href="#" class="dropdown-toggle">
						<i class="menu-icon fa fa-book"></i>
						<span class="menu-text">
							Contact
						</span>
					</a>
					</li>
					<li class="">
					<a href="#" class="dropdown-toggle">
						<i class="menu-icon fa fa-bullhorn"></i>
						<span class="menu-text">
							Info
						</span>
					</a>
					</li>
					<li class="">
					<a href="#" class="dropdown-toggle">
						<i class="menu-icon fa fa-institution"></i>
						<span class="menu-text">
							About Us
						</span>
						<b class="arrow fa fa-angle-down"></b>
					</a>
					<b class="arrow"></b>
					
					<ul class="submenu">
											<li class="">
												<a href="<?php echo $baseURL;?>aboutus/tentangperusahaan"><i class="menu-icon fa fa-caret-right"></i>Tentang Perusahan</a>
											</li>
											<li class="">
												<a href="<?php echo $baseURL;?>aboutus/visimisiperusahaan"><i class="menu-icon fa fa-caret-right"></i>Visi & Misi Perusahaan</a>
											</li>
											<b class="arrow"></b>
					</ul>
					</a>
					</li>


	</ul><!-- /.nav-list -->

	<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
		<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
	</div>
</div>