<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html


	 */

	function __construct(){
		parent::__construct();		
		$this->load->model('M_awal');
        $this->load->helper('url');
	}
	
	public function index()
	{
		$data["berita"] = $this->M_awal->ambil_data()->result_array();
		$data["kategori"] = $this->M_awal->ambil_kategori();
		$this->load->view('welcome_message', $data);
	}

	public function detail($id_berita=''){
		//write this way so that you can call the url like
		//localhost/norwin/list_group/get_product_by_group
	    if($id_berita)//no need to check uri->segment
	    {
	            $this->load->database();                    
	            $data['berita'] = $this->M_awal->detail($id_berita);
	            $this->load->view('detail', $data);

	    }
	    else
	    {
	            redirect('');
	    }
	


	}
}
