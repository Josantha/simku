<?php
class Variabel extends CI_controller{
    public function index(){
        // echo "<h2>Hello World CI!</h2>";
 
        $this->load->model("variabel_model");
 
        $data['variabel1'] = $this->variabel_model->getNama();
        $data['variabel2'] = $this->variabel_model->getPesanHello();        
        $this->load->view('variabelview', $data);
 
    }
}
?> 