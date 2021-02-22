
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
					<div class="table-header">

						<i class="fa fa-table"></i>
						<style type="text/css">
							.table-header{
								background-color: #FFC100;
							}
						</style>

							Hasil untuk "Data Staff Outsource"
					</div>
					<!-- BATAS HEADER TITLE -->
					<div class="ln_solid"></div>

					<!--DATAGRID BERDASARKAN DATA YANG AKAN KITA TAMPILKAN -->
					<table id="datatable" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th class="center" width="5%">ID Outsource</th>
								<th class="center" width="20%">Nama Lengkap</th>
								<th class="center" width="12.5%">Jenis Kelamin</th>
								<th class="center" width="12.5%">Nomor Identias Penduduk</th>
								<th class="center" width="12.5%">Alamat</th>
								<th class="center" width="12.5%">Kota</th>
								<th class="center" width="12.5%">Provinsi</th>
								<th class="center">
                  					<a href="#m_kategori" onclick="return tambah_kategori('0');" class="tooltip-info" data-toggle="modal" data-target="#m_kategori" data-rel="tooltip" title="Tambah">
                  					<span class="blue"><i class="ace-icon fa fa-search-plus bigger-120"></i></span></a>
                				</th>
							</tr>
						</thead>
						<tbody>
					</tbody>
					</table>

<div class="modal fade" id="m_kategori" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header no-padding">
        <div class="table-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="white">&times;</span>
          </button>
          Input Data Staff Outsource
        </div>
      </div>
      <div class="modal-body">
        <form name="f_kategori" id="f_kategori" action="" method="post">
          <input type="hidden" name="cek" id="cek" value="">
          
         <div id="konfirmasi1"></div>

          <table class="table table-form">
            <tr><td style="width: 25%">ID Outsource</td>
              <td style="width: 50%">
                <input type="text" class="form-control" name="id" id="id"  value="">
              </td>
            </tr>
          <table class="table table-form">
            <tr><td style="width: 25%">Nama Lengkap</td>
              <td style="width: 50%">
                <input type="text" class="form-control" name="nama" id="nama"  value="">
              </td>
            </tr>
            <tr><td style="width: 25%">Jenis Kelamin</td>
              <td style="width: 50%">
                <select type="option" class="form-control" name="jk" id="jk" value="">
				<option value="">Pilih</option>
        		<option value="PRIA">PRIA</option>
				<option value="WANITA">WANITA</option>
				</select>
              </td>
            <tr><td style="width: 25%">Nomor Identias Penduduk</td>
              <td style="width: 50%">
                <input type="text" class="form-control" name="nip" id="nip" value="">
              </td>
            </tr>
            <tr><td style="width: 25%">Alamat</td>
              <td style="width: 50%">
                <input type="text" class="form-control" name="alamat" id="alamat" value="">
              </td>
            </tr>
            <tr><td style="width: 25%">Kota</td>
              <td style="width: 50%">
                <input type="text" class="form-control" name="kota" id="kota" value="">
              </td>
            </tr>
            <tr><td style="width: 25%">Provinsi</td>
              <td style="width: 50%">
                <input type="text" class="form-control" name="provinsi" id="provinsi" value="">
              </td>
            </tr>
          </table>
      </div>
      <div class="modal-footer">
        <button class="btn btn-white btn-info btn-bold" type="button" id="simpan" href="<?php echo $baseURL;?>library/api.keyword.php">
          <i class="ace-icon fa fa-floppy-o bigger-120 blue"></i> Simpan</button>
        <button class="btn btn-white btn-danger btn-round" type="reset">
          <i class="fa fa-refresh "></i> Reset</button>
        <button class="btn btn-white btn-default btn-round" data-dismiss="modal" aria-hidden="true">
          <i class="fa fa-minus-circle"></i> Tutup</button>
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

<script type="text/javascript">

$(document).ready(function(){

	      var myTable = $("#datatable").DataTable({
	        "ajax" : {
	          type  : "POST",
	          url   : '<?php echo $baseURL; ?>library/api.keyword.php',
	          data  : function(d) {
	            d.type = "97";
	          }}
	      });

		$('#datatable tbody').on('click', '.fa-pencil-square-o', function () {

				 $("#m_kategori"). modal('show');

				id      	= myTable.row( $(this).parents('tr') ).data() [0];
				nama    	= myTable.row( $(this).parents('tr') ).data() [1];
				jk   		= myTable.row( $(this).parents('tr') ).data() [2];
				nip   		= myTable.row( $(this).parents('tr') ).data() [3];
				alamat  	= myTable.row( $(this).parents('tr') ).data() [4];
				kota  		= myTable.row( $(this).parents('tr') ).data() [5];
				provinsi  	= myTable.row( $(this).parents('tr') ).data() [6];



				$('#id').val(id).attr('readonly','readonly');
				$('#nama').val(nama);
				$('#jk').val(jk);
				$('#nip').val(nip);
				$('#alamat').val(alamat);
				

				$('#kota').val(kota);
				
				$('#provinsi').val(provinsi);
			
		});

	$('#datatable tbody').on('click', '.fa-trash-o', function() {

      var jawab;
      obj=$(this).parents('tr');
      id = myTable.row( $(this).parents('tr')).data()[0];

      jawab=confirm("Apakah Anda Yakin Untuk Menghapus Record? \n"+

                    "ID Outsource: "+myTable.row( $(this).parents('tr')).data()[0]+"\n"+
                    "Nama: "+myTable.row( $(this).parents('tr')).data()[1]+"\n"+
                    "Jenis Kelamin: "+myTable.row( $(this).parents('tr')).data()[2]+"\n"+
                    "Nomor Induk Penduduk: "+myTable.row( $(this).parents('tr')).data()[3]+"\n"+
                    "Alamat: "+myTable.row( $(this).parents('tr')).data()[4]+"\n"+
                    "Kota: "+myTable.row( $(this).parents('tr')).data()[5]+"\n"+
                    "Provinsi: "+myTable.row( $(this).parents('tr')).data()[6]+"?");

      if (jawab=false){
        exit();
      }

      console.log(id);
        $.post("<?php echo $baseURL;?>library/api.keyword.php", { type: "2", id:id }, function(data) {
          obj = $.parseJSON(data);
          if (obj.msg[0]=="hapus"){
              $("#m_kategori").modal ('hide');

              $('konfirmasihapus').html(
                '<div class="alert alert-success alert alert-dismissible fade in" role="alert">'+
                '<button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>'+'<strong>Hapus Data</strong><br/>'+obj.msg[1]+'</div>');

              setTimeout(function(){
                $('#konfirmasihapus').html('');
                $('#m_kategori').modal('hide');
              },5000);

              myTable.ajax.reload();
          }
        });
        
    });  


	$('#simpan').click(function(){
  

		    $.post( "<?php echo $baseURL;?>library/api.keyword.php",{
		      type:1,
		        id:$('#id').val(),
		        nama:$('#nama').val(),
		        jk:$('#jk').val(),
		        nip:$('#nip').val(),
		        alamat:$('#alamat').val(),
		        kota:$('#kota').val(),
		        provinsi:$('#provinsi').val()
		    },function( data ) {
		        
		       
		        console.log(data);
		        obj = $.parseJSON(data);
		        //alert(obj.msg[0]);//
		        
		        if (obj.msg[0]=="OK"){
		          
		          $('#konfirmasi1').html(
		            '<div class="alert alert-success alert-dismissible fade in" role="alert">'+ '<button type ="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + '<strong>Sukses</strong><br/>' + obj.msg[1] + '</div>' );

		            setTimeout(function(){
		              $('#konfirmasi1').html('');
		            },2000);

		            $('#id').val('');
		            $('#nama').val('');
		            $('#jk').val('');
		            $('#nip').val('');
		            $('#alamat').val('');
		            $('#kota').val('');
		            $('#provinsi').val('');
		            
		        } else {
		          
		          $('#konfirmasi1').html(
		            '<div class="alert alert-success alert alert-dismissible fade in" role="alert">'+'<button type = "button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+ '<strong>Mantap</strong><br>'+obj.msg[1]+'</div>'); 
		        }

		        myTable.ajax.reload();
		      

		   });     
		});
});

</script>