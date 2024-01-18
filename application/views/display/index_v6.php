<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
            background-color: #544157;
        }

        main {
            flex: 1;
            padding: 20px;
            /* Add padding to the main content */
        }

        .row-cols-vh {
            display: flex;
            flex-wrap: wrap;
            margin: -10px;
            /* Adjust margin as needed */
        }

        .col-vh {
            flex: 1;
            padding: 10px;
            /* Adjust padding as needed */
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            height: 3.5vw;
            width: 100vw;
            color: #fff;
            height: 3.5vw;
            width: 100vw;
            color: #fff;
            margin: 3vh 0 0 0;
            background-color: #090811;
            position: fixed;
            bottom: 0;
            right: 0;
            border-radius: 5px;
        }

        .teks-hari-atas {
            background-color: #333;
            color: #fff;
            text-align: center;
            font-size: 4vw;
            /* height:90px; */
            line-height: 0.8;
            /* background:#F00; */
            text-align: center;
            margin: 0vh 0 0 0;
            padding: 0 4vw 0 0;
            /* font-family: 'OpenSansCondLight', Impact,'Times New Roman', Helvetica, Arial, sans-serif;  */
            font-weight: bold;
            color: #FFF;
            position: relative;
            background-color: #090811;
            position: fixed;
            bottom: 0;
            right: 0;
            border-radius: 5px;
            /* border: 2px dashed #fff; */
        }


        #markue {
            position: absolute;
            /* left: 5.5vw; */
            right: 0.5vw;
            height: 100%;
            overflow: hidden;
            font-family: 'Titillium Web', 'OpenSansCondLight', Helvetica, Arial, sans-serif;
            padding-top: 0.3vw;
            font-size: 2.1vw;
            white-space: nowrap;
        }

        #left-container {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            width: 85vw;
            /* background-color:#fff; */
            /* background: linear-gradient(90deg, rgba(0, 0, 0, 1) 0%, rgba(0, 0, 0, 0.9) 40%, rgba(0, 0, 0, 0.7) 100%); */
            /* box-shadow: 0 0 20vw 20vw rgba(0, 0, 0, 0.7); */
            /* background-image: url(../img/bg-pattern-01.png); */
        }

        #left-container:before {
            display: block;
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background-image: url(../img/bg-pattern-01.png);
            opacity: 0.6;
        }


        #jam {
            font-size: 6vw;
            /* height:90px; */
            line-height: 0.8;
            /* background:#F00; */
            text-align: center;
            margin: 0vh 0 0 0;
            padding: 0 4vw 0 0;
            /* font-family: 'OpenSansCondLight', Impact,'Times New Roman', Helvetica, Arial, sans-serif;  */
            font-weight: bold;
            color: #FFF;
            position: relative;
        }

        #jam div {
            position: absolute;
            top: 0.2vw;
            right: 3vw;
            /* background:#33cccc; */
            color: #33cccc;
            line-height: 0.8;
            width: 4vw;
            font-size: 3vw;
            font-weight: bold;
            font-family: 'Titillium Web', Helvetica, Arial, sans-serif;
            border-left: 0.7px solid rgba(255, 255, 255, 0.6);
            /* padding-left: 1.1vw; */
        }

        #right-container {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 75vw;
            background-color: #45395d;
        }

        #running-text:before {
            display: block;
            content: "";
            position: absolute;
            height: 3.5vw;
            width: 5vw;
            top: 0;
            left: 0;
            background-color: #e2ad00;
            border-radius: 5px;
            background-image: url(../img/pattern01.png);
            background-size: contain;
            background-position: center center;
            background-repeat: no-repeat;

        }

        #nama-masjid {
            font-size: 4vw;
            /* height:90px; */
            line-height: 0.8;
            /* background:#F00; */
            text-align: center;
            margin: 0vh 0 0 0;
            padding: 0 4vw 0 0;
            /* font-family: 'OpenSansCondLight', Impact,'Times New Roman', Helvetica, Arial, sans-serif;  */
            font-weight: bold;
            color: #FFF;
            position: relative;
        }

        .bg-image {
            background-image: url('https://placehold.it/706x362');
            opacity: 0.6;
            position: absolute;
            top: 108px;
            right: 0;
            bottom: 0;
            left: 0;
            background-repeat: no-repeat;
            position: fixed;
        }

        #nama-hari {

            text-align: center;
            margin: 0vh 0 0 0;
            padding: 0 4vw 0 0;
            /* font-family: 'OpenSansCondLight', Impact,'Times New Roman', Helvetica, Arial, sans-serif;  */
            font-weight: bold;
            color: #FFF;
            position: fixed;
            background-color: #a585a2;
            margin: 3vh 0 0 0;
            height: 3.5vw;
            width: 75vw;
            /* border: 0.2vw dashed #fff; */
        }

        .teks-hari {
            text-align: left;
            margin-left: 2vw;
        }

        .teks-bulan {
            text-align: right;
            margin-right: 25vw;
            margin-top: -3vw;
        }

        .teks-hijriah {
            text-align: right;
            margin-right: -3vw;
            margin-top: -3vw;
        }

        #bg-image {
            /* background-image: url('https://blog.pintu.co.id/wp-content/uploads/2023/06/chatbot-ai-untuk-pecinta-kucing-catgpt.jpg'); */
            /* background-image: url('https://placehold.it/360x900'); */
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            text-align: center;
            padding: 0 4vw 0 0;
            /* font-family: 'OpenSansCondLight', Impact,'Times New Roman', Helvetica, Arial, sans-serif;  */
            font-weight: bold;
            color: #FFF;
            position: fixed;
            background-color: #a585a2;
            height: 30vw;
            width: 75vw;
            /* border: 0.2vw dashed #fff; */
            transition: background-image 1s ease-in-out;
        }


        .background-transition {
            /* Tambahkan efek transisi pada elemen yang mengandung kelas ini */
            transition: background-image 1s ease-in-out;
        }

        #jadwal-sholat-subuh {
            text-align: center;
            margin: 0vh 0 0 0;
            padding: 0 4vw 0 0;
            /* font-family: 'OpenSansCondLight', Impact,'Times New Roman', Helvetica, Arial, sans-serif;  */
            font-weight: bold;
            color: #FFF;
            position: fixed;
            background-color: #070711;
            margin: 3vh 0 0 0;
            height: 3.5vw;
            width: 24vw;
            /* border: 0.2vw dashed #fff; */
        }

        #jadwal-sholat-syuruq {
            text-align: center;
            margin: 0vh 0 0 0;
            padding: 0 4vw 0 0;
            /* font-family: 'OpenSansCondLight', Impact,'Times New Roman', Helvetica, Arial, sans-serif;  */
            font-weight: bold;
            color: #FFF;
            position: fixed;
            background-color: #f5a934;
            margin: 3vh 0 0 0;
            height: 3.5vw;
            width: 24vw;
            /* border: 0.2vw dashed #fff; */
        }

        #teks-hari-syuruq {
            text-align: left;
            margin-left: 2vw;
        }
    </style>
