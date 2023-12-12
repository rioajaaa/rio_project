<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $data['judul'] = "Halaman Admin";;
    $this->load->view("layout/v_header");
    $this->load->view("home/v_home", $data);
    $this->load->view("layout/v_footer");
  }
}