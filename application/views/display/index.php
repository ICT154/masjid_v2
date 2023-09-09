<div id="masjidnuruliman" style="background-image: url('https://t4.ftcdn.net/jpg/05/34/87/15/360_F_534871551_MOmx3mu3oP1TkmUW8ZDffLpHrv86LLrE.jpg');  background-repeat: no-repeat;  background-size: cover;">
    <div class="wm__ticker">
        <div class="acmeticker-wrap mb-3" style="position: relative;">
            <marquee behavior="" direction="" class="mt-3">Selamat Datang di Masjid Jami' As Salaam Pondok Melati Indah</marquee>

        </div>
    </div>
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
    </section>

    <div class="container">

        <div class="row">
            <div class="col-1">
                <img src="<?= base_url("storage/assets/images/7112-removebg-preview.png") ?>" width="150px;" style='margin-left: -113px;margin-top: -53px;'>
            </div>
            <div class="col" style="margin-left: -35px; color:#14c743;">

                <h2>MASJID NURUL IMAN </h2><br>
                <h5 style="margin-top: -30px; color:#ffcc00;">RS. BHAYANGKARA SARTIKA ASIH</h5>
            </div>
            <div class="col-1"></div>
            <div class="col-6">
                <div class="card container shadow-lg" style="bottom: 15px;z-index: 999;left: 85px;">
                    <div class="row text-center mt-3 mb-3 container">
                        <div class="col bg-light">
                            SHUBUH
                            <span style="color: #7bae91;">
                                <?php echo $JadwalSholat['jadwal']['data']['subuh']; ?>
                            </span>
                        </div>
                        <div class="col">
                            TERBIT
                            <span style="color: #7bae91;"> <?php echo $JadwalSholat['jadwal']['data']['terbit']; ?></span>
                        </div>
                        <div class="col bg-light">
                            DZUHUR
                            <span style="color: #7bae91;"> <?php echo $JadwalSholat['jadwal']['data']['dzuhur']; ?></span>
                        </div>
                        <div class="col">
                            ASHAR
                            <span style="color: #7bae91;"> <?php echo $JadwalSholat['jadwal']['data']['ashar']; ?></span>
                        </div>
                        <div class="col bg-light">
                            MAGRIB
                            <span style="color: #7bae91;"> <?php echo $JadwalSholat['jadwal']['data']['maghrib']; ?></span>
                        </div>
                        <div class="col">
                            ISYA
                            <span style="color: #7bae91;"> <?php echo $JadwalSholat['jadwal']['data']['isya']; ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <section class='text-light ' style="background-color: #7bae91; height:500px;">
        <div class="container-sm ">

            <div class="row mt-1 ">
                <div class="col mt-3 ">
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
                    <div class="card container mt-3  shadow-lg text-center " style="margin-left: -100px; background-image: url('https://t4.ftcdn.net/jpg/05/34/87/15/360_F_534871551_MOmx3mu3oP1TkmUW8ZDffLpHrv86LLrE.jpg')">
                        <h3 class="mt-3">Minggu Ini ( <?= $this->GZL->tgl_indo($JumatSekarang) ?> )</h3>
                        <h2 class="mt-3">Imam : <?= $value11  ?></h2>
                        <h2 class="">Khotib : <?= $value22 ?></h2>
                        <!-- <hr>
                    <h3 class="mt-3">Minggu Depan ( <?= $this->GZL->tgl_indo($JumatSebelumDanSelanjut['next_friday']) ?> )</h3>
                    <h2 class="mt-3">Imam : <?= $value1  ?></h2>
                    <h2 class="">Khotib : <?= $value2 ?></h2> -->
                    </div>
                    <div class="card container mt-3  shadow-lg text-left " style="margin-left: -100px; background-image: url('https://t4.ftcdn.net/jpg/05/34/87/15/360_F_534871551_MOmx3mu3oP1TkmUW8ZDffLpHrv86LLrE.jpg')">
                        <div class="mt-3">
                            <h5> KAS MASJID </h5>

                            <h5>
                                <div class="row">
                                    <div class="col">
                                        SALDO SEBELUMNYA
                                    </div>
                                    <div class="col">
                                        : Rp. <?= $this->GZL->number_format($GetSaldoMingguKemarin, 0, ',', ".") ?>
                                    </div>
                                </div>
                            </h5>
                            <h5>
                                <div class="row">
                                    <div class="col">
                                        PENERIMAAN
                                    </div>
                                    <div class="col">
                                        : Rp. <?= $this->GZL->number_format($GetSaldoMingguKemarinKemarinPemasukan, 0, ',', ".") ?>
                                    </div>
                                </div>
                            </h5>
                            <h5>
                                <div class="row">
                                    <div class="col">
                                        PENGELUARAN
                                    </div>
                                    <div class="col">
                                        : Rp. <?= $this->GZL->number_format($GetSaldoMingguKemarinKemarinPengeluaran, 0, ',', ".") ?>
                                    </div>
                                </div>
                            </h5>
                            <h5>
                                <div class="row">
                                    <div class="col">
                                        SALDO AKHIR
                                    </div>
                                    <div class="col">
                                        : Rp. <?= $this->GZL->number_format($GetSaldoMingguIni, 0, ',', ".") ?>
                                    </div>
                                </div>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col mt-3 mb-3">
                    <iframe width="600" height="400" src="https://www.youtube.com/embed/rQzdrqfLZdg?si=UPWdEaOZSwen_mqr" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
</div>