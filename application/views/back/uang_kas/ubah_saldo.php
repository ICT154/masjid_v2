<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">

<div class="row g-3 align-items-center mt-3">
    <div class="col-auto">
        <label class="col-form-label"></label>
    </div>
    <div class="col-2">
        <label class="col-form-label">Ket</label>
    </div>
    <div class="col-auto">
        <textarea name="KetUbah" id="KetUbah" class="form-control" required autocomplete="off"><?= $data_kas['ket'] ?></textarea>
    </div>
</div>

<div class="row g-3 align-items-center mt-3">
    <div class="col-auto">
        <label class="col-form-label"></label>
    </div>
    <div class="col-2">
        <label class="col-form-label">Nominal Pemasukan</label>
    </div>
    <div class="col-auto">
        <input type="text" id="NominalPemasukanUbah" name="NominalPemasukanUbah" class="form-control" required autocomplete="off" value="<?= $data_kas['masuk'] ?>">
    </div>
</div>


<div class="row g-3 align-items-center mt-3">
    <div class="col-auto">
        <label class="col-form-label"></label>
    </div>
    <div class="col-2">
        <label class="col-form-label">Nominal Pengeluaran</label>
    </div>
    <div class="col-auto">
        <input type="text" id="NominalPengeluaranUbah" name="NominalPengeluaranUbah" class="form-control" required autocomplete="off" value="<?= $data_kas['keluar'] ?>">
    </div>
</div>

<input type="hidden" id="id_kas_ubah" name="id_kas_ubah" value="<?= $data_kas['id_saldo_kas'] ?>">

<script>
    new AutoNumeric('#NominalPengeluaranUbah', {
        currencySymbol: 'Rp. ',
        decimalCharacter: ',',
        digitGroupSeparator: '.',
    });
    new AutoNumeric('#NominalPemasukanUbah', {
        currencySymbol: 'Rp. ',
        decimalCharacter: ',',
        digitGroupSeparator: '.',
    });
</script>