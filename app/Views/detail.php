<?= $this->extend('component/layout') ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Detail Dari <?= $daftar['nama']; ?></h1>

            <ul>
                <li><?= $daftar['nama']; ?></li>
                <li><?= $daftar['alamat']; ?></li>
                <li><?= $daftar['nik']; ?></li>
                <li><?= $daftar['telepon']; ?></li>
                <li><?= $daftar['email']; ?></li>
                <li><?= $daftar['updated_at']; ?></li>
                <li><?= $daftar['created_at']; ?></li>
            </ul>

            <a href="/edit/<?= $daftar['id'] ?>" class="btn btn-warning">Edit</a>

            <form action="/delete/<?= $daftar['id'] ?>" method="post" class="d-inline">
                <?php csrf_field(); ?>
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-danger" onclick="return confirm('yakin ingin menghapus data ini?')">Delete</button>
            </form>

            <br>
            <a href="/datadaftar" class="btn btn-primary mt-3">Kembali ke Data Daftar</a>
        </div>
    </div>
</div>
</div>
<?= $this->endSection() ?>