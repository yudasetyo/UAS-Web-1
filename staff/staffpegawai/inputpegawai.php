<?php
if(!defined('OFFDIRECT')) include 'error404.php';

?>

<body class="no-skin">
<?php
	include "base_template_topnav.php";	 //akan memanggil file base_template_topnav.php sebagai header
	echo '<div class="main-container ace-save-state" id="main-container">';
	include "menu.php";	 //akan memanggil file menu.php sebagai pembuatan menu
	
?>
			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li class="active">Input Data</li>
							<li class="active">Staff</li>
						</ul><!-- /.breadcrumb -->

					</div>

					<div class="page-content">
						
						<div class="page-header">
							<h1>
								Input Data
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Input Data Staff
								</small>
							</h1>
						</div><!-- /.page-header -->
						
									<br>
									<h3>INPUT DATABASE STAFF OUTSOURCE</h3>
									<br>
									<br>
									<form action="tambah.php" method="POST">
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">ID Staff Outsource:</label>
											<div class="col-sm-10">
												<input type="text" name="id_pegawai" size="100" required>
											</div>
										</div>
									<br>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Nama Staff:</label>
											<div class="col-sm-10">
												<input type="text" name="nama" size="100" required>
											</div>
										</div>
									<br>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Jenis Kelamin:</label>
											<div class="col-sm-10">
												<input type="text" name="JK" size="100" required>
											</div>
										</div>
									<br>
									<div class="form-group row">
											<label class="col-sm-2 col-form-label">Nomor Identias Penduduk:</label>
											<div class="col-sm-10">
												<input type="text" name="nip" size="100" required>
											</div>
										</div>
									<br>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Alamat Staff:</label>
											<div class="col-sm-10">
												<input type="text" name="alamat" size="100" required>
											</div>
										</div>
									<br>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Kota :</label>
											<div class="col-sm-10">
												<input type="text" name="kota" size="100" required>
											</div>
										</div>
									<br>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Provinsi:</label>
											<div class="col-sm-10">
												<input type="text" name="provinsi" size="100" required>
											</div>
										</div>
										<br>
										<br>
									<style>
									.btnsubmit{
  										background:#32CD32;
  										color:white;
  										border-top:0;
  										border-left:0;
  										border-right:0;
  										border-bottom:5px solid #006400;
  										padding:10px 20px;
  										text-decoration:none;
  										font-family:sans-serif;
 									 	font-size:11pt;
										}

 										border-top:0;
  										border-left:0;
  										border-right:0;
  										border-bottom:5px solid #2A80B9;
									</style>
									<style>
									.btncancel{
  										background:#FF0000;
  										color:white;
  										border-top:0;
  										border-left:0;
  										border-right:0;
  										border-bottom:5px solid #8B0000;
  										padding:10px 20px;
  										text-decoration:none;
  										font-family:sans-serif;
 									 	font-size:11pt;
										}

 										border-top:0;
  										border-left:0;
  										border-right:0;
  										border-bottom:5px solid #2A80B9;
									</style>	
									<input type="submit" name="simpan" value="Simpan Data">
									<input type="reset" name="batal" value="Batal">
									</form>
								</div><!-- /.row -->

								<div class="space-18"></div>

								
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

<?php
	include "base_template_footer.php";	//akan memanggil base_template_footer.php sebagai footer
?>
      </div>
    </div>
 

</body>    

