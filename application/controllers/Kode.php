<?php
class Kode extends CI_Controller{
    public function hello($var){
        if(isset($var)){
            switch(strtolower($var)){
                case 'php':
                    $this->load->view('phpview');
                break;
                case 'python':
                    $this->load->view('pythonview');
                break;
                case 'cpp':
                    $this->load->view('cppview');
                break;
                case 'java':
                    $this->load->view('javaview');
                break;
                deafult:
                echo 'input URI Salah';
            }
        }else{
            echo 'Input URI Salah';
        }
    }
}