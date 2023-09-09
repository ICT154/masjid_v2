<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MASJID NURUL IMAN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <style>
        /* @import url('https://fonts.googleapis.com/css2?family=DM+Sans:opsz@9..40&display=swap'); */
        @import url('https://fonts.googleapis.com/css2?family=Ruwudu:wght@500&display=swap');

        * {
            font-family: 'Ruwudu', serif;

        }

        .wm__ticker {
            background: #7bae91;
            color: #ffffff;
        }

        .wm__ticker {
            height: 40px;
            transition: all 0.5s ease 0.1s;
        }

        ul.newstickers li {
            float: left;
            display: inline-block;
            margin: 8px 60px 8px 0;
            padding: 0;
            height: 24px;
            line-height: 24px;
            font-size: 15px;
            overflow: hidden;
        }

        .MPtimetable {
            border: solid 8px #ffffff;
            border-top: solid #ffffff;
        }

        .MPtimetable tr {
            background: #ffffff;
        }

        .scrolling-div {
            max-height: 300px;
            overflow-y: auto;
            border: 1px solid #ccc;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg text-light" style="background-color: #7bae91; ">
        <div class="container-fluid ">
            <a class="navbar-brand text-light" href="<?= base_url("auth") ?>">DASBOARD AKUN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-light" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="<?= base_url("auth") ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?= base_url("uang-kas") ?>">Uang Kas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?= base_url("jadwal-imam-khotib") ?>">Jadwal Imam & Khotib</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?= base_url("running-teks-berita") ?>">Running Text Berita</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <div class="container">
        <?= $this->session->flashdata('message'); ?>
    </div>