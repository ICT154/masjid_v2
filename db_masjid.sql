-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Sep 2023 pada 06.11
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_masjid`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_admm`
--

CREATE TABLE `t_admm` (
  `username` varchar(20) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `kota` varchar(20) NOT NULL,
  `negara` varchar(20) NOT NULL,
  `tlp` varchar(20) NOT NULL,
  `tgl_log_akhir` datetime NOT NULL,
  `tgl_log_akhir_tmp` datetime NOT NULL,
  `aktivasi` varchar(40) NOT NULL,
  `tgl_aktivasi` datetime NOT NULL,
  `IP` varchar(30) NOT NULL COMMENT 'log ip now',
  `priv` text NOT NULL,
  `lvl` varchar(10) NOT NULL,
  `created` datetime NOT NULL,
  `created_by` varchar(20) NOT NULL,
  `last_updated` datetime NOT NULL,
  `updated_by` varchar(20) NOT NULL,
  `note` text NOT NULL,
  `id_bag` varchar(20) NOT NULL,
  `surat_prv` text NOT NULL,
  `idf_agen` varchar(20) NOT NULL,
  `jabatan_a` varchar(50) NOT NULL,
  `idf_user_m` varchar(50) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `idf_sr` varchar(50) NOT NULL,
  `idf_ssr` varchar(50) NOT NULL,
  `expire` date NOT NULL,
  `created_by_tree` varchar(50) NOT NULL,
  `priv_jns_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_admm`
--

INSERT INTO `t_admm` (`username`, `pass`, `nama`, `email`, `alamat`, `kota`, `negara`, `tlp`, `tgl_log_akhir`, `tgl_log_akhir_tmp`, `aktivasi`, `tgl_aktivasi`, `IP`, `priv`, `lvl`, `created`, `created_by`, `last_updated`, `updated_by`, `note`, `id_bag`, `surat_prv`, `idf_agen`, `jabatan_a`, `idf_user_m`, `gambar`, `idf_sr`, `idf_ssr`, `expire`, `created_by_tree`, `priv_jns_user`) VALUES
('adminos', '97f014516561ef487ec368d6158eb3f4', 'Adminos', 'secretariat@penabulu-stpi.id', 'tebet', '', '', '022-763748470', '2014-03-31 20:50:47', '2013-06-15 10:31:34', '', '0000-00-00 00:00:00', '127.0.0.1', '', '1', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', '', '', '', '', 'M&E PR', '', 'adminos_20180704114418.jpg', '', '', '2019-12-31', '', ''),
('adminoslintasdata', '5992c1caac81a546609da636805d2fac', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', '', '1', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', '', '', '', '', 'M&E PR', '', '', '', '', '2019-12-31', '', ''),
('silver', '97f014516561ef487ec368d6158eb3f4', 'Silver', '', ' , ,', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '127.0.0.1', '', '1', '2017-08-26 13:07:18', 'adminos', '0000-00-00 00:00:00', '', '', '', '', '', 'M&E PR', '', '', '', '', '2019-12-31', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_img_data`
--

CREATE TABLE `t_img_data` (
  `idf_img` varchar(20) NOT NULL,
  `nama_img` varchar(50) NOT NULL,
  `ket_img` text NOT NULL,
  `tgl_img` datetime NOT NULL,
  `img_for` varchar(30) NOT NULL,
  `table_name` varchar(50) NOT NULL,
  `table_idf` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_jadwal`
--

CREATE TABLE `t_jadwal` (
  `idf_jadwal` varchar(50) NOT NULL DEFAULT '',
  `tanggal` date DEFAULT NULL,
  `khotib` varchar(50) DEFAULT NULL,
  `minggu_ke` varchar(50) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_jadwal`
--

INSERT INTO `t_jadwal` (`idf_jadwal`, `tanggal`, `khotib`, `minggu_ke`, `status`) VALUES
('Z20230905001', '2023-09-05', 'budi', 'Minggu ke 1', 0),
('Z20230905002', '2023-09-05', 'umar', 'Minggu ke 2', 1),
('Z20230905003', '2023-09-05', 'afwan', 'Minggu ke 3', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_jadwal_imam_khatib`
--

CREATE TABLE `t_jadwal_imam_khatib` (
  `id_jadwal` varchar(50) NOT NULL,
  `imam` varchar(50) NOT NULL,
  `khatib` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(50) NOT NULL,
  `date_g` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_jadwal_imam_khatib`
--

INSERT INTO `t_jadwal_imam_khatib` (`id_jadwal`, `imam`, `khatib`, `tanggal`, `status`, `date_g`) VALUES
('JAD9642ARTAHS', 'K.H Agus Salim', 'K.H Agus Salim', '2023-09-08', '1', '2023-09-07 05:46:23'),
('JADSCSZVQ', 'Ust. Yusuf Mansur', 'Ust. Yusuf Mansur', '2023-09-15', '1', '2023-09-09 06:44:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_loghistory`
--

CREATE TABLE `t_loghistory` (
  `time` datetime NOT NULL,
  `username` varchar(30) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `log_name` varchar(100) NOT NULL,
  `id_log` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_loghistory`
--

INSERT INTO `t_loghistory` (`time`, `username`, `ip`, `log_name`, `id_log`) VALUES
('2023-04-05 10:50:58', 'silver', '127.0.0.1', 'login', 1),
('2023-04-08 10:06:38', 'silver', '127.0.0.1', 'login', 2),
('2023-04-11 11:44:32', 'silver', '127.0.0.1', 'login', 3),
('2023-04-15 09:50:51', 'silver', '127.0.0.1', 'login', 4),
('2023-04-17 09:59:42', 'silver', '127.0.0.1', 'login', 5),
('2023-04-27 10:17:00', 'silver', '127.0.0.1', 'login', 6),
('2023-05-06 13:26:21', 'silver', '127.0.0.1', 'login', 7),
('2023-05-08 09:39:10', 'silver', '127.0.0.1', 'login', 8),
('2023-05-09 12:50:57', 'silver', '127.0.0.1', 'login', 9),
('2023-05-15 09:51:20', 'silver', '127.0.0.1', 'login', 10),
('2023-05-15 10:05:57', 'silver', '127.0.0.1', 'login', 11),
('2023-06-05 11:13:06', 'silver', '127.0.0.1', 'login', 12),
('2023-06-05 12:56:56', 'silver', '127.0.0.1', 'Hapus (Data Investigasi Kontak : IK-000001)', 13),
('2023-06-05 13:39:24', 'silver', '127.0.0.1', 'Input (Invesuigasi Kontak Rumah Tangga: IK-000001)', 14),
('2023-06-07 11:07:02', 'silver', '127.0.0.1', 'Hapus (Data Profil - UIC :)', 15),
('2023-06-07 11:40:33', 'silver', '127.0.0.1', 'Hapus (Data Profil - UIC :4)', 16),
('2023-06-13 11:14:20', 'silver', '127.0.0.1', 'login', 17),
('2023-06-13 11:15:13', 'silver', '127.0.0.1', 'Hapus (Data Investigasi Kontak : IK-000001)', 18),
('2023-06-15 05:46:53', 'silver', '127.0.0.1', 'login', 19),
('2023-06-15 09:52:41', 'silver', '127.0.0.1', 'login', 20),
('2023-06-27 10:39:51', 'silver', '127.0.0.1', 'login', 21),
('2023-06-28 10:13:41', 'silver', '127.0.0.1', 'logout', 22),
('2023-06-28 10:14:08', 'testttt', '127.0.0.1', 'login', 23),
('2023-07-01 11:59:43', 'silver', '127.0.0.1', 'login', 24),
('2023-07-01 21:36:41', 'silver', '127.0.0.1', 'Insert (Bot Telegram:Z20230701001)', 25),
('2023-09-02 13:49:14', 'silver', '127.0.0.1', 'login', 26),
('2023-09-04 10:23:05', 'silver', '127.0.0.1', 'Insert (Kas Saldo:Z20230904001)', 27),
('2023-09-04 10:23:40', 'silver', '127.0.0.1', 'Insert (Kas Saldo:Z20230904002)', 28),
('2023-09-04 12:22:38', 'silver', '127.0.0.1', 'Insert (Kas Saldo:Z20230904003)', 29),
('2023-09-04 12:22:58', 'silver', '127.0.0.1', 'Insert (Kas Saldo:Z20230904004)', 30),
('2023-09-04 12:57:07', 'silver', '127.0.0.1', 'Insert (Kas Saldo:Z20230904005)', 31),
('2023-09-05 05:00:15', 'silver', '127.0.0.1', 'Insert (Kas Saldo:Z20230905001)', 32),
('2023-09-05 05:00:35', 'silver', '127.0.0.1', 'Insert (Kas Saldo:Z20230905002)', 33),
('2023-09-05 06:36:59', 'silver', '127.0.0.1', 'Insert (Jadwal:Z20230905001)', 34),
('2023-09-05 06:37:23', 'silver', '127.0.0.1', 'Insert (Jadwal:Z20230905002)', 35),
('2023-09-05 06:37:36', 'silver', '127.0.0.1', 'Insert (Jadwal:Z20230905003)', 36),
('2023-09-05 09:42:53', 'silver', '::1', 'login', 37),
('2023-09-06 09:45:40', 'silver', '::1', 'login', 38),
('2023-09-07 09:26:44', 'silver', '::1', 'login', 39),
('2023-09-07 09:57:18', 'silver', '::1', 'logout', 40);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_modul`
--

CREATE TABLE `t_modul` (
  `nama` varchar(100) NOT NULL,
  `ket` varchar(50) NOT NULL,
  `act` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_modul`
--

INSERT INTO `t_modul` (`nama`, `ket`, `act`) VALUES
('mod0', 'Modul Dashboard', 'mod0|dashboard|profile|'),
('mod1', 'Modul Profil', 'mod1|pasien|pasien_f|'),
('mod10', 'Modul Laporan', 'mod10|lr_inves_kontak|lf_tbc16|lr_kotakab_terduga|lr_kotakab_terduga_dirujuk|lr_kotakab_kasus_dirujuk|lr_kotakab_kasus_non_dirujuk|lr_tb_ro_rekap|lap_capaian_nasional|lr_hal_muka|lr_kader|lr_kinerja_kader|lr_kotakab_pengobatan|lap_narasi|lr_intervensi_terduga|lr_intervensi_kasus|'),
('mod11', 'Modul Tambah Wilayah', 'mod11|wilayah|wilayah_f|kotakab|kotakab_f|kec|kec_f|'),
('mod12', 'Modul Tambah SR/SSR', 'mod12|ssr|ssr_f|reciepient|reciepient_f|'),
('mod13', 'Modul Fasyankes', 'mod13|fasyankes|fasyankes_f|'),
('mod14', 'Modul Kader', 'mod14|kader|kader_f|'),
('mod15', 'Modul Kegiatan TBC RO', 'mod15|kegiatan_ro|kegiatan_ro_f|'),
('mod16', 'Modul Reward', 'mod16|lr_tb_ro_reward|lr_reward|lr_reward_obat|'),
('mod2', 'Modul Investigasi Kontak', 'mod2|investigasi_kontak_cari|investigasi_kontak|investigasi_kontak_f|'),
('mod3', 'Modul Terduga TB', 'mod3|terduga_tbc|terduga_tbc_f|'),
('mod4', 'Modul Kasus Ternotifikasi', 'mod4|kasus_ternotifikasi|kasus_ternotifikasi_f|'),
('mod5', 'Modul TB-RO', 'mod5|tb_ro|tb_ro_f|'),
('mod6', 'Modul Pelaksanaan Kegiatan', 'mod6|pel_kegiatan|pel_kegiatan_f|'),
('mod7', 'Modul Verifikasi Terduga', 'mod7|lr_veri_terduga|'),
('mod8', 'Modul Verifikasi Terduga Edukasi HIV', 'mod8|lr_verifikasi|'),
('mod9', 'Modul Verifikasi TBC RO', 'mod9|lr_tb_ro_verifikasi|');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_running_text`
--

CREATE TABLE `t_running_text` (
  `id_running_text` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `date_g` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_running_text`
--

INSERT INTO `t_running_text` (`id_running_text`, `isi`, `date_g`) VALUES
('RTVDF0CK', 'SESUNGGUHNYA SHALAT ITU MENJAUHKAN PERBUATAN KEJI DAN MUNKAR', '2023-09-13 05:49:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_saldo`
--

CREATE TABLE `t_saldo` (
  `idf_saldo` varchar(50) NOT NULL DEFAULT '',
  `tanggal` date DEFAULT NULL,
  `jenis` varchar(50) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_saldo`
--

INSERT INTO `t_saldo` (`idf_saldo`, `tanggal`, `jenis`, `jumlah`, `total`) VALUES
('Z20230904001', '2023-09-04', 'Pemasukan', 10000, NULL),
('Z20230904002', '2023-09-03', 'Pemasukan', 200000, NULL),
('Z20230904003', '2023-08-31', 'Pemasukan', 2300000, NULL),
('Z20230904004', '2023-09-06', 'Pengeluaran', 134000, NULL),
('Z20230904005', '2023-09-01', 'Pengeluaran', 230000, NULL),
('Z20230905001', '2023-08-25', 'Pemasukan', 100000, NULL),
('Z20230905002', '2023-08-23', 'Pengeluaran', 500000, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_saldo_kas`
--

CREATE TABLE `t_saldo_kas` (
  `id_saldo_kas` varchar(50) NOT NULL,
  `tanggal` datetime NOT NULL,
  `masuk` decimal(20,5) NOT NULL,
  `keluar` decimal(20,5) NOT NULL,
  `ket` text NOT NULL,
  `sisa` decimal(20,5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_saldo_kas`
--

INSERT INTO `t_saldo_kas` (`id_saldo_kas`, `tanggal`, `masuk`, `keluar`, `ket`, `sisa`) VALUES
('KASHV8JDE', '2023-09-09 06:42:35', '1900000.00000', '0.00000', 'MASUK', '1900000.00000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_set_update`
--

CREATE TABLE `t_set_update` (
  `no` int(11) NOT NULL,
  `versi` varchar(20) NOT NULL,
  `status` int(11) NOT NULL,
  `isi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_set_update`
--

INSERT INTO `t_set_update` (`no`, `versi`, `status`, `isi`) VALUES
(1, '1.0.2', 0, 'Harap Update Aplikasi anda dengan yang terbaru...');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_online`
--

CREATE TABLE `user_online` (
  `session` char(100) NOT NULL DEFAULT '',
  `time` int(11) NOT NULL DEFAULT 0,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_online`
--

INSERT INTO `user_online` (`session`, `time`, `username`) VALUES
('s0k3ufd2njutnaljms9d63v99o', 1687922201, 'testttt');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `t_admm`
--
ALTER TABLE `t_admm`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `t_img_data`
--
ALTER TABLE `t_img_data`
  ADD PRIMARY KEY (`idf_img`),
  ADD UNIQUE KEY `nama_img` (`nama_img`);

--
-- Indeks untuk tabel `t_jadwal`
--
ALTER TABLE `t_jadwal`
  ADD PRIMARY KEY (`idf_jadwal`);

--
-- Indeks untuk tabel `t_jadwal_imam_khatib`
--
ALTER TABLE `t_jadwal_imam_khatib`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indeks untuk tabel `t_loghistory`
--
ALTER TABLE `t_loghistory`
  ADD PRIMARY KEY (`id_log`);

--
-- Indeks untuk tabel `t_modul`
--
ALTER TABLE `t_modul`
  ADD PRIMARY KEY (`nama`);

--
-- Indeks untuk tabel `t_running_text`
--
ALTER TABLE `t_running_text`
  ADD PRIMARY KEY (`id_running_text`);

--
-- Indeks untuk tabel `t_saldo`
--
ALTER TABLE `t_saldo`
  ADD PRIMARY KEY (`idf_saldo`);

--
-- Indeks untuk tabel `t_saldo_kas`
--
ALTER TABLE `t_saldo_kas`
  ADD PRIMARY KEY (`id_saldo_kas`);

--
-- Indeks untuk tabel `t_set_update`
--
ALTER TABLE `t_set_update`
  ADD UNIQUE KEY `versi` (`versi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `t_loghistory`
--
ALTER TABLE `t_loghistory`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
