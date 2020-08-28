<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Formulir extends CI_Controller
{

    public function f10a()
    {
        $data['judul'] = 'Formulir Biodata Kelas 10 | SMAN 1 Rawamerta';
        $data['subjudul'] = 'FORMULIR BIODATA KELAS 10';
        $data['kebutuhan'] = $this->Biosiswa_model->ambil();
        $data['kendaraan'] = $this->Biosiswa_model->kendaraan();

        $this->form_validation->set_rules('name', 'Nama Lengkap', 'required|trim');
        $this->form_validation->set_rules('kelas', 'Kelas', 'required|trim');
        $this->form_validation->set_rules('kelamin', 'Jenis Kelamin', 'required|trim');
        $this->form_validation->set_rules('nis', 'Nomor Induk Siswa', 'required|trim|numeric|max_length[9]');
        $this->form_validation->set_rules('nisn', 'NISN', 'required|trim|numeric|max_length[10]');
        $this->form_validation->set_rules('nik', 'Nomor Induk Kependudukan', 'required|trim|numeric|max_length[16]');
        $this->form_validation->set_rules('kk', 'Nomor Kartu Keluarga', 'required|trim|numeric|max_length[16]');
        $this->form_validation->set_rules('tempat-lahir', 'Tempat Lahir', 'required|trim');
        $this->form_validation->set_rules('tgl-lahir', 'Tanggal Lahir', 'required|trim');
        $this->form_validation->set_rules('akta', 'Nomor Akte Kelahiran', 'required|trim');
        $this->form_validation->set_rules('agama', 'Agama', 'required|trim');
        $this->form_validation->set_rules('kebutuhan-khusus', 'Kebutuhan Khusus', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat Jalan', 'required|trim');
        $this->form_validation->set_rules('desa', 'Desa/Kelurahan', 'required|trim');
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required|trim');
        $this->form_validation->set_rules('kota', 'Kabupaten/Kota', 'required|trim');
        $this->form_validation->set_rules('pos', 'Kode Pos', 'required|trim|numeric|max_length[5]');
        $this->form_validation->set_rules('tinggal', 'Tempat Tinggal', 'required|trim');
        $this->form_validation->set_rules('kendaraan', 'Transportasi', 'required|trim');
        $this->form_validation->set_rules('asal-sekolah', 'Asal Sekolah', 'required|trim');
        $this->form_validation->set_rules('nopes-un', 'Nomor Peserta UN', 'required|trim');
        $this->form_validation->set_rules('no-ijazah', 'Nomor Seri Ijazah SMP/MTs', 'required|trim');
        $this->form_validation->set_rules('no-skhun', 'Nomor SKHUN SMP/MTs', 'required|trim');
        $this->form_validation->set_rules('kip', 'Nomor KIP', 'required|trim');
        $this->form_validation->set_rules('kis', 'Nomor KIS', 'required|trim');
        $this->form_validation->set_rules('kks', 'Nomor KKS', 'required|trim');


        if ($this->form_validation->run() == FALSE) {

            $this->load->view('template/header.php', $data);
            $this->load->view('biodata/form-10.php', $data);
            $this->load->view('template/footer.php');
        } else {
            $cookie = $this->input->post('nis');
            setcookie('nis', $cookie, time() + 86400, '/');

            $this->Tambah_model->biodata();
        }
    }

    public function f10b()
    {
        $data['judul'] = 'Formulir Biodata Kelas 10 | SMAN 1 Rawamerta';
        $data['subjudul'] = 'FORMULIR DATA ORANG TUA SISWA KELAS 10';
        $data['pendidikan'] = $this->Biosiswa_model->sekolah();
        $data['pekerjaan'] = $this->Biosiswa_model->job();
        $data['penghasilan'] = $this->Biosiswa_model->income();
        $data['kebutuhan'] = $this->Biosiswa_model->ambil();

        $this->form_validation->set_rules('nama-ayah', 'Nama Lengkap Ayah', 'required|trim');
        $this->form_validation->set_rules('nik-ayah', 'NIK Ayah', 'required|trim|numeric|max_length[16]');
        $this->form_validation->set_rules('tahun-ayah', 'Tahun Lahir Ayah', 'required|trim|numeric|max_length[4]');
        $this->form_validation->set_rules('sekolah-ayah', 'Pendidikan Terakhir Ayah', 'required|trim');
        $this->form_validation->set_rules('job-ayah', 'Pekerjaan Ayah', 'required|trim');
        $this->form_validation->set_rules('penghasilan-ayah', 'Penghasilan Ayah', 'required|trim');
        $this->form_validation->set_rules('kebutuhan-ayah', 'Kebutuhan Ayah', 'required|trim');
        $this->form_validation->set_rules('hp-ayah', 'Nomor Ponsel Ayah', 'required|trim');

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('template/header.php', $data);
            $this->load->view('biodata/form-10-1.php', $data);
            $this->load->view('template/footer.php');
        } else {
            $this->Tambah_model->data_ayah();
        }
    }

    public function f10c()
    {
        $data['judul'] = 'Formulir Biodata Kelas 10 | SMAN 1 Rawamerta';
        $data['subjudul'] = 'FORMULIR DATA ORANG TUA SISWA KELAS 10';
        $data['pendidikan'] = $this->Biosiswa_model->sekolah();
        $data['pekerjaan'] = $this->Biosiswa_model->job();
        $data['penghasilan'] = $this->Biosiswa_model->income();
        $data['kebutuhan'] = $this->Biosiswa_model->ambil();

        $this->form_validation->set_rules('nama-ibu', 'Nama Lengkap Ibu', 'required|trim');
        $this->form_validation->set_rules('nik-ibu', 'NIK Ibu', 'required|trim|numeric|max_length[16]');
        $this->form_validation->set_rules('tahun-ibu', 'Tahun Lahir Ibu', 'required|trim|numeric|max_length[4]');
        $this->form_validation->set_rules('sekolah-ibu', 'Pendidikan Terakhir Ibu', 'required|trim');
        $this->form_validation->set_rules('job-ibu', 'Pekerjaan Ibu', 'required|trim');
        $this->form_validation->set_rules('penghasilan-ibu', 'Penghasilan Ibu', 'required|trim');
        $this->form_validation->set_rules('kebutuhan-ibu', 'Kebutuhan Ibu', 'required|trim');
        $this->form_validation->set_rules('hp-ibu', 'Nomor Ponsel Ibu', 'required|trim');

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('template/header.php', $data);
            $this->load->view('biodata/form-10-2.php', $data);
            $this->load->view('template/footer.php');
        } else {
            $this->Tambah_model->data_ibu();
        }
    }

    public function f10d()
    {
        $data['judul'] = 'Formulir Biodata Kelas 10 | SMAN 1 Rawamerta';
        $data['subjudul'] = 'FORMULIR DATA ORANG TUA SISWA KELAS 10';
        $data['pendidikan'] = $this->Biosiswa_model->sekolah();
        $data['pekerjaan'] = $this->Biosiswa_model->job();
        $data['penghasilan'] = $this->Biosiswa_model->income();
        $data['kebutuhan'] = $this->Biosiswa_model->ambil();

        $this->form_validation->set_rules('nama-wali', 'Nama Lengkap Wali', 'required|trim');

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('template/header.php', $data);
            $this->load->view('biodata/form-10-3.php', $data);
            $this->load->view('template/footer.php');
        } else {
            $this->Tambah_model->data_wali();
        }
    }

    public function f10e()
    {
        $data['judul'] = 'Formulir Biodata Kelas 10 | SMAN 1 Rawamerta';
        $data['subjudul'] = 'DATA RINCIAN BIODATA SISWA KELAS 10';

        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('tinggi-badan', 'Tinggi Badan', 'required|trim|numeric');
        $this->form_validation->set_rules('berat-badan', 'Berat Badan', 'required|trim|numeric');
        $this->form_validation->set_rules('lingkar-kepala', 'Lingkar Kepala', 'required|trim|numeric');
        $this->form_validation->set_rules('jarak-rumah', 'Jarak tempuh rumah ke sekolah', 'required|trim|numeric');
        $this->form_validation->set_rules('waktu-tempuh', 'Waktu tempuh rumah ke sekolah', 'required|trim|numeric');
        $this->form_validation->set_rules('anak-ke', 'Anak ke berapa', 'required|trim|numeric');
        $this->form_validation->set_rules('saudara', 'Jumlah saudara kandung', 'required|trim|numeric');

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('template/header.php', $data);
            $this->load->view('biodata/form-10-4.php', $data);
            $this->load->view('template/footer.php');
        } else {
            $this->Tambah_model->data_periodik();
        }
    }

    public function f10f()
    {
        $data['judul'] = 'Formulir Biodata Kelas 10 | SMAN 1 Rawamerta';
        $data['subjudul'] = 'DATA PRESTASI SISWA KELAS 10';

        $this->form_validation->set_rules('jenis-prestasi', 'Jenis Prestasi', 'required|trim');
        $this->form_validation->set_rules('tingkat-prestasi', 'Tingkatan Prestasi', 'required|trim');
        $this->form_validation->set_rules('nama-prestasi', 'Nama Prestasi', 'required|trim');
        $this->form_validation->set_rules('tahun-prestasi', 'Tahun diselenggarakan', 'required|trim|numeric');
        $this->form_validation->set_rules('penyelenggara', 'Penyelenggara', 'required|trim');

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('template/header.php', $data);
            $this->load->view('biodata/form-10-5.php', $data);
            $this->load->view('template/footer.php');
        } else {
            $this->Tambah_model->data_prestasi();
        }
    }
}
