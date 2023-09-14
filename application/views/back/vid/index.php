<div class="container mt-3">
    <div class="card shadow-lg container ">
        <div class="mt-3 mb-3">
            <div class="card-header">
                Video Display Setting
            </div>
            <div class="card-body">

                <hr>
                <form id="upload-form" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                        <div class="col">
                            <input type="file" class="form-control" name="video_setting" id="video_setting" autocomplete="off" value=''>
                        </div>
                        <div class="col">
                            <button class="btn btn-success btn-sm" type="submit">Ubah Video Display</button>
                        </div>

                    </div>
                </form>
                <div class="progress mt-3" id="progress-upload-video" style="display: none;">
                    <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="mt-3" id="result-upload-video"></div>
                <!-- <button class="btn btn-success btn-sm" onclick="add_imam()">Tambah Imam & Khotib</button> -->
                <hr>

            </div>
        </div>
    </div>
</div>