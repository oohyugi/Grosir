<?php
	
include"config.php";





$hasil="SELECT * FROM stok_gudangs";


		
		$query=mysqli_query($koneksi,$hasil);
		if ($query) {
				# code...
				
				foreach ($query as $value) {
				# code...
					
				if ($value['jumlah_barang'] >=12) {
						$lusin = (floor($value['jumlah_barang']/12));
               			$pcs = ($value['jumlah_barang']%12);
               			var_dump($lusin);
					}
			}
			// echo json_encode(array("data"=>$beritas)
				
			
			// 		);
			}else{
				echo json_encode(
				array(
					"RC"=>666,
					"MESSAGE"=>"not found"
					));
			}
	



?>