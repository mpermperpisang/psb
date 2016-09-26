-- phpMyAdmin SQL Dump
-- version 3.5.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 05, 2013 at 10:35 AM
-- Server version: 5.1.66-cll
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `smaks101_kartikasiliwangi`
--

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE IF NOT EXISTS `pendaftaran` (
  `id_daftar` int(10) NOT NULL AUTO_INCREMENT,
  `tanggal_daftar` date DEFAULT NULL,
  `nama_pendaftar` varchar(75) DEFAULT NULL,
  `ttl` varchar(50) NOT NULL,
  `jns_kelamin` varchar(15) DEFAULT NULL,
  `agama` varchar(20) NOT NULL,
  `sekolah_asal` varchar(20) DEFAULT NULL,
  `tahun_lulus` int(6) DEFAULT NULL,
  `ortu` varchar(100) DEFAULT NULL,
  `alamat` varchar(150) DEFAULT NULL,
  `telp` varchar(20) NOT NULL DEFAULT '',
  `nilai` int(6) NOT NULL,
  `ijazah` varchar(100) NOT NULL,
  `skhun` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `uang_daftar` varchar(15) DEFAULT NULL,
  `uang_masuk` varchar(15) DEFAULT NULL,
  `kelas` varchar(15) DEFAULT NULL,
  `tgl_tes` varchar(30) DEFAULT NULL,
  `petugas` varchar(30) NOT NULL,
  PRIMARY KEY (`id_daftar`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=81 ;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_daftar`, `tanggal_daftar`, `nama_pendaftar`, `ttl`, `jns_kelamin`, `agama`, `sekolah_asal`, `tahun_lulus`, `ortu`, `alamat`, `telp`, `nilai`, `ijazah`, `skhun`, `foto`, `uang_daftar`, `uang_masuk`, `kelas`, `tgl_tes`, `petugas`) VALUES
(69, '2012-12-20', 'Ferawati Hartanti Pratiwi', 'Tangerang, 3 Februari 1991', 'Perempuan', 'Islam', 'SMP 12 Tangerang', 2013, 'M. Arifin', 'Kubang Selatan 3 no 62', '083821617929', 80, 'ferawatihartantipratiwi_083821617929.jpg', 'ferawatihartantipratiwi_083821617929.jpg', 'ferawatihartantipratiwi_083821617929.jpg', 'SUDAH', 'BELUM', 'X-..', '2012-05-01', 'Admin'),
(70, '2012-12-20', 'Citra Octavia', 'Karawang, 10 Oktober 1992', 'Perempuan', 'Islam', 'SMP 1 Karawang', 2013, 'Tati', 'Tubagus Ismail', '08812054877', 85, 'citraoctavia_083821617929.jpg', 'citraoctavia_083821617929 - Copy.jpg', 'citraoctavia_083821617929 - Copy (2).jpg', 'BELUM', 'BELUM', 'X-..', 'Tunggu Pengumuman Selanjutnya', '-'),
(71, '2013-01-04', 'Tika Kartika', 'Bandung, 5 Mei 1996', 'Perempuan', 'Islam', 'SMPN 19 Bandung', 2013, 'Tine Kartine', 'Jln Taman Pramuka no 58', '089797979797', 83, 'Desert.jpg', 'Hydrangeas.jpg', 'Chrysanthemum.jpg', 'SUDAH', 'BELUM', 'X-..', '2012-05-02', 'Admin'),
(72, '2013-01-04', 'Hadie Mandala Saputra', 'Denpasar, 10 Januari 1995', 'Laki-laki', 'Hindu', 'SMPN 22 Jakarta', 2013, 'Nyoman Kartaji', 'Jln Ir H Juanda no 123', '085757575757', 87, 'Penguins.jpg', 'Koala.jpg', 'Jellyfish.jpg', 'BELUM', 'BELUM', 'X-..', 'Tunggu Pengumuman Selanjutnya', '-'),
(73, '2013-01-04', 'Ganjar Indra', 'Bandung, 8 September 1996', 'Laki-laki', 'Islam', 'SMPN 21 Bandung', 2013, 'Muhammad Iqbal', 'Jln Riau no 205 Bandung', '085454545454', 79, 'Lighthouse.jpg', 'Jellyfish.jpg', 'Tulips.jpg', 'BELUM', 'BELUM', 'X-..', 'Tunggu Pengumuman Selanjutnya', '-'),
(74, '2013-01-04', 'Nadia Reza', 'Bandung, 19 Juni 1996', 'Perempuan', 'Islam', 'SMPN 3 Bandung', 2013, 'Sukmawati', 'Jln Merdeka no 99', '085656565656', 88, 'Lighthouse.jpg', 'Hydrangeas.jpg', 'Jellyfish.jpg', 'SUDAH', 'BELUM', 'X-..', '2012-05-05', 'Admin'),
(75, '2013-01-04', 'Rengga Kusumaatmaja', 'Subang, 17 Agustus 1995', 'Laki-laki', 'Islam', 'SMPN 2 Subang', 2013, 'Dodi Kusuma', 'Jln Sukasari no 57 Subang', '087676767676', 80, 'Desert.jpg', 'Hydrangeas.jpg', 'Jellyfish.jpg', 'BELUM', 'BELUM', 'X-..', 'Tunggu Pengumuman Selanjutnya', '-'),
(76, '2013-01-04', 'Delia Oktaviani', 'Bandung, 15 Oktober 1995', 'Perempuan', 'Islam', 'SMPN 13 Bandung', 2013, 'Dedi Kuswara', 'Jln BKR no 12 Bandung', '081212121212', 86, 'Penguins.jpg', 'Penguins.jpg', 'Penguins.jpg', 'BELUM', 'BELUM', 'X-..', 'Tunggu Pengumuman Selanjutnya', '-'),
(77, '2013-01-04', 'Aldi Januar', 'Bandung, 11 Januari 1996', 'Laki-laki', 'Islam', 'SMPN 19 Bandung', 2013, 'Sidiq Haris', 'Jln Aceh no 13', '081313131313', 78, 'Jellyfish.jpg', 'Jellyfish.jpg', 'Jellyfish.jpg', 'SUDAH', 'BELUM', 'X-..', '2012-05-05', 'Admin'),
(78, '2013-01-04', 'Abdul Gani', 'Bandung, 7 Maret 1996', 'Laki-laki', 'Islam', 'SMPN 3 Bandung', 2013, 'Ahmad Sanusi', 'Jln Sumatra no 44', '085555555555', 84, 'Desert.jpg', 'Desert.jpg', 'Desert.jpg', 'SUDAH', 'BELUM', 'X-..', 'Tunggu Pengumuman Selanjutnya', 'Munyati'),
(79, '2013-01-04', 'Wahyu Ramadhan', 'Bandung, 20 Mei 1995', 'Laki-laki', 'Islam', 'SMP Pasundan II', 2013, 'Adam Hardian', 'Jln Taman Pramuka no 17 Bandung', '085555555555', 77, 'Desert.jpg', 'Desert.jpg', 'Desert.jpg', 'BELUM', 'BELUM', 'X-..', 'Tunggu Pengumuman Selanjutnya', '-'),
(80, '2013-01-04', 'Ruliyana', 'Jakarta, 18 Agustus 1995', 'Laki-laki', 'Islam', 'SMP PGII 1 Bandung', 2013, 'Rahman Arif', 'Jln Aceh no 67', '081234567890', 88, 'Koala.jpg', 'Koala.jpg', 'Koala.jpg', 'BELUM', 'BELUM', 'X-..', 'Tunggu Pengumuman Selanjutnya', '-');

-- --------------------------------------------------------

--
-- Table structure for table `registrasi`
--

CREATE TABLE IF NOT EXISTS `registrasi` (
  `id_daftar` int(10) NOT NULL AUTO_INCREMENT,
  `tanggal_daftar` date DEFAULT NULL,
  `nama_pendaftar` varchar(75) DEFAULT NULL,
  `ttl` varchar(50) NOT NULL,
  `jns_kelamin` varchar(15) DEFAULT NULL,
  `agama` varchar(20) NOT NULL,
  `sekolah_asal` varchar(20) DEFAULT NULL,
  `tahun_lulus` int(6) DEFAULT NULL,
  `ortu` varchar(100) DEFAULT NULL,
  `alamat` varchar(150) DEFAULT NULL,
  `telp` varchar(20) NOT NULL,
  `nilai` int(6) NOT NULL,
  `ijazah` varchar(100) NOT NULL,
  `skhun` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `uang_daftar` varchar(15) DEFAULT NULL,
  `uang_masuk` varchar(15) DEFAULT NULL,
  `kelas` varchar(15) DEFAULT NULL,
  `tgl_tes` varchar(30) DEFAULT NULL,
  `petugas` varchar(30) NOT NULL,
  PRIMARY KEY (`id_daftar`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=80 ;

--
-- Dumping data for table `registrasi`
--

INSERT INTO `registrasi` (`id_daftar`, `tanggal_daftar`, `nama_pendaftar`, `ttl`, `jns_kelamin`, `agama`, `sekolah_asal`, `tahun_lulus`, `ortu`, `alamat`, `telp`, `nilai`, `ijazah`, `skhun`, `foto`, `uang_daftar`, `uang_masuk`, `kelas`, `tgl_tes`, `petugas`) VALUES
(70, '2012-12-20', 'Citra Octavia', 'Karawang, 10 Oktober 1992', 'Perempuan', 'Islam', 'SMP 1 Karawang', 2013, 'Tati', 'Tubagus Ismail', '08812054877', 85, 'citraoctavia_083821617929.jpg', 'citraoctavia_083821617929 - Copy.jpg', 'citraoctavia_083821617929 - Copy (2).jpg', 'BELUM', 'BELUM', 'X-..', 'Tunggu Pengumuman Selanjutnya', '-'),
(69, '2012-12-20', 'Ferawati Hartanti Pratiwi', 'Tangerang, 3 Februari 1991', 'Perempuan', 'Islam', 'SMP 12 Tangerang', 2013, 'M. Arifin', 'Kubang Selatan 3 no 62', '083821617929', 80, 'ferawatihartantipratiwi_083821617929.jpg', 'ferawatihartantipratiwi_083821617929.jpg', 'ferawatihartantipratiwi_083821617929.jpg', 'SUDAH', 'BELUM', 'X-..', '2012-05-01', 'Admin'),
(71, '2013-01-04', 'Tika Kartika', 'Bandung, 5 Mei 1996', 'Perempuan', 'Islam', 'SMPN 19 Bandung', 2013, 'Tine Kartine', 'Jln Taman Pramuka no 58', '089797979797', 83, 'Desert.jpg', 'Hydrangeas.jpg', 'Chrysanthemum.jpg', 'SUDAH', 'BELUM', 'X-..', '2012-05-02', 'Admin'),
(72, '2013-01-04', 'Hadie Mandala Saputra', 'Denpasar, 10 Januari 1995', 'Laki-laki', 'Hindu', 'SMPN 22 Jakarta', 2013, 'Nyoman Kartaji', 'Jln Ir H Juanda no 123', '085757575757', 87, 'Penguins.jpg', 'Koala.jpg', 'Jellyfish.jpg', 'BELUM', 'BELUM', 'X-..', 'Tunggu Pengumuman Selanjutnya', '-'),
(73, '2013-01-04', 'Ganjar Indra', 'Bandung, 8 September 1996', 'Laki-laki', 'Islam', 'SMPN 21 Bandung', 2013, 'Muhammad Iqbal', 'Jln Riau no 205 Bandung', '085454545454', 79, 'Lighthouse.jpg', 'Jellyfish.jpg', 'Tulips.jpg', 'BELUM', 'BELUM', 'X-..', 'Tunggu Pengumuman Selanjutnya', '-'),
(74, '2013-01-04', 'Nadia Reza', 'Bandung, 19 Juni 1996', 'Perempuan', 'Islam', 'SMPN 3 Bandung', 2013, 'Sukmawati', 'Jln Merdeka no 99', '085656565656', 88, 'Lighthouse.jpg', 'Hydrangeas.jpg', 'Jellyfish.jpg', 'SUDAH', 'BELUM', 'X-..', '2012-05-05', 'Admin'),
(75, '2013-01-04', 'Rengga Kusumaatmaja', 'Subang, 17 Agustus 1995', 'Laki-laki', 'Islam', 'SMPN 2 Subang', 2013, 'Dodi Kusuma', 'Jln Sukasari no 57 Subang', '087676767676', 80, 'Desert.jpg', 'Hydrangeas.jpg', 'Jellyfish.jpg', 'BELUM', 'BELUM', 'X-..', 'Tunggu Pengumuman Selanjutnya', '-'),
(76, '2013-01-04', 'Delia Oktaviani', 'Bandung, 15 Oktober 1995', 'Perempuan', 'Islam', 'SMPN 13 Bandung', 2013, 'Dedi Kuswara', 'Jln BKR no 12 Bandung', '081212121212', 86, 'Penguins.jpg', 'Penguins.jpg', 'Penguins.jpg', 'BELUM', 'BELUM', 'X-..', 'Tunggu Pengumuman Selanjutnya', '-'),
(77, '2013-01-04', 'Aldi Januar', 'Bandung, 11 Januari 1996', 'Laki-laki', 'Islam', 'SMPN 19 Bandung', 2013, 'Sidiq Haris', 'Jln Aceh no 13', '081313131313', 78, 'Jellyfish.jpg', 'Jellyfish.jpg', 'Jellyfish.jpg', 'SUDAH', 'BELUM', 'X-..', '2012-05-05', 'Admin'),
(78, '2013-01-04', 'Abdul Gani', 'Bandung, 7 Maret 1996', 'Laki-laki', 'Islam', 'SMPN 3 Bandung', 2013, 'Ahmad Sanusi', 'Jln Sumatra no 44', '085555555555', 84, 'Desert.jpg', 'Desert.jpg', 'Desert.jpg', 'SUDAH', 'BELUM', 'X-..', 'Tunggu Pengumuman Selanjutnya', 'Munyati'),
(79, '2013-01-04', 'Wahyu Ramadhan', 'Bandung, 20 Mei 1995', 'Laki-laki', 'Islam', 'SMP Pasundan II', 2013, 'Adam Hardian', 'Jln Taman Pramuka no 17 Bandung', '085555555555', 77, 'Desert.jpg', 'Desert.jpg', 'Desert.jpg', 'BELUM', 'BELUM', 'X-..', 'Tunggu Pengumuman Selanjutnya', '-');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(60) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `nama` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `telp` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `code` int(11) NOT NULL,
  `aktif` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=63 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `nama`, `telp`, `code`, `aktif`) VALUES
(47, 'mpermper', 'ferawati.10109266@gmail.com', '4dc2a159b17b4725943816b8ba6d7ff5', '-', '-', 84413, 1),
(42, 'admin', 'done_corp@yahoo.com', '21232f297a57a5a743894a0e4a801fc3', 'Doni Kusanto', '08562033780', 0, 2),
(49, 'munyati', 'mun_mun@gmail.com', '9bff282d5dc43e315aa4544cea07b6b5', 'Munyati', '08522341750', 0, 3),
(48, 'doni', 'dcdonecorp@gmail.com', '8bfa3348bb22ee6025235f1e9160c2f3', 'Doni Susanto', '08562033780', 0, 3),
(50, 'lilih', 'elih_elis@yahoo.com', '1c637a768f858d539ea2ee91c300a7c6', 'Elih', '083865677949', 0, 3),
(51, 'yani', 'yani_handa@yahoo.co.id', '499f8a86024a923ff4a8caa49b7a1306', 'Rini Handayani', '08522153681', 0, 3),
(52, 'dhan_dhan', 'amydhan@yahoo.com', '86aa948654fb9bed723f4c9fe621e320', 'Ramdhan Tarum', '083825777940', 0, 3),
(53, 'harisrhamadhan', 'harisrhamadhan@rocketmail.com', '60a15afa526fb57623323aef62c2daa4', '-', '-', 77079, 1),
(54, 'hadie_die', 'hadie.mandala@gmail.com', '8761fbe53b8747aa0d7ac57b20e4e170', '-', '-', 57012, 1),
(55, 'tikaa', 'tikakartika@rocketmail.com', 'c08a0d7efdd1e05aedab490f4ed46d52', '-', '-', 29946, 1),
(56, 'Ganjar', 'ganjarindra@yahoo.com', 'e024d4cbfc84af056636ef4c1ccfd506', '-', '-', 82247, 1),
(57, 'Nadia_Reza', 'nadnidnod@gmail.com', 'a2e8cea3392da09d1d31be3fca68efed', '-', '-', 83223, 1),
(58, 'rengga_k', 'renggaaja@gmail.com', 'f0e5ccc01aeffe13327c927efdf891a5', '-', '-', 73535, 1),
(59, 'deliaa', 'deliaokta@yahoo.com', 'ddc8d92e26e5c05ceab762757a90f4a3', '-', '-', 26178, 1),
(60, 'aldijan', 'januar_aldi@yahoo.com', 'ba2bbbe2453802c10ace564996eb3400', '-', '-', 98754, 1),
(61, 'abdul', 'abdul_ganeee@yahoo.com', '82027888c5bb8fc395411cb6804a066c', '-', '-', 32033, 1),
(62, 'ruliyana', 'ruliyanaaa@gmail.com', '3f26d9d8b5f9ea515d0d994a3b6e2eb0', '-', '-', 67703, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
