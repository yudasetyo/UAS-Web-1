
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
					<i class="fa fa-child"></i>
					<a href="#">Staff Outsource</a>
				</li>
				<li class="active">Data Staff Outsource</li>
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
							Staff Outsource
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
					<div class="table-header">
							Hasil untuk "Data Staff Pegawai"	
					</div>
					<!-- BATAS HEADER TITLE -->
					<div class="ln_solid"></div>
		
					<!--DATAGRID BERDASARKAN DATA YANG AKAN KITA TAMPILKAN -->
					<table id="datatable" class="table table-striped table-bordered">
						<thead>
							<tr>    
								<th class="center" width="5%">IDStaffPegawai</th>
								<th class="center" width="5%">Nama Lengkap</th>
								<th class="center" width="5%">Jenis Kelamin</th>
								<th class="center" width="5%">Nomor Identias Penduduk</th>
								<th class="center" width="5%">Alamat</th>
								<th class="center" width="5%">Kota</th>
								<th class="center" width="5%">Provinsi</th>
								<th class="center" width="5%">Action</th>
								</th>
							</tr>
						</thead>	
						<tbody>				
						<?php 
							include '../koneksi.php';
							$no = 1;
							$data = mysqli_query($koneksi,"select * from pegawai");
							while($d = mysqli_fetch_array($data)){
						?>
						<tr>
							<td><?php echo $d['id_pegawai']; ?></td>
							<td><?php echo $d['nama']; ?></td>
							<td><?php echo $d['jk']; ?></td>
							<td><?php echo $d['nip']; ?></td>
							<td><?php echo $d['alamat']; ?></td>
							<td><?php echo $d['kota']; ?></td>
							<td><?php echo $d['provinsi']; ?></td>
							<td align="center">
									<a href="#m_ubahdata" onclick="return ubah_data('0');" class="tooltip-info" data-toggle="modal" data-rel="tooltip" title="Ubah Data">
									<span class="black"><i class="ace-icon fa fa-edit bigger-120"></i></span></a>
									<a href="#m_hapusdata" onclick="return hapus_data('0');" class="tooltip-info" data-toggle="modal" data-rel="tooltip" title="Hapus Data"><span class="red"><i class="ace-icon fa fa-trash bigger-120"></i></span></a>
							</td>
						</tr>
						<?php 
							}
						?>
					</tbody>	
					</table>
	<div class="modal fade" id="m_ubahdata" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header no-padding">
				<div class="table-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span class="white">&times;</span>
					</button>
					Ubah Data Staff Pegawai
				</div>
			</div>
			<div class="modal-body">
				<form name="f_kategori" id="f_kategori" action="editdata.php" method="post" onsubmit="validasi()">
					<input type="hidden" name="id" id="id" value="">
					<div id="konfirmasi"></div>
					<table class="table table-form">
						<tr><td style="width: 25%">Nama</td>
							<td style="width: 75%">
								<input type="text" class="form-control" name="nama" id="nama" required value="">
							</td>
						</tr>
						<tr><td style="width: 25%">Alamat</td>
							<td style="width: 75%">
								<input type="text" class="form-control" name="alamat" id="alamat" required value="">
							</td>
						</tr>
						<tr><td style="width: 25%">Kota</td>
							<td style="width: 75%">
								<input type="text" class="form-control" name="kota" id="kota" required value="">
							</td>
						</tr>
						<tr><td style="width: 25%">Provinsi</td>
							<td style="width: 75%">
								<input type="text" class="form-control" name="provinsi" id="provinsi" required value="">
							</td>
						</tr>
					</table>
					<script type="text/javascript">
			function validasi(){
				var nama = document.getElementById("nama").value;
				var alamat = document.getElementById("alamat").value;
				var kota = document.getElementById("kota").value;
				var provinsi = document.getElementById("provinsi").value;
				if (nama !="" && alamat !="" && kota !="" && provinsi !="") {
					return true;
				}else{
					alert('Anda Harus Mengisi Data Dengan Lengkap !')
				}
			</script>
			</div>
			<div class="modal-footer">
				<button class="btn btn-white btn-info btn-bold" type="submit">
					<i class="ace-icon fa fa-floppy-o bigger-120 blue"></i> Simpan</button>
				<button class="btn btn-white btn-default btn-round" data-dismiss="modal" aria-hidden="true">
					<i class="fa fa-minus-circle"></i> Tutup</button>
			</div>
			</form>
		</div>
	</div>
</div>

<div class="modal fade" id="m_hapusdata" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header no-padding">
				<div class="table-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span class="white">&times;</span>
					</button>
					Hapus Data
				</div>
			</div>
			<div class="modal-body">
				<form name="f_kategori" id="f_kategori" action="hapusdata.php" method="post">
					<div id="konfirmasi"></div>
					<table class="table table-form">
						<body>
							<h3> Apakah Anda Yakin Untuk Menghapus Data? </h3>
						</body>
					</table>
			</div>
			<div class="modal-footer">
				<button class="btn btn-white btn-info btn-bold" type="submit">
					<i class="ace-icon fa fa-trash bigger-120 red"></i> Hapus</button>
				<button class="btn btn-white btn-default btn-round" data-dismiss="modal" aria-hidden="true">
					<i class="fa fa-minus-circle green"></i> Batal</button>
			</div>
			</form>
		</div>
	</div>
</div>




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