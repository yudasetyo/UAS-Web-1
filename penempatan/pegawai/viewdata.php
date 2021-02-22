<?php
if(!defined('OFFDIRECT')) include 'error404.php';

?>
<body class="no-skin">
<?php
	include "base_template_topnav.php";	 //akan memanggil file base_template_topnav.php sebagai header
	echo '<div class="main-container ace-save-state" id="main-container">';
	include "menu.php";	 //akan memanggil file menu.php sebagai pembuatan menu
	
?>
<!-- HEADER TITLE -->
<div class="main-content">
	<div class="main-content-inner">
		<div class="breadcrumbs ace-save-state" id="breadcrumbs">
			<ul class="breadcrumb">
				<li>
					<i class="fa fa-map"></i>
					<a href="#">Penempatan Staff</a>
				</li>
				<li class="active">Staff Pegawai Kantor</li>
			</ul><!-- /.breadcrumb -->
			<div class="nav-search" id="nav-search">
			</div><!-- /.nav-search -->
		</div>
		<div class="page-content">
			<div class="row">
				<div class="col-xs-12">
					<div class="clearfix">
						<h4 class="pink">
							<i class="ace-icon fa fa-hand-o-right icon-animated-hand-pointer blue"></i>
							Penempatan Staff Pegawai Kantor
							<div class="pull-right tableTools-container"></div>
						</h4>
						<br>
						<head>
						<meta name="viewport" content="width=device-width, initial-scale=1">
						<!-- Add icon library -->
						<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
						<style>
						.btn {
  							background-color:#30FF00;
  							border: none;
  							color: #30FF00;
  							padding: 12px 16px;
  							font-size: 16px;
  							cursor: pointer;
						}

						/* Darker background on mouse-over */
						.btn:hover {
  						background-color:#30FF00;
						}
						</style>
						</head>
						<body>
							<a href="<?php echo $baseURL;?>staff/staffpegawai/inputpegawai">
						<button class="btn"><i class="fa fa-user-plus"></i></button>
							</a>
						</body>
					</div>
					<br>
					</div>
					<div class="table-header">
							Hasil untuk "Data Penempatan Staff Pegawai Kantor"	
					</div>
					<!-- BATAS HEADER TITLE -->
					<div class="ln_solid"></div>
		
					<!--DATAGRID BERDASARKAN DATA YANG AKAN KITA TAMPILKAN -->
					<table id="datatable" class="table table-striped table-bordered">
						<thead>
							<tr>    
								<th class="center" width="2%">ID Staff Pegawai</th>
								<th class="center" width="5%">Nama Lengkap</th>
								<th class="center" width="5%">Job Posisi</th>
								<th class="center" width="5%">Penempatan Kantor</th>
								<th class="center" width="5%">Alamat</th>
								<th class="center" width="5%">Kota</th>
								<th class="center" width="5%">Provinsi</th>
								<th class="center" width="5%">Action</th>
								</th>
							</tr>
						</thead>					
							<tr>
								<td align="center">P001</td>
								<td align="center">Ananda Sekti Yusman</td>
								<td align="center">Kepala Security</td>
								<td align="center">Kantor Pusat</td>
								<td align="center">Jalan Jendral Gatot Subroto</td>
								<td align="center">Jakarta Pusat</td>
								<td align="center">DKI Jakarta</td>
								<td align="center">
									<a href="#m_ubahdata" onclick="return ubah_data('0');" class="tooltip-info" data-toggle="modal" data-rel="tooltip" title="Ubah Data">
									<span class="black"><i class="ace-icon fa fa-edit bigger-120"></i></span></a>
									<a href="#m_hapusdata" onclick="return hapus_data('0');" class="tooltip-info" data-toggle="modal" data-rel="tooltip" title="Hapus Data"><span class="red"><i class="ace-icon fa fa-trash bigger-120"></i></span></a>
								</td>
							</tr>
					</table>
					<!-- BATAS DATAGRID BERDASARKAN DATA YANG AKAN KITA TAMPILKAN -->
				</div>
			</div>
		</div>
	</div> 
</div> 

<?php
	include "base_template_footer.php";	//akan memanggil base_template_footer.php sebagai footer
?>
      </div>
    </div>
