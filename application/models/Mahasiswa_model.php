<?php
class Mahasiswa_model extends CI_Model
{
	public function get_data()
	{
		$data_mahasiswa = [["nama"=>"Josantha","prodi"=>"MIF"],
						   ["nama"=>"Marshel","prodi"=>"TKK"],						  
						   ["nama"=>"Valendra","prodi"=>"TIF"]
						  ];
		
		return $data_mahasiswa;
	}
}
?>
<!--
$data_mahasiswa = [["No"=>"1","prodi"=>"MIF","keterangan"=>"Manajemen Informatika"],
						   ["No"=>"2","prodi"=>"TKK","keterangan"=>"Teknik Komputer"],						  
						   ["No"=>"3","prodi"=>"TIF","keterangan"=>"Teknik Informatika"]
						  ];
		
		$data_mahasiswa = [["No"=>"1","tahun"=>"2016"],
						   ["No"=>"2","tahun"=>"2017"],						  
						   ["No"=>"3","tahun"=>"2018"]
						  ];
		-->