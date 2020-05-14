<div class="container">

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['mhs']['nama']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $data['mhs']['jurusan']; ?></h6>
            <p class="card-text"><?= $data['mhs']['angkatan']; ?></p>
            <a href="<?= BASEURL ?>/mahasiswa" class="badge badge-primary">kembali</a>
        </div>
    </div>
</div>