</head>

<body>
    <main>
        <div id="left-container">
            <div id="nama-masjid" style="margin: 0vh 30vh 0 20vh;">MASJID NURUL RAHMAN
            </div>
            <div id="nama-masjid" style="font-size: 2vw; margin: 3vh 0 0 0;">Jl. Moch. Toha No.369, Ciseureuh, Kec. Regol, Kota Bandung, Jawa Barat
            </div>

            <div id="nama-hari" style="font-size: 2vw; margin: 3vh 0 0 0;">
                <div class="teks-hari" id="hari-ini">
                    Rabu / Arba'a
                </div>
                <div class="teks-bulan" id="bulan-indo">
                    19 Desember 2023
                </div>
                <div class="teks-hijriah" id="bulan-arab">
                    19 Desember 2023
                </div>
            </div>

            <div id="bg-image" style="font-size: 2vw; margin: 11vh 0 0 0;">
            </div>
        </div>
        <div id="right-container">
            <div id="jam">10:30:27
            </div>
            <div id="jadwal-sholat-subuh" style="font-size: 2vw; margin: 6vh 0 0 0.5vw;">
                <div class="teks-hari" id="subuh-jam" style="margin-left: 5vw; color:#ddecb6;">

                </div>
            </div>
            <div id="jadwal-sholat-syuruq" style="font-size: 2vw; margin: 15vh 0 0 0.5vw;">
                <div class="teks-hari-syuruq" id="syuruq-jam" style="margin-left: 4vw; color:#fff;">

                </div>
            </div>
            <div id="jadwal-sholat-subuh" style="font-size: 2vw; margin: 24vh 0 0 0.5vw;  background-color: #c842ff;">
                <div class="teks-hari" id="dzuhur-jam" style="margin-left: 4vw; color:#FFF;">

                </div>
            </div>

            <div id="jadwal-sholat-subuh" style="font-size: 2vw; margin: 33vh 0 0 0.5vw;  background-color: #f02abc;">
                <div class="teks-hari" id="ashar-jam" style="margin-left: 4vw; color:#FFF;">

                </div>
            </div>

            <div id="jadwal-sholat-subuh" style="font-size: 2vw; margin: 42vh 0 0 0.5vw;  background-color: #99b1df;">
                <div class="teks-hari" id="maghrib-jam" style="margin-left: 3vw; color:#FFF;">

                </div>
            </div>


            <div id="jadwal-sholat-subuh" style="font-size: 2vw; margin: 51vh 0 0 0.5vw;  background-color: #f66966;">
                <div class="teks-hari" id="isya-jam" style="margin-left: 6vw; color:#FFF;">

                </div>
            </div>
        </div>
    </main>

    <footer>
        <marquee behavior="" direction="" id="markue">
            <?php
            // Menggunakan null coalescing untuk memastikan variabel memiliki nilai default jika null
            // $saldo_akhir = (($TotalPemasukanMingguKemarin ?? 0) - ($TotalPengeluaranMingguKemaren ?? 0) + ($TotalPemasukanMingguIni ?? 0)) - ($TotalPengeluaranMingguIni ?? 0);

            $saldo_akhir = ($TotalPemasukanMingguKemarin ?? 0 - $TotalPengeluaranMingguKemaren ?? 0) + ($TotalPemasukanMingguIni ?? 0) + ($TotalPengeluaranMingguIni ?? 0);
            ?>

            <?= $DataRunningText['isi'] ?? '' ?> |
            IMAM : <?= $dataimam['imam'] ?? '' ?> | KHOTIB : <?= $dataimam['khatib'] ?? '' ?> |
            SALDO SEBELUMNYA : Rp. <?= $this->GZL->number_format($TotalPemasukanMingguKemarin ?? 0 - $TotalPengeluaranMingguKemaren ?? 0, 2, ",", ".") ?> |
            PENERIMAAN : Rp. <?= $this->GZL->number_format($TotalPemasukanMingguIni ?? 0, 2, ",", ".") ?> |
            PENGELUARAN : Rp. <?= $this->GZL->number_format($TotalPengeluaranMingguIni ?? 0, 2, ",", ".") ?> |
            SALDO AKHIR : Rp. <?= $this->GZL->number_format($saldo_akhir ?? 0, 2, ",", ".") ?>
        </marquee>

    </footer>
    <p id="selected-prayer-time"></p>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script>
        <?php
        $data_bg = array();

        foreach ($dataBackground as $key) {
            $data_bg[] = array(
                'nama_file' => base_url("storage/uploads_docs/" . $key->nama_file)
            );
        }

        ?>
        var jsArray = <?php echo json_encode($data_bg); ?>;
        var currentIndex = 0;
        var bgImageElement = document.getElementById('bg-image');

        function changeBackgroundImage() {
            if (jsArray.length > 0) {

                bgImageElement.classList.remove('background-transition');


                bgImageElement.style.backgroundImage = 'url(' + jsArray[currentIndex].nama_file + ')';
                currentIndex = (currentIndex + 1) % jsArray.length;


                setTimeout(() => {
                    bgImageElement.classList.add('background-transition');
                }, 0);
            }
        }
        setInterval(changeBackgroundImage, 5000);
    </script>

    <div class="res-cek-jadwal-sholat"></div>
    <script>
        $(document).ready(function() {
            $('.carousel').carousel();
        });


        function cek_jadwal_sholat() {
            $.ajax({
                url: "<?= base_url("cek-jadwal-sholat") ?>",
                type: "get",
                success: function(msg) {
                    $("#selected-prayer-time").html(msg);
                }
            });
        }
        setInterval(cek_jadwal_sholat, 2000);

        cek_jadwal_sholat();

        const apiUrl = "https://www.islamicfinder.us/index.php/api/prayer_times?user_ip=103.147.9.227&method=3&time_format=0";

        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                // Proses hasil API sesuai kebutuhan Anda
                const prayerTimes = data.results;
                const settings = data.settings;

                console.log("Prayer Times:");
                console.log(prayerTimes);

                document.getElementById("subuh-jam").innerHTML = "SUBUH : " + prayerTimes.Fajr;
                document.getElementById("syuruq-jam").innerHTML = "SYURUQ : " + prayerTimes.Duha;
                document.getElementById("dzuhur-jam").innerHTML = "DZUHUR : " + prayerTimes.Dhuhr;
                document.getElementById("ashar-jam").innerHTML = "ASHAR : " + prayerTimes.Asr;
                document.getElementById("maghrib-jam").innerHTML = "MAGHRIB : " + prayerTimes.Maghrib;
                document.getElementById("isya-jam").innerHTML = "ISYA : " + prayerTimes.Isha;

                console.log("\nSettings:");
                console.log(settings);


                /// AMBIL JAM SEKARANG
                const currentTime = new Date();
                const currentMinutes = currentTime.getHours() * 60 + currentTime.getMinutes();

                /// CEK APAKAH 15 MENIT DARI JAM SEKARANG SUDAH MELEWATI DIANTARA SEMUA JAM SHOLAT, JIKA SUDAH MELEWATI MAKAN TAMPILKAN JAM SHOLAT SELANJUTNYA DAN BERI TAHU APA NAMA JADWAL SHHOLATNYA

                const nextPrayerTimes = ["Fajr", "Duha", "Dhuhr", "Asr", "Maghrib", "Isha"];
                let nextPrayerTime = "";
                for (const prayerTime of nextPrayerTimes) {
                    const prayerMinutes = parseInt(prayerTimes[prayerTime].split(":")[0]) * 60 +
                        parseInt(prayerTimes[prayerTime].split(":")[1]);
                    if (prayerMinutes > currentMinutes + 15) {
                        nextPrayerTime = prayerTime;
                        break;
                    }
                }


                // Display the next prayer time
                if (nextPrayerTime !== "") {
                    console.log(`Next prayer time: ${nextPrayerTime} at ${prayerTimes[nextPrayerTime]}`);
                }


                // Display the current prayer time
                let currentPrayerTime = "";
                for (const prayerTime of nextPrayerTimes) {
                    const prayerMinutes = parseInt(prayerTimes[prayerTime].split(":")[0]) * 60 +
                        parseInt(prayerTimes[prayerTime].split(":")[1]);
                    if (prayerMinutes > currentMinutes) {
                        currentPrayerTime = prayerTime;
                        break;
                    }
                }



            }) // Jangan lupa menangani hasil error fetch
            .catch(error => console.log(error));





        function getNamaHari() {
            const namaHari = ["Minggu / Ahadi", "Senin / Itsnaaini", "Selasa / Tsulaatsaa", "Rabu / Arbi’aa", "Kamis / Khomiisi", "Jumat / Jumu’ati", "Sabtu / Sabti"];
            const hariIni = new Date().getDay();

            return namaHari[hariIni];
        }
        document.getElementById('hari-ini').innerHTML = getNamaHari();

        function getTanggalSekarang() {
            const options = {
                day: "numeric",
                month: "long",
                year: "numeric"
            };
            const tanggalSekarang = new Date().toLocaleDateString("id-ID", options);
            return tanggalSekarang;
        }
        document.getElementById('bulan-indo').innerHTML = getTanggalSekarang();

        function gmod(n, m) {
            return ((n % m) + m) % m;
        }

        function kuwaiticalendar(adjust) {
            var today = new Date();
            if (adjust) {
                adjustmili = 1000 * 60 * 60 * 24 * adjust;
                todaymili = today.getTime() + adjustmili;
                today = new Date(todaymili);
            }
            day = today.getDate();
            month = today.getMonth();
            year = today.getFullYear();
            m = month + 1;
            y = year;
            if (m < 3) {
                y -= 1;
                m += 12;
            }

            a = Math.floor(y / 100.);
            b = 2 - a + Math.floor(a / 4.);
            if (y < 1583) b = 0;
            if (y == 1582) {
                if (m > 10) b = -10;
                if (m == 10) {
                    b = 0;
                    if (day > 4) b = -10;
                }
            }

            jd = Math.floor(365.25 * (y + 4716)) + Math.floor(30.6001 * (m + 1)) + day + b - 1524;

            b = 0;
            if (jd > 2299160) {
                a = Math.floor((jd - 1867216.25) / 36524.25);
                b = 1 + a - Math.floor(a / 4.);
            }
            bb = jd + b + 1524;
            cc = Math.floor((bb - 122.1) / 365.25);
            dd = Math.floor(365.25 * cc);
            ee = Math.floor((bb - dd) / 30.6001);
            day = (bb - dd) - Math.floor(30.6001 * ee);
            month = ee - 1;
            if (ee > 13) {
                cc += 1;
                month = ee - 13;
            }
            year = cc - 4716;

            if (adjust) {
                wd = gmod(jd + 1 - adjust, 7) + 1;
            } else {
                wd = gmod(jd + 1, 7) + 1;
            }

            iyear = 10631. / 30.;
            epochastro = 1948084;
            epochcivil = 1948085;

            shift1 = 8.01 / 60.;

            z = jd - epochastro;
            cyc = Math.floor(z / 10631.);
            z = z - 10631 * cyc;
            j = Math.floor((z - shift1) / iyear);
            iy = 30 * cyc + j;
            z = z - Math.floor(j * iyear + shift1);
            im = Math.floor((z + 28.5001) / 29.5);
            if (im == 13) im = 12;
            id = z - Math.floor(29.5001 * im - 29);

            var myRes = new Array(8);

            myRes[0] = day; //calculated day (CE)
            myRes[1] = month - 1; //calculated month (CE)
            myRes[2] = year; //calculated year (CE)
            myRes[3] = jd - 1; //julian day number
            myRes[4] = wd - 1; //weekday number
            myRes[5] = id; //islamic date
            myRes[6] = im - 1; //islamic month
            myRes[7] = iy; //islamic year

            return myRes;
        }

        function writeIslamicDate(adjustment) {
            var wdNames = new Array("Ahad", "Ithnin", "Thulatha", "Arbaa", "Khams", "Jumuah", "Sabt");
            var iMonthNames = new Array("Muharram", "Safar", "Rabi'ul Awwal", "Rabi'ul Akhir",
                "Jumadil Awal", "Jumadil Akhir", "Rajab", "Sha'ban",
                "Ramadhan", "Syawal", "Dzulqa'dah", "Dzul Hijjah");
            var iDate = kuwaiticalendar(adjustment);
            // var outputIslamicDate = wdNames[iDate[4]] + ", " +
            //     iDate[5] + " " + iMonthNames[iDate[6]] + " " + iDate[7] + " AH";

            var outputIslamicDate = iDate[5] + " " + iMonthNames[iDate[6]] + " " + iDate[7] + " H";
            return outputIslamicDate;
        }

        document.getElementById('bulan-arab').innerHTML = writeIslamicDate();

        function updateJam() {
            const sekarang = new Date();
            const jam = sekarang.getHours();
            const menit = sekarang.getMinutes();
            const detik = sekarang.getSeconds();

            const jamFormat = String(jam).padStart(2, '0');
            const menitFormat = String(menit).padStart(2, '0');
            const detikFormat = String(detik).padStart(2, '0');

            const jamLive = `${jamFormat}:${menitFormat}:${detikFormat}`;

            document.getElementById('jam').innerHTML = jamLive;
        }
        setInterval(updateJam, 1000); // Update setiap 1 detik
        updateJam();
    </script>

</body>

</html>