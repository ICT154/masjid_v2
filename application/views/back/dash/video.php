<div class="container mt-3">
    <div class="card shadow-lg container ">
        <div class="mt-3 mb-3">
            <div class="card-header">
                Data Video Display Jumat, <?= $this->GZL->format_tanggal_indonesia($data['tanggal']) ?>
            </div>
            <div class="card-body">
                <form action="<?= base_url("save-video-display") ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id_jadwal_bulanan" value="<?= isset($data['id_jadwal_bulanan']) ? $data['id_jadwal_bulanan'] : '' ?>">
                    <input type="hidden" name="tanggalVideoDisplay" value="<?= isset($data['tanggal']) ? $data['tanggal'] : '' ?>">

                    <label for="videoDisplay">Video Display</label>
                    <input type="file" class="form-control" name="videoDisplay" required value="" autocomplete="off">
                    <br>

                    <button class="btn btn-outline-success mt-2"> <i class="fa-solid fa-floppy-disk"></i> Simpan</button>
                </form>



                <?php foreach ($datavideo as $key) : ?>
                    <div class="mt-3">
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="<?= base_url("storage/uploads_docs/" . $key->nama_file) ?>" allowfullscreen></iframe>
                                        </div>
                                        <form action="<?= base_url('hapus_video_display/' . $key->id_video_display) ?>" method="post">
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