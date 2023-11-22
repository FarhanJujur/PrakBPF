<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HitungLaundry extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('laundry');
    }   
    
    public function index() {
        $total = $this->laundry->totalBayar('Setrika', 6.5, false, true);
echo "1. Ani mengambil jenis laundry Setrika saja dengan berat pakaian 6.5 kg, 
        maka total harga yang harus Ani bayar adalah Rp. $total<br><br>";
        $total = $this->laundry->totalBayar('Cuci dan Setrika', 8, true, true);
echo "2. Ina mengambil jenis laundry Cuci dan Setrika dengan berat pakaian 8 kg 
        yang didalamnya terdapat pakaian dalam, 
        maka total harga yang harus Ina bayar adalah Rp. $total<br><br>";
        $total = $this->laundry->totalBayar('Setrika', 3.5, false, false);
        echo "3. Nia ingin mengambil pakaiannya yang sudah siap di laundry, dengan berat 
        pakaian 3.5 kg, akan tetapi Nia lupa membawa struk 
        maka total harga yang harus Nia bayar adalah Rp. $total";
    }
}
