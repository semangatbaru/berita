<?php defined("BASEPATH") or exit('No direct script acces allowed');
 
class M_awal extends CI_Model{
	 
     private $_tableB = "kategori";
     private $_tableB = "ekonomi";

	 public function __construct()
    {
        $this->load->database();
    }

    public function ekosnomi()
   {
        // query sql di database SELECT berita.*, kategori.nama_kategori FROM `berita` INNER JOIN kategori ON kategori.id_kategori = berita.id_berita
        $Value='K01';
        $this->db->select('*');
        $this->db->from('ekonomi');
        $this->db->$this->db->where('id_kategori', $Value);
        
        $query = $this->db->get();
        return $query;
    }
    public function ekonomi()
   {
    $Value='K01';
    $this->db->select('ekonomi.*, kategori.nama_kategori');
         $this->db->from('berita');
         $this->db->join('ekonomi', 'kategori.id_kategori = ekonomi.id_kategori','left');
         $this->db->$this->db->where('id_kategori', $Value);
         $this->db->order_by('tanggal', 'ASC');
         $query = $this->db->get();
         return $query;
    }
    public function ambil_data()
    {
         // query sql di database SELECT berita.*, kategori.nama_kategori FROM `berita` INNER JOIN kategori ON kategori.id_kategori = berita.id_berita
         $this->db->select('ekonomi.*, kategori.nama_kategori');
         $this->db->from('berita');
         $this->db->join('ekonomi', 'kategori.id_kategori = ekonomi.id_kategori','left');
         $this->db->order_by('tanggal', 'ASC');
         $query = $this->db->get();
         return $query;
     }

    public function ambil_kategori()
   {
    return $this->db->get('ekonomi');
    }

    function detail($id_berita)
        {
                $this->db->select('*');
                $this->db->where('id_berita', $id_berita);
                $query = $this->db->get('berita');
                return $query->result();
        }

}
