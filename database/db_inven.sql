-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Apr 2019 pada 04.44
-- Versi server: 10.1.30-MariaDB
-- Versi PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_inven`
--

DELIMITER $$
--
-- Prosedur
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `stokKembali` (IN `id_in` INT, IN `kembali` INT)  UPDATE tb_inventaris SET stok=stok+kembali where id_in = id_inv$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `stokPinjam` (IN `id_in` INT, IN `ambil` INT)  UPDATE tb_inventaris 
SET stok=stok-ambil 
where id_in = id_inv$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pinjam`
--

CREATE TABLE `detail_pinjam` (
  `id_detail_pinjam` int(11) NOT NULL,
  `id_inv` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `id_peminjaman` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_pinjam`
--

INSERT INTO `detail_pinjam` (`id_detail_pinjam`, `id_inv`, `jumlah`, `id_peminjaman`) VALUES
(16, 17, 2, 12),
(17, 17, 3, 13),
(18, 16, 5, 13),
(20, 16, 1, 15),
(21, 16, 3, 16),
(22, 18, 2, 16),
(23, 16, 3, 17),
(24, 16, 3, 18);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `lap_barang`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `lap_barang` (
`id_inv` int(11)
,`nama_inv` varchar(50)
,`kondisi` char(12)
,`keterangan` text
,`stok` int(11)
,`id_jenis` int(11)
,`id_ruang` int(11)
,`kode_inv` varchar(20)
,`id_petugas` int(11)
,`tanggal_register` timestamp
,`total` decimal(32,0)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `lap_pegawai`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `lap_pegawai` (
`id_pegawai` int(11)
,`nama_pegawai` varchar(50)
,`nip` varchar(20)
,`alamat` text
,`total` decimal(32,0)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_inventaris`
--

CREATE TABLE `tb_inventaris` (
  `id_inv` int(11) NOT NULL,
  `nama_inv` varchar(50) NOT NULL,
  `kondisi` char(12) NOT NULL,
  `keterangan` text NOT NULL,
  `stok` int(11) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `id_ruang` int(11) NOT NULL,
  `kode_inv` varchar(20) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `tanggal_register` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_inventaris`
--

INSERT INTO `tb_inventaris` (`id_inv`, `nama_inv`, `kondisi`, `keterangan`, `stok`, `id_jenis`, `id_ruang`, `kode_inv`, `id_petugas`, `tanggal_register`) VALUES
(16, 'fgchv', 'Rusak', 'asaaauuu', 382, 16, 17, 'u', 1, '2019-04-08 04:20:11'),
(17, 'v', 'Rusak', 'vh', 53, 16, 17, 'yfu', 1, '2019-04-08 04:24:56'),
(18, 'aesd', 'Baik', 'xghcgvj', 343, 15, 17, '354', 1, '2019-04-08 02:26:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jenis`
--

CREATE TABLE `tb_jenis` (
  `id_jenis` int(11) NOT NULL,
  `nama_jenis` varchar(20) NOT NULL,
  `kode_jenis` varchar(20) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jenis`
--

INSERT INTO `tb_jenis` (`id_jenis`, `nama_jenis`, `kode_jenis`, `keterangan`) VALUES
(15, 'b', 'b', 'bhvjb'),
(16, 'Elektronik', 'J002', 'A');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_level`
--

CREATE TABLE `tb_level` (
  `id_level` int(11) NOT NULL,
  `nama_level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_level`
--

INSERT INTO `tb_level` (`id_level`, `nama_level`) VALUES
(1, 'Admin'),
(2, 'Operator'),
(3, 'Peminjam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`id_pegawai`, `nama_pegawai`, `nip`, `alamat`) VALUES
(5, 'abc', 'abc', 'abc'),
(6, 'k', 'k', 'k');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_peminjaman`
--

CREATE TABLE `tb_peminjaman` (
  `id_peminjman` int(11) NOT NULL,
  `tanggal_pinjam` varchar(15) NOT NULL,
  `tanggal_kembali` varchar(15) NOT NULL,
  `status_peminjamanan` varchar(25) NOT NULL,
  `id_pegawai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_peminjaman`
--

INSERT INTO `tb_peminjaman` (`id_peminjman`, `tanggal_pinjam`, `tanggal_kembali`, `status_peminjamanan`, `id_pegawai`) VALUES
(12, '2019-04-07', '2019-04-08', 'sudah kembali', 5),
(13, '2019-04-08', '2019-04-09', 'sudah kembali', 6),
(15, '2019-04-08', '2019-04-10', 'sedang dipinjam', 6),
(16, '2019-04-08', '2019-04-10', 'sedang dipinjam', 5),
(17, '2019-04-08', '2019-04-09', 'sedang dipinjam', 5),
(18, '2019-04-08', '2019-04-10', 'sudah kembali', 5),
(19, '2019-04-08', '2019-04-10', 'sedang dipinjam', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_petugas`
--

CREATE TABLE `tb_petugas` (
  `id_petugas` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `nama_petugas` varchar(50) NOT NULL,
  `id_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_petugas`
--

INSERT INTO `tb_petugas` (`id_petugas`, `username`, `password`, `nama_petugas`, `id_level`) VALUES
(1, 'a', 'a', 'a', 1),
(5, 'op', 'op', 'Operator', 2),
(6, 'k', 'k', 'k', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ruang`
--

CREATE TABLE `tb_ruang` (
  `id_ruang` int(11) NOT NULL,
  `nama_ruang` varchar(20) NOT NULL,
  `kode_ruang` varchar(20) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_ruang`
--

INSERT INTO `tb_ruang` (`id_ruang`, `nama_ruang`, `kode_ruang`, `keterangan`) VALUES
(17, 'm', 'm', 'mbj'),
(18, 'Lab ', 'R002', 'Gedung A');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_inventaris`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_inventaris` (
`id_inv` int(11)
,`nama_inv` varchar(50)
,`kondisi` char(12)
,`keterangan` text
,`stok` int(11)
,`id_jenis` int(11)
,`id_ruang` int(11)
,`kode_inv` varchar(20)
,`id_petugas` int(11)
,`tanggal_register` timestamp
,`nama_jenis` varchar(20)
,`kode_jenis` varchar(20)
,`nama_ruang` varchar(20)
,`kode_ruang` varchar(20)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_peminjaman`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_peminjaman` (
`id_detail_pinjam` int(11)
,`id_inv` int(11)
,`jumlah` int(11)
,`id_peminjaman` int(11)
,`nama_inv` varchar(50)
,`id_jenis` int(11)
,`id_ruang` int(11)
,`kode_inv` varchar(20)
,`tanggal_pinjam` varchar(15)
,`tanggal_kembali` varchar(15)
,`status_peminjamanan` varchar(25)
,`id_pegawai` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_petugas`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_petugas` (
`id_petugas` int(11)
,`username` varchar(10)
,`password` varchar(10)
,`nama_petugas` varchar(50)
,`id_level` int(11)
,`nama_level` varchar(10)
);

-- --------------------------------------------------------

--
-- Struktur untuk view `lap_barang`
--
DROP TABLE IF EXISTS `lap_barang`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `lap_barang`  AS  select `tb_inventaris`.`id_inv` AS `id_inv`,`tb_inventaris`.`nama_inv` AS `nama_inv`,`tb_inventaris`.`kondisi` AS `kondisi`,`tb_inventaris`.`keterangan` AS `keterangan`,`tb_inventaris`.`stok` AS `stok`,`tb_inventaris`.`id_jenis` AS `id_jenis`,`tb_inventaris`.`id_ruang` AS `id_ruang`,`tb_inventaris`.`kode_inv` AS `kode_inv`,`tb_inventaris`.`id_petugas` AS `id_petugas`,`tb_inventaris`.`tanggal_register` AS `tanggal_register`,sum(`detail_pinjam`.`jumlah`) AS `total` from (`tb_inventaris` left join `detail_pinjam` on((`tb_inventaris`.`id_inv` = `detail_pinjam`.`id_inv`))) group by `detail_pinjam`.`id_inv` order by sum(`detail_pinjam`.`jumlah`) desc ;

-- --------------------------------------------------------

--
-- Struktur untuk view `lap_pegawai`
--
DROP TABLE IF EXISTS `lap_pegawai`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `lap_pegawai`  AS  select `tb_pegawai`.`id_pegawai` AS `id_pegawai`,`tb_pegawai`.`nama_pegawai` AS `nama_pegawai`,`tb_pegawai`.`nip` AS `nip`,`tb_pegawai`.`alamat` AS `alamat`,sum(`tb_peminjaman`.`id_pegawai`) AS `total` from (`tb_pegawai` left join `tb_peminjaman` on((`tb_pegawai`.`id_pegawai` = `tb_peminjaman`.`id_pegawai`))) group by `tb_peminjaman`.`id_pegawai` order by sum(`tb_peminjaman`.`id_pegawai`) desc ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_inventaris`
--
DROP TABLE IF EXISTS `v_inventaris`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_inventaris`  AS  select `a`.`id_inv` AS `id_inv`,`a`.`nama_inv` AS `nama_inv`,`a`.`kondisi` AS `kondisi`,`a`.`keterangan` AS `keterangan`,`a`.`stok` AS `stok`,`a`.`id_jenis` AS `id_jenis`,`a`.`id_ruang` AS `id_ruang`,`a`.`kode_inv` AS `kode_inv`,`a`.`id_petugas` AS `id_petugas`,`a`.`tanggal_register` AS `tanggal_register`,`b`.`nama_jenis` AS `nama_jenis`,`b`.`kode_jenis` AS `kode_jenis`,`c`.`nama_ruang` AS `nama_ruang`,`c`.`kode_ruang` AS `kode_ruang` from ((`tb_inventaris` `a` join `tb_jenis` `b`) join `tb_ruang` `c`) where ((`a`.`id_jenis` = `b`.`id_jenis`) and (`a`.`id_ruang` = `c`.`id_ruang`)) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_peminjaman`
--
DROP TABLE IF EXISTS `v_peminjaman`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_peminjaman`  AS  select `a`.`id_detail_pinjam` AS `id_detail_pinjam`,`a`.`id_inv` AS `id_inv`,`a`.`jumlah` AS `jumlah`,`a`.`id_peminjaman` AS `id_peminjaman`,`b`.`nama_inv` AS `nama_inv`,`b`.`id_jenis` AS `id_jenis`,`b`.`id_ruang` AS `id_ruang`,`b`.`kode_inv` AS `kode_inv`,`c`.`tanggal_pinjam` AS `tanggal_pinjam`,`c`.`tanggal_kembali` AS `tanggal_kembali`,`c`.`status_peminjamanan` AS `status_peminjamanan`,`c`.`id_pegawai` AS `id_pegawai` from ((`detail_pinjam` `a` join `tb_inventaris` `b`) join `tb_peminjaman` `c`) where ((`a`.`id_inv` = `b`.`id_inv`) and (`a`.`id_peminjaman` = `c`.`id_peminjman`)) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_petugas`
--
DROP TABLE IF EXISTS `v_petugas`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_petugas`  AS  select `a`.`id_petugas` AS `id_petugas`,`a`.`username` AS `username`,`a`.`password` AS `password`,`a`.`nama_petugas` AS `nama_petugas`,`a`.`id_level` AS `id_level`,`b`.`nama_level` AS `nama_level` from (`tb_petugas` `a` join `tb_level` `b`) where (`a`.`id_level` = `b`.`id_level`) ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detail_pinjam`
--
ALTER TABLE `detail_pinjam`
  ADD PRIMARY KEY (`id_detail_pinjam`),
  ADD KEY `id_inv` (`id_inv`),
  ADD KEY `id_peminjaman` (`id_peminjaman`);

--
-- Indeks untuk tabel `tb_inventaris`
--
ALTER TABLE `tb_inventaris`
  ADD PRIMARY KEY (`id_inv`),
  ADD KEY `id_petugas` (`id_petugas`),
  ADD KEY `kode_inv` (`kode_inv`),
  ADD KEY `id_ruang` (`id_ruang`),
  ADD KEY `id_jenis` (`id_jenis`);

--
-- Indeks untuk tabel `tb_jenis`
--
ALTER TABLE `tb_jenis`
  ADD PRIMARY KEY (`id_jenis`),
  ADD KEY `kode_jenis` (`kode_jenis`);

--
-- Indeks untuk tabel `tb_level`
--
ALTER TABLE `tb_level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indeks untuk tabel `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indeks untuk tabel `tb_peminjaman`
--
ALTER TABLE `tb_peminjaman`
  ADD PRIMARY KEY (`id_peminjman`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- Indeks untuk tabel `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD PRIMARY KEY (`id_petugas`),
  ADD KEY `id_level` (`id_level`);

--
-- Indeks untuk tabel `tb_ruang`
--
ALTER TABLE `tb_ruang`
  ADD PRIMARY KEY (`id_ruang`),
  ADD KEY `kode_ruang` (`kode_ruang`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detail_pinjam`
--
ALTER TABLE `detail_pinjam`
  MODIFY `id_detail_pinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `tb_inventaris`
--
ALTER TABLE `tb_inventaris`
  MODIFY `id_inv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tb_jenis`
--
ALTER TABLE `tb_jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tb_level`
--
ALTER TABLE `tb_level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_peminjaman`
--
ALTER TABLE `tb_peminjaman`
  MODIFY `id_peminjman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `tb_petugas`
--
ALTER TABLE `tb_petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_ruang`
--
ALTER TABLE `tb_ruang`
  MODIFY `id_ruang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_pinjam`
--
ALTER TABLE `detail_pinjam`
  ADD CONSTRAINT `detail_pinjam_ibfk_1` FOREIGN KEY (`id_inv`) REFERENCES `tb_inventaris` (`id_inv`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_pinjam_ibfk_2` FOREIGN KEY (`id_peminjaman`) REFERENCES `tb_peminjaman` (`id_peminjman`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_inventaris`
--
ALTER TABLE `tb_inventaris`
  ADD CONSTRAINT `tb_inventaris_ibfk_1` FOREIGN KEY (`id_jenis`) REFERENCES `tb_jenis` (`id_jenis`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_inventaris_ibfk_2` FOREIGN KEY (`id_ruang`) REFERENCES `tb_ruang` (`id_ruang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_inventaris_ibfk_3` FOREIGN KEY (`id_petugas`) REFERENCES `tb_petugas` (`id_petugas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_peminjaman`
--
ALTER TABLE `tb_peminjaman`
  ADD CONSTRAINT `tb_peminjaman_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `tb_pegawai` (`id_pegawai`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD CONSTRAINT `id_petugasLvl` FOREIGN KEY (`id_level`) REFERENCES `tb_level` (`id_level`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
