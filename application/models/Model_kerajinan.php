<?php
class Model_kerajinan extends CI_Model
{

	public function tampil_data()
	{
		return $this->db->get('tb_kerajinan');
	}
	
	
	public function tambah_kerajinan($data,$table)
	{
		$this->db->insert($table,$data);
	}
	
	public function edit_data($where,$table)
	{		
	return $this->db->get_where($table,$where);
	}
	
	public function update_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	
	public function hapus_data($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	
	public function find($id)
	{
		$result = $this->db->where('id_kerajinan',$id)
						   ->limit(1)
						   ->get('tb_kerajinan');
		if($result->num_rows() > 0)
		{
			return $result->row();
		}else{
			return array();
		}
	}
	
	public function detail_kerajinan($id_kerajinan)
	{
		$result = $this->db->where('id_kerajinan', $id_kerajinan)->get('tb_kerajinan');
		if($result->num_rows() > 0)
		{
			return $result->result();
		}else{
			return false;
		}
	}
}