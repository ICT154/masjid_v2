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
            border: 2px dashed #fff;
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
            border: 0.2vw dashed #fff;
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
            background-image: url('https://blog.pintu.co.id/wp-content/uploads/2023/06/chatbot-ai-untuk-pecinta-kucing-catgpt.jpg');
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
            border: 0.2vw dashed #fff;
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
            border: 0.2vw dashed #fff;
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
            border: 0.2vw dashed #fff;
        }

        #teks-hari-syuruq {
            text-align: left;
            margin-left: 2vw;
        }

        #tampilan-jadwal {
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

        #detik-jadwal {
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
    </style>
</head>

<body>
    <main>
        <div id="left-container">
            <div id="nama-masjid" style="margin: 0vh 0 0 55vh; display:none;">Masjid Nurul Rochman
            </div>
            <div id="nama-masjid" style="font-size: 2vw; margin: 3vh 0 0 0; display:none;">Jl. Moch. Toha No.369, Ciseureuh, Kec. Regol, Kota Bandung, Jawa Barat
            </div>

            <div id="nama-hari" style="font-size: 2vw; margin: 3vh 0 0 0; display:none;">
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

            <div id="detik-jadwal" style="font-size: 6vw; margin: 10vw 0 0 0;">00:00:00
            </div>
            <div id="tampilan-jadwal" style="margin: 1vh 0 0px 0vh; font-size: 12vw;
">MENUJU <?= strtoupper($nama_sholat) ?>
            </div>

        </div>
        <div id="right-container">
            <div id="jam">10:30:27
            </div>

        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



    <div class="res-cek-jadwal-sholat"></div>
    <script>
        $(document).ready(function() {
            $('.carousel').carousel();
        });
        var jam_sholat = "<?= $jam_sholat ?>";
        var jamSholat = "<?= $jam_sholat ?>:00";

        function hitungSelisihWaktu(jamSholat) {
            // Mendapatkan waktu sekarang
            var waktuSekarang = new Date();

            // Memisahkan jam, menit, dan detik dari waktu sholat
            var jamDanMenitSholat = jamSholat.split(":");
            var jamSholatObj = new Date();
            jamSholatObj.setHours(parseInt(jamDanMenitSholat[0], 10));
            jamSholatObj.setMinutes(parseInt(jamDanMenitSholat[1], 10));
            jamSholatObj.setSeconds(parseInt(jamDanMenitSholat[2], 10));

            // Menghitung selisih waktu antara sekarang dan waktu sholat
            var selisihWaktu = jamSholatObj - waktuSekarang;

            // Menghitung jam, menit, dan detik dari selisih waktu
            var sisa = selisihWaktu;
            var jamMenujuSholat = Math.floor(sisa / (1000 * 60 * 60));
            sisa %= 1000 * 60 * 60;
            var menitMenujuSholat = Math.floor(sisa / (1000 * 60));
            sisa %= 1000 * 60;
            var detikMenujuSholat = Math.floor(sisa / 1000);

            return {
                jam: jamMenujuSholat,
                menit: menitMenujuSholat,
                detik: detikMenujuSholat
            };
        }

        // Fungsi untuk menampilkan selisih waktu menuju sholat secara berkala
        function cekSelisihWaktuMenujuSholat(jamSholat) {
            var selisihWaktu = hitungSelisihWaktu(jamSholat);

            // Tampilkan selisih waktu menuju sholat atau pesan sesuai kebutuhan
            console.log("Selisih waktu menuju sholat: " +
                selisihWaktu.jam + ":" +
                selisihWaktu.menit + ":" +
                selisihWaktu.detik + "  "
            );

            document.getElementById("detik-jadwal").innerHTML = selisihWaktu.jam + ":" +
                selisihWaktu.menit + ":" +
                selisihWaktu.detik + "  ";

            // Lakukan pengecekan setiap detik
            setTimeout(function() {
                cekSelisihWaktuMenujuSholat(jamSholat);
            }, 1000);
        }

        cekSelisihWaktuMenujuSholat(jamSholat);


        function cek_jadwal_sholat() {
            $.ajax({
                url: "<?= base_url("cek-jadwal-sholat-adzan") ?>",
                type: "get",
                success: function(msg) {
                    $(".res-cek-jadwal-sholat").html(msg);
                }
            });
        }
        setInterval(cek_jadwal_sholat, 3000);

        cek_jadwal_sholat();



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