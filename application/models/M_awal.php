<?php defined("BASEPATH") or exit('No direct script acces allowed');
 
class M_awal extends CI_Model{
	 

	 public function __construct()
    {
        $this->load->database();
    }

    function ambil_data(){
        return $this->db->get('berita');
    }

    function detail($id_berita)
        {
                $this->db->select('*');
                $this->db->where('id_berita', $id_berita);
                $query = $this->db->get('berita');
                return $query->result();
        }

}
