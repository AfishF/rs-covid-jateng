<?php
class M_tabel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function show_tabel()
    {
        $total = $this->db->query("SELECT * FROM pusat_kesehatan_masyarakat");
        return $total;
    }
}
