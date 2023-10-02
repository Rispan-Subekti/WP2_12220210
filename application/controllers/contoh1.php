<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class contoh1 extends CI_Controller {

    /**
     * Index page for this controller
     * 
     * Maps to following URl
     *    http://example.com/index.php/welcome
     *  - or -
     *    http://example.com/index.php/welcome/index
     *  - or -
     * Since this controller is set as the default cntroller in
     * config/routes.php, it's displayed at http://example.com/
     * 
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
      echo "<h1>Perkenalkan</h1>";
      echo "Nama Saya Rispan Subekti <br>
        Saya tinggal di daerah godean <br>
        Olahraga yang saya sukai adalah bulutangkis";
    }
}