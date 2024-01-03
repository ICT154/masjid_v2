<div class="container mt-3">
    <div class="row">
        <div class="col">
            <button class="btn btn-outline-success mt-1" onclick="previousMonth()">
                <i class="fa-solid fa-backward"></i>
            </button>
            <button id="currentMonth" class="btn btn-outline-success mt-1" disabled>
                <?= date('M') ?> <?= date("Y") ?>
            </button>
            <button class="btn btn-outline-success mt-1" onclick="nextMonth()">
                <i class="fa-solid fa-forward"></i>
            </button>
            <!-- <a href="<?= base_url("maps") ?>" class="btn btn-outline-primary mt-1">GANTI LOKASI JADWAL SHOLAT</a> -->
            <!-- <a href="<?= base_url("logo") ?>" class="btn btn-outline-primary mt-1">GANTI LOGO</a> -->
            <a href="<?= base_url('background') ?>" class="btn btn-outline-primary mt-1">GANTI GAMBAR BACKGROUND</a>
        </div>
    </div>

    <div class="row" id="cards-container">

    </div>
</div>
<br><br>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
    var currentMonthIndex = <?= date('m')  ?>; // Index 9 untuk Oktober
    var currentYear = <?= date("Y") ?>;

    function previousMonth() {
        if (currentMonthIndex > 0) {
            currentMonthIndex -= 1;
        } else {
            currentMonthIndex = 11;
            currentYear -= 1;
        }
        updateMonth();
        $.ajax({
            url: "<?= base_url("get-data-by-month") ?>",
            type: "POST",
            data: {
                month: currentMonthIndex + 1,
                year: currentYear
            },
            success: function(response) {
                $("#cards-container").html(response);
            }
        });
        // generateCards();
    }

    function nextMonth() {
        if (currentMonthIndex < 11) {
            currentMonthIndex += 1;
        } else {
            currentMonthIndex = 0;
            currentYear += 1;
        }
        updateMonth();
        $.ajax({
            url: "<?= base_url("get-data-by-month") ?>",
            type: "POST",
            data: {
                month: currentMonthIndex + 1,
                year: currentYear
            },
            success: function(response) {
                $("#cards-container").html(response);
            }
        });
        // generateCards();
    }

    function updateMonth() {
        var currentMonthElement = document.getElementById('currentMonth');
        currentMonthElement.innerText = months[currentMonthIndex] + ' ' + currentYear;
    }

    function generateCards() {
        var cardsContainer = document.getElementById('cards-container');
        cardsContainer.innerHTML = ""; // Clear existing cards

        // Logic to generate 4 cards for each Friday of the current month
        for (var i = 1; i <= 4; i++) {
            var card = `
            <div class="col-lg-4"> 
            <div class="card mt-3">
                <div class="card-header">
                    Jumat Minggu Ke-${i} <br>(${getFridayDate(i)} ${months[currentMonthIndex]} ${currentYear})
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item disabled">Data</li>
                        <li class="list-group-item text-light bg-success">Imam & Khotib <i class="fa-regular fa-circle-check"></i></li>
                        <li class="list-group-item text-light bg-danger ">Kas <i class="fa-regular fa-circle-xmark"></i></li>
                        <li class="list-group-item text-light bg-danger">Hadist / Quote <i class="fa-regular fa-circle-xmark"></i></li>
                        <li class="list-group-item text-light bg-danger">Running Text <i class="fa-regular fa-circle-xmark"></i></li>
                    </ul>
                </div>
            </div>
            </div>
            `;
            cardsContainer.innerHTML += card;
        }
    }

    // Function to get the date of the Friday for a specific week in the current month
    function getFridayDate(weekNumber) {
        var d = new Date(currentYear, currentMonthIndex, 1);
        var day = d.getDay();

        // Calculate the date of the first Friday
        var firstFridayDate = 6 - day + (weekNumber - 1) * 7;

        // Adjust if the first Friday is not in the current month
        if (firstFridayDate <= 0) {
            firstFridayDate += 7;
        }

        return firstFridayDate;
    }

    // Initial generation of cards on page load
    // updateMonth();
    // generateCards();
    function update_card() {
        $.ajax({
            url: "<?= base_url("get-data-by-month") ?>",
            type: "POST",
            data: {
                month: currentMonthIndex,
                year: currentYear
            },
            success: function(response) {
                $("#cards-container").html(response);
            }
        });
    }

    update_card();
</script>