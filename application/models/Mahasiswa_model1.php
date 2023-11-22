<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Mahasiswa_model1_model
 *
 * This Model for ...
 * 
 * @package		CodeIgniter
 * @category	Model
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

 class Mahasiswa_model1 extends CI_Model {

  private $mahasiswas = [];

  public function __construct() {
      parent::__construct();
  }

  public function get_all_mahasiswas() {
      return $this->mahasiswas;
  }

  public function create_mahasiswa() {
      $data = [
          'nama' => $this->input->post('nama'),
          'nim' => $this->input->post('nim')
      ];
      $this->mahasiswas[] = $data;

      var_dump($this->mahasiswas); // Debug output
  }
}


/* End of file Mahasiswa_model1_model.php */
/* Location: ./application/models/Mahasiswa_model1_model.php */