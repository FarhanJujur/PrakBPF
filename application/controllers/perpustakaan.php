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

class Perpustakaan extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Perpustakaan_model');
  }

  public function index()
  {
    $data['judul'] = "Halaman Perpustakaan";
    $data['perpustakaan'] = $this->Perpustakaan_model->get();
    $this->load->view("layout/header");
    $this->load->view("Perpustakaan/vw_perpustakaan", $data);
    $this->load->view("layout/footer");
  }
  public function tambah()
  {
    $data['judul'] = "Halaman Tambah Perpustakaan";
    $this->load->view("layout/header");
    $this->load->view("Perpustakaan/vw_tambah_perpustakaan", $data);
    $this->load->view("layout/footer");
  }
  public function detail($id)
  {
    $data['judul'] = "Halaman Detail Perpustakaan";
    $data['perpustakaan'] = $this->Perpustakaan_model->getById($id);
    $this->load->view("layout/header");
    $this->load->view("Perpustakaan/vw_detail_Perpustakaan", $data);
    $this->load->view("layout/footer");
  }
  public function hapus($id)
  {
    $this->Perpustakaan_model->delete($id);
    redirect('Perpustakaan');
  }

  public function upload()
  {
    $data = [
      'nama_buku' => $this->input->post('nama_buku'),
      'genre_buku' => $this->input->post('genre_buku'),
      'tanggal_peminjaman' => $this->input->post('tanggal_peminjaman'),
      'tanggal_pengembalian' => $this->input->post('tanggal_pengembalian'),
      'nomor_anggota' => $this->input->post('nomor_anggota'),
      'nama_peminjam' => $this->input->post('nama_peminjam'),
    ];
    $this->Perpustakaan_model->insert($data);
    redirect('Perpustakaan');
  }
  public function edit($id)
  {
    $data['judul'] = "Halaman Edit Perpustakaan";
    $data['perpustakaan'] = $this->Perpustakaan_model->getById($id);
    $this->load->view("layout/header");
    $this->load->view("Perpustakaan/vw_ubah_Perpustakaan", $data);
    $this->load->view("layout/footer");
  }
  public function update()
  {
    $data = [
      'nama_buku' => $this->input->post('nama_buku'),
      'genre_buku' => $this->input->post('genre_buku'),
      'tanggal_peminjaman' => $this->input->post('tanggal_peminjaman'),
      'tanggal_pengembalian' => $this->input->post('tanggal_pengembalian'),
      'nomor_anggota' => $this->input->post('nomor_anggota'),
      'nama_peminjam' => $this->input->post('nama_peminjam'),
    ];
    $id = $this->input->post('id');
    $this->Perpustakaan_model->update(['id' => $id], $data);
    redirect('Perpustakaan');
  }
}


/* End of file Mahasiswa.php */
/* Location: ./application/controllers/Mahasiswa.php*/