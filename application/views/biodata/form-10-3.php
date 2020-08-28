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

            <h5 class="wali-head">Data wali</h5>
            <div class="row mt-3">
                <div class="col-lg-3 mt-1">
                    <label for="nama-wali">Nama Lengkap</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" name="nama-wali" class="form-control" value="<?= set_value('nama-wali'); ?>">
                    <?= form_error('nama-wali', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3 mt-1">
                    <label for="nik-wali">NIK wali</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" name="nik-wali" class="form-control" placeholder="3215XXXXXXXXXXXX" value="<?= set_value('nik-wali'); ?>">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3 mt-1">
                    <label for="tahun-wali">Tahun Lahir wali</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" name="tahun-wali" class="form-control" placeholder="1980" value="<?= set_value('tahun-wali'); ?>">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3 mt-1">
                    <label for="pendidikan-wali">Pendidikan Terakhir wali</label>
                </div>
                <div class="col-lg-8">
                    <select name="sekolah-wali" id="sekolah-wali" class="form-control">
                        <option value="">Pilih :</option>
                        <?php foreach ($pendidikan as $sk) : ?>
                            <option value="<?= $sk['sekolah']; ?>"><?= $sk['sekolah']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3 mt-1">
                    <label for="pekerjaan-wali">Pekerjaan wali</label>
                </div>
                <div class="col-lg-8">
                    <select name="job-wali" id="job-wali" class="form-control">
                        <option value="">Pilih :</option>
                        <?php foreach ($pekerjaan as $job) : ?>
                            <option value="<?= $job['pekerjaan']; ?>"><?= $job['pekerjaan']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3 mt-1">
                    <label for="penghasilan-wali">Penghasilan wali</label>
                </div>
                <div class="col-lg-8">
                    <select name="penghasilan-wali" id="penghasilan-wali" class="form-control">
                        <option value="">Pilih :</option>
                        <?php foreach ($penghasilan as $income) : ?>
                            <option value="<?= $income['penghasilan']; ?>"><?= $income['penghasilan']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="row mt-3 mb-3">
                <div class="col-lg-3 mt-1">
                    <label for="kebutuhan-wali">Kebutuhan Khusus wali</label>
                </div>
                <div class="col-lg-8">
                    <select name="kebutuhan-wali" id="kebutuhan-wali" class="form-control">
                        <option value="">Pilih :</option>
                        <?php foreach ($kebutuhan as $butuh) : ?>
                            <option value="<?= $butuh['nama-kebutuhan']; ?>"><?= $butuh['nama-kebutuhan']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-lg-3 mt-1">
                    <label for="ponsel-wali">Nomor HP wali</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="hp-wali" value="<?= set_value('hp-wali'); ?>">
                </div>
            </div>

            <div class="row">
                <div class="col-lg-11 text-right">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </div>

        </div>

    </form>
</section>