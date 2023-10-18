<?php
$saldo_akhir = ($TotalPemasukanMingguKemarin - $TotalPengeluaranMingguKemaren) + $TotalPemasukanMingguIni - $TotalPengeluaranMingguIni;
?>
<div class="container mt-3">
    <div class="card shadow-lg container ">
        <div class="mt-3 mb-3">
            <div class="card-header">
                Info Uang Kas Jumat, <?= $this->GZL->format_tanggal_indonesia($data['tanggal']) ?>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3 mt-3">
                        <div class="card text-white bg-success">
                            <div class="card-body">
                                <h5 class="card-title mt-3">Total Saldo Sebelumnya : Rp. <?= $this->GZL->number_format($TotalPemasukanMingguKemarin - $TotalPengeluaranMingguKemaren, 2, ",", ".") ?></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 mt-3">
                        <div class="card text-white bg-success">
                            <div class="card-body">
                                <h5 class="card-title mt-3">Total Masuk Minggu Ini : Rp. <?= $this->GZL->number_format($TotalPemasukanMingguIni, 2, ",", ".") ?></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 mt-3">
                        <div class="card text-white bg-danger">
                            <div class="card-body">
                                <h5 class="card-title mt-3">Total Pengeluaran Minggu Ini : Rp. <?= $this->GZL->number_format($TotalPengeluaranMingguIni, 2, ",", ".") ?></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 mt-3">
                        <div class="card text-white bg-info">
                            <div class="card-body">
                                <h5 class="card-title mt-3">Total Saldo Akhir : Rp. <?= $this->GZL->number_format($saldo_akhir, 2, ",", ".") ?></h5>
                            </div>
                        </div>
                    </div>
                </div>



                <hr>
                <button class="btn btn-success btn-sm" onclick="add_pemasukan()">Tambah Pemasukan</button>
                <button class="btn btn-danger btn-sm" onclick="add_pengeluaran()">Tambah Pengeluaran</button>
                <hr>
                <div class="table-responsive">
                    <table class="table table-striped table-responsive" id="table-kas">
                        <thead class="table table-striped">
                            <tr>
                                <th>
                                    No.
                                </th>
                                <th>
                                    Tanggal
                                </th>
                                <th>
                                    Keterangan
                                </th>
                                <th>
                                    Pemasukan
                                </th>
                                <th>
                                    Pengeluaran
                                </th>
                                <th>
                                    Saldo
                                </th>
                                <th>
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($DataSaldoMingguIni as $key) { ?>
                                <tr>
                                    <td>
                                        <?= $no ?>
                                    </td>
                                    <td>
                                        <?= $this->GZL->format_tanggal($key->tanggal) ?>
                                    </td>
                                    <td>
                                        <?= $key->ket ?>
                                    </td>
                                    <td>
                                        <?= $this->GZL->number_format($key->masuk, 2, ",", ".") ?>
                                    </td>
                                    <td>
                                        <?= $this->GZL->number_format($key->keluar, 2, ",", ".") ?>
                                    </td>
                                    <td>
                                        <?= $this->GZL->number_format($key->sisa, 2, ",", ".") ?>
                                    </td>
                                    <td>
                                        <?php
                                        if ($no == 1) { ?>
                                            <button class="btn btn-danger btn-sm" onclick="delete_saldo('<?= $key->id_saldo_kas ?>')">Hapus</button>
                                        <?php } ?>
                                        <button class="btn btn-primary btn-sm" onclick="ubah_saldo('<?= $key->id_saldo_kas ?>')">Ubah</button>
                                    </td>
                                </tr>
                            <?php
                                $no++;
                            } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>
                                    No.
                                </th>
                                <th>
                                    Tanggal
                                </th>
                                <th>
                                    Keterangan
                                </th>
                                <th>
                                    Pemasukan
                                </th>
                                <th>
                                    Pengeluaran
                                </th>
                                <th>
                                    Saldo
                                </th>
                                <th>
                                    Aksi
                                </th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


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

                    <input type="hidden" name="id_jadwal_bulanan" value="<?= isset($data['id_jadwal_bulanan']) ? $data['id_jadwal_bulanan'] : '' ?>">

                    <div class="row g-3 align-items-center">
                        <div class="col-auto">
                            <label class="col-form-label"></label>
                        </div>
                        <div class="col-2">
                            <label class="col-form-label">Tanggal</label>
                        </div>
                        <div class="col-auto">
                            <input type="date" id="TanggalPemasukan" name="TanggalPemasukan" class="form-control" value="<?= $data['tanggal'] ?>" readonly>
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

                    <input type="hidden" name="id_jadwal_bulanan" value="<?= isset($data['id_jadwal_bulanan']) ? $data['id_jadwal_bulanan'] : '' ?>">


                    <div class="row g-3 align-items-center">
                        <div class="col-auto">
                            <label class="col-form-label"></label>
                        </div>
                        <div class="col-2">
                            <label class="col-form-label">Tanggal</label>
                        </div>
                        <div class="col-auto">
                            <input type="date" id="TanggalPengeluaran" name="TanggalPengeluaran" class="form-control" value="<?= $data['tanggal'] ?>" readonly>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/autonumeric/4.10.0/autoNumeric.min.js" integrity="sha512-IBnOW5h97x4+Qk4l3EcqmRTFKTgXTd4HGiY3C/GJKT5iJeJci9dgsFw4UAoVfi296E01zoDNb3AZsFrvcJJvPA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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