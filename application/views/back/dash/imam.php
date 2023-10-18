<div class="container mt-3">
    <div class="card shadow-lg container ">
        <div class="mt-3 mb-3">
            <div class="card-header">
                Data Imam & Khotib Jumat, <?= $this->GZL->format_tanggal_indonesia($data['tanggal']) ?>
            </div>
            <div class="card-body">
                <form action="<?= isset($data['id_jadwal_bulanan']) ? base_url("tambah-imam") : '' ?>" method="post">
                    <input type="hidden" name="id_jadwal_bulanan" value="<?= isset($data['id_jadwal_bulanan']) ? $data['id_jadwal_bulanan'] : '' ?>">
                    <input type="hidden" name="tanggalimam" value="<?= isset($data['tanggal']) ? $data['tanggal'] : '' ?>">
                    <label for="imam">Imam</label>
                    <input type="text" class="form-control" name="imam" required value="<?= isset($dataimam['imam']) ? $dataimam['imam'] : '' ?>" autocomplete="off">
                    <br>
                    <label for="khotib">Khotib</label>
                    <input type="text" class="form-control" name="khotib" required value="<?= isset($dataimam['khatib']) ? $dataimam['khatib'] : '' ?>" autocomplete="off">
                    <button class="btn btn-outline-success mt-2"> <i class="fa-solid fa-floppy-disk"></i> Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>