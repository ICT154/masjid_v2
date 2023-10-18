<div class="container mt-3">
    <div class="card shadow-lg container ">
        <div class="mt-3 mb-3">
            <div class="card-header">
                Info Uang Kas
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 mt-3">
                        <span class="badge text-bg-success text-justify">
                            <h5 class="mt-3">Total Masuk : Rp. <?= $this->GZL->number_format($TotalAllPemasukan, 2, ",", ".") ?></h5>
                        </span>
                    </div>
                    <div class="col-md-4 mt-3">
                        <span class="badge text-bg-danger text-justify h-100">
                            <h5 class="mt-3">Total Pengeluaran : Rp. <?= $this->GZL->number_format($TotalAllPengeluaran, 2, ",", ".") ?></h5>
                        </span>
                    </div>
                    <div class="col-md-4 mt-3">
                        <span class="badge text-bg-info text-justify">
                            <h5 class="mt-3">Total Saldo : Rp. <?= $this->GZL->number_format($TotalAllPemasukan - $TotalAllPengeluaran, 2, ",", ".") ?></h5>
                        </span>
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
                            foreach ($DataSaldo as $key) { ?>
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