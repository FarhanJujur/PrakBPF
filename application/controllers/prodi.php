<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller Mahasiswa.php
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

class Prodi extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('User_model');
    $this->load->model('Prodi_model');
  }

  public function index()
  {
    $data['judul'] = "Halaman Prodi";
    $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
    $data['prodi'] = $this->Prodi_model->get();
    $this->load->view("layout/header", $data);
    $this->load->view("prodi/vw_prodi", $data);
    $this->load->view("layout/footer", $data);
  }
  public function tambah()
  {
    $data['judul'] = "Halaman Tambah Prodi";
    $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
    $this->load->view("layout/header", $data);
    $this->load->view("prodi/vw_tambah_prodi", $data);
    $this->load->view("layout/footer", $data);
  }

  public function upload()
  {
    $data = [
      'nama' => $this->input->post('nama'),
      'ruangan' => $this->input->post('ruangan'),
      'jurusan' => $this->input->post('jurusan'),
      'akreditasi' => $this->input->post('akreditasi'),
      'nama_kaprodi' => $this->input->post('nama_kaprodi'),
      'tahun_berdiri' => $this->input->post('tahun_berdiri'),
      'output_lulusan' => $this->input->post('output_lulusan'),
    ];
    $upload_image = $_FILES['gambar']['name'];
    if ($upload_image) {
      $config['allowned_types'] = 'gif|jpg|png';
      $config['max_size'] = '2048';
      $config['upload_path'] = '../assets/assets/img/prodi/';
      $this->load->library('upload', $config);
      if ($this->upload->do_upload('gambar')) {
        $new_image = $this->upload->data('file_name');
        $this->db->set('gambar', $new_image);
      }else{
        echo $this->upload->display_errors();
      }
    }
    $this->Prodi_model->insert($data, $upload_image);
    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="iconfas fa-info-circle"></i>Data Berhasil ditambahkan!</div><></div>></div>></div>');
    redirect('prodi');
  }
public function edit($id)
{
  $data['judul'] = "Halaman Edit prodi";
  $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
  $this->db->where('id', $id);
  $data['prodi'] = $this->Prodi_model->getById($id);
  $this->load->view("layout/header", $data);
  $this->load->view("prodi/vw_ubah_prodi", $data);
  $this->load->view("layout/footer", $data);
}
public function update()
{
  $data = [
    'nama' => $this->input->post('nama'),
    'ruangan' => $this->input->post('ruangan'),
    'jurusan' => $this->input->post('jurusan'),
    'akreditasi' => $this->input->post('akreditasi'),
    'nama_kaprodi' => $this->input->post('nama_kaprodi'),
    'tahun_berdiri' => $this->input->post('tahun_berdiri'),
    'output_lulusan' => $this->input->post('output_lulusan'),
  ];
  $id = $this->input->post('id');
  $this->Prodi_model->update(['id' => $id], $data);
  redirect('prodi');
}

public function hapus($id)
{
  $this->Prodi_model->delete($id);
  $error = $this->db->error();
  if ($error['code'] != 0) {
    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon
    fas fa-info-circle"></i>Data Prodi tidak dapat dihapus (sudah berelasi)!</div>');
  } else {
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i
    class="icon fas fa-check-circle"></i>Data Prodi Berhasil Dihapus!</div>');
  }
  redirect('Prodi');
}
}


/* End of file Mahasiswa.php */
/* Location: ./application/controllers/Mahasiswa.php*/