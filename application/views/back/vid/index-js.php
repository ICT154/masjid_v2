<script>
    $(document).ready(function() {
        $('#upload-form').submit(function(e) {
            e.preventDefault();

            var formData = new FormData(this);
            var progressBar = $('.progress-bar');
            progressBar.show();
            $("#progress-upload-video").show();
            $.ajax({
                url: '<?php echo base_url("video-upload-setting"); ?>', // Ganti dengan URL Anda
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                xhr: function() {
                    var xhr = new window.XMLHttpRequest();
                    xhr.upload.addEventListener('progress', function(e) {
                        if (e.lengthComputable) {
                            var percent = (e.loaded / e.total) * 100;
                            progressBar.width(percent + '%');
                        }
                    });
                    return xhr;
                },
                success: function(response) {
                    $("#result-upload-video").html(response);
                },
                error: function(xhr) {
                    // Tindakan jika pengunggahan gagal
                }
            });
        });
    });
</script>