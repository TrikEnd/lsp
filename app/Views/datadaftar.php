<?= $this->extend('component/layout') ?>

<?= $this->section('content') ?>

<link rel="stylesheet" href="css/stylelayout.css">

<div class="container">
    <div class="row">
        <div class="col">
            <h2>List Data Pendaftaran</h2>



            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">NIK</th>
                        <th scope="col">Lainnya</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($daftar as $d) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $d['nama']; ?></td>
                            <td><?= $d['alamat']; ?></td>
                            <td><?= $d['nik']; ?></td>
                            <td><a href="/detail/<?= $d['id']; ?>" class="btn btn-success">Detail</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <div class="pemebritahuan text-center">
                <?php if (session()->getFlashdata('pesan')) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?= session()->getFlashdata('pesan'); ?>
                    </div>

                <?php endif; ?>
            </div>


        </div>
    </div>
</div>
</div>
<?= $this->endSection() ?>