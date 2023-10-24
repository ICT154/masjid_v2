<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Display|Masjid</title>
    <link rel="icon" type="image/png" href="../icon.png" />
    <!-- Bootstrap -->
    <link href="<?= base_url("storage/assets_v4/") ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url("storage/assets_v4/") ?>css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= base_url("storage/assets_v4/") ?>css/style.css" rel="stylesheet">
    <style>

    </style>
</head>

<body id="masjidnurulrochman">
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>


    <div id="full-screen-clock" style="display:none"></div>
    <div id="count-down" class="full-screen" style="display:none">
        <div class="counter">
            <h1>COUNTER</h1>
            <div class="hh">00<span>JAM</span></div>
            <div class="ii">00<span>MENIT</span></div>
            <div class="ss">00<span>DETIK</span></div>
        </div>
    </div>
    <div id="display-adzan" class="full-screen" style="display:none">
        <div></div>
    </div>
    <div id="display-sholat" class="full-screen" style="display:none"></div>
    <div id="display-khutbah" class="full-screen" style="display: none;">
        <div></div>
    </div>

    <?php
    // $no = 1;
    // foreach ($datavideo as $row) : 
    ?>
    <!-- <div id="display-video" class="full-screen" style="display: none;">
        <input type="hidden" id="tanggal_video_display" value="<?= $row->date_g ?>">
        <input type="hidden" id="id_jadwal_bulanan" value="<?= $row->id_jadwal_bulanan ?>">

        <iframe id="videoIframe" style="width: 100%; height:100%;" id="videoIframe" src="<?= base_url("/") ?>storage/uploads_docs/<?= $row->nama_file ?>" frameborder="0" allowfullscreen></iframe>

        <video id="videoIframe" title="Advertisement" style="background-color: rgb(0, 0, 0); position: absolute; width: 640px; height: 360px;" src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4" autoplay="true" muted="muted"></video>


        <div></div>
    </div> -->
    <?php
    // $no++;
    // endforeach; 
    ?>


    <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="15000">
        <!-- Overlay -->
        <div class="overlay"></div>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <?php
            $no = 1;
            foreach ($dataBackground as $row) :
                if ($no == 1) {
                    $active = "active";
                } else {
                    $active = "";
                }
            ?>
                <div class="item slides <?= $active ?>">
                    <div style="background-image: url(<?= base_url("storage/uploads_docs/" . $row->nama_file) ?>);"></div>
                </div>
            <?php
                $no++;
            endforeach; ?>
        </div>
    </div>


    <div id="left-container">
        <div id="jam"></div>
        <div id="tgl"></div>
        <div id="jadwal"></div>
    </div>

    <div id="right-counter" style="display:none">
        <div class="counter">
            <h1>COUNTER</h1>
            <div class="hh">19<span>JAM</span></div>
            <div class="ii">25<span>MENIT</span></div>
            <div class="ss">45<span>DETIK</span></div>
        </div>
    </div>
    <div id="right-container">
        <div id="quote">
            <div id="carouselContainer" class="carousel quote-carousel slide" data-ride="carousel" data-interval="5000" data-pause="null">
                <div class="carousel-inner">
                    <?php
                    $no = 1;
                    foreach ($datahadist as $row) :
                        if ($no == 1) {
                            $active = "active";
                        } else {
                            $active = "";
                        }
                        $teks = explode("||", $row->konten);
                    ?>

                        <div class="item slides  <?= $active ?>">
                            <div class="hero">
                                <hgroup>
                                    <div class="text1"><?= $teks['0'] ?></div>
                                    <div class="text2"><?= $teks['1'] ?></div>
                                    <div class="text3"><?= $teks['2'] ?></div>
                                </hgroup>
                            </div>
                        </div>
                    <?php
                        $no++;
                    endforeach; ?>
                    <?php
                    $saldo_akhir = ($TotalPemasukanMingguKemarin - $TotalPengeluaranMingguKemaren) + $TotalPemasukanMingguIni - $TotalPengeluaranMingguIni;
                    ?>
                    <div class="item slides">
                        <div class="hero">
                            <hgroup>
                                <div class="text1">KEUANGAN MASJID</div>
                                <div class="text2">SALDO SEBELUMNYA : Rp. <?= $this->GZL->number_format($TotalPemasukanMingguKemarin - $TotalPengeluaranMingguKemaren, 2, ",", ".") ?> <br> PENERIMAAN : Rp. <?= $this->GZL->number_format($TotalPemasukanMingguIni, 2, ",", ".") ?> <br> PENGELUARAN : Rp. <?= $this->GZL->number_format($TotalPengeluaranMingguIni, 2, ",", ".") ?> <br> SALDO AKHIR : Rp. <?= $this->GZL->number_format($saldo_akhir, 2, ",", ".") ?> </div>
                                <div class="text3"></div>
                            </hgroup>
                        </div>
                    </div>

                    <div class="item slides">
                        <div class="hero">
                            <hgroup>
                                <div class="text1">Jadwal Imam & Khotib</div>
                                <div class="text2">Imam : <?= $dataimam['imam'] ?> <br> Khotib : <?= $dataimam['khatib'] ?> </div>
                                <div class="text3"></div>
                            </hgroup>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="logo" style="background-image: url(<?= base_url("storage/assets_v4/") ?>logo/1697252588.png);"></div>
        <div onclick="openFullscreen()" id="running-text">
            <div class="item">
                <!-- <div class="text"> -->
                <marquee>
                    <i class="fa fa-square-o" aria-hidden="true"></i>

                    <?= $dataRunningTeks['isi'] ?>
                    <i class="fa fa-square-o" aria-hidden="true"></i>

                </marquee>
                <!-- </div> -->
            </div>
        </div>
    </div>

    <script src="<?= base_url("storage/assets_v4/") ?>js/jquery-3.4.1.min.js"></script>
    <script src="<?= base_url("storage/assets_v4/") ?>js/bootstrap.min.js"></script>
    <script src="<?= base_url("storage/assets_v4/") ?>js/moment-with-locales.js"></script>
    <script src="<?= base_url("storage/assets_v4/") ?>js/PrayTimes.js"></script>
    <script src="<?= base_url("storage/assets_v4/") ?>js/jquery.marquee.js"></script>

    <script>
        var elem = document.getElementById("masjidnurulrochman");
        var isFullScreen = false;

        function cekFullScr() {
            if ((document.fullscreenElement && document.fullscreenElement !== null) ||
                (document.webkitFullscreenElement && document.webkitFullscreenElement !== null) ||
                (document.msFullscreenElement && document.msFullscreenElement !== null)) {
                isFullScreen = true;
                console.log('Elemen berada dalam mode layar penuh.');
            } else {
                isFullScreen = false;
                console.log('Elemen tidak berada dalam mode layar penuh.');
            }
        }

        function openFullscreen() {
            if (isFullScreen) {
                if (document.exitFullscreen) {
                    document.exitFullscreen();
                } else if (document.webkitExitFullscreen) {
                    /* Safari */
                    document.webkitExitFullscreen();
                } else if (document.msExitFullscreen) {
                    /* IE11 */
                    document.msExitFullscreen();
                }
            } else {
                if (elem.requestFullscreen) {
                    elem.requestFullscreen();
                } else if (elem.webkitRequestFullscreen) {
                    /* Safari */
                    elem.webkitRequestFullscreen();
                } else if (elem.msRequestFullscreen) {
                    /* IE11 */
                    elem.msRequestFullscreen();
                }
            }
            setTimeout(cekFullScr, 500);
        }

        // $(document).ready(function() {
        //     var carouselInner = $('.carousel-inner');
        //     var lastSlide = carouselInner.children(':last');
        //     var videoContainer = $('#display-video');
        //     var videoIframe = $('#videoIframe');

        //     lastSlide.on('transitionend', function() {
        //         carouselInner.hide();
        //         videoContainer.show();
        //         var videoElement = $(videoIframe).contents().find('video').get(0);
        //         videoElement.play();
        //         // ganti_video();
        //     });

        //     $(videoIframe).on('load', function() {
        //         console.log('Video telah dimuat.');
        //         var videoElement = $(videoIframe).contents().find('video').get(0);
        //         videoElement.pause();
        //         $(videoIframe).contents().find('video').on('ended', function() {
        //             videoContainer.hide();
        //             carouselInner.show();
        //             console.log('Video selesai diputar.');
        //             ganti_video();
        //             videoElement.pause();
        //         });
        //     });
        // });


        function ganti_video() {
            var videoContainer = $('#display-video');
            var videoIframe = $('#videoIframe');

            $.ajax({
                url: "<?= base_url("change-video-display") ?>",
                type: "post",
                data: {
                    id: $("#id_jadwal_bulanan").val(),
                    tanggalVideoDisplay: $("#tanggal_video_display").val()
                },
                success: function(msg) {
                    videoContainer.html(msg);
                    $(videoIframe).on('load', function() {
                        var videoElement = $(videoIframe).contents().find('video').get(0);
                        videoElement.pause();
                    });
                    // videoContainer.hide();
                    // carouselContainer.show();
                    // console.log('Video selesai diputar.');
                }
            });
        }
    </script>

    <script>
        // document.addEventListener("DOMContentLoaded", function() {
        //     var carouselContainer = document.getElementById('carouselContainer');
        //     var videoContainer = document.getElementById('display-video-1');
        //     var videoIframe = document.getElementById('videoIframe');
        //     var carouselInitialized = false;

        //     // Memantau saat semua slide telah dimuat
        //     carouselContainer.addEventListener('slid.bs.carousel', function() {
        //         if (!carouselInitialized) {
        //             carouselInitialized = true;
        //             // Semua slide telah dimuat, sembunyikan carousel dan tampilkan video
        //             carouselContainer.style.display = 'none';
        //             videoContainer.style.display = 'block';
        //         }
        //     });

        //     // Memantau saat video selesai diputar
        //     videoIframe.onload = function() {
        //         console.log('Video telah dimuat.');
        //         // Video selesai diputar, tampilkan kembali carousel
        //         videoIframe.contentWindow.document.getElementsByTagName('video')[0].onended = function() {
        //             videoContainer.style.display = 'none';
        //             carouselContainer.style.display = 'block';
        //             console.log('Video selesai diputar.');
        //         };
        //     };

        //     // Cek saat semua slide dimuat
        //     var carouselInnerElement = carouselContainer.querySelector('.carousel-inner');
        //     var numberOfCarousels = carouselInnerElement.querySelectorAll('.item.slides').length;
        //     console.log('Jumlah slide: ' + numberOfCarousels);
        //     console.log(carouselInnerElement);
        //     // Semua slide telah dimuat, sembunyikan carousel dan tampilkan video
        //     if (numberOfCarousels > 0) {
        //         carouselContainer.style.display = 'none';
        //         videoContainer.style.display = 'block';
        //         videoIframe.onload = function() {
        //             console.log('Video telah dimuat.');
        //             // Video selesai diputar, tampilkan kembali carousel
        //             videoIframe.contentWindow.document.getElementsByTagName('video')[0].onended = function() {
        //                 videoContainer.style.display = 'none';
        //                 carouselContainer.style.display = 'block';
        //                 console.log('Video selesai diputar.');
        //             };
        //         };
        //     }
        // });
        //PrayTimes initialize
        var format = '24h';
        var lat = -6.903272;
        var lng = 107.5607545;
        var timeZone = 7;
        var dst = 0;
        prayTimes.setMethod('MWL');



        //Baris ini ke bawah jika inget nanti pindah ke file terpisah biar rapi......

        var app = {
            db: $.parseJSON(`{"setting":{"nama":"Masjid Nurul Rochman","lokasi":"Bandung","latitude":"-6.903272","longitude":"107.5607545","timeZone":"7","dst":"0"},"prayTimesMethod":"MWL","prayTimesAdjust":{"fajr":"20","dhuhr":"","asr":"Standard","maghrib":"","isha":"18"},"prayTimesTune":{"fajr":0,"dhuhr":0,"asr":0,"maghrib":0,"isha":0},"prayName":{"fajr":"Subuh","dhuhr":"Dzuhur","asr":"Ashar","maghrib":"Maghrib","isha":"Isya'"},"timeName":{"Hours":"Jam","Minutes":"Menit","Seconds":"Detik"},"dayName":{"Sunday":"Minggu","Monday":"Senin","Tuesday":"Selasa","Wednesday":"Rabu","Thursday":"Kamis","Friday":"Jum'at","Saturday":"Sabtu"},"monthName":{"January":"Januari","February":"Februari","March":"Maret","April":"April","May":"Mei","June":"Juni","July":"Juli","August":"Agustus","September":"September","October":"Oktober","November":"November","December":"Desember"},"timer":{"info":5,"wallpaper":15,"wait_adzan":1,"adzan":3,"sholat":20},"iqomah":{"fajr":10,"dhuhr":10,"asr":10,"maghrib":10,"isha":10},"jumat":{"active":true,"duration":60,"text":"Harap diam saat khotib khutbah"},"tarawih":{"active":true,"duration":180},"info":[["u0633u064eu0648u064fu0651u0648u0627 u0635u064fu0641u064fu0648u0641u064eu0643u064fu0645u0652 , u0641u064eu0625u0650u0646u064eu0651 u062au064eu0633u0652u0648u0650u064au064eu0629u064e u0627u0644u0635u064eu0651u0641u0650u0651 u0645u0650u0646u0652 u062au064eu0645u064eu0627u0645u0650 u0627u0644u0635u064eu0651u0644u0627u0629u0650","Luruskanlah shaf-shaf kalian, karena lurusnya shaf adalah kesempurnaan shalat","HR. Bukhari no.690, Muslim no.433",true]],"running_text":["Sesungguhnya salat itu mencegah dari (perbuatan) keji dan mungkar. Dan (ketahuilah) mengingat Allah (salat) itu lebih besar (keutamaannya dari ibadah yang lain","Sesungguhnya salat itu mencegah dari (perbuatan) keji dan mungkar. Dan (ketahuilah) mengingat Allah (salat) itu lebih besar (keutamaannya dari ibadah yang lain","Sesungguhnya salat itu mencegah dari (perbuatan) keji dan mungkar. Dan (ketahuilah) mengingat Allah (salat) itu lebih besar (keutamaannya dari ibadah yang lain"]}`),
            cekDb: false,
            tglHariIni: '',
            tglBesok: '',
            jadwalHariIni: {},
            jadwalBesok: {},
            timer: false,
            // waitAdzanTimer	: false,	// Display countdown sebelum adzan
            adzanTimer: false, // Display adzan
            countDownTimer: false, // Display countdown iqomah
            sholatTimer: false, // Display sholat
            khutbahTimer: false, // Display khutbah
            nextPrayCount: 0, // start next pray count-down
            // nextPrayTimer	: false,	// Display countdown ke sholat selanjutnya
            fajr: '',
            dhuhr: '',
            asr: '',
            maghrib: '',
            isha: '',
            audio: new Audio('img/beep.mp3'),

            initialize: function() {
                app.timer = setInterval(function() {
                    app.cekPerDetik()
                }, 1000);
                $('#preloader').delay(350).fadeOut('slow');
                // console.log(app.db);


                // let testTime	= moment().add(8,'seconds');
                // app.runRightCountDown(testTime,'Menuju dzuhur');
                // app.runFullCountDown(testTime,'iqomah',true);
                // app.runFullCountDown(testTime,'TEST COUNTER',false);
                // app.showDisplayAdzan('Dzuhur');
                // app.showDisplayKhutbah();
            },
            cekPerDetik: function() {
                if (!app.tglHariIni || moment().format('YYYY-MM-DD') != moment(app.tglHariIni).format('YYYY-MM-DD')) {
                    app.tglHariIni = moment();
                    app.tglBesok = moment().add(1, 'days');
                    // console.log(app.tglHariIni);
                    // console.log(app.tglBesok);
                    app.jadwalHariIni = app.getJadwal(moment(app.tglHariIni).toDate());
                    app.jadwalBesok = app.getJadwal(moment(app.tglBesok).toDate());
                    // console.log(app.jadwalHariIni);
                    // console.log(app.jadwalBesok);
                    app.fajr = moment(app.jadwalHariIni.fajr, 'HH:mm');
                    app.dhuhr = moment(app.jadwalHariIni.dhuhr, 'HH:mm');
                    app.asr = moment(app.jadwalHariIni.asr, 'HH:mm');
                    app.maghrib = moment(app.jadwalHariIni.maghrib, 'HH:mm');
                    app.isha = moment(app.jadwalHariIni.isha, 'HH:mm');
                    // console.log('fajr : '+app.fajr.format('YYYY-MM-DD HH:mm:ss'));
                    // console.log('dhuhr : '+app.dhuhr.format('YYYY-MM-DD HH:mm:ss'));
                    // console.log('asr : '+app.asr.format('YYYY-MM-DD HH:mm:ss'));
                    // console.log('maghrib : '+app.maghrib.format('YYYY-MM-DD HH:mm:ss'));
                    // console.log('isha : '+app.isha.format('YYYY-MM-DD HH:mm:ss'));
                }
                app.showJadwal();
                app.displaySchedule();
                // app.showCountDownNextPray();
                // app.runRightCountDown(app.dhuhr,'Dzuhur');

                // $.ajax({
                //     type: "POST",
                //     url: "../proses.php",
                //     dataType: "json",
                //     data: {
                //         id: 'changeDbCheck'
                //     }
                // }).done(function(dt) {
                //     // console.log(dt.data);
                //     if (app.cekDb == false) app.cekDb = dt.data;
                //     else if (app.cekDb !== dt.data) location.reload();
                // }).fail(function(msg) {
                //     console.log(msg);
                // });
                // console.log('interval-1000');
            },
            getJadwal: function(jadwalDate) {
                let times = prayTimes.getTimes(jadwalDate, [lat, lng], timeZone, dst, format);
                return times;
            },
            showJadwal: function() {
                // console.log(app.db.prayName)
                // let jamSekarang	= moment().add(9,'months');
                let jamSekarang = moment();
                //+5 menit baru berubah yang aktif (misal sekarang jam dzuhur, di jadwal setelah 5 menit baru berubah yang ashar yang aktif)
                let jamDelay = moment().subtract(5, 'minutes');
                let jadwal = '';
                let hari = app.db.dayName[jamSekarang.format("dddd")]; //pastikan moment js pake standart inggris (default) ==> jangan pindah locale
                let bulan = app.db.monthName[jamSekarang.format("MMMM")];

                // $('#tgl').html(moment().format("dddd, DD MMMM YYYY"));
                $('#jam').html(jamSekarang.format("HH.mm[<div>]ss[</div>]"));
                $('#tgl').html(jamSekarang.format("[" + hari + "], DD [" + bulan + "] YYYY"));

                if ($('.full-screen').is(":visible")) {
                    $('#full-screen-clock').html(jamSekarang.format("[<i class='fa fa-clock-o''></i>&nbsp;&nbsp;]HH:mm"));
                    $('#full-screen-clock').slideDown();
                    console.log('show');
                } else $('#full-screen-clock').slideUp();

                let jadwalDipake = app.jadwalHariIni;
                let jadwalPlusIcon = '';
                //jika diatasa isya' pake jadwal besok

                // console.log(jamSekarang.format('YYYY-MM-DD HH:mm:ss'));
                if (jamDelay > app.isha) {
                    jadwalDipakeapp = app.jadwalBesok;
                    jadwalPlusIcon = '<span><i class="fa fa-plus" aria-hidden="true"></i></span>';
                    // console.log('besok');
                }
                $.each(app.db.prayName, function(k, v) {
                    // console.log(jamDelay.format('YYYY-MM-DD HH:mm:ss'));
                    let css = '';
                    if (k == 'isha' && jamDelay < app.isha && jamDelay > app.maghrib) css = 'active';
                    else if (k == 'maghrib' && jamDelay < app.maghrib && jamDelay > app.asr) css = 'active';
                    else if (k == 'asr' && jamDelay < app.asr && jamDelay > app.dhuhr) css = 'active';
                    else if (k == 'dhuhr' && jamDelay < app.dhuhr && jamDelay > app.fajr) css = 'active';
                    else if (k == 'fajr' && (jamDelay < app.fajr || jamDelay > app.isha)) css = 'active'; //diatas isha dan sebelum subuh (beda hari)
                    jadwal += '<div class="row ' + css + '"><div class="col-xs-5">' + v + '</div><div class="col-xs-7">' + jadwalDipake[k] + jadwalPlusIcon + '</div></div>';
                });
                $('#jadwal').html(jadwal);
            },
            displaySchedule: function() {
                // console.log(app.getNextPray());
                let waitAdzan = moment().add(app.db.timer.wait_adzan, 'minutes').format('YYYY-MM-DD HH:mm:ss');
                let jamSekarang = moment().format('YYYY-MM-DD HH:mm:ss');

                // console.log(moment().add(5,'days').format('dddd'));
                // console.log(waitAdzan);
                // console.log(app.dhuhr.format('YYYY-MM-DD HH:mm:ss'));

                $.each(app.db.prayName, function(k, v) {
                    //Normal 	: waitAdzanCountDown-adzan-iqomah-sholat-nextPrayCountDown
                    //jumat 	: waitAdzanCountDown-adzan-khutbah-sholat-nextPrayCountDown
                    //tarawih 	: waitAdzanCountDown-adzan-iqomah-sholat-isya-Tarawih(hanya durasi tarawih)-nextPrayCountDown

                    let t = moment(app[k]); //bikin variable baru t ==> jika ditulis let t	= app[k]; ==> jika di tambah / kurang, variable app[k] ikut berubah
                    let jadwal = t.format('YYYY-MM-DD HH:mm:ss');
                    let stIqomah = t.add(app.db.timer.adzan, 'minutes').format('YYYY-MM-DD HH:mm:ss');
                    let enIqomah = moment(stIqomah, 'YYYY-MM-DD HH:mm:ss').add(app.db.iqomah[k], 'minutes')




                    // console.log('Now-------------- '+jamSekarang);
                    // console.log('time '+v+' : '+jadwal);
                    // console.log('waitAdzan '+v+' : '+waitAdzan);
                    // console.log('st iqomah '+v+' : '+stIqomah);
                    // console.log('en iqomah '+v+' : '+enIqomah.format('YYYY-MM-DD HH:mm:ss'));
                    if (waitAdzan == jadwal) app.runRightCountDown(app[k], 'Menuju ' + v); // CountDown sebelum adzan
                    else if (jadwal == jamSekarang) app.showDisplayAdzan(v); // Display adzan
                    else if (stIqomah == jamSekarang) {
                        if (moment().format('dddd') == 'Friday' && app.db.jumat.active && k == 'dhuhr') {
                            //jumatan aktif skip iqomah --> waitAdzanCountDown-adzan-khutbah-sholat-nextPrayCountDown
                            app.showDisplayKhutbah();
                        } else
                            app.runFullCountDown(enIqomah, 'IQOMAH', true); // CountDown iqomah
                    }
                });


                // let jamSekarang	= moment().add(5,'minutes');
                // if (!app.countDownTimer) {
                // app.runFullCountDown(jamSekarang,'IQOMAH');
                // }
            },
            getNextPray: function() {
                let jamSekarang = moment();
                let nextPray = 'fajr';
                let jadwalDipake = false;
                if (jamSekarang > app.isha) {
                    jadwalDipake = moment(app.jadwalBesok[nextPray], 'HH:mm').add(1, 'Day');
                    console.log('jadwal besok');
                } else {
                    $.each(app.db.prayName, function(k, v) {
                        if (jamSekarang < app[k]) {
                            nextPray = k;
                            return false;
                        }
                    });
                    jadwalDipake = moment(app.jadwalHariIni[nextPray], 'HH:mm');
                }
                // console.log(jadwalDipake);
                return {
                    'pray': nextPray,
                    'date': jadwalDipake
                };
            },

            showCountDownNextPray: function() {
                // $('#right-counter').html();
                let nextPray = app.getNextPray();
                if (app.countDownTimer) return; //timer masih jalan
                app.nextPrayCount = 0;
                console.log(moment(nextPray['date']).format('YYYY-MM-DD HH:mm:ss'));
                app.countDownTimer = setInterval(function() {
                    let t = app.countDownCalculate(nextPray.date);

                    $('#right-counter .counter>h1').html('Menuju ' + app.db.prayName[nextPray.pray]);
                    $('#right-counter .counter>.hh').html(t.hours + '<span>' + app.db.timeName.Hours + '</span>');
                    $('#right-counter .counter>.ii').html(t.minutes + '<span>' + app.db.timeName.Minutes + '</span>');
                    $('#right-counter .counter>.ss').html(t.seconds + '<span>' + app.db.timeName.Seconds + '</span>');

                    $('#right-counter').slideDown();
                    $('#quote').hide();

                    app.nextPrayCount++;
                    if (app.nextPrayCount >= 30) { // 30 detik show counter
                        clearInterval(app.countDownTimer);
                        app.countDownTimer = false;
                        $('#right-counter').fadeOut();
                        $('#quote').fadeIn();
                        // document.getElementById("demo").innerHTML = "EXPIRED";
                    }
                }, 1000);
            },
            showDisplayAdzan: function(prayName) {
                if (!app.adzanTimer) {
                    $('#display-adzan>div').text(prayName);
                    $('#display-adzan').show();
                    app.adzanTimer = setTimeout(function() {
                        $('#display-adzan').fadeOut();
                        app.adzanTimer = false;
                    }, (app.db.timer.adzan * 60 * 1000) + 1500); // to menit + 1.5 detik (remove jeda dengan iqomah)
                }
            },
            showDisplayKhutbah: function() {
                if (!app.khutbahTimer) {
                    $('#display-khutbah>div').text(app.db.jumat.text);
                    $('#display-khutbah').show();
                    app.khutbahTimer = setTimeout(function() {
                        app.khutbahTimer = false;
                        app.showDisplaySholat();
                        $('#display-khutbah').fadeOut();
                    }, app.db.jumat.duration * 60 * 1000); // to menit
                }
            },
            showDisplaySholat: function() {
                if (!app.khutbahTimer) {
                    //cek tarawih
                    let jamSekarang = moment();
                    let duration = (jamSekarang > app.isha && app.db.tarawih.active) ? app.db.tarawih.duration : app.db.timer.sholat;
                    $('#display-sholat').show();
                    app.khutbahTimer = setTimeout(function() {
                        $('#display-sholat').fadeOut();
                        app.khutbahTimer = false;
                        app.showCountDownNextPray();
                    }, duration * 60 * 1000); // to menit
                }
            },
            runFullCountDown: function(jam, title, runDisplaySholat) {
                // clearInterval(app.countDownTimer);
                if (app.countDownTimer) return; //timer masih jalan
                app.countDownTimer = setInterval(function() {
                    let t = app.countDownCalculate(jam);

                    $('#count-down .counter>h1').html(title);
                    $('#count-down .counter>.hh').html(t.hours + '<span>' + app.db.timeName.Hours + '</span>');
                    $('#count-down .counter>.ii').html(t.minutes + '<span>' + app.db.timeName.Minutes + '</span>');
                    $('#count-down .counter>.ss').html(t.seconds + '<span>' + app.db.timeName.Seconds + '</span>');

                    $('#count-down').fadeIn();
                    if (t.distance == 5) {
                        app.audio.play().then(() => {
                            // already allowed
                        }).catch(() => {
                            console.log('Agar beep bunyi ==> permission chrome : sound harus enable');
                        });
                        // audio.play();
                    }
                    if (t.distance < 1) {
                        clearInterval(app.countDownTimer);
                        app.countDownTimer = false;
                        $('#count-down').fadeOut();
                        if (runDisplaySholat) {
                            app.showDisplaySholat();
                        }
                        // document.getElementById("demo").innerHTML = "EXPIRED";
                    }
                }, 1000);
            },
            runRightCountDown: function(jam, title) {
                // $('#right-counter').html();
                if (app.countDownTimer) return; //timer masih jalan
                app.countDownTimer = setInterval(function() {
                    let t = app.countDownCalculate(jam);

                    $('#right-counter .counter>h1').html(title);
                    $('#right-counter .counter>.hh').html(t.hours + '<span>' + app.db.timeName.Hours + '</span>');
                    $('#right-counter .counter>.ii').html(t.minutes + '<span>' + app.db.timeName.Minutes + '</span>');
                    $('#right-counter .counter>.ss').html(t.seconds + '<span>' + app.db.timeName.Seconds + '</span>');

                    $('#right-counter').slideDown();
                    $('#quote').hide();

                    if (t.distance < 1) {
                        clearInterval(app.countDownTimer);
                        app.countDownTimer = false;
                        $('#right-counter').fadeOut();
                        $('#quote').fadeIn();
                        // document.getElementById("demo").innerHTML = "EXPIRED";
                    }
                }, 1000);
            },
            countDownCalculate(jam) {
                let jamSekarang = moment(); //.subtract(2,'seconds');
                // console.log(jam.format('YYYY-MM-DD HH:mm:ss SSS'));
                // console.log(jamSekarang.format('YYYY-MM-DD HH:mm:ss SSS'));
                // --> jam.diff(jamSekarang, 'seconds') --> convert integer tanpa pembulatan (pembulatan ke bawah)
                let distance = Math.round(jam.diff(jamSekarang, 'seconds', true));
                // console.log(distance);
                let hours = Math.floor((distance % (60 * 60 * 24)) / (60 * 60));
                let minutes = Math.floor((distance % (60 * 60)) / 60);
                let seconds = Math.floor((distance % 60));
                hours = (hours >= 0 && hours < 10) ? '0' + hours : hours;
                minutes = (minutes >= 0 && minutes < 10) ? '0' + minutes : minutes;
                seconds = (seconds >= 0 && seconds < 10) ? '0' + seconds : seconds;
                // console.log(hours);
                return {
                    'distance': distance,
                    'hours': hours,
                    'minutes': minutes,
                    'seconds': seconds
                };
            }
        }
        app.initialize();
    </script>
</body>

</html>