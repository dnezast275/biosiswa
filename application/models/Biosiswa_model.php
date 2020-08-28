<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Biosiswa_model extends CI_Model
{

    public function ambil()
    {
        return $this->db->get('kebutuhan-khusus')->result_array();
    }

    public function kendaraan()
    {
        return $this->db->get('kendaraan')->result_array();
    }

    public function sekolah()
    {
        return $this->db->get('pendidikan')->result_array();
    }

    public function job()
    {
        return $this->db->get('pekerjaan')->result_array();
    }

    public function income()
    {
        return $this->db->get('penghasilan')->result_array();
    }
}
