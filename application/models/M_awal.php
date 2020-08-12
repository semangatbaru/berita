<?php defined("BASEPATH") or exit('No direct script acces allowed');
 
class M_awal extends CI_Model{
	 
     private $_tableB = "kategori";

	 public function __construct()
    {
        $this->load->database();
    }

    public function ambil_data()
   {
        // query sql di database SELECT berita.*, kategori.nama_kategori FROM `berita` INNER JOIN kategori ON kategori.id_kategori = berita.id_berita
        $this->db->select('berita.*, kategori.nama_kategori');
        $this->db->from('berita');
        $this->db->join('kategori', 'kategori.id_kategori = berita.id_kategori','left');
        $this->db->order_by('tanggal', 'DESC');
        $query = $this->db->get();
        return $query;
    }

    public function ambil_kategori()
   {
    return $this->db->get('kategori');
    }

    function detail($id_berita)
        {
                $this->db->select('*');
                $this->db->where('id_berita', $id_berita);
                $query = $this->db->get('berita');
                return $query->result();
        }

}
