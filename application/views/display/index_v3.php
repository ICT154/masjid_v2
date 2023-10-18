<div id="masjidnuruliman">
    <div class="wm__ticker">
        <div class="acmeticker-wrap mb-3" style="position: relative;">
            <marquee behavior="" direction="" class="mt-3"></marquee>

        </div>
    </div>
    <div class="masjid_nurul" style="background-image: url('https://t4.ftcdn.net/jpg/05/34/87/15/360_F_534871551_MOmx3mu3oP1TkmUW8ZDffLpHrv86LLrE.jpg');  background-repeat: no-repeat;  background-size: cover;">
        <section class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Logo di sebelah kiri -->
                <a class="navbar-brand" href="#">
                    <!-- <img src="https://masjidassalaampmi.com/wp-content/uploads/2023/03/cropped-Masjid-Jami-As-Salaam-3.png" alt="Logo" width="50"> -->
                </a>

                <!-- Tombol toggle untuk tampilan mobile -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Daftar menu di sebelah kanan -->
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Jadwal Sholat Di Bandung
                                <b> ( <?php echo $JadwalSholat['jadwal']['data']['tanggal']; ?> )</b>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="jam"></a>
                        </li>
                    </ul>
                </div>
            </div>
            <button type="button" class="btn btn-sm btn-outline-success" onclick="openFullscreen()"><i class="fa-solid fa-expand"></i></button>
            <button type="button" class="btn btn-sm btn-outline-success" onclick="modalSetting()"><i class="fa-solid fa-gear"></i></button>
            <a href="<?= base_url("auth") ?>" target="_blank" class="btn btn-sm btn-outline-success"><i class="fa-solid fa-sign-in-alt"></i></a>
        </section>

        <div class="container">

            <div class="row">
                <div class="col-1">
                    <img src="<?= base_url("storage/assets/images/7112-removebg-preview.png") ?>" width="150px;" style='margin-left: -75px;margin-top: -53px;'>
                </div>
                <div class="col" style="margin-left: -35px; color:#1a9c3d;">

                    <h2>MASJID NURUL ROCHMAN </h2><br>
                    <h5 style="margin-top: -30px; color:tomat">RS. BHAYANGKARA SARTIKA ASIH</h5>
                </div>
                <div class="col-1"></div>
                <div class="col-6">
                    <div class="card container shadow-lg" style="bottom: 15px;z-index: 999;left: 85px;">
                        <div class="row text-center mt-3 mb-3 container">
                            <div class="col bg-light" style="color:red;">
                                SHUBUH
                                <span style="color:black;">
                                    <?php echo $JadwalSholat['jadwal']['data']['subuh']; ?>
                                </span>
                            </div>
                            <div class="col" style="color:red;">
                                TERBIT
                                <span style="color:black;"> <?php echo $JadwalSholat['jadwal']['data']['terbit']; ?></span>
                            </div>
                            <div class="col bg-light" style="color:red;">
                                DZUHUR
                                <span style="color:black;"> <?php echo $JadwalSholat['jadwal']['data']['dzuhur']; ?></span>
                            </div>
                            <div class="col" style="color:red;">
                                ASHAR
                                <span style="color:black;"> <?php echo $JadwalSholat['jadwal']['data']['ashar']; ?></span>
                            </div>
                            <div class="col bg-light" style="color:red;">
                                MAGRIB
                                <span style="color:black;"> <?php echo $JadwalSholat['jadwal']['data']['maghrib']; ?></span>
                            </div>
                            <div class="col" style="color:red;">
                                ISYA
                                <span style="color:black;"> <?php echo $JadwalSholat['jadwal']['data']['isya']; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class='text-light ' style="background-color: #1a9c3d; height:100%; z-index:999;">
        <div class="">
            <?php

            if (!empty($GetImamKhatibSekarang)) {
                // Access the array element
                $value11 = $GetImamKhatibSekarang['imam'];
                $value22 = $GetImamKhatibSekarang['khatib'];

                // Your code to work with $value goes here
            } else {

                $value11 = "Tidak Ada";
                $value22 = "Tidak Ada";
                // Handle the case when the array element is null or doesn't exist
                // You can log an error message or perform other error-handling actions
            }



            if (!empty($GetImamKhatibSebelumDanSelanjut)) {
                // Access the array element
                $value1 = $GetImamKhatibSebelumDanSelanjut['imam'];
                $value2 = $GetImamKhatibSebelumDanSelanjut['khatib'];

                // Your code to work with $value goes here
            } else {

                $value1 = "Tidak Ada";
                $value2 = "Tidak Ada";
                // Handle the case when the array element is null or doesn't exist
                // You can log an error message or perform other error-handling actions
            }

            ?>
            <br><br><br><br><br>
            <div class="row container-lg mr-5">
                <div class="col card ml-3" id="card-imam" style="margin-left: 76px;height: 618px;font-size: 42px;">


                    <div class="row mt-3">
                        <div class="col" style="color:darkblue;">
                            Hari / Tanggal
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col">
                            <!-- Jumat, 29-09-2023 -->
                            <?= $this->GZL->formatTanggalIndo($JumatSekarang) ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            Imam
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col mt-2" style="font-size: 25px;">
                            <?= $value11  ?>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col">
                            Khotib
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col mt-2" style="font-size: 25px;">
                            <?= $value22 ?>
                        </div>
                    </div>


                    <hr>
                    <span style="color: darkblue;">KAS MASJID</span>

                    <div class="row mt-3">
                        <div class="col">
                            Saldo Awal
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col">
                            21.657.500,00
                            <!-- Rp. <?= $this->GZL->number_format($GetSaldoMingguKemarinKemarinPemasukan, 0, ',', ".") ?> -->
                            <!-- Rp. <?= $this->GZL->number_format($GetSaldoMingguKemarin, 0, ',', ".") ?> -->
                        </div>
                    </div>

                    <div class="row mt-1">
                        <div class="col">
                            Penerimaan
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col">
                            Rp. 1.595.000
                            <!-- Rp. <?= $this->GZL->number_format($GetSaldoMingguKemarinKemarinPemasukan, 0, ',', ".") ?> -->
                        </div>
                    </div>

                    <div class="row mt-1">
                        <div class="col">
                            Pengeluaran
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col">
                            0
                            <!-- Rp. <?= $this->GZL->number_format($GetSaldoMingguKemarinKemarinPengeluaran, 0, ',', ".") ?> -->
                        </div>
                    </div>



                    <div class="row mt-1">
                        <div class="col">
                            Saldo Akhir
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col">
                            Rp. <?= $this->GZL->number_format($GetSaldoMingguIni, 0, ',', ".") ?>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5" id="card-video" style="margin-right:-155px;">
                    <iframe src="<?= base_url("storage/uploads_docs/" . $DataVideo['nama_file']) ?>" frameborder="0" style="height: 617px;width: 853px;"></iframe>
                    <!-- <video loop="" autoplay="" muted="" id="vid00" class="kanan0" style="height: 270px;">
                        <source src="<?= base_url("storage/uploads_docs/" . $DataVideo['nama_file']) ?>" type="video/mp4">
                        Your browser does not support the video tag.
                    </video> -->
                </div>

            </div>
        </div>
        <br>
        <h1 style=" background-color:#1a9c3d; color:yellow;">
            <marquee behavior="" direction="" class="mt-3"><?= $DataRunningText['isi'] ?></marquee>
        </h1>
    </section>

</div>