<!-- Modal -->
<div class="modal fade" id="modal_pemasukan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Form Penambahan Pemasukan Kas</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url("pemasukan-kas-sv") ?>" class="form-horizontal mt-3 mb-3" method="post">
                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">

                    <div class="row g-3 align-items-center">
                        <div class="col-auto">
                            <label class="col-form-label"></label>
                        </div>
                        <div class="col-2">
                            <label class="col-form-label">Tanggal</label>
                        </div>
                        <div class="col-auto">
                            <input type="date" id="TanggalPemasukan" name="TanggalPemasukan" class="form-control">
                        </div>
                    </div>

                    <div class="row g-3 align-items-center mt-3">
                        <div class="col-auto">
                            <label class="col-form-label"></label>
                        </div>
                        <div class="col-2">
                            <label class="col-form-label">Ket</label>
                        </div>
                        <div class="col-auto">
                            <textarea name="KetPemasukan" id="KetPemasukan" class="form-control" required autocomplete="off"></textarea>
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
                            <input type="text" id="NominalPemasukan" name="NominalPemasukan" class="form-control" required autocomplete="off">
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="modal_pengeluaran" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Form Pengeluaran Pemasukan Kas</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url("pengeluaran-kas-sv") ?>" class="form-horizontal mt-3 mb-3" method="post">
                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">

                    <div class="row g-3 align-items-center">
                        <div class="col-auto">
                            <label class="col-form-label"></label>
                        </div>
                        <div class="col-2">
                            <label class="col-form-label">Tanggal</label>
                        </div>
                        <div class="col-auto">
                            <input type="date" id="TanggalPengeluaran" name="TanggalPengeluaran" class="form-control">
                        </div>
                    </div>

                    <div class="row g-3 align-items-center mt-3">
                        <div class="col-auto">
                            <label class="col-form-label"></label>
                        </div>
                        <div class="col-2">
                            <label class="col-form-label">Ket</label>
                        </div>
                        <div class="col-auto">
                            <textarea name="KetPemasukan" id="KetPemasukan" class="form-control" required autocomplete="off"></textarea>
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
                            <input type="text" id="NominalPengeluaran" name="NominalPengeluaran" class="form-control" required autocomplete="off">
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal_ubah_saldo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Form Ubah Kas</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url("ubah-saldo-sv") ?>" method="post">
                    <div id="res-ubah-saldo"></div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    function delete_saldo(x) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "<?= base_url("delete-saldo") ?>",
                    type: "post",
                    data: {
                        x
                    },
                    success: function(msg) {
                        $("#res-ubah-saldo").html(msg);
                    }
                });
                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                )
                location.reload();
            }
        })
    }

    let table = new DataTable('#table-kas');

    function ubah_saldo(x) {
        $("#modal_ubah_saldo").modal("show");
        $.ajax({
            url: "<?= base_url("ubah-saldo") ?>",
            type: "post",
            data: {
                x
            },
            success: function(msg) {
                $("#res-ubah-saldo").html(msg);
            }
        });
    }

    function add_pemasukan() {
        $("#modal_pemasukan").modal("show");
    }

    function add_pengeluaran() {
        $("#modal_pengeluaran").modal("show");
    }

    new AutoNumeric('#NominalPemasukan', {
        currencySymbol: 'Rp. ',
        decimalCharacter: ',',
        digitGroupSeparator: '.',
    });

    new AutoNumeric('#NominalPengeluaran', {
        currencySymbol: 'Rp. ',
        decimalCharacter: ',',
        digitGroupSeparator: '.',
    });
</script>