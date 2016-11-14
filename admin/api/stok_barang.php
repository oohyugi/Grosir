<?php
	
include"config.php";





$hasil="SELECT * FROM stok_gudangs";


		
		$query=mysqli_query($koneksi,$hasil);
		if ($query) {
				# code...
				
				foreach ($query as $value) {
				# code...
					
				$beritas[]=array(
					$value["nama_barang"],
					$value["pabrik"],
					$value["jumlah_barang"],
					$value["modal"],
					$value["harga_atas"],
					$value["harga_bawah"],

					


					);
			}
			echo json_encode(array("data"=>$beritas)
				
			
					);
			}else{
				echo json_encode(
				array(
					"RC"=>666,
					"MESSAGE"=>"not found"
					));
			}
	



?>