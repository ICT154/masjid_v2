<div class="container mt-3">
    <div class="card shadow-lg container ">
        <div class="mt-3 mb-3">
            <div class="card-header">
                Data Background
            </div>
            <div class="card-body">
                <form action="<?= base_url("save-background-image") ?>" method="post" enctype="multipart/form-data">
                    <label for="videoDisplay">Gambar</label>
                    <input type="file" class="form-control" name="gambar" id="gambar" required value="" autocomplete="off">
                    <br>

                    <button class="btn btn-outline-success mt-2"> <i class="fa-solid fa-floppy-disk"></i> Simpan</button>
                </form>

                <?php foreach ($dataBackground as $key) : ?>
                    <div class="mt-3">
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <img src="<?= base_url('storage/uploads_docs/' . $key->nama_file) ?>" class="img-fluid" alt="">
                                        </div>
                                        <!-- <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="<?= base_url('storage/uploads_docs/' . $key->nama_file) ?>" allowfullscreen></iframe>
                                        </div> -->
                                        <form action="<?= base_url('hapus_background/' . $key->id_background) ?>" method="post">
                                            <button type="submit" class="btn btn-danger mt-2">Hapus</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>




            </div>
        </div>
    </div>
</div>