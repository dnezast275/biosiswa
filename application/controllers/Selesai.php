<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Selesai extends CI_Controller
{

    public function done()
    {
        $data['judul'] = 'Formulir Biodata Kelas 10 | SMAN 1 Rawamerta';
        $data['subjudul'] = 'Terima kasih!';
        $data['sub'] = 'Telah mengisi formulir biodata siswa';
        $data['done'] = 'SMA Negeri 1 Rawamerta';

        $this->load->view('template/header.php', $data);
        $this->load->view('biodata/selesai.php', $data);
        $this->load->view('template/footer.php');
    }
}
