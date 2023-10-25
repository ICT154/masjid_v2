<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masjid | Display</title>
    <style>
        html,
        body,
        video {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }
    </style>
</head>

<body>
    <video id="myVideo" width="100%" height="100%" controls autoplay loop>
        <source src="<?= base_url("storage/uploads_docs/video_tester.mp4") ?>" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <script>
        function checkTime() {
            var now = new Date();
            var hours = now.getHours();
            if (hours >= 11) {
                location.reload();
            }
        }
        setInterval(checkTime, 1000); // Menjalankan fungsi checkTime setiap detik (1000 milidetik)
    </script>
</body>

</html>