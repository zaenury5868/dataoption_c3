<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dynamic_model extends CI_Model 
{
	public function getDataProv()
	{
		return $this->db->get('wilayah_provinsi')->result_array();
	}

	public function getDataKabupaten($idprov)
	{
		return $this->db->get_where('wilayah_kabupaten', ['provinsi_id' => $idprov])->result();
	}

}