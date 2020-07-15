<?= $this->extend('Layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">Detail Komik</h2>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="/Image/<?= $komik['sampul']; ?>" width="50px" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $komik['judul']; ?></h5>
                            <p class="card-text"><b>Penulis :</b> <?= $komik['penulis']; ?></p>

                            <p class="card-text"><small class="text-muted"><b>Penerbit : </b><?= $komik['penerbit']; ?></small></p>

                            <a href="/Comic/edit/<?= $komik['slug']; ?>" class="btn btn-success">Edit</a>

                            <form action="/Comic/<?= $komik['Id']; ?>" class="d-inline" method="POST">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">

                                <button type="submit" class="btn btn-danger" onclick="return confirm(' apakah anda yakin ?')">Delete</button>
                            </form>

                            <br>
                            <br>
                            <a href="/Comic" class="btn btn-Danger">Kembali ke daftar Komik</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>