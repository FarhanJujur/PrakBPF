<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laundry extends CI_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->library('laundry');
    }

    public function index() 
    {
        $jenisLaundry = 'setrika';
        $beratPakaian = 6.5;
        $pakaianDalam = false;
        $struk = true;

        $totalHarga = $this->laundry->test($jenisLaundry, $beratPakaian, $pakaianDalam, $struk);

        echo "Total harga yang harus dibayar: Rp. " . $totalHarga;
    }
}
 