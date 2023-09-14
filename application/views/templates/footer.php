<div class="modal fade" id="modalSetting" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Setting Size</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <select onchange="ganti_size()" name="size_card" id="size_card" class="form-control">
                    <?php
                    for ($i = 1; $i <= 99; $i++) {
                        echo '<option value="' . $i . '">' . $i . '</option>';
                    } ?>
                </select>
                <br>
                <select onchange="sizeSelectKanan0()" name="sizeSelectKanan" id="sizeSelectKanan" class="form-control">
                    <?php
                    for ($i = 1; $i <= 99; $i++) {
                        echo '<option value="' . $i . '">' . $i . '</option>';
                    } ?>
                </select>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<script>
    function sizeSelectKanan0() {
        kali = $('#sizeSelectKanan').val();
        kanan0 = [''];
        i = 0;
        while (i < 99) {
            i++;
            kanan0.push((290 + 15 * i) + 'px');
        }

        $(".kanan0").css("height", kanan0[kali]);

        // localStorage.setItem('sesMon_sizeSelectKanan0', kali);
    }

    function ganti_size() {
        kali = $('#size_card').val();
        lok00 = [''];
        lok00_2 = [''];
        lok00_3 = [''];
        ant00 = [''];
        ant00_2 = [''];
        i = 0;
        while (i < 99) {
            i++;
            lok00.push((35 + 1 * i) + 'px');
            lok00_2.push((50 + 2 * i) + 'px');
            lok00_3.push((50 + 1 * i) + 'px');
            ant00.push((60 + 2 * i) + 'px');
            ant00_2.push((80 + 5 * i) + 'px');
        }

        $("#card-imam").css("font-size", lok00[kali]).css("line-height", lok00_2[kali]).css("height", lok00_3[kali]);
        $("#card-kas").css("font-size", lok00[kali]).css("line-height", lok00_2[kali]).css("height", lok00_3[kali]);
        $("#card-video").css("font-size", lok00[kali]).css("line-height", lok00_2[kali]).css("height", lok00_3[kali]);
        // $("#card-kas").css("font-size", ant00[kali]).css("line-height", ant00_2[kali]).css("height", ant00_2[kali]);
    }


    function modalSetting() {
        $("#modalSetting").modal("show");



        // localStorage.setItem('sesMon_sizeSelect0', kali);

    }

    function sizeSelect0() {
        kali = $('#sizeSelect').val();
        lok00 = [''];
        lok00_2 = [''];
        lok00_3 = [''];
        ant00 = [''];
        ant00_2 = [''];
        i = 0;
        while (i < 15) {
            i++;
            lok00.push((35 + 1 * i) + 'px');
            lok00_2.push((50 + 2 * i) + 'px');
            lok00_3.push((50 + 1 * i) + 'px');
            ant00.push((60 + 2 * i) + 'px');
            ant00_2.push((80 + 5 * i) + 'px');
        }

        $(".lok00").css("font-size", lok00[kali]).css("line-height", lok00_2[kali]).css("height", lok00_3[kali]);
        $(".ant00").css("font-size", ant00[kali]).css("line-height", ant00_2[kali]).css("height", ant00_2[kali]);

        localStorage.setItem('sesMon_sizeSelect0', kali);
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/autonumeric/4.10.0/autoNumeric.min.js" integrity="sha512-IBnOW5h97x4+Qk4l3EcqmRTFKTgXTd4HGiY3C/GJKT5iJeJci9dgsFw4UAoVfi296E01zoDNb3AZsFrvcJJvPA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>