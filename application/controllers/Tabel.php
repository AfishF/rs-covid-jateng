<?php
defined('BASEPATH') or exit('No direct script access allowed');

require('./application/third_party/phpoffice/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


class Tabel extends CI_Controller
{
  private $filename = "import_data";
  public function __construct()
  {
    parent::__construct();

    $this->load->library('pagination');
    $this->load->helper('url');
    $this->load->model('m_tabel');
  }

  public function index()
  {
    $d['data'] = $this->m_tabel->show_tabel();
    $this->load->view('menu/v_tabel', $d);
  }
}
