<div class="container mt-3">
    <div class="card shadow-lg container ">
        <div class="mt-3 mb-3">
            <div class="card-header">
                Data Hadist / Quotes / Video Jumat, <?= $this->GZL->format_tanggal_indonesia($data['tanggal']) ?>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="pilihan">Pilihan :</label>
                    <select class="form-select" aria-label="Pilihan" id="pilihan">
                        <option value="acak" selected>Acak</option>
                        <option value="spesifik">Spesifik</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="nomor_hadis">Nomor Hadis :</label>
                    <input type="number" class="form-control" id="nomor_hadis" placeholder="Masukkan nomor hadis">
                </div>
                <div class="mb-3">
                    <label for="">Ambil Hadist Dari : </label>
                    <div class="btn-group d-flex flex-wrap" role="group" aria-label="Ambil Hadist Dari">
                        <button type="button" class="btn btn-outline-primary btn-sm mb-2" onclick="ambilHadist('muslim')">HR. Muslim</button>
                        <button type="button" class="btn btn-outline-primary btn-sm mb-2" onclick="ambilHadist('bukhari')">HR. Bukhari</button>
                        <button type="button" class="btn btn-outline-primary btn-sm mb-2" onclick="ambilHadist('abu-daud')">HR. Abu Daud</button>
                        <button type="button" class="btn btn-outline-primary btn-sm mb-2" onclick="ambilHadist('tirmidzi')">HR. Tirmidzi</button>
                        <button type="button" class="btn btn-outline-primary btn-sm mb-2" onclick="ambilHadist('ibnu-majah')">HR. Ibnu Majah</button>
                        <button type="button" class="btn btn-outline-primary btn-sm mb-2" onclick="ambilHadist('ahmad')">HR. Ahmad</button>
                        <button type="button" class="btn btn-outline-primary btn-sm mb-2" onclick="ambilHadist('darimi')">HR. Darimi</button>
                        <button type="button" class="btn btn-outline-primary btn-sm mb-2" onclick="ambilHadist('nasai')">HR. Nasai</button>
                        <button type="button" class="btn btn-outline-primary btn-sm mb-2" onclick="ambilHadist('malik')">HR. Malik</button>
                    </div>
                </div>

                <hr>
                <form action="<?= base_url("save-hadist-quote") ?>" method="post">
                    <input type="hidden" name="id_jadwal_bulanan" value="<?= isset($data['id_jadwal_bulanan']) ? $data['id_jadwal_bulanan'] : '' ?>">
                    <input type="hidden" name="tanggal" value="<?= isset($data['tanggal']) ? $data['tanggal'] : '' ?>">



                    <label for="teks_atas">Teks Atas</label>
                    <textarea name="teks_atas" id="teks_atas" cols="30" rows="10" class="form-control"></textarea>


                    <br>

                    <label for="teks_tengah">Teks Tengah</label>
                    <textarea name="teks_tengah" id="teks_tengah" cols="30" rows="10" class="form-control"></textarea>

                    <br>

                    <label for="teks_bawah">Teks Bawah</label>
                    <input type="text" class="form-control" name="teks_bawah" id="teks_bawah" required value="">

                    <button class="btn btn-outline-success mt-2"> <i class="fa-solid fa-floppy-disk"></i> Simpan</button>
                </form>


                <div class="mt-3">
                    <div class="row">
                        <?php foreach ($datahadist as $key) :
                            $teks = explode("||", $key->konten);
                        ?>
                            <div class="col mb-4">
                                <div class="card h-100">
                                    <div class="card-header">
                                        <textarea name="" id="" class="form-control" readonly> <?= $teks['0'] ?></textarea>
                                    </div>
                                    <div class="card-body">
                                        <textarea name="" id="" class="form-control" readonly> <?= $teks['1'] ?></textarea>
                                    </div>
                                    <div class="card-footer d-flex justify-content-between align-items-center">
                                        <span><?= $teks['2'] ?></span>
                                        <a href="<?= base_url("hapus-hadist/" . $key->id_hadist_quote) ?>" class="btn btn-sm btn-outline-danger"">
                                            <i class=" fa-solid fa-trash"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>

<script>
    function ambilHadist(sumber) {
        var summber = sumber;
        var pilihan = $("#pilihan").val();
        var nomor = $("#nomor_hadis").val();
        var nomoracak = Math.floor(Math.random() * 1000) + 1;

        if (pilihan == "spesifik") {
            if (nomor == "") {
                alert("Nomor hadis tidak boleh kosong");
                return false;
            }
            $.ajax({
                url: 'https://api.hadith.gading.dev/books/' + sumber + '/' + nomor,
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    if (response.error === false) {
                        $("#teks_atas").val(response.data.contents.arab);
                        $("#teks_tengah").val(response.data.contents.id);
                        $("#teks_bawah").val(response.message);
                    } else {
                        console.error("Terjadi kesalahan dalam memperoleh data hadis.");
                    }
                },
                error: function(error) {
                    console.log('Error:', error);
                }
            });
        } else {
            $.ajax({
                url: 'https://api.hadith.gading.dev/books/' + sumber + '/' + nomoracak,
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    if (response.error === false) {
                        $("#teks_atas").val(response.data.contents.arab);
                        $("#teks_tengah").val(response.data.contents.id);
                        $("#teks_bawah").val(response.message);
                    } else {
                        console.error("Terjadi kesalahan dalam memperoleh data hadis.");
                    }
                },
                error: function(error) {
                    console.log('Error:', error);
                }
            });
        }
    }
</script>