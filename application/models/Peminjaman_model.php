<?php
class Peminjaman_model extends CI_Model
{
    public function simpan_data($data)
    {
        // Simpan data peminjaman buku ke database
        $this->db->insert('peminjaman_buku', $data);
    }

    public function ambil_data()
    {
        // Ambil data semua peminjaman buku dari database
        $query = $this->db->get('peminjaman_buku');
        return $query->result_array();
    }
    // Model Peminjaman_model.php
public function getPeminjamanById($id) {
  return $this->db->get_where('peminjaman_buku', array('id' => $id))->row_array();
}

public function updatePeminjaman($id, $data) {
  $this->db->where('id', $id);
  $this->db->update('peminjaman_buku', $data);
}

}
