<header class="header">
    <div class="container-fluid">
        <div class="container-xl">
            <div class="row">
                <div class="col-lg-1">
                    <img src="<?= base_url('asset/img/'); ?>logo.png" alt="">
                </div>
                <div class="col-lg-11">
                    <h2 class="brand">SMA NEGERI 1 RAWAMERTA</h2>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="head">
    <div class="container-xl text-center">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="subtitle">
                    <?= $subjudul; ?> <br>
                    SMA NEGERI 1 RAWAMERTA <br>
                    TAHUN PELAJARAN 2020/2021
                </h4>
            </div>
        </div>
    </div>
</section>

<section class="content">

    <form action="" method="post">
        <div class="container-xl form-group">
            <input type="hidden" name="id">

            <div class="row">
                <div class="col-lg-3 mt-1">
                    <label for="name">Nama Lengkap</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="name" value="<?= set_value('name'); ?>" placeholder="Isi nama lengkap">
                    <?= form_error('name', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3 mt-1">
                    <label for="kelas">Kelas</label>
                </div>
                <div class="col-lg-8">
                    <select name="kelas" id="kelas" class="form-control">
                        <option value="">Pilih :</option>
                        <option value="10 IPA 1">10 IPA 1</option>
                        <option value="10 IPA 2">10 IPA 2</option>
                        <option value="10 IPA 3">10 IPA 3</option>
                        <option value="10 IPS 1">10 IPS 1</option>
                        <option value="10 IPS 2">10 IPS 2</option>
                    </select>
                    <?= form_error('kelas', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3 mt-1">
                    <label for="kelamin">Jenis Kelamin</label>
                </div>
                <div class="col-lg-8">
                    <select name="kelamin" id="kelamin" class="form-control">
                        <option value="">Pilih :</option>
                        <option value="L">Laki - laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                    <?= form_error('kelamin', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3 mt-1">
                    <label for="nis">NIS</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="nis" placeholder="202110123" value="<?= set_value('nis'); ?>">
                    <?= form_error('nisn', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3 mt-1">
                    <label for="nisn">NISN</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="nisn" placeholder="0123456789" value="<?= set_value('nisn'); ?>">
                    <?= form_error('nisn', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3 mt-1">
                    <label for="nik">NIK (Nomor Induk Kependudukan)</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="nik" placeholder="3215XXXXXXXXXXXX" value="<?= set_value('nik'); ?>">
                    <?= form_error('nik', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3 mt-1">
                    <label for="kk ">No. Kartu Keluarga</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="kk" placeholder="3215XXXXXXXXXXXX" value="<?= set_value('kk'); ?>">
                    <?= form_error('kk', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3 mt-1">
                    <label for="ttl">Tempat lahir</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="tempat-lahir" placeholder="Tempat lahir" value="<?= set_value('tempat-lahir'); ?>">
                    <?= form_error('tempat-lahir', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3">
                    <label for="tgl-lahir">Tanggal lahir</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control datepicker" name="tgl-lahir" placeholder="yyyy-mm-dd" value="<?= set_value('tgl-lahir'); ?>">
                    <?= form_error('tgl-lahir', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3 mt-1">
                    <label for="akta">No. Akta Kelahiran</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="akta" placeholder="3215-LU-30011997-0123" value="<?= set_value('akta'); ?>">
                    <?= form_error('akta', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3 mt-1">
                    <label for="agama">Agama</label>
                </div>
                <div class="col-lg-8">
                    <select name="agama" id="agama" class="form-control">
                        <option value="">Pilih :</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katholik">Katholik</option>
                        <option value="Protestan">Protestan</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                    <?= form_error('agama', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3 mt-1">
                    <label for="kebutuhan">Kebutuhan Khusus</label>
                </div>
                <div class="col-lg-8">
                    <select name="kebutuhan-khusus" id="" class="form-control">
                        <?php foreach ($kebutuhan as $butuh) : ?>
                            <option value="<?= $butuh['nama-kebutuhan']; ?>"><?= $butuh['nama-kebutuhan']; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <?= form_error('kebutuhan-khusus', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3 mt-1">
                    <label for="alamat">Alamat Jalan</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="alamat" placeholder="Jl. Garunggung - Panyingkiran Dsn. Karajan I RT. 01 RW. 02" value="<?= set_value('alamat'); ?>">
                    <?= form_error('alamat', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3 mt-1">
                    <label for="desa">Desa/Kelurahan</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="desa" placeholder="Panyingkiran" value="<?= set_value('desa'); ?>">
                    <?= form_error('desa', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3 mt-1">
                    <label for="kecamatan">Kecamatan</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="kecamatan" placeholder="Rawamerta" value="<?= set_value('kecamatan'); ?>">
                    <?= form_error('kecamatan', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3 mt-1">
                    <label for="kota">Kabupaten/Kota</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="kota" placeholder="Karawang" value="<?= set_value('kota'); ?>">
                    <?= form_error('kota', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3 mt-1">
                    <label for="pos">Kode Pos</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="pos" placeholder="41382" value="<?= set_value('pos'); ?>">
                    <?= form_error('pos', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3 mt-1">
                    <label for="tinggal">Tempat Tinggal</label>
                </div>
                <div class="col-lg-8">
                    <select name="tinggal" id="tinggal" class="form-control">
                        <option value="">Pilih :</option>
                        <option value="Bersama Orang Tua">Bersama Orang Tua</option>
                        <option value="Wali">Wali</option>
                        <option value="Kos">Kos</option>
                        <option value="Asrama">Asrama</option>
                        <option value="Panti Asuhan">Panti Asuhan</option>
                    </select>
                    <?= form_error('tinggal', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3 mt-1">
                    <label for="kendaraan">Transportasi</label>
                </div>
                <div class="col-lg-8">
                    <select name="kendaraan" id="kendaraan" class="form-control">
                        <option value="">Pilih :</option>
                        <?php foreach ($kendaraan as $kd) : ?>
                            <option value="<?= $kd['kendaraan']; ?>"><?= $kd['kendaraan']; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <?= form_error('kendaraan', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3 mt-1">
                    <label for="asal-sekolah">Asal Sekolah</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="asal-sekolah" placeholder="SMPN 1 Rawamerta" value="<?= set_value('asal-sekolah'); ?>">
                    <?= form_error('asal-sekolah', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3 mt-1">
                    <label for="nopes-un">Nomor Peserta UN</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="nopes-un" placeholder="02-20-02-19-048-015-5" value="<?= set_value('nopes-un'); ?>">
                    <?= form_error('nopes-un', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3 mt-1">
                    <label for="no-ijazah">Nomor Seri Ijazah SMP/MTs</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="no-ijazah" placeholder="DN-02 Ma 0069031" value="<?= set_value('no-ijazah'); ?>">
                    <?= form_error('no-ijazah', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3 mt-1">
                    <label for="no-skhun">Nomor SKHUN SMP/MTs</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="no-skhun" placeholder="DN-02 M 0128878" value="<?= set_value('no-skhun'); ?>">
                    <?= form_error('no-skhun', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3 mt-1">
                    <label for="kip">Nomor KIP</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="kip" value="<?= set_value('kip'); ?>">
                    <?= form_error('kip', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3 mt-1">
                    <label for="kis">Nomor KIS</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="kis" value="<?= set_value('kis'); ?>">
                    <?= form_error('kis', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3 mt-1">
                    <label for="kks">Nomor KKS</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="kks" value="<?= set_value('kks'); ?>">
                    <?= form_error('kks', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>


            <div class="row mt-3">
                <div class="col-lg-11 mt-1 text-right">
                    <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                </div>
            </div>

        </div>

    </form>
</section>