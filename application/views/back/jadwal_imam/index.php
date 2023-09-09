<div class="container mt-3">
    <div class="card shadow-lg container ">
        <div class="mt-3 mb-3">
            <div class="card-header">
                Info Imam & Khotib
            </div>
            <div class="card-body">

                <hr>
                <button class="btn btn-success btn-sm" onclick="add_imam()">Tambah Imam & Khotib</button>
                <hr>
                <div class="table-responsive">
                    <table class="table table-striped table-responsive" id="table-imam">
                        <thead class="table table-striped">
                            <tr>
                                <th>
                                    No.
                                </th>
                                <th>
                                    Tanggal
                                </th>
                                <th>
                                    Imam
                                </th>
                                <th>
                                    Khotib
                                </th>
                                <th>
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($DataImam as $key) : ?>
                                <tr>
                                    <td>
                                        <?= $no++; ?>
                                    </td>
                                    <td>
                                        <?= $this->GZL->tgl_indo($key['tanggal']); ?>
                                    </td>
                                    <td>
                                        <?= $key['imam']; ?>
                                    </td>
                                    <td>
                                        <?= $key['khatib']; ?>
                                    </td>
                                    <td>
                                        <button class="btn btn-danger btn-sm" onclick="delete_imam('<?= $key['id_jadwal']; ?>')">Hapus</button>

                                    </td>
                                </tr>
                            <?php endforeach; ?>
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
                                    Imam
                                </th>
                                <th>
                                    Khotib
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