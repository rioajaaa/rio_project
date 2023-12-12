<?php
defined('BASEPATH') or exit('No direct script access allowed');



class Fitur extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
      $data['judul'] = "Lihat Berita Terbaru";;
      $this->load->view("layout/v_header");
      $this->load->view("fitur/v_berita", $data);
      $this->load->view("layout/v_footer");
  }

}


/* End of file Fitur.php */
/* Location: ./application/controllers/Fitur.php */