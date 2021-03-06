<?php
defined('BASEPATH') or exit('No direct script access allowed');

require('./application/third_party/phpoffice/vendor/autoload.php');


class Tabel extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    $this->load->library('pagination');
    $this->load->helper('url');
    $this->load->model('m_tabel');
  }

  public function index()
  {
    $rs['data'] = $this->m_tabel->show_tabel();
    $this->load->view('menu/v_tabel', $rs);
  }
}
