 <?php

session_start();
include_once "../koneksi.php";
$type = $_REQUEST['type'];

switch ($type)
	{
		case 1:
			$id_outsource = $_REQUEST['id'];
			$nama = $_REQUEST['nama'];
			$jk = $_REQUEST['jk'];
			$nip = $_REQUEST['nip'];
			$alamat = $_REQUEST['alamat'];
			$kota = $_REQUEST['kota'];
			$provinsi = $_REQUEST['provinsi'];
			
			
				$pesanerror = array ();	
				if (empty($nama)) {
					$pesanerror[] = "Maaf,<b> Nama Staff <b> Tidak Boleh Kosong !";
				}
					
				if (empty($jk)) {
					$pesanerror[] = "Maaf,<b> Jenis Kelamin <b> Tidak Boleh Kosong !";
				}
					
				if (empty($nip)) {
					$pesanerror[] = "Maaf,<b> Nomor Identitas Penduduk <b> Tidak Boleh Kosong !";
				}

				if (empty($alamat)) {
					$pesanerror[] = "Maaf,<b> Alamat <b> Tidak Boleh Kosong !";
				}
				if (empty($kota)) {
					$pesanerror[] = "Maaf,<b> Kota <b> Tidak Boleh Kosong !";
				}
				if (empty($provinsi)) {
					$pesanerror[] = "Maaf,<b> Provinsi <b> Tidak Boleh Kosong !";
				}
				if (count($pesanerror)>=1) {
					$pesan="";
					foreach ($pesanerror as $pesan_tampil) {
						$pesan.="$pesan_tampil<br>";
					}
					$data['msg'][0] = "Error";
					$data['msg'][1] = $pesan;
				
				} else {

					$mySql = "SELECT * FROM pegawaioutsource where id_outsource='$id_outsource'";
					$myQry = mysqli_query($koneksi, $mySql);
					$jumlah = mysqli_num_rows($myQry);

					if ($jumlah==0){

						$mySql = "INSERT INTO pegawaioutsource(nama, jk, nip, alamat, kota, provinsi) VALUES('$nama', '$jk', '$nip', '$alamat', '$kota', '$provinsi')";
						$data['msg'][0] = "Sip";
						$data['msg'][1] = "Data Berhasil Ditambah ......";
						$myQry = mysqli_query($koneksi, $mySql);

					}
					else {
						$mySql = "UPDATE pegawaioutsource SET
						id_outsource= '$id_outsource',
						nama= '$nama',
						jk= '$jk',
						nip= '$nip',
						alamat= '$alamat',
						kota= '$kota',
						provinsi= '$provinsi'
						WHERE id_outsource='$id_outsource'";
						$data['msg'][0] = "oke";
						$data['msg'][1] = "data berhasil diubah ......";
						$myQry = mysqli_query($koneksi, $mySql);
					}
				}

				
		echo json_encode($data);
		break;

		case 2:
			$id_outsource = $_REQUEST['id'];
			$mySql        = "DELETE FROM pegawaioutsource WHERE id_outsource = '".$id_outsource."'";
			$myQry = mysqli_query($koneksi, $mySql);
			if (!$myQry){
				$data['msg'][0] = "Hapus";
				$data['msg'][1] = "<b>Error</b>".mysqli_error($koneksi);
			}

			else{
				$data['msg'][0] = "Hapus";
				$data['msg'][1] = "Data Berhasil Di Hapus";
			}
		echo json_encode($data);
		break;

		case 97:
   				$data='';
   				$i=0;
 				$mySql = "SELECT * FROM pegawaioutsource";
 			    $myQry = mysqli_query($koneksi, $mySql);
 				while ($mydata =  mysqli_fetch_array($myQry)) {
 					$akses="";	
						$akses="<center> <a href='#' class='tooltip-success' data-rel='tooltip' title='Ubah'> <span class='green'> <i class='ace-icon fa fa-pencil-square-o bigger-120'></i></span></a> <a href='#' class='tooltip-success' data-rel='tooltip' title='Hapus'> <span class='red'> <i class='ace-icon fa fa-trash-o bigger-120'></i></span></a></center> ";
					$data .= sprintf("[\"%s\",\"%s\",\"%s\",\"%s\",\"%s\",\"%s\",\"%s\",\"%s\"],",
							$mydata['id_outsource'],$mydata['nama'],$mydata['jk'],$mydata['nip'],$mydata['alamat'],$mydata['kota'],$mydata['provinsi'],$akses
						);
					$i++;

					}

			echo'{"data":['.substr($data,0,-1).']}';

			break;
			default:
	}

?>