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

        <div class="row mt-3">
            <div class="col-lg-12">
                <h5 class="periodik">DATA PERIODIK SISWA</h5>
            </div>
        </div>
        <form action="" method="post">

            <div class="row mt-3">
                <div class="col-lg-4 mt-1">
                    <label for="email">Email</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="email" placeholder="namaanda@email.com" value="<?= set_value('email'); ?>">
                    <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-4 mt-1">
                    <label for="tinggi">Tinggi Badan (cm)</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="tinggi-badan" placeholder="170" value="<?= set_value('tinggi-badan'); ?>">
                    <?= form_error('tinggi-badan', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-4 mt-1">
                    <label for="berat">Berat Badan (kg)</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="berat-badan" placeholder="50" value="<?= set_value('berat-badan'); ?>">
                    <?= form_error('berat-badan', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-4 mt-1">
                    <label for="lingkar">Lingkar Kepala</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="lingkar-kepala" placeholder="50" value="<?= set_value('lingkar-kepala'); ?>">
                    <?= form_error('lingkar-kepala', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-4 mt-1">
                    <label for="jarak">Jarak rumah ke sekolah (km)</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="jarak-rumah" placeholder="2" value="<?= set_value('jarak-rumah'); ?>">
                    <?= form_error('jarak-rumah', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-4 mt-1">
                    <label for="waktu">Waktu tempuh rumah ke sekolah (menit)</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="waktu-tempuh" placeholder="15" value="<?= set_value('waktu-tempuh'); ?>">
                    <?= form_error('waktu-tempuh', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-4 mt-1">
                    <label for="anak">Anak keberapa</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="anak-ke" placeholder="1" value="<?= set_value('anak-ke'); ?>">
                    <?= form_error('anak-ke', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-4 mt-1">
                    <label for="saudara">Jumlah saudara kandung</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="saudara" placeholder="2" value="<?= set_value('saudara'); ?>">
                    <?= form_error('saudara', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-12 text-right">
                    <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                </div>
            </div>
        </form>

    </div>
</section>