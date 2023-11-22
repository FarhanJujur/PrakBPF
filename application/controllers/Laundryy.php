<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller Laundryy
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Laundryy extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->library('laundry');
  }

  public function index()
  {
    $jenisLaundry = 'setrika';
    $beratPakaian = 6.5;
    $pakaianDalam = false;
    $struk = true;

    $totalHarga = $this->Laundry->test($jenisLaundry, $beratPakaian, $pakaianDalam, $struk);

    echo "Total harga yang harus dibayar: Rp. " . $totalHarga;
  }

}


/* End of file Laundryy.php */
/* Location: ./application/controllers/Laundryy.php */