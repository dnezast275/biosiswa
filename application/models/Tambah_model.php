<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tambah_model extends CI_Model
{

    public function biodata()
    {

        $data = [
            'nama'              => $this->input->post('name'),
            'kelas'             => $this->input->post('kelas'),
            'jenis-kelamin'     => $this->input->post('kelamin'),
            'nis'              => $this->input->post('nis'),
            'nisn'              => $this->input->post('nisn'),
            'nik'               => $this->input->post('nik'),
            'nomor-kk'          => $this->input->post('kk'),
            'tempat-lahir'      => $this->input->post('tempat-lahir'),
            'tanggal-lahir'     => $this->input->post('tgl-lahir'),
            'nomor-akte'        => $this->input->post('akta'),
            'agama'             => $this->input->post('agama'),
            'kebutuhan-khusus'  => $this->input->post('kebutuhan-khusus'),
            'alamat'            => $this->input->post('alamat'),
            'desa'              => $this->input->post('desa'),
            'kecamatan'         => $this->input->post('kecamatan'),
            'kota'              => $this->input->post('kota'),
            'kode-pos'          => $this->input->post('pos'),
            'tinggal-bersama'   => $this->input->post('tinggal'),
            'transportasi'      => $this->input->post('kendaraan'),
            'asal-sekolah'      => $this->input->post('asal-sekolah'),
            'nopes-un'          => $this->input->post('nopes-un'),
            'no-ijazah'         => $this->input->post('no-ijazah'),
            'no-skhun'          => $this->input->post('no-skhun'),
            'nomor-kip'         => $this->input->post('kip'),
            'nomor-kis'         => $this->input->post('kis'),
            'nomor-kks'         => $this->input->post('kks')
        ];

        $this->db->insert('biodata-siswa', $data);
        redirect('formulir/f10b');
    }

    public function data_ayah()
    {
        $data = [
            'nis-siswa'         => htmlspecialchars($_COOKIE["nis"]),
            'nama-ayah'         => $this->input->post('nama-ayah'),
            'nik-ayah'          => $this->input->post('nik-ayah'),
            'tahun-lahir-ayah'  => $this->input->post('tahun-ayah'),
            'pendidikan-ayah'   => $this->input->post('sekolah-ayah'),
            'pekerjaan-ayah'    => $this->input->post('job-ayah'),
            'penghasilan-ayah'  => $this->input->post('penghasilan-ayah'),
            'kebutuhan-ayah'    => $this->input->post('kebutuhan-ayah'),
            'no-hp-ayah'        => $this->input->post('hp-ayah')
        ];

        $this->db->insert('data-ayah', $data);
        redirect('formulir/f10c');
    }

    public function data_ibu()
    {
        $data = [
            'nis-siswa'         => htmlspecialchars($_COOKIE["nis"]),
            'nama-ibu'         => $this->input->post('nama-ibu'),
            'nik-ibu'          => $this->input->post('nik-ibu'),
            'tahun-lahir-ibu'  => $this->input->post('tahun-ibu'),
            'pendidikan-ibu'   => $this->input->post('sekolah-ibu'),
            'pekerjaan-ibu'    => $this->input->post('job-ibu'),
            'penghasilan-ibu'  => $this->input->post('penghasilan-ibu'),
            'kebutuhan-ibu'    => $this->input->post('kebutuhan-ibu'),
            'no-hp-ibu'        => $this->input->post('hp-ibu')
        ];

        $this->db->insert('data-ibu', $data);
        redirect('formulir/f10d');
    }

    public function data_wali()
    {
        $data = [
            'nis-siswa'         => htmlspecialchars($_COOKIE["nis"]),
            'nama-wali'         => $this->input->post('nama-wali'),
            'nik-wali'          => $this->input->post('nik-wali'),
            'tahun-lahir-wali'  => $this->input->post('tahun-wali'),
            'pendidikan-wali'   => $this->input->post('sekolah-wali'),
            'pekerjaan-wali'    => $this->input->post('job-wali'),
            'penghasilan-wali'  => $this->input->post('penghasilan-wali'),
            'kebutuhan-wali'    => $this->input->post('kebutuhan-wali'),
            'no-hp-wali'        => $this->input->post('hp-wali')
        ];

        $this->db->insert('data-wali', $data);
        redirect('formulir/f10e');
    }

    public function data_periodik()
    {
        $data = [
            'nis-siswa'         => htmlspecialchars($_COOKIE["nis"]),
            'email'             => $this->input->post('email'),
            'tinggi-badan'      => $this->input->post('tinggi-badan'),
            'berat-badan'       => $this->input->post('berat-badan'),
            'lingkar-kepala'    => $this->input->post('lingkar-kepala'),
            'jarak-tempuh'      => $this->input->post('jarak-rumah'),
            'waktu-tempuh'      => $this->input->post('waktu-tempuh'),
            'anak-ke'           => $this->input->post('anak-ke'),
            'saudara'           => $this->input->post('saudara')
        ];

        $this->db->insert('data-periodik', $data);
        redirect('formulir/f10f');
    }

    public function data_prestasi()
    {
        $data = [
            'nis-siswa'         => htmlspecialchars($_COOKIE["nis"]),
            'jenis-prestasi'    => $this->input->post('jenis-prestasi'),
            'tingkat-prestasi'  => $this->input->post('tingkat-prestasi'),
            'nama-prestasi'     => $this->input->post('nama-prestasi'),
            'tahun-prestasi'    => $this->input->post('tahun-prestasi'),
            'penyelenggara'     => $this->input->post('penyelenggara')
        ];

        $this->db->insert('data-prestasi', $data);
        redirect('selesai/done');
    }
}
