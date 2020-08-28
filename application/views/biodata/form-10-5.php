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
        <div class="row mt-3">
            <div class="col-lg-12">
                <h4 class="subtitle">
                    <?= $subjudul; ?><br>
                    SMA NEGERI 1 RAWAMERTA <br>
                    TAHUN PELAJARAN 2020/2021
                </h4>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="container-xl">

        <div class="row">
            <div class="col-lg-12">
                <h4 class="prestasi">
                    DATA PRESTASI
                </h4>
            </div>
        </div>
        <form action="" method="post">

            <div class="row mt-3">
                <div class="col-lg-3 mt-1">
                    <label for="jenis">Jenis Prestasi</label>
                </div>
                <div class="col-lg-8">
                    <select name="jenis-prestasi" id="jenis-prestasi" class="form-control">
                        <option value="">Pilih :</option>
                        <option value="Akademik">Akademik</option>
                        <option value="Non-Akademik">Non-Akademik</option>
                    </select>
                    <?= form_error('jenis-prestasi', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3 mt-1">
                    <label for="tingkat">Tingkat Prestasi</label>
                </div>
                <div class="col-lg-8">
                    <select name="tingkat-prestasi" id="tingkat-prestasi" class="form-control">
                        <option value="">Pilih :</option>
                        <option value="Sekolah">Sekolah</option>
                        <option value="Kecamatan">Kecamatan</option>
                        <option value="Kabupaten">Kabupaten</option>
                        <option value="Wilayah">Wilayah</option>
                        <option value="Provinsi">Provinsi</option>
                        <option value="Nasional">Nasional</option>
                        <option value="Internasional">Internasional</option>
                    </select>
                    <?= form_error('tingkat-prestasi', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3 mt-1">
                    <label for="nama-prestasi">Nama Prestasi</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="nama-prestasi" placeholder="Juara 1 Pencak Silat Porda Jawa Barat" value="<?= set_value('nama-prestasi'); ?>">
                    <?= form_error('nama-prestasi', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3 mt-1">
                    <label for="tahun-prestasi">Tahun Diselenggarakan</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="tahun-prestasi" placeholder="2019" value="<?= set_value('tahun-prestasi'); ?>">
                    <?= form_error('tahun-prestasi', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3 mt-1">
                    <label for="penyelenggara">Penyelenggara</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="penyelenggara" placeholder="KONI Jawa Barat" value="<?= set_value('penyelenggara'); ?>">
                    <?= form_error('penyelenggara', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-11 text-right">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>

    </div>
</section>