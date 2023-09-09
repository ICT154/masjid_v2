<div class="modal fade" id="modal_imam" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Form Penambahan Data Imam & Khotib</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url("tambah-imam") ?>" class="form-horizontal mt-3 mb-3" method="post">
                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">

                    <div class="row g-3 align-items-center">
                        <div class="col-auto">
                            <label class="col-form-label"></label>
                        </div>
                        <div class="col-2">
                            <label class="col-form-label">Tanggal</label>
                        </div>
                        <div class="col-auto">
                            <input type="date" id="TanggalImam" name="TanggalImam" class="form-control">
                        </div>
                    </div>
                    <div class="row g-3 align-items-center mt-3">
                        <div class="col-auto">
                            <label class="col-form-label"></label>
                        </div>
                        <div class="col-2">
                            <label class="col-form-label">Imam</label>
                        </div>
                        <div class="col-auto">
                            <input type="text" id="Imam" name="Imam" class="form-control" required autocomplete="off">
                        </div>
                    </div>

                    <div class="row g-3 align-items-center mt-3">
                        <div class="col-auto">
                            <label class="col-form-label"></label>
                        </div>
                        <div class="col-2">
                            <label class="col-form-label">Khotib</label>
                        </div>
                        <div class="col-auto">
                            <input type="text" id="Khotib" name="Khotib" class="form-control" required autocomplete="off">
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
<script>
    function delete_imam(x) {
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
                    url: "<?= base_url("delete-imam") ?>",
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

    let table = new DataTable('#table-imam');

    function add_imam() {
        $("#modal_imam").modal("show");
    }
</script>