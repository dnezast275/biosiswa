<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Biosiswa extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Biodata Siswa SMAN 1 Rawamerta';
        $data['kebutuhan'] = $this->Biosiswa_model->ambil();
        $data['kendaraan'] = $this->Biosiswa_model->kendaraan();

        $this->load->view('template/header.php', $data);
        $this->load->view('biosiswa/home.php', $data);
        $this->load->view('template/footer.php');
    }
}
