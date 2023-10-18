<div class="container mt-3">
    <div class="card shadow-lg container ">
        <div class="mt-3 mb-3">
            <div class="card-header">
                Data Running Text Jumat, <?= $this->GZL->format_tanggal_indonesia($data['tanggal']) ?>
            </div>
            <div class="card-body">
                <form action="<?= base_url("save-running-text") ?>" method="post">
                    <input type="hidden" name="id_jadwal_bulanan" value="<?= isset($data['id_jadwal_bulanan']) ? $data['id_jadwal_bulanan'] : '' ?>">
                    <input type="hidden" name="tanggalimam" value="<?= isset($data['tanggal']) ? $data['tanggal'] : '' ?>">
                    <label for="teks">Teks</label>
                    <input type="text" class="form-control" name="teks" required value="<?= isset($dataRunningTeks['isi']) ? $dataRunningTeks['isi'] : '' ?>" autocomplete="off">
                    <br>

                    <button class="btn btn-outline-success mt-2"> <i class="fa-solid fa-floppy-disk"></i> Simpan</button>
                </form>


            </div>
        </div>
    </div>
</div>