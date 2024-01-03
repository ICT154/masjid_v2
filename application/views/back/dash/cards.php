<?php
$fridays = $DataJumat;
$no = 1;
foreach ($fridays as $friday) {
    $friday = $friday['tanggal'];
    $get_data = $this->db->where("tanggal", $friday)->get('t_jadwal_bulanan', 1)->row_array();
?>
    <div class="col-lg-4">
        <div class="card mt-3">
            <div class="card-header">
                Jumat Minggu Ke-<?= $no++ ?> <br> ( <?= $this->GZL->format_tanggal_indonesia($friday) ?> )

            </div>
            <div class="card-body">
                <ul class="list-group">
                    <li class="list-group-item disabled">Data</li>
                    <a class="text-decoration-none" href="<?= base_url("imam/" . $get_data['id_jadwal_bulanan']) ?>"> <?= $this->JUMAT->cekJadwalSesuaiJumat("imam", $friday) ?></a>
                    <a class="text-decoration-none" href="<?= base_url("kas/" . $get_data['id_jadwal_bulanan']) ?>"> <?= $this->JUMAT->cekJadwalSesuaiJumat("kas", $friday) ?> </a>
                    <a class="text-decoration-none" href="<?= base_url("hadist_quote/" . $get_data['id_jadwal_bulanan']) ?>"> <?= $this->JUMAT->cekJadwalSesuaiJumat("hadist_quote", $friday) ?></a>
                    <a class="text-decoration-none" href="<?= base_url("running_text/" . $get_data['id_jadwal_bulanan']) ?>"> <?= $this->JUMAT->cekJadwalSesuaiJumat("running_text", $friday) ?></a>
                    <a class="text-decoration-none" href="<?= base_url("video_display/" . $get_data['id_jadwal_bulanan']) ?>"> <?= $this->JUMAT->cekJadwalSesuaiJumat("video_display", $friday) ?></a>
                </ul>
                <button class="btn btn-danger btn-sm mt-3 btn-icon" data-id="<?= $get_data['id_jadwal_bulanan'] ?>" onclick="delete_tanggal(this)"><i class="fa fa-trash"></i></button>
            </div>
        </div>
    </div>
<?php } ?>

<div class="col-lg-4">
    <div class="card mt-3">
        <div class="card-header text-center">
            Tanggal Jumat Tidak Ada ? <br>Silahkan Tambah Disini
        </div>
        <div class="card-body">
            <label for="tanggal">Tanggal</label>
            <input type="date" name="tanggal" id="tanggal" class="form-control" required>
            <button class="btn btn-primary mt-3" id="tambah" onclick="tambah_tanggal()">Tambah</button>
        </div>
    </div>
</div>


<script>
    function delete_tanggal(x) {
        var dataid = $(x).data("id");
        var confirmxx = confirm("Apakah Anda Yakin Ingin Menghapus Tanggal Ini ?");
        if (confirmxx == false) {
            return false;
        } else {
            $.ajax({
                url: "<?= base_url("hapus-tanggal") ?>",
                type: "POST",
                data: {
                    dataid: dataid
                },
                success: function(msg) {
                    if (msg == "success") {
                        // alert("Berhasil Menghapus Tanggal");
                        location.reload();
                    } else {
                        location.reload();
                        // alert("Gagal Menghapus Tanggal");
                    }
                }
            });
        }
    }

    function tambah_tanggal() {
        var tanggal = $("#tanggal").val();
        if (tanggal == "") {
            alert("Tanggal Tidak Boleh Kosong");
            return false;
        }
        $.ajax({
            url: "<?= base_url("tambah-tanggal") ?>",
            type: "POST",
            data: {
                tanggal: tanggal
            },
            success: function(msg) {
                if (msg == "success") {
                    // alert("Berhasil Menambahkan Tanggal");
                    location.reload();
                } else {
                    location.reload();
                    // alert("Gagal Menambahkan Tanggal");
                }
            }
        });
    }
</script>