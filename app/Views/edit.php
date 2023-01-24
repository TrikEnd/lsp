<?= $this->extend('component/layout') ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-3">Edit dari <?= $daftar['nama'] ?></h2>

            <form action="/daftar/update/<?= $daftar['id'] ?>" method="post" class="mb-3 mt-3">
                <?php csrf_field(); ?>
                <input type="hidden" name="" value="<?= $daftar['id'] ?>">
                <div class="row mb-3">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $daftar['nama'] ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $daftar['alamat'] ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nik" name="nik" value="<?= $daftar['nik'] ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="telepon" class="col-sm-2 col-form-label">Telepon</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="telepon" name="telepon" value="<?= $daftar['telepon'] ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email" value="<?= $daftar['email'] ?>">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" onclick="return confirm('Pastikan data yang anda masukkan sudah benar!, jika sudah klik oke')">Edit</button>
            </form>

        </div>
    </div>
</div>
</div>
<?= $this->endSection() ?>