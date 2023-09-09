<script>
    var elem = document.getElementById("masjidnuruliman");

    function openFullscreen() {
        if (elem.requestFullscreen) {
            elem.requestFullscreen();
        } else if (elem.webkitRequestFullscreen) {
            /* Safari */
            elem.webkitRequestFullscreen();
        } else if (elem.msRequestFullscreen) {
            /* IE11 */
            elem.msRequestFullscreen();
        }
        setTimeout(cekFullScr, 500);
    }

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
    updateJam(); // Panggil fungsi untuk pertama kali
</script>