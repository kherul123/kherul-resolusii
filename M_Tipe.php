<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_Tipe extends CI_Model
{
	public function getAllTipe()
	{
		$this->db->order_by('tipePs', 'asc');

		return $this->db->get('tipe')->result();
	}

	// untuk tambah data tipe
	public function addTipe($data)
	{
		return $this->db->insert('tipe', $data);
	}

	// mengambil 1 data tipe berdasarkan id
	public function getOneTipe($id)
	{
		$this->db->where('id', $id);

		return $this->db->get('tipe')->row();
	}

	// untuk edit data tipe
	public function editTipe($id, $data)
	{
		$this->db->where('id', $id);
		return $this->db->update('tipe', $data);
	}

	// untuk hapus data tipe
	public function delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('tipe');
	}
}

/* End of file M_Tipe.php */
