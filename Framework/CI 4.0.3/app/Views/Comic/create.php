<?= $this->extend('Layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="my-3">Form tambah Data Komik</h2>

            <form action="/Comic/save" method="POST">
                <?= csrf_field(); ?>
                <div class="form-group row">
                    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                        <input type="text" name="judul" autofocus class="form-control 
                        <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="inputEmail3" value="<?= old('judul'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('judul'); ?>
                        </div>
                    </div>
                </div>


                <div class="form-group row">
                    <label for="judul" class="col-sm-2 col-form-label">penulis</label>
                    <div class="col-sm-10">
                        <input type="text" name="penulis" autofocus class="form-control
                        <?= ($validation->hasError('penulis')) ? 'is-invalid' : ''; ?>" id="inputEmail3" value="<?= old('penulis'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('penulis'); ?>
                        </div>

                    </div>
                </div>

                <div class="form-group row">
                    <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
                    <div class="col-sm-10">
                        <input type="text" name="penerbit" class="form-control <?= ($validation->hasError('penerbit')) ? 'is-invalid' : ''; ?>" value=" <?= old('penerbit'); ?>" id="inputPassword3">
                        <div class="invalid-feedback">
                            <?= $validation->getError('penerbit'); ?>
                        </div>
                    </div>
                </div>


                <div class="form-group row">
                    <label for="penulis" class="col-sm-2 col-form-label">Sampul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="sampul" value="<?= old('sampul'); ?>" id="inputPassword3">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Tambah data</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>