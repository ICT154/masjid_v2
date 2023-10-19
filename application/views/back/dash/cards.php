<?php
$fridays = $DataJumat;
$no = 1;
foreach ($fridays as $friday) {
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
                    <!-- <a class="text-decoration-none" href="<?= base_url("video_display/" . $get_data['id_jadwal_bulanan']) ?>"> <?= $this->JUMAT->cekJadwalSesuaiJumat("video_display", $friday) ?></a> -->
                </ul>
            </div>
        </div>
    </div>
<?php } ?>