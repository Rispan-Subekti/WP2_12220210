<?php
class coba extends CI_Controller
{

    public function index()
    {
        // code...
        echo "selamat datang di webprogramming 2!!";
    }

    public function biodata($nama=null, $nim=null)
    {
        // code...
        //echo "Nama : $nama <br>";
        //echo "NIM  : $nim";
        $data['nama']=$nama;
        $data['nim']=$nim;
        $this->load->view('view_coba',$data);
    }
}