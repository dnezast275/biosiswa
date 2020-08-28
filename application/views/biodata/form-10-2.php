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

            <h5 class="ibu-head">Data ibu</h5>
            <div class="row mt-3">
                <div class="col-lg-3 mt-1">
                    <label for="nama-ibu">Nama Lengkap</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" name="nama-ibu" class="form-control" value="<?= set_value('nama-ibu'); ?>">
                    <?= form_error('nama-ibu', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3 mt-1">
                    <label for="nik-ibu">NIK ibu</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" name="nik-ibu" class="form-control" placeholder="3215XXXXXXXXXXXX" value="<?= set_value('nik-ibu'); ?>">
                    <?= form_error('nik-ibu', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3 mt-1">
                    <label for="tahun-ibu">Tahun Lahir ibu</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" name="tahun-ibu" class="form-control" placeholder="1980" value="<?= set_value('tahun-ibu'); ?>">
                    <?= form_error('tahun-ibu', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3 mt-1">
                    <label for="pendidikan-ibu">Pendidikan Terakhir ibu</label>
                </div>
                <div class="col-lg-8">
                    <select name="sekolah-ibu" id="sekolah-ibu" class="form-control">
                        <option value="">Pilih :</option>
                        <?php foreach ($pendidikan as $sk) : ?>
                            <option value="<?= $sk['sekolah']; ?>"><?= $sk['sekolah']; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <?= form_error('sekolah-ibu', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3 mt-1">
                    <label for="pekerjaan-ibu">Pekerjaan ibu</label>
                </div>
                <div class="col-lg-8">
                    <select name="job-ibu" id="job-ibu" class="form-control">
                        <option value="">Pilih :</option>
                        <?php foreach ($pekerjaan as $job) : ?>
                            <option value="<?= $job['pekerjaan']; ?>"><?= $job['pekerjaan']; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <?= form_error('job-ibu', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3 mt-1">
                    <label for="penghasilan-ibu">Penghasilan ibu</label>
                </div>
                <div class="col-lg-8">
                    <select name="penghasilan-ibu" id="penghasilan-ibu" class="form-control">
                        <option value="">Pilih :</option>
                        <?php foreach ($penghasilan as $income) : ?>
                            <option value="<?= $income['penghasilan']; ?>"><?= $income['penghasilan']; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <?= form_error('penghasilan-ibu', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>

            <div class="row mt-3 mb-3">
                <div class="col-lg-3 mt-1">
                    <label for="kebutuhan-ibu">Kebutuhan Khusus ibu</label>
                </div>
                <div class="col-lg-8">
                    <select name="kebutuhan-ibu" id="kebutuhan-ibu" class="form-control">
                        <option value="">Pilih :</option>
                        <?php foreach ($kebutuhan as $butuh) : ?>
                            <option value="<?= $butuh['nama-kebutuhan']; ?>"><?= $butuh['nama-kebutuhan']; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <?= form_error('kebutuhan-ibu', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-lg-3 mt-1">
                    <label for="ponsel-ibu">Nomor HP Ibu</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="hp-ibu" value="<?= set_value('hp-ibu'); ?>">
                    <?= form_error('hp-ibu', '<small class="text-danger">', '</small>'); ?>
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