<?php
class Hello extends CI_Controller{
	public function index(){

//c3 - memuat model 'hello model'
$this->load->model('Hello_model');

//pemgambilkan objek dari kelas Hello_model dan dimuat di var $model
$model = $this->Hello_model;

//mengambil data dari model
$a = $model->txt;
		
//membuat data yang akan  dikirim ke view
$data['teks'] = $a;

//memanggil view		
$this->load->view('helloview',$data);
	}
}
?>