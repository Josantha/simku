<?php
class variabel_model extends CI_Model{
    public $variabel1 = "Data variabel ke 1";
    
    public function getNama(){
        return "$this->variabel1";
    }

    public function getPesanHello(){
        return "Data variaabel ke 2";
    }
}
?>
