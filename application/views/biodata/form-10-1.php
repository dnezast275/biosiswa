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
                    <?= $subjudul; ?><br>
                    SMA NEGERI 1 RAWAMERTA <br>
                    TAHUN PELAJARAN 2020/2021
                </h4>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <form action="" method="post">
        <div class="container-xl">
            <input type="hidden" name="id">

            <h5 class="ayah-head">Data Ayah</h5>
            <div class="row mt-3">
                <div class="col-lg-3 mt-1">
                    <label for="nama-ayah">Nama Lengkap</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" name="nama-ayah" class="form-control" value="<?= set_value('nama-ayah'); ?>">
                    <?= form_error('nama-ayah', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3 mt-1">
                    <label for="nik-ayah">NIK Ayah</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" name="nik-ayah" class="form-control" placeholder="3215XXXXXXXXXXXX" value="<?= set_value('nik-ayah'); ?>">
                    <?= form_error('nik-ayah', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3 mt-1">
                    <label for="tahun-ayah">Tahun Lahir Ayah</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" name="tahun-ayah" class="form-control" placeholder="1980" value="<?= set_value('tahun-ayah'); ?>">
                    <?= form_error('tahun-ayah', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3 mt-1">
                    <label for="pendidikan-ayah">Pendidikan Terakhir Ayah</label>
                </div>
                <div class="col-lg-8">
                    <select name="sekolah-ayah" id="sekolah-ayah" class="form-control">
                        <option value="">Pilih :</option>
                        <?php foreach ($pendidikan as $sk) : ?>
                            <option value="<?= $sk['sekolah']; ?>"><?= $sk['sekolah']; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <?= form_error('sekolah-ayah', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3 mt-1">
                    <label for="pekerjaan-ayah">Pekerjaan Ayah</label>
                </div>
                <div class="col-lg-8">
                    <select name="job-ayah" id="job-ayah" class="form-control">
                        <option value="">Pilih :</option>
                        <?php foreach ($pekerjaan as $job) : ?>
                            <option value="<?= $job['pekerjaan']; ?>"><?= $job['pekerjaan']; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <?= form_error('job-ayah', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3 mt-1">
                    <label for="penghasilan-ayah">Penghasilan Ayah</label>
                </div>
                <div class="col-lg-8">
                    <select name="penghasilan-ayah" id="penghasilan-ayah" class="form-control">
                        <option value="">Pilih :</option>
                        <?php foreach ($penghasilan as $income) : ?>
                            <option value="<?= $income['penghasilan']; ?>"><?= $income['penghasilan']; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <?= form_error('penghasilan-ayah', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>

            <div class="row mt-3 mb-3">
                <div class="col-lg-3 mt-1">
                    <label for="kebutuhan-ayah">Kebutuhan Khusus Ayah</label>
                </div>
                <div class="col-lg-8">
                    <select name="kebutuhan-ayah" id="kebutuhan-ayah" class="form-control">
                        <option value="">Pilih :</option>
                        <?php foreach ($kebutuhan as $butuh) : ?>
                            <option value="<?= $butuh['nama-kebutuhan']; ?>"><?= $butuh['nama-kebutuhan']; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <?= form_error('kebutuhan-ayah', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-lg-3 mt-1">
                    <label for="ponsel-ayah">Nomor HP Ayah</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="hp-ayah" value="<?= set_value('hp-ayah'); ?>">
                    <?= form_error('hp-ayah', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-11 text-right">
                    <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                </div>
            </div>

        </div>

    </form>
</section>