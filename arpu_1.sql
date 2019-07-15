-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2019 at 10:09 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arpu_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(15) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `nama_pegawai` varchar(30) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `tempat_lahir_pgw` varchar(30) NOT NULL,
  `tanggal_lahir_pgw` varchar(15) NOT NULL,
  `jenis_kelamin_pgw` varchar(15) NOT NULL,
  `alamat_pgw` varchar(100) NOT NULL,
  `masa_bhakti` varchar(10) NOT NULL,
  `foto_profil` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nip`, `nama_pegawai`, `jabatan`, `tempat_lahir_pgw`, `tanggal_lahir_pgw`, `jenis_kelamin_pgw`, `alamat_pgw`, `masa_bhakti`, `foto_profil`) VALUES
(2, '66656565', 'Mika', 'fhghg', 'gfhg', '2019-03-21', 'Laki-Laki', 'ghgnb ', 'gh', '22032019190438amp.jpg'),
(3, '9877889023447622', 'Nor Rofiq, S.H.I', 'Kepala Desa ', 'Jepara', '20-05-1993', 'Laki-laki', 'Pancur Rt10 Rw 01 Mayong Jepara', '2019-2024', '3003201922485620171029_104607.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pindah_datang`
--

CREATE TABLE `pindah_datang` (
  `id_reg_pd` int(15) NOT NULL,
  `no_reg_pd` varchar(15) NOT NULL,
  `nama_pelapor_pd` varchar(50) NOT NULL,
  `nik_pd` varchar(17) NOT NULL,
  `tanggal_pindah` varchar(15) NOT NULL,
  `tempat_lahir_pd` varchar(30) NOT NULL,
  `tanggal_lahir_pd` varchar(12) NOT NULL,
  `jenis_kelamin_pd` varchar(15) NOT NULL,
  `alamat_asal` varchar(200) NOT NULL,
  `alamat_tujuan` varchar(200) NOT NULL,
  `ket_pd` varchar(300) NOT NULL,
  `foto_pd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pindah_datang`
--

INSERT INTO `pindah_datang` (`id_reg_pd`, `no_reg_pd`, `nama_pelapor_pd`, `nik_pd`, `tanggal_pindah`, `tempat_lahir_pd`, `tanggal_lahir_pd`, `jenis_kelamin_pd`, `alamat_asal`, `alamat_tujuan`, `ket_pd`, `foto_pd`) VALUES
(22, '545/300/III/201', 'God Usop', '3320042006780002', '2019-03-19', 'Jepara', '2000-06-12', 'Laki-Laki', 'Aceh', 'Pontianak', 'cari jodoh', '22032019234451img570.jpg'),
(24, '666/iii/56', 'Sutekno', '3320042006780002', '2019-05-15', 'Jepara', '2019-03-13', 'Laki-Laki', 'bvc', 'bvc', 'bvc', '20032019231930amp.jpg'),
(565, 'fhh/666/hbn/', 'Moca', '333002400698006', '2019-04-17', 'hgfbv', '', 'gcbv', 'gfb', 'vgbv', 'ghfbv', 'hgbv'),
(572, '656/556/III/78', 'Mismaunah', '333002400698009', '2019-08-22', '', '', 'Laki-Laki', '', '', '', '30032019222449IMG-20171029-WA0009.jpg'),
(575, '656/tuy/ghg/90', 'Mila Setyo Wati', '333002400698007', '2019-01-16', '', '', 'Laki-Laki', '', '', '', '30032019222919IMG-20180104-WA0018.jpg'),
(576, 'rgsd', 'rgdc', 'fdvc', '2017-06-13', 'dsf', '2019-07-08', 'Perempuan', 'dsfxc', 'dc', 'dsfc', '03072019223758kk.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `refpelayananumum`
--

CREATE TABLE `refpelayananumum` (
  `id_reg` int(15) NOT NULL,
  `no_reg` varchar(30) NOT NULL,
  `nik` varchar(17) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` varchar(13) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `perkerjaan` varchar(30) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `keperluan` varchar(70) NOT NULL,
  `ket_lain` varchar(300) NOT NULL,
  `tanggal_buat` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `refpelayananumum`
--

INSERT INTO `refpelayananumum` (`id_reg`, `no_reg`, `nik`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `perkerjaan`, `alamat`, `keperluan`, `ket_lain`, `tanggal_buat`) VALUES
(1, '45.2/20/III/2019', '3200420066570001', 'IGGA FAUZI RAHMAN', 'INDRAGIRI HILIR', '20/06/1996', 'Laki-Laki', 'ISLAM', 'WIRASWASTA', 'Desa Pancur 05/01 Kecamatan Mayong Kabupaten Jepara', 'KETERANGAN PENGANTAR DOMISILI', 'Menyatakan bahwa yang bersangkutan adalah benar-benar warga pancur RT.5 RW.6 dan menerangkan bahwa saudara Igga Fauzi Rahman Berdomisili di Desa Pancur.', '2019-03-18'),
(2, '045.2/21/III/2019', '3200420066570002', 'Marco', 'Jepara', '25/07/2019', 'Laki-Laki', 'ISLAM', 'WIRASWASTA', 'rfhdh', 'Surat Pengantar Sidik Jari', 'Yang bersangkutan benar warga pancur dengan domisili di pancur yang akan melakukan sidik jari di polres jepara', '2017-07-16'),
(4, '045.2/22/III/2019', '3320042006960005', 'Monkey D Garp ', 'Jepara', '2019-03-21', 'Perempuan', 'Islam', 'Marine', 'ngablak', 'Keterangan Mengurus Surat Cerai', 'menyatakan Bahwa monkey d garp inginmengurus surat cerai', '2019-04-16');

-- --------------------------------------------------------

--
-- Table structure for table `ref_reg_kkktp`
--

CREATE TABLE `ref_reg_kkktp` (
  `id_reg_kkktp` int(15) NOT NULL,
  `no_reg_kkktp` varchar(15) NOT NULL,
  `no_kk` varchar(18) NOT NULL,
  `no_nik` varchar(18) NOT NULL,
  `tanggal_reg` varchar(15) NOT NULL,
  `nama_pelapor` varchar(30) NOT NULL,
  `tempat_lahir_kkktp` varchar(30) NOT NULL,
  `tanggal_lahir_kkktp` varchar(15) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `status_layanan` varchar(15) NOT NULL,
  `ket` varchar(200) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_reg_kkktp`
--

INSERT INTO `ref_reg_kkktp` (`id_reg_kkktp`, `no_reg_kkktp`, `no_kk`, `no_nik`, `tanggal_reg`, `nama_pelapor`, `tempat_lahir_kkktp`, `tanggal_lahir_kkktp`, `alamat`, `status_layanan`, `ket`, `foto`) VALUES
(2, '535/20/III2019', '3320074006780009', '3340076007980006', '2019-03-21', 'Kaido', 'Jepara', '2019-03-19', 'Dukuh Randubango Desa Pancur 6/2 Kecamatan Mayong Kabupaten Jepara', 'KTP', 'Baru', '22032019234151RST.jpg'),
(3, '434/55/III/2019', '34346689877889', '44557889966889', '2019-04-16', 'Coby', 'Jepara', '2019-03-11', 'Desa Pancur Kecamatan Mayong Kabupaten Jepara', 'KK', 'Baru', '22032019234216DRAFTER.png'),
(4, '5665655665', '3320074006780004', '3340076007980007', '2019-03-20', 'Cinta', 'Jepara', '2019-03-19', 'hghg', 'KTP', 'Ubah Data', '22032019233517amp.jpg'),
(5, '565/iii/19', '3320074006780046', '3340076007980006', '2019-03-15', 'Marco Simoonceli', 'fds', '2019-03-26', 'fds', 'KK', 'Baru', '30032019220915ef.jpg'),
(6, '565/iii/mi/20', '3320074006780004', '3340076007980006', '2017-08-21', 'Subara', 'kgj', '2019-03-19', 'jhvvv', 'KTP', 'Ubah Data', '30032019221141ef.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ref_tahun`
--

CREATE TABLE `ref_tahun` (
  `id_tahun` int(15) NOT NULL,
  `nama_tahun` varchar(30) NOT NULL,
  `status` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_tahun`
--

INSERT INTO `ref_tahun` (`id_tahun`, `nama_tahun`, `status`) VALUES
(1, '2020', 0),
(2, '2019', 1),
(3, '2017', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(2) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `level` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`, `level`) VALUES
(1, 'Igga Fauzi Rahman', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'Operator', 'operator', '4B583376B2767B923C3E1DA60D10DE59', 'operator'),
(3, 'Nor Rofiq', 'kades', '0cfa66469d25bd0d9e55d7ba583f9f2f', 'kepala_desa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `pindah_datang`
--
ALTER TABLE `pindah_datang`
  ADD PRIMARY KEY (`id_reg_pd`);

--
-- Indexes for table `refpelayananumum`
--
ALTER TABLE `refpelayananumum`
  ADD PRIMARY KEY (`id_reg`);

--
-- Indexes for table `ref_reg_kkktp`
--
ALTER TABLE `ref_reg_kkktp`
  ADD PRIMARY KEY (`id_reg_kkktp`);

--
-- Indexes for table `ref_tahun`
--
ALTER TABLE `ref_tahun`
  ADD PRIMARY KEY (`id_tahun`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pindah_datang`
--
ALTER TABLE `pindah_datang`
  MODIFY `id_reg_pd` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=577;

--
-- AUTO_INCREMENT for table `refpelayananumum`
--
ALTER TABLE `refpelayananumum`
  MODIFY `id_reg` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ref_reg_kkktp`
--
ALTER TABLE `ref_reg_kkktp`
  MODIFY `id_reg_kkktp` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ref_tahun`
--
ALTER TABLE `ref_tahun`
  MODIFY `id_tahun` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
