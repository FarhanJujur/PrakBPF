<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peminjaman extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Peminjaman_model');
        $this->load->library('form_validation');
    }

    public function tambah()
    {
        // Tampilkan tampilan untuk menambah data peminjaman buku
        $data['judul'] = "Halaman Detail Mahasiswa";
        $this->load->view('tambah_peminjaman',$data);
    }

    public function simpan()
    {
        // Set aturan validasi
        $data['judul'] = "Halaman Detail Mahasiswa";
        $this->form_validation->set_rules('judul_buku', 'Judul Buku', 'required');
        $this->form_validation->set_rules('nama_peminjam', 'Nama Peminjam', 'required');
        $this->form_validation->set_rules('tanggal_peminjaman', 'Tanggal Peminjaman', 'required');
        $this->form_validation->set_rules('tanggal_pengembalian', 'Tanggal Pengembalian', 'required');

        if ($this->form_validation->run() === FALSE) {
            // Validasi gagal, tampilkan kembali tampilan tambah
            $this->load->view('tambah_peminjaman');
        } else {
            // Validasi berhasil, simpan data ke database
            $data = array(
                'judul_buku' => $this->input->post('judul_buku'),
                'nama_peminjam' => $this->input->post('nama_peminjam'),
                'tanggal_peminjaman' => $this->input->post('tanggal_peminjaman'),
                'tanggal_pengembalian' => $this->input->post('tanggal_pengembalian')
            );

            $this->Peminjaman_model->simpan_data($data);
            redirect('peminjaman');
        }
    }

    public function index()
    {
        // Tampilkan tampilan untuk menampilkan data peminjaman buku
        
        $data['peminjaman'] = $this->Peminjaman_model->ambil_data();
        $data['judul'] = "Halaman Detail Mahasiswa";
        $this->load->view('tampil_peminjaman', $data);
    }

public function edit($id) {
  $data['peminjaman'] = $this->Peminjaman_model->getPeminjamanById($id);
  $this->load->view('edit_peminjaman', $data);
}

public function update() {
  $data = array(
      'judul_buku' => $this->input->post('judul_buku'),
      'nama_peminjam' => $this->input->post('nama_peminjam'),
      'tanggal_peminjaman' => $this->input->post('tanggal_peminjaman'),
      'tanggal_pengembalian' => $this->input->post('tanggal_pengembalian')
  );

  $id = $this->input->post('id');
  $this->Peminjaman_model->updatePeminjaman($id, $data);

  redirect('peminjaman');
}

}
