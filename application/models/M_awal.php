<?php defined("BASEPATH") or exit('No direct script acces allowed');
 
class M_awal extends CI_Model{
	 
     private $_tableB = "kategori";

	 public function __construct()
    {
        $this->load->database();
    }

    public function ekonomi()
   {
        // query sql di database SELECT berita.*, kategori.nama_kategori FROM `berita` INNER JOIN kategori ON kategori.id_kategori = berita.id_berita
        
         $this->db->select('*');
        $this->db->from('ekonomi');
        
        $query = $this->db->get();
        return $query;
   }
   
   public function global()
   {
        // query sql di database SELECT berita.*, kategori.nama_kategori FROM `berita` INNER JOIN kategori ON kategori.id_kategori = berita.id_berita
        
         $this->db->select('*');
        $this->db->from('global');
        
        $query = $this->db->get();
        return $query;
   }
   
   public function politik()
   {
        // query sql di database SELECT berita.*, kategori.nama_kategori FROM `berita` INNER JOIN kategori ON kategori.id_kategori = berita.id_berita
        
         $this->db->select('*');
        $this->db->from('politik');
        
        $query = $this->db->get();
        return $query;
   }
   
   public function keislaman()
   {
        // query sql di database SELECT berita.*, kategori.nama_kategori FROM `berita` INNER JOIN kategori ON kategori.id_kategori = berita.id_berita
        
         $this->db->select('*');
        $this->db->from('keislaman');
        
        $query = $this->db->get();
        return $query;
   }
   
   public function opini()
   {
        // query sql di database SELECT berita.*, kategori.nama_kategori FROM `berita` INNER JOIN kategori ON kategori.id_kategori = berita.id_berita
        
         $this->db->select('*');
        $this->db->from('opini');
        
        $query = $this->db->get();
        return $query;
   }
   
   public function analisa()
   {
        // query sql di database SELECT berita.*, kategori.nama_kategori FROM `berita` INNER JOIN kategori ON kategori.id_kategori = berita.id_berita
        
         $this->db->select('*');
        $this->db->from('analisa');
        
        $query = $this->db->get();
        return $query;
   }
   
   public function biografi()
   {
        // query sql di database SELECT berita.*, kategori.nama_kategori FROM `berita` INNER JOIN kategori ON kategori.id_kategori = berita.id_berita
        
         $this->db->select('*');
        $this->db->from('biografi');
        
        $query = $this->db->get();
        return $query;
   }  
    public function ambil_data()
    {
         // query sql di database SELECT berita.*, kategori.nama_kategori FROM `berita` INNER JOIN kategori ON kategori.id_kategori = berita.id_berita
         $this->db->select('berita.*, kategori.nama_kategori');
         $this->db->from('berita');
         $this->db->join('kategori', 'kategori.id_kategori = berita.id_kategori','left');
         $this->db->order_by('tanggal', 'ASC');
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

     public function getBerita($limit, $start)
     {
          return $this->db->get('berita', $limit, $start);
     }

}
