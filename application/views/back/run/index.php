<div class="container mt-3">
    <div class="card shadow-lg container ">
        <div class="mt-3 mb-3">
            <div class="card-header">
                Info Running Text
            </div>
            <div class="card-body">

                <hr>
                <form action="<?= base_url("running-text-sv") ?>" method="post">
                    <div class="row">
                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                        <div class="col">
                            <input type="text" class="form-control" name="running_teks" id="running_teks" autocomplete="off" value='<?= $DataRunningText['isi'] ?>'>
                        </div>
                        <div class="col">
                            <button class="btn btn-success btn-sm" type="submit">Tambah Running Text</button>
                        </div>

                    </div>
                </form>
                <!-- <button class="btn btn-success btn-sm" onclick="add_imam()">Tambah Imam & Khotib</button> -->
                <hr>

            </div>
        </div>
    </div>
</div>