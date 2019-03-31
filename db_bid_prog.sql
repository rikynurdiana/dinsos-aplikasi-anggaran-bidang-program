-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 09, 2019 at 08:30 AM
-- Server version: 10.1.37-MariaDB-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banw2711_prog`
--

-- --------------------------------------------------------

--
-- Table structure for table `lkpj`
--

CREATE TABLE `lkpj` (
  `id` int(11) NOT NULL,
  `bidang` varchar(255) NOT NULL,
  `kode_rekening_program` varchar(255) NOT NULL,
  `nama_program` varchar(255) NOT NULL,
  `kode_rekening_kegiatan` varchar(255) NOT NULL,
  `nama_kegiatan` varchar(255) NOT NULL,
  `anggaran` varchar(255) NOT NULL,
  `realisasi` varchar(255) NOT NULL,
  `persentase` varchar(255) NOT NULL,
  `hasil_kegiatan` text NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lkpj`
--

INSERT INTO `lkpj` (`id`, `bidang`, `kode_rekening_program`, `nama_program`, `kode_rekening_kegiatan`, `nama_kegiatan`, `anggaran`, `realisasi`, `persentase`, `hasil_kegiatan`, `created_at`, `updated_at`) VALUES
(1, 'bidang rehabilitasi sosial', '1.1.1.1.1', 'program 1 resos', '1.1.1', 'kegiatan 1 program 1 resos', '1000000', '900000', '90.00 %', 'hasil kegiatan ini adalah belanja', '1523451326', ''),
(2, 'bidang rehabilitasi sosial', '1.1.1.1.1', 'program 1 resos', '1.1.2', 'kegiatan 2 program 1 resos', '2000000', '1000000', '50.00 %', 'hasil kegiatan ini adalah belanja', '1523451343', ''),
(3, 'bidang rehabilitasi sosial', '1.1.1.1.2', 'program 2 resos', '1.1.3', 'kegiatan 1 program 2 resos', '1000000', '900000', '90.00 %', 'hasil kegiatan ini adalah belanja', '1523451355', ''),
(4, 'bidang rehabilitasi sosial', '1.1.1.1.2', 'program 2 resos', '1.1.4', 'kegiatan 2 program 2 resos', '3000000', '2000000', '66.67 %', 'hasil kegiatan ini adalah belanja', '1523451364', ''),
(5, 'bidang perlindungan dan jaminan sosial', '2.2.2.2.2', 'program 1 linjamsos', '1.1.5', 'kegiatan 1 program 1 linjamsos', '1000000', '900000', '90.00 %', 'hasil kegiatan ini adalah belanja', '1523451373', ''),
(6, 'bidang perlindungan dan jaminan sosial', '2.2.2.2.2', 'program 1 linjamsos', '1.1.6', 'kegiatan 2 program 1 linjamsos', '3000000', '1000000', '33.33 %', 'hasil kegiatan ini adalah belanja', '1523451380', ''),
(7, 'bidang perlindungan dan jaminan sosial', '2.2.2.2.3', 'program 2 linjamsos', '1.1.7', 'kegiatan 1 program 2 linjamsos', '1000000', '900000', '90.00 %', 'hasil kegiatan ini adalah belanja', '1523451390', ''),
(9, 'bidang perlindungan dan jaminan sosial', '2.2.2.2.3', 'program 2 linjamsos', '1.1.8', 'kegiatan 2 program 2 linjamsos', '3000000', '1000000', '33.33 %', 'hasil kegiatan ini adalah belanja', '1523451479', ''),
(10, 'bidang pemberdayaan sosial', '3.3.3.3.3', 'program 1 pemsos', '9.1.1', 'kegiatan 1 program 1 pemsos', '3000000', '2000000', '66.67 %', 'hasil kegiatan ini adalah belanja', '1523451642', ''),
(11, 'bidang pemberdayaan sosial', '3.3.3.3.3', 'program 1 pemsos', '9.1.2', 'kegiatan 2 program 1 pemsos', '1000000', '900000', '90.00 %', 'hasil kegiatan ini adalah belanja', '1523451649', ''),
(12, 'bidang pemberdayaan sosial', '3.3.3.3.4', 'program 2 pemsos', '9.1.5', 'kegiatan 2 program 2 pemsos', '3000000', '2000000', '66.67 %', 'hasil kegiatan ini adalah belanja', '1523451658', ''),
(13, 'bidang pemberdayaan sosial', '3.3.3.3.4', 'program 2 pemsos', '9.1.5', 'kegiatan 2 program 2 pemsos', '3000000', '2000000', '66.67 %', 'hasil kegiatan ini adalah belanja', '1523451666', ''),
(14, 'sekertariat', '4.4.4.4.4', 'program 1 sekertariat', '1.1.9', 'kegiatan 1 program 1 sekretariat', '1000000', '900000', '90.00 %', 'hasil kegiatan ini adalah belanja', '1523451680', ''),
(15, 'sekertariat', '4.4.4.4.4', 'program 1 sekertariat', '1.2.0', 'kegiatan 2 program 1 sekretariat', '2000000', '1500000', '75.00 %', 'hasil kegiatan ini adalah belanja', '1523451689', ''),
(16, 'sekertariat', '4.4.4.4.5', 'program 2 sekertariat', '1.2.1', 'kegiatan 1 program 2 sekretariat', '1000000', '900000', '90.00 %', 'hasil kegiatan ini adalah belanja', '1523451699', ''),
(17, 'sekertariat', '4.4.4.4.5', 'program 2 sekertariat', '1.2.2', 'kegiatan 2 program 2 sekretariat', '3000000', '2000000', '66.67 %', 'hasil kegiatan ini adalah belanja', '1523451706', '');

-- --------------------------------------------------------

--
-- Table structure for table `lppd`
--

CREATE TABLE `lppd` (
  `id` int(11) NOT NULL,
  `bidang` varchar(255) DEFAULT NULL,
  `ikk` text,
  `elemen_data` text,
  `dok_pendukung` text,
  `keterangan` varchar(255) DEFAULT NULL,
  `dokumen` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lppd`
--

INSERT INTO `lppd` (`id`, `bidang`, `ikk`, `elemen_data`, `dok_pendukung`, `keterangan`, `dokumen`) VALUES
(1, 'sekertariat', 'Jumlah Program Nasional yang dilaksanakan oleh SKPD', 'Jumlah Program Nasional yang dilaksanakan oleh SKPD', 'FC halaman muka (cover)dan halaman dari DPA SKPD yang menunjukkan program nasional yan g dilaksanakan oleh skpd', 'ada', 'uploads/lppd/bidang1/9957_dokumen1.xlsx'),
(2, 'sekertariat', '(matriks program nasional)', 'Jumlah program nasional ( RKP)', 'Given', '', ''),
(3, 'sekertariat', 'Keberadaan Standart Operating Procedure)', 'Jumlah SOP', 'FC halaman muka cover halaman yang menunjukkan tahapan-tahapan prosedur, dan halaman yang menunjukkan ditandatanganinya SOP', '', ''),
(4, 'sekertariat', '', 'Jumlah PERDA pelaksanaan PERMEN yang ada', 'FC halaman muka (cover), halaman kedua dan halaman yang menunjukkan ditandatanganinya perda pelaksanaan dan  permen tsb', '', NULL),
(5, 'sekertariat', '', 'Jumlah PERDA pelaksanaan PERMEN yang seharusnya ada     ', ' Daftar rincian yang menunjukkan permen yang diterbitkan Kementrian teknis yang mengatur urusan yang ditangani', '', ''),
(6, 'sekertariat', 'Struktur jabatan dan eselonering yang terisi', 'jumlah jabatan yang ada', 'Daftar rincian jabatan eselonering yang terisi', '', ''),
(7, 'sekertariat', 'Struktur jabatan dan eselonering yang terisi', 'jumlah jabatan yang ada', 'FC daftar susunan struktural organisasi dan SKPD', '', ''),
(8, 'sekertariat', 'Keberadaan jabatan fungsional dalam struktur organisasi SKPD', 'Jumlah jabatan Fungsional dalam struktur organisasi SKPD', 'Daftar rincian yang menunjukkan jabatan fungsional yang ada di SKPD pada bidang yang menangani urusan terkait', '', ''),
(9, 'sekertariat', 'Rasio PNS Kab/Kota', 'Jumlah PNS SKPD', 'Daftar rincian yang menunjukkan jumalh pns SKPD pada bidang terkait', '', ''),
(10, 'sekertariat', 'Rasio PNS Kab/Kota', 'Jumlah PNs Kab/Kota', 'Daftar rincian yang menunjukkan jumalh pns Kab/ Kota', '', ''),
(11, 'sekertariat', 'Pejabat yang telah memenuhi persyaratan pendidikan pelatihan kepemimpinan', 'jumlah pejabat yang sudah ikut Diklatpim', 'Daftar rincian jumlah pejabat yang sudah ikut Diklatpim', '', ''),
(12, 'sekertariat', 'Pejabat yang telah memenuhi persyaratan pendidikan pelatihan kepemimpinan', 'Jumlah Pejabat SKPD yang ada', 'Daftar jumlah pejabat SKPD', '', ''),
(13, 'sekertariat', 'Pejabat yang telah memenuhi persyaratan kepangkatan', 'Jumlah pejabat SKPD yang telah memenuhi persyaratan kepangkatan', 'Daftar rincian yang menunjukkan jumlah pejabat yang ada yang telah memenuhi persyaratan diklatpim', '', ''),
(14, 'sekertariat', 'Pejabat yang telah memenuhi persyaratan kepangkatan', 'Jumlah Pejabat SKPD yang ada', 'Daftar rincian yang menunjukkan jumlah pejabat SKPD yang ada pada urusan terkait', '', ''),
(15, 'sekertariat', 'Ada atau tidaknya dokumen perencanaan pembangunan di SKPD', 'jumlah dokumen perencanaan yang ada', 'jumlah dokumen perencanaan yang ada', '', ''),
(16, 'sekertariat', 'RENSTRA-SKPD', 'RENSTRA-SKPD', 'FC halaman muka (cover) halaman ke dua dan halaman yang menunjukkan ditandatanganinya RENSTRA tsb', '', ''),
(17, 'sekertariat', 'RENJA-SKPD', 'RENJA-SKPD', 'FC halaman muka (cover) halaman ke dua dan halaman yang menunjukkan ditandatanganinya RENJA tsb', '', ''),
(18, 'sekertariat', 'RKA-SKPD', 'RKA-SKPD', 'FC halaman muka (cover) halaman ke dua dan halaman yang menunjukkan ditandatanganinya RKA tsb', '', ''),
(19, 'sekertariat', 'Jumlah program RKPD yang diakomodir dalam RENJA SKPD', 'Jumlah program SKPD yang diakomodir dalam RENJA SKPD', 'FC halaman muka (cover) halaman ke dua dan halaman yang menunjukkanprogram dari SKPD pada urusan terkait', '', ''),
(20, 'sekertariat', 'Jumlah program RKA SKPD yang diakomodir dalam DPA SKPD', 'Jumlah program RKA SKPD yang diakomodir dalam DPA SKPD', 'FC halaman muka dan halaman yang menunjukkan program dari SKPD ', '', ''),
(21, 'sekertariat', 'Jumlah program RKA SKPD yang diakomodir dalam DPA SKPD', 'Jumlah program dalam DPA SKPD', 'FC halaman muka dan halaman yang menunjukkan program dari SKPD ', '', ''),
(22, 'sekertariat', 'Anggaran SKPD terhadap total anggaran belanja APBD', 'Total anggaran SKPD', 'FC Laporan keuangan SKPD', '', ''),
(23, 'sekertariat', 'Anggaran SKPD terhadap total anggaran belanja APBD', 'Total anggaran belanja APBD', 'FC Laporan keuangan SKPD', '', ''),
(24, 'sekertariat', 'Belanja modal terhadap total belanja SKPD', 'Realisasi belanja modal SKPD', 'FC Laporan keuangan SKPD', '', ''),
(25, 'sekertariat', 'Belanja modal terhadap total belanja SKPD', 'Realisasi Belanja SKPD', 'FC Laporan keuangan SKPD', '', ''),
(26, 'sekertariat', 'Total belanja pemeliharaan dari total belanja barang dan jasa', 'Realisasi belanja pemeliharaan SKPD', 'FC Laporan keuangan SKPD', '', ''),
(27, 'sekertariat', 'Total belanja pemeliharaan dari total belanja barang dan jasa', 'Realisasi Belanja barang dan jasa SKPD', 'FC Laporan keuangan SKPD', 'ada', 'uploads/lppd/bidang1/2586_dokumen1.xlsx'),
(28, 'sekertariat', 'Total belanja pemeliharaan dari total belanja SKPD', 'Realisasi Belanja  pemeliharaan SKPD', 'FC Laporan keuangan SKPD', '', ''),
(29, 'sekertariat', 'Total belanja pemeliharaan dari total belanja SKPD', 'Realisasi belanaj SKPD', 'FC Laporan keuangan SKPD', '', ''),
(30, 'sekertariat', 'Keberadaan laporan keuangan SKPD Neraca', 'Neraca', 'FC halaman muka dan halaman yang menunjukkan NERACA tsb', '', ''),
(31, 'sekertariat', 'Keberadaan laporan keuangan SKPD LRA', 'LRA', 'FC halaman muka dan halaman yang menunjukkan LRA tsb', '', ''),
(32, 'sekertariat', 'Keberadaan laporan keuangan SKPD CALK', 'CALK', 'FC halaman muka dan halaman yang menunjukkan CALK tsb', '', ''),
(33, 'sekertariat', 'Adanya Inventarisasi barang/ asset oleh SKPD', 'ada/ tidak ada laporan inventarisasi barang/asset SKPD 5 tahun terakhir', 'FC berita acara pelaksanaan inventarisasi', '', ''),
(34, 'sekertariat', 'Jumlah aset yang tidak digunakan oleh SKPD', 'Jumlah aset yang tidak digunakan oleh SKPD', 'Daftar rincian yang menunjukkan jumlah aset yang tidak digunakan', '', ''),
(35, 'sekertariat', 'Jumlah aset yang tidak digunakan oleh SKPD', 'Total aset yang dikuasai SKPD', 'Daftar rincian yang menunjukkan total aset yang dikuasai SKPD', '', ''),
(36, 'sekertariat', 'Jumlah fasilitas/prasarana informasi Papan Pengumuman', 'Papan Pengumuman', 'Foto bukti fisik', '', ''),
(37, 'sekertariat', 'Jumlah fasilitas/prasarana informasi Pos Pemgadaan', 'Pos Pemgadaan', 'Print out foto', '', ''),
(38, 'sekertariat', 'Jumlah fasilitas/prasarana informasi Leaflet', 'Leaflet', 'FC Leaflet', 'ada', 'uploads/lppd/bidang1/9428_dokumen4.xlsx'),
(39, 'sekertariat', 'Jumlah fasilitas/prasarana informasi Mobil keliling', 'Mobil keliling', 'Daftar Inventaris', '', ''),
(40, 'sekertariat', 'Jumlah fasilitas/prasarana informasi Pengumuman di media masa', 'Pengumuman di media masa', 'Print out foto', NULL, NULL),
(41, 'sekertariat', 'Keberadaan survey kepuasan masyarakat', 'ada/tidak laporan hasil survey kepuasan masyarakat terhadap pelayanan publik', 'FC cover laporan hasil survey kepuasan masyarakat terhadap pelayana publik pada urusan terkait', NULL, NULL),
(42, 'bidang perlindungan dan jaminan sosial', 'Jumlah fasilitas/prasarana informasi Papan Pengumuman', 'Papan Pengumuman', 'Foto bukti fisik', '', ''),
(43, 'bidang perlindungan dan jaminan sosial', 'Jumlah fasilitas/prasarana informasi Pos Pemgadaan', 'Pos Pemgadaan', 'Print out foto', '', ''),
(44, 'bidang perlindungan dan jaminan sosial', 'Jumlah fasilitas/prasarana informasi Leaflet', 'Leaflet', 'FC Leaflet', 'ada', 'uploads/lppd/bidang1/9428_dokumen4.xlsx'),
(45, 'bidang perlindungan dan jaminan sosial', 'Jumlah fasilitas/prasarana informasi Mobil keliling', 'Mobil keliling', 'Daftar Inventaris', '', ''),
(46, 'bidang perlindungan dan jaminan sosial', 'Jumlah fasilitas/prasarana informasi Pengumuman di media masa', 'Pengumuman di media masa', 'Print out foto', NULL, NULL),
(47, 'bidang pemberdayaan sosial', 'Jumlah fasilitas/prasarana informasi Papan Pengumuman', 'Papan Pengumuman', 'Foto bukti fisik', '', ''),
(48, 'bidang pemberdayaan sosial', 'Jumlah fasilitas/prasarana informasi Pos Pemgadaan', 'Pos Pemgadaan', 'Print out foto', '', ''),
(49, 'bidang pemberdayaan sosial', 'Jumlah fasilitas/prasarana informasi Leaflet', 'Leaflet', 'FC Leaflet', '', ''),
(50, 'bidang pemberdayaan sosial', 'Jumlah fasilitas/prasarana informasi Mobil keliling', 'Mobil keliling', 'Daftar Inventaris', '', ''),
(51, 'bidang pemberdayaan sosial', 'Jumlah fasilitas/prasarana informasi Pengumuman di media masa', 'Pengumuman di media masa', 'Print out foto', NULL, NULL),
(52, 'bidang rehabilitasi sosial', 'Jumlah fasilitas/prasarana informasi Papan Pengumuman', 'Papan Pengumuman', 'Foto bukti fisik', '', ''),
(53, 'bidang rehabilitasi sosial', 'Jumlah fasilitas/prasarana informasi Pos Pemgadaan', 'Pos Pemgadaan', 'Print out foto', '', ''),
(54, 'bidang rehabilitasi sosial', 'Jumlah fasilitas/prasarana informasi Leaflet', 'Leaflet', 'FC Leaflet', 'ada', 'uploads/lppd/bidang1/9428_dokumen4.xlsx'),
(55, 'bidang rehabilitasi sosial', 'Jumlah fasilitas/prasarana informasi Mobil keliling', 'Mobil keliling', 'Daftar Inventaris', '', ''),
(56, 'bidang rehabilitasi sosial', 'Jumlah fasilitas/prasarana informasi Pengumuman di media masa', 'Pengumuman di media masa', 'Print out foto', NULL, NULL),
(57, 'sekertariat', 'Keberadaan PERDA tentang PSK, PKL atau PMKS', 'Ada atau tidak ada PERDA, PSK dan PKL', NULL, NULL, NULL),
(58, 'bidang perlindungan dan jaminan sosial', 'Keberadaan PERDA tentang PSK, PKL atau PMKS', 'Ada atau tidak ada PERDA, PSK dan PKL', NULL, NULL, NULL),
(59, 'bidang pemberdayaan sosial', 'Keberadaan PERDA tentang PSK, PKL atau PMKS', 'Ada atau tidak ada PERDA, PSK dan PKL', NULL, NULL, NULL),
(60, 'bidang rehabilitasi sosial', 'Keberadaan PERDA tentang PSK, PKL atau PMKS', 'Ada atau tidak ada PERDA, PSK dan PKL', NULL, NULL, NULL),
(61, 'sekertariat', 'Ada atau tidak ada media informasi yang ditetapkan dengan PerBUp', '', 'Sebutkan Nama Medianya dan bukti foto nya', NULL, NULL),
(62, 'bidang perlindungan dan jaminan sosial', 'Ada atau tidak ada media informasi yang ditetapkan dengan PerBUp', '', 'Sebutkan Nama Medianya dan bukti foto nya', NULL, NULL),
(63, 'bidang pemberdayaan sosial', 'Ada atau tidak ada media informasi yang ditetapkan dengan PerBUp', '', 'Sebutkan Nama Medianya dan bukti foto nya', NULL, NULL),
(64, 'bidang rehabilitasi sosial', 'Ada atau tidak ada media informasi yang ditetapkan dengan PerBUp', '', 'Sebutkan Nama Medianya dan bukti foto nya', NULL, NULL),
(65, 'sekertariat', 'Jumlah Penghargaan dari pemerintah yang diterima oleh pemda dalam tahun 2018', '', 'sebutkan jumlah penghargaan nya dan bukti fotonya', NULL, NULL),
(66, 'bidang perlindungan dan jaminan sosial', 'Jumlah Penghargaan dari pemerintah yang diterima oleh pemda dalam tahun 2018', '', 'sebutkan jumlah penghargaan nya dan bukti fotonya', NULL, NULL),
(67, 'bidang pemberdayaan sosial', 'Jumlah Penghargaan dari pemerintah yang diterima oleh pemda dalam tahun 2018', '', 'sebutkan jumlah penghargaan nya dan bukti fotonya', NULL, NULL),
(68, 'bidang rehabilitasi sosial', 'Jumlah Penghargaan dari pemerintah yang diterima oleh pemda dalam tahun 2018', '', 'sebutkan jumlah penghargaan nya dan bukti fotonya', NULL, NULL),
(69, 'bidang pemberdayaan sosial', 'Sarana sosial seperti panti asuhan, panti jompo, dan panti rehabilitasi', '', 'Menunjukan jumlah sarana sosial seperti panti asuhan, panti jompo, panti rehabilitasi, rumah singgah, dll yang terdapat di suatu daerah', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `master_kegiatan`
--

CREATE TABLE `master_kegiatan` (
  `id` int(11) NOT NULL,
  `bidang` varchar(255) NOT NULL,
  `kode_rekening_program` varchar(255) NOT NULL,
  `nama_program` varchar(255) NOT NULL,
  `kode_rekening_kegiatan` varchar(255) NOT NULL,
  `nama_kegiatan` varchar(255) NOT NULL,
  `anggaran` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_kegiatan`
--

INSERT INTO `master_kegiatan` (`id`, `bidang`, `kode_rekening_program`, `nama_program`, `kode_rekening_kegiatan`, `nama_kegiatan`, `anggaran`, `created_at`, `updated_at`) VALUES
(1, 'bidang rehabilitasi sosial', '1.1.1.1.1', 'program 1 resos', '1.1.1', 'kegiatan 1 program 1 resos', '1000000', '1523451068', ''),
(2, 'bidang rehabilitasi sosial', '1.1.1.1.1', 'program 1 resos', '1.1.2', 'kegiatan 2 program 1 resos', '2000000', '1523451088', ''),
(3, 'bidang rehabilitasi sosial', '1.1.1.1.2', 'program 2 resos', '1.1.3', 'kegiatan 1 program 2 resos', '1000000', '1523451112', ''),
(4, 'bidang rehabilitasi sosial', '1.1.1.1.2', 'program 2 resos', '1.1.4', 'kegiatan 2 program 2 resos', '3000000', '1523451127', ''),
(5, 'bidang perlindungan dan jaminan sosial', '2.2.2.2.2', 'program 1 linjamsos', '1.1.5', 'kegiatan 1 program 1 linjamsos', '1000000', '1523451145', ''),
(6, 'bidang perlindungan dan jaminan sosial', '2.2.2.2.2', 'program 1 linjamsos', '1.1.6', 'kegiatan 2 program 1 linjamsos', '3000000', '1523451183', ''),
(7, 'bidang perlindungan dan jaminan sosial', '2.2.2.2.3', 'program 2 linjamsos', '1.1.7', 'kegiatan 1 program 2 linjamsos', '1000000', '1523451204', ''),
(8, 'bidang perlindungan dan jaminan sosial', '2.2.2.2.3', 'program 2 linjamsos', '1.1.8', 'kegiatan 2 program 2 linjamsos', '3000000', '1523451224', ''),
(9, 'sekertariat', '4.4.4.4.4', 'program 1 sekertariat', '1.1.9', 'kegiatan 1 program 1 sekretariat', '1000000', '1523451244', ''),
(10, 'sekertariat', '4.4.4.4.4', 'program 1 sekertariat', '1.2.0', 'kegiatan 2 program 1 sekretariat', '2000000', '1523451260', ''),
(11, 'sekertariat', '4.4.4.4.5', 'program 2 sekertariat', '1.2.1', 'kegiatan 1 program 2 sekretariat', '1000000', '1523451283', ''),
(12, 'sekertariat', '4.4.4.4.5', 'program 2 sekertariat', '1.2.2', 'kegiatan 2 program 2 sekretariat', '3000000', '1523451299', ''),
(13, 'bidang pemberdayaan sosial', '3.3.3.3.3', 'program 1 pemsos', '9.1.1', 'kegiatan 1 program 1 pemsos', '3000000', '1523451554', ''),
(14, 'bidang pemberdayaan sosial', '3.3.3.3.3', 'program 1 pemsos', '9.1.2', 'kegiatan 2 program 1 pemsos', '1000000', '1523451578', ''),
(15, 'bidang pemberdayaan sosial', '3.3.3.3.4', 'program 2 pemsos', '9.1.3', 'kegiatan 1 program 2 pemsos', '1000000', '1523451597', ''),
(16, 'bidang pemberdayaan sosial', '3.3.3.3.4', 'program 2 pemsos', '9.1.4', 'kegiatan 1 program 2 pemsos', '2000000', '1523451610', ''),
(17, 'bidang pemberdayaan sosial', '3.3.3.3.4', 'program 2 pemsos', '9.1.5', 'kegiatan 2 program 2 pemsos', '3000000', '1523451626', '1525664825');

-- --------------------------------------------------------

--
-- Table structure for table `master_program`
--

CREATE TABLE `master_program` (
  `id` int(11) NOT NULL,
  `bidang` varchar(255) NOT NULL,
  `kode_rekening_program` varchar(255) NOT NULL,
  `nama_program` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_program`
--

INSERT INTO `master_program` (`id`, `bidang`, `kode_rekening_program`, `nama_program`, `created_at`, `updated_at`) VALUES
(1, 'bidang rehabilitasi sosial', '1.1.1.1.1', 'program 1 resos', '1523450963', ''),
(2, 'bidang rehabilitasi sosial', '1.1.1.1.2', 'program 2 resos', '1523450976', ''),
(3, 'bidang perlindungan dan jaminan sosial', '2.2.2.2.2', 'program 1 linjamsos', '1523450989', ''),
(4, 'bidang perlindungan dan jaminan sosial', '2.2.2.2.3', 'program 2 linjamsos', '1523450998', ''),
(5, 'bidang pemberdayaan sosial', '3.3.3.3.3', 'program 1 pemsos', '1523451010', ''),
(6, 'bidang pemberdayaan sosial', '3.3.3.3.4', 'program 2 pemsos', '1523451022', ''),
(7, 'sekertariat', '4.4.4.4.4', 'program 1 sekertariat', '1523451036', ''),
(8, 'sekertariat', '4.4.4.4.5', 'program 2 sekertariat', '1523451044', ''),
(9, 'sekertariat', '1', 'tes', '1546875579', '');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pmks_kategori`
--

CREATE TABLE `pmks_kategori` (
  `id` int(10) UNSIGNED NOT NULL,
  `bidang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_orang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `belum_ditangani` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sudah_ditangani` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dibuat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diubah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pmks_kategori`
--

INSERT INTO `pmks_kategori` (`id`, `bidang`, `kategori`, `deskripsi`, `gambar`, `jumlah_orang`, `belum_ditangani`, `sudah_ditangani`, `dibuat`, `diubah`, `created_at`, `updated_at`) VALUES
(2, 'bidang perlindungan dan jaminan sosial', 'Anak yang memerlukan perlindungan khusus', 'Anak yang berusia\r\n6 (enam) tahun sampai dengan 18 (delapan belas) tahun dalam situasi darurat,\r\ndari kelompok minoritas dan terisolasi, dieksploitasi secara ekonomi dan/atau\r\nseksual, diperdagangkan, menjadi korban penyalahgunaan narkotika, alkohol,\r\npsikotropika, dan zat adiktif lainnya (napza), korban penculikan, penjualan,\r\nperdagangan, korban kekerasan baik fisik dan/atau mental, yang menyandang\r\ndisabilitas, dan korban perlakuan salah dan penelantaran.<br>Kriteria :\r\n\r\n<br>a.&nbsp;Berusia 6 (enam) tahun sampai dengan 18\r\n(delapan belas) tahun;\r\n\r\n<br>b.&nbsp;Dalam situasi darurat dan berda dalam\r\nlingkungan yang buruk/diskriminasi;\r\n\r\n<br>c.&nbsp;Korban perdagangan manusia;\r\n\r\n<br>d.&nbsp;Korban kekerasan, baik fisikbdan/atau mental\r\ndan seksual;\r\n\r\n<br>e.&nbsp;Korban eksploitasi, ekonomi atau seksual;\r\n\r\n<br>f.&nbsp;&nbsp;Dari kelompok minoritas dan terisolasi, serta\r\ndari komunitas adat terpencil;\r\n\r\n<br>g.&nbsp;Menjadi korban penyalahgunaan narkotika,\r\nalkohol, psikotropika dan zat adiktif lainnya (NAPZA); dan\r\n\r\n<br>h. Terinfeksi\r\nHIV/AIDS.', '', '100', '10', '90', '1522345324', '1522860543', '2018-03-15 06:20:53', '2018-04-04 09:49:03'),
(3, 'bidang pemberdayaan sosial', 'Lanjut usia terlantar', 'Seseorang yang\r\nberusia 60 (enam puluh) tahun atau lebih, karena faktor-faktor tertentu tidak\r\ndapat&nbsp; memenuhi kebutuhan dasarnya.<br>Kriteria :\r\n\r\n<br>a.&nbsp;Tidak terpenuhi kebutuhan dasar seperti\r\nsandang, pangan, dan papan; dan\r\n\r\n<br>b. Terlantar\r\nsecara psikis, dan sosial.', '', '200', '10', '190', '1522345324', '1522860536', '2018-03-15 06:22:12', '2018-04-04 09:48:56'),
(4, 'bidang perlindungan dan jaminan sosial', 'Penyandang disabilitas', 'Mereka yang\r\nmemiliki keterbatasan fisik, mental intelektual, atau sensorik dalam jangka\r\nwaktu lama dimana ketika berhadapan dengan berbagai hambatan hal ini dapat\r\nmengalami partisipasi penuh dan efektif mereka dalam masyarakat berdasarkan\r\nkesetaraan dengan yang lainnya.<br>Kriteria :\r\n\r\n<br>a.&nbsp;Mengalami hambatan untuk melakukan suatu\r\naktifitas sehari-hari;\r\n\r\n<br>b.&nbsp;Mengalami hambatan dalam bekerja sehari-hari;\r\n\r\n<br>c.&nbsp;Tidak mampu memecahkan masalah secra memadai;\r\n\r\n<br>d. Penyandang\r\ndisabilitas fisik : tubuh, netra, rungu wicara;<br>e. Penyandang disabilitas mental : mental\r\nretardasi dan eks psikotik; dan\r\n\r\n<br>f.&nbsp; Penyandang\r\ndisabilitas fisik dan mental/disabilitas ganda.<br>', '', '300', '10', '290', '1522345324', '1522860530', '2018-03-15 06:25:44', '2018-04-04 09:48:50'),
(5, 'bidang perlindungan dan jaminan sosial', 'Tuna susila', 'Seseorang yang\r\nmelakukan hubungan seksual dengan sesama atau lawan jenis secara berulang-ulang\r\ndan bergantian diluar perkawinan yang sah dengan tujuan mendapatkan imbalan\r\nuang, materi atau jasa.\r\n<br>Kriteria :\r\n\r\n<br>a.&nbsp;Menjajakan diri di tempat umum, di lokasi atau\r\ntempat pelacuran seperti rumah bordil, dan tempat terselubung seperti warung\r\nremang-remang, hotel, mall dan diskotek; dan\r\n\r\n<br>b. Memperoleh\r\nimbalan uang, materi atau jasa.&nbsp;', '', '200', '10', '190', '1522345324', '1522860523', '2018-03-15 06:27:06', '2018-04-04 09:48:43'),
(6, 'bidang rehabilitasi sosial', 'Gelandangan', 'Orang-orang yang\r\nhidup dalam keadaan yang tidak sesuai dengan norma kehidupan yang layak dalam\r\nmasyarakat setempat, serta tidak mempunyai pencaharian dan tempat tinggal yang\r\ntetap serta mengembara di tempat umum.\r\n\r\n<br>Kriteria :\r\n\r\n<br><span>a.&nbsp;Tanpa Kartu Tanda Penduduk (KTP);</span>\r\n\r\n<br><span>b.&nbsp;Tanpa tempat tinggal yang pasti/tetap;</span>\r\n\r\n<br><span>c.&nbsp;Tanpa pengahsilan yang tetap; dan</span>\r\n\r\n<br>d. Tanpa\r\nrencana hari depan anak-anaknya maupun dirinya.', '', '400', '100', '300', '1522345324', '1522860513', '2018-03-15 06:27:56', '2018-04-04 09:48:33'),
(7, 'bidang rehabilitasi sosial', 'Pengemis', 'Orang-orang yang\r\nmendapat penghasilan meminta-minta di tempat umum dengan berbagai cara dan\r\nalasan untuk mendapatkan belas kasihan orang lain.\r\n\r\n<br>Kriteria :\r\n\r\n<br><span>a.&nbsp;Mata pencahariannya tergantung pada belas\r\nkasihan orang lain;</span>\r\n\r\n<br><span>b.&nbsp;Berpakaian kumuh dan compang-camping;</span>\r\n\r\n<br><span>c.&nbsp;Berada di tempat-tempat&nbsp; ramai/strategis; dan</span>\r\n\r\n<br>d. Memperalat\r\nsesama untuk merangasang&nbsp; belas kasihan\r\norang lain.', '', '800', '0', '800', '1522345324', '1522860504', '2018-03-15 06:44:55', '2018-04-04 09:48:24'),
(8, 'bidang pemberdayaan sosial', 'Pemulung', 'Orang-orang yang\r\nmelakukan pekerjaan dengan cara memungut dan&nbsp;\r\nmengumpulkan barang-barang bekas yang berada di berbagai tempat\r\npemukiman&nbsp; pendudukan, pertokoan dan/atau\r\npasar-pasar yang bermaksud untuk didaur ulang atau dijual kembali, sehingga\r\nmemiliki nilai ekonomis.\r\n\r\n<br>Kriteri :\r\n\r\n<br><span>a.&nbsp;Tidak mempunyai pekerjaan tetap; dan</span>\r\n\r\n<br>b. Mengumpulkan\r\nbarang bekas.', '', '300', '100', '200', '1522345324', '1522860495', '2018-03-15 06:48:25', '2018-04-04 09:48:15'),
(9, 'bidang pemberdayaan sosial', 'Kelompok Minoritas', '<span>Kelompok yang\r\nmengalami gangguan keberfungsian sosialnya akibat diskriminasi dan\r\nmarginalisasi yang diterimanya sehingga karena keterbatasannya menyebabkan\r\ndirinya rentan mengalami masalah sosial, sperti&nbsp;\r\ngay, waria, dan lesbiab.<br></span>\r\n\r\nKriteria :\r\n\r\n<br><span>a.&nbsp;Gangguan keberfungsian sosial;</span>\r\n\r\n<br><span>b.&nbsp;Diskriminasi;</span>\r\n\r\n<br><span>c.&nbsp;Marginalisasi; dan <br></span>d. Berperilaku\r\nseks menyimpang.', '', '100', '10', '90', '1522345324', '1522860487', '2018-03-15 06:49:07', '2018-04-04 09:48:07'),
(10, 'bidang pemberdayaan sosial', 'Bekas Warga Binaan Lembaga Pemasyarakatan (BWBLP)', '<span>Seseorang yang telah selesai menjalani masa\r\npidananya sesuai dengan keputusan pengadilan dan&nbsp; mengalami hambatan untuk menyesuaikan diri\r\nkembali dalam kehidupan masyarakat, sehingga mendapat kesulitan untuk\r\nmendpatkan pekerjaan atau melaksanakan kehidupan secara normal&nbsp;<br></span>Kriteria :\r\n\r\n<br><span>a.&nbsp;Sesorang (laki-laki/perempuan) berusia diatas\r\n18 (delapan belas) tahun;</span>\r\n\r\n<br><span>b.&nbsp;Telah selesai dan keluar dari lembaga\r\npemasyarakatan karena masalah pidana;</span>\r\n\r\n<br><span>c.&nbsp;Kurang diterima/dijauhi atau diabaikan oleh\r\nkeluarga dan masyarakat;</span>\r\n\r\n<br><span>d.&nbsp;Sulit mendapatkan pekerjaan yang tetap; dan</span>\r\n\r\n<br>e. Berperan\r\nsebagai kepala keluarga/pencari nafkah utama keluarga yang tidak dapat\r\nmelaksanakan tugas dan fungsinya.<br>', 'uploads/kategori_pmks/870_no-image.png', '50', '40', '10', '1522345324', '1522860487', '2018-03-15 06:50:04', '2018-03-15 06:50:04'),
(11, 'bidang rehabilitasi sosial', 'Orang yang HIV/AIDS (ODHA)', 'Seseorang yang\r\ntelah dinyatakan terinfeksi HIV/AIDS dan membutuhkan pelayanan sosial, perawatan\r\nkesehatan, dukungan dan pengobatan untuk mencapai kualiatas hidup yang optimal.\r\n\r\n<br>Kriteria :\r\n\r\n<br><span>a.&nbsp;Sesorang (laki-laki/permpuan) berusia 18\r\n(delapan belas) tahun; dan</span>\r\n\r\n<br>b. Telah\r\nterinfeksi HIV/AIDS.', '', '10', '1', '9', '1522345324', '1522860480', '2018-03-15 06:50:33', '2018-04-04 09:48:00'),
(12, 'bidang pemberdayaan sosial', 'Korban Penyalahgunaan NAPZA', 'Seseorang yang\r\nmenggunakan narkotika, psikotropika, dan zat adiktif lainnya diluar pengobatan\r\natau tanpa sepengetahuan dokter yang berwenang.\r\n\r\n<br>Kriteria :\r\n\r\n<br><span>a.&nbsp;Seseorang (laki-laki/perempuan) yang pernah\r\nmenyalahgunakan narkotika, psikotropika, dan zat-zat adiktif lainnya baik\r\ndilakukan sekali, lebih dari sekali atau dalam taraf coba-coba;</span>\r\n\r\n<br><span>b.&nbsp;Secara medis sudah dinyatakan bebas dari\r\nketergantungan obat oleh dokter yang berwenang; dan</span>\r\n\r\n<br><span>c.&nbsp;Tidak dapat melaksanakan keberfungsian\r\nsosialnya.</span>\r\n\r\nF18.\r\nKorban trafficking', '', '100', '10', '90', '1522345324', '1522860472', '2018-03-15 06:51:04', '2018-04-04 09:47:52'),
(13, 'bidang rehabilitasi sosial', 'Korban trafficking', 'Seseoarang yang\r\nmengalami penderitaan psikis, mental, fisik, seksual, ekonomi dan/atau sosial\r\nyang diakibatkan tindak pidana perdagangan orang.\r\n\r\n<br>Kriteria :\r\n\r\n<br><span>a.&nbsp;Mengalami tindak kekerasan;</span>\r\n\r\n<br><span>b.&nbsp;Mengalami eksploitasi seksual;</span>\r\n\r\n<br><span>c.&nbsp;Mengalami penelantaran;</span>\r\n\r\n<br><span>d.&nbsp;Mengalami pengusiran (deportasi); dan</span>\r\n\r\n<br>e. Ketidakmampuan\r\nmenyesuaikan diri di tempat kerja baru (negara tempat bekerja) sehingga\r\nmengakibatkan fungsi sosialnya terganggu.', 'uploads/kategori_pmks/948_no-image.png', '700', '600', '100', '1522345324', '1522860487', '2018-03-15 06:52:47', '2018-03-15 06:52:47'),
(14, 'bidang rehabilitasi sosial', 'Korban tindak kekerasan', 'Orang baik\r\nindividu, keluarga, kelompok maupun kesatuan masyarakat tertentu yang mengalami\r\ntindak kekerasan, baik sebagai akibat perlakuan salah, eksploitasi,\r\ndiskriminasi, bentuk-bentuk kekerasan lainnya ataupun dengan membiarkan orang\r\nberada dalam situasi berbahaya sehingga menyebabkan terganggu.\r\n\r\n<br>Kriteria :\r\n\r\n<br><span>a.&nbsp;Mengalami perlakuan salah;</span>\r\n\r\n<br><span>b.&nbsp;Mengalami penelantaran;</span>\r\n\r\n<br><span>c.&nbsp;Mengalami tindak eksploitasi;</span>\r\n\r\n<br><span>d.&nbsp;Mengalami perlakuan diskriminasi; dan</span>\r\n\r\n<br>e. Dibiarkan\r\ndalam situasi berbahaya.', '', '400', '100', '300', '1522345324', '1522860465', '2018-03-15 06:55:43', '2018-04-04 09:47:45'),
(15, 'bidang perlindungan dan jaminan sosial', 'Pekerja Migran Bermasalah Sosial (PMBS)', 'Pekerja migran internal dan lintas negara yang\r\nmengalami masalah sosial, baik dalam bentuk tindak kekerasan,&nbsp;penelantaran,\r\nmengalami musibah (faktor alam dan sosial) maupun mengalami disharmoni sosial\r\nkarena ketidakmampuan menyesuaikan diri di negara tempat bekerja sehingga\r\nmengakibatkan fungsi sosialnya terganggu.<br>Kriteria :\r\n\r\n<br><span>a.&nbsp;&nbsp;&nbsp;&nbsp; Pekerja migran domestik;</span>\r\n\r\n<br><span>b.&nbsp;Pekerja migran lintas negara;</span>\r\n\r\n<br><span>c.&nbsp;Eks pekerja migran domestik dan lintas negara;</span>\r\n\r\n<br><span>d.&nbsp;Eks pekerja migran domestik dan lintas negara\r\nyang sakit, cacat dan meninggal dunia;</span>\r\n\r\n<br><span>e.&nbsp;Pekerja migran tidak berdokumen (undokument);</span>\r\n\r\n<br><span>f.&nbsp;&nbsp;Pekerja migran miskin;</span>\r\n\r\n<br><span>g.&nbsp;Mengalami maslah sosial dalam bentuk :</span>\r\n\r\n<br><span>1)&nbsp;Tindak kekerasan;</span>\r\n\r\n<br><span>2)&nbsp;Eksploitasi;</span>\r\n\r\n<br><span>3)&nbsp;Penelantaran;</span>\r\n\r\n<br><span>4)&nbsp;Pengusiran (deportasi);</span>\r\n\r\n<br><span>5)&nbsp;Ketidakmampuan menyesuaikan diri di tempat\r\nkerja baru (negara tempat bekerja) sehingga mengakibatkan funsi sosialnya\r\nterganggu; dan</span>\r\n\r\n<br>6) Mengalami\r\ntrafficking.&nbsp;', '', '300', '100', '200', '1522345324', '1522860457', '2018-03-15 06:58:44', '2018-04-04 09:47:37'),
(16, 'bidang perlindungan dan jaminan sosial', 'Korban Bencana Alam', 'Orang atau\r\nsekelompok orang yang menderita atau meninggal dunia akibat bencana yang\r\ndiakibatkan oleh peristiwa atau serangkaian peristiwa yang disebabkan oleh alam\r\nantara lain berupa gempa bumi, tsunami, gunung meletus, banjir, kekeringan,\r\nangin topan, dan tanah longsor terganggu fungsi sosialnya.\r\n\r\n<br>Kriteria :\r\n\r\n<br>Seseorang atau sekelompok\r\norang yang mengalami:\r\n\r\n<br><span>a.&nbsp;Korban terluka atau meninggal;</span>\r\n\r\n<br><span>b.&nbsp;Kerugian harta benda;</span>\r\n\r\n<br><span>c.&nbsp;Damapak psikologis; dan</span>\r\n\r\n<br>d. Terganggu\r\ndalam melaksanakan fungsi sosialnya.', '', '400', '100', '300', '1522345324', '1525664750', '2018-03-15 06:59:28', '2018-05-06 20:45:50'),
(17, 'bidang rehabilitasi sosial', 'Korban bencana sosial', 'Orang atau\r\nsekelompok orang yang menderita atau meninggal dunia akibat bencana yang\r\ndiakibatkan oleh peristiw atau serangkaian peristiwa yang diakibatkan oleh\r\nmanusia yang meliputi konflik sosial antar kelompok aatau antar komunitas\r\nmasyarakat, dan teror.\r\n\r\n<br>Kriteria :\r\n\r\n<br>Sesorang atau\r\nsekelompok orang yang mengalami : <br>\r\n\r\n<span>a.&nbsp;Korban jiwa manusia;</span>\r\n\r\n<br><span>b.&nbsp;Kerugian harta benda; dan</span>\r\n\r\n<br>c. Dampak\r\npsikologis.', '', '700', '0', '700', '1522345324', '1522860442', '2018-03-15 07:00:05', '2018-04-04 09:47:22'),
(18, 'bidang rehabilitasi sosial', 'Permpuan rawan sosial ekonomi', 'Seoran perempuan\r\ndewasa menikah, belum menikah atau janda dan tidak mempunyai penghasilan cukup\r\nuntuk dapat memenuhi kebutuhan pokok sehari-hari.\r\n\r\n<br>Kriteria :\r\n\r\n<br><span>a.&nbsp;Perempuan berusia 18 (delapan belas) tahun\r\nsampai dengan 59 (lima puluh sembilan) tahun;</span>\r\n\r\n<br><span>b.&nbsp;Istri yang ditinggal suami tanpa kejelasan;</span>\r\n\r\n<br><span>c.&nbsp;Menjadi pencari nafkah utama keluarga; dan</span>\r\n\r\n<br>d. Berpenghasilan\r\nkurang atau tidak mencukupi untuk kebutuhan hidup layak.', '', '200', '10', '190', '1522345324', '1522860435', '2018-03-15 07:00:40', '2018-04-04 09:47:15'),
(19, 'bidang perlindungan dan jaminan sosial', 'Fakir Miskin', 'Orang yang sama sekali tidak mempunyai sumber\r\nmata pencaharian dan/atau mempunya sumber mata pencaharian tetapi tidak\r\nmempunyai kemampuan memenuhi kebutuhan&nbsp;dasar yang layak\r\nbagi kehidupan dirinya dan/atau keluarganya.<br>Kriteria :\r\n\r\n<br><span>a.&nbsp;Tidak mempunyai sumber mata pencaharian;\r\ndan/atau</span>\r\n\r\n<br>b. Mempunyai\r\nsumber mata pencaharian tetapi tidak mempunyai kemampuan memenuhi kebutuhan\r\ndasar yang layak bagi kehidupan dirinya dan/atau keluarganya.&nbsp;', '', '400', '100', '300', '1522345324', '1522860423', '2018-03-15 07:01:18', '2018-04-04 09:47:03'),
(20, 'bidang rehabilitasi sosial', 'Keluarga bermasalah sosial psikologis', 'Keluarga yang\r\nhubungan antar anggota keluarganya terutama antara suami-istri, orang tua\r\ndengan anak kurang serasi, sehingga tugas-tugas dan fungsi keluarga tidak dapat\r\nberjalan dengan wajar.\r\n\r\n<br>Kriteria :\r\n\r\n<br><span>a.&nbsp;Suami atau istri sering tidak saling\r\nmemperhatikan atau anggota keluarga kurang berkomunikasi;</span>\r\n\r\n<br><span>b.&nbsp;Suami dan istri sering bertengkar, hidup\r\nsendiri-sendiri walaupun masih dalam ikatan keluarga;</span>\r\n\r\n<br><span>c.&nbsp;Hubungan dengan tetangga kurang baik, sering\r\nbertengkar tidak mau bergaul/berkomunikasi; dan</span>\r\n\r\n<br>d. Kebutuhan\r\nanak baik jasmani, rohani maupun sosial kurang terpenuhi.', '', '100', '10', '90', '1522345324', '1522860400', '2018-03-15 07:01:55', '2018-04-04 09:46:40'),
(21, 'bidang pemberdayaan sosial', 'Komunitas Adat terpencil', 'Kelompok sosial\r\nbudaya yang bersifat lokal dan terpencar serta kurang atau belum terlibat dalam\r\njaringan dan pelayanan baik sosial ekonomi, maupun politik.\r\n\r\n<br>Kriteria :\r\n\r\n<br><span>a.&nbsp;Berbentuk komunitas relatif kecil, tertutup\r\ndan homogen;</span>\r\n\r\n<br><span>b.&nbsp;Pranata sosial bertumpu pada hubungan\r\nkekerabatan;</span>\r\n\r\n<br><span>c.&nbsp;Pada umumnya terpencil secara geografis dan\r\nrelatif&nbsp; sulit dijangkau;</span>\r\n\r\n<br><span>d.&nbsp;Pada umumnya masih hidup dengan sistem ekonomi\r\nsubsistem;</span>\r\n\r\n<br><span>e.&nbsp;Peralatan dan teknologinya sederhana;</span>\r\n\r\n<br><span>f.&nbsp;&nbsp;Ketergantungan pada lingkungan hidup dan sumber\r\ndaya alam setempat relatif tinggi; dan <br></span>g. Terbatasnya\r\nakses pelayanan sosial ekonomi dan politik', '', '100', '10', '90', '1522345324', '1522860395', '2018-03-15 07:02:38', '2018-04-04 09:46:35'),
(22, 'bidang rehabilitasi sosial', 'Anak Terlantar', 'seorang anak berusia 6 (enam) tahun sampai dengan 18 (delapan belas) tahun, meliputi anak yang mengalami perlakuan salah dan diterlantarkan oleh orang tua/keluarga atau anak kehilangan hak asuh dari orangtua/keluarga.<br>Kriteria:<br>a. berasal dari keluarga fakir miskin;<br>b. anak yang dilalaikan oleh orang tuanya; dan<br>c. anak yang tidak terpenuhi kebutuhan dasarnya;', '', '400', '100', '300', '1522345324', '1522860388', '2018-03-15 07:09:21', '2018-04-04 09:46:28'),
(23, 'bidang pemberdayaan sosial', 'Anak yang berhadapan dengan hukum', 'orang yang berumur 12 (dua belas) tahun tetapi belum mencapai umur 18 (delapan belas) tahun, meliputi anak yang disangka, didakwa, atau dijatuhi pidana karena melakukan tindak pidana dan anak yang menjadi korban tindak pidana yang melihat dan/atau mendengar sendiri terjadinya suatu tindakan pidana.<br>Kriteria:<br>a. disangka;<br>b. didakwa; atau<br>c. dijatuhi pidana', '', '900', '100', '800', '1522345324', '1522860380', '2018-03-15 07:12:16', '2018-04-04 09:46:20'),
(24, 'bidang rehabilitasi sosial', 'Anak Jalanan', 'Anak yang rentan bekerja dijalanan, anak yang bekerja dijalanan, dan/atau anak yang bekerja dan hidup dijalanan yang menghasilkan sebagian besar waktunya untuk melakukan kegiatan hidup sehari-hari.<br>Kriteria:<br>a. menghabiskan sebagian waktunya dijalanan maupun ditempat-tempat umum; atau<br>b. mencari nafkah dan/atau berkeliaran dijalanan maupun di tempat-tempat umum.', '', '500', '100', '400', '1522345324', '1522861123', '2018-03-15 07:14:56', '2018-04-04 09:58:43'),
(25, 'bidang perlindungan dan jaminan sosial', 'Anak dengan Kedisabilitasan (ADK)', 'Seseorang yang belum berusia 18 (delapan belas) tahun yang mempunyai kelainan fisik atau mental yang dapat mengganggu atau merupakan rintangan dan hambatan bagi dirinya untuk melakukan fungsi-fungsi jasmani, rohani maupun sosialnya secara layak.<br>Kriteria:<br>a. Anak dengan disabilitas fisik: tubuh, netra, rungu wicara<br>b. Anak dengan disabilitas mental: mental retardasi, dan eks psikotik<br>c. Anak dengan disabilitas fisik dan mental /atau disabilitas ganda<br>d. Tidak mampu melaksanakan kehidupan sehari-hari', '', '500', '100', '400', '1522345324', '1522860365', '2018-03-15 07:19:25', '2018-04-04 09:46:05'),
(26, 'bidang rehabilitasi sosial', 'Anak yang menjadi korban tindak kekerasan atau diperlakukan salah', 'Anak yang terancam secara fisik dan nonfisik karena tindak kekerasan , diperlakukan salah atau tidak semestinya dalam lingkungan keluarga atau lingkungan sosial terdekatnya, sehingga tidak terpenuhi kebutuhan dasarnya dengan wajar baik secara jasmani, rohani maupun sosial.<br>Kriteria:<br>a. anak (laki-laki/perempuan) dibawah usia 18 (delapan belas) tahun;<br>b. sering mendapat perlakuan kasar dan kejam dan tindakan yang berakibat secara fisik dan/atau psikologis;<br>c. pernah dianiyaya dan/atau diperkosa dan<br>d. dipaksa bekerja (tidak atas kemauannya)', '', '100', '30', '70', '1522345324', '1522860215', '2018-03-15 07:23:43', '2018-04-04 09:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `badge` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `user_id`, `status`, `badge`, `created_at`, `updated_at`) VALUES
(6, '1', 'hallo', 'icon-badge', '2018-03-28 13:15:49', '2018-03-28 13:15:49'),
(7, '1', 'apa kabar guys', 'icon-star', '2018-03-28 13:16:09', '2018-03-28 13:16:09'),
(8, '1', 'nice to meet you', 'icon-bell', '2018-03-28 13:16:19', '2018-03-28 13:16:19'),
(9, '4', 'mantap gan', 'icon-bell', '2018-04-04 10:01:23', '2018-04-04 10:01:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bidang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `username`, `bidang`, `address`, `city`, `country`, `phone`, `about`, `website`, `image`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@mailinator.com', '$2y$10$kBawE.yRgC.qj7aD5AjEF.9/RrKaEFMINS7TaPtBVtqgsDN05YbuG', 'admin', 'bidang rehabilitasi sosial', 'padalarang', 'bandung', 'ID', '082315099988', 'i\'m the professional web application developer and i\'m geek', 'http://cartenz.co.id', 'uploads/profile/448_pp4.jpg', '1', 'd8jvktqPyfdRuNMLJyReJl1WYxRM4fJPdt6sFxQkTydkJ4iHSFRi72DrlNAq', '2018-03-28 08:31:07', '2019-01-07 07:37:48'),
(8, 'bidang rehabilitasi sosial', 'resos@mailinator.com', '$2y$10$EpTGtNU9BIviOctO4I0iHOT0nA9qvDrD.Po4jEltKJlExAUavYPjq', 'bidang rehabilitasi sosial', 'bidang rehabilitasi sosial', 'bandung, kebon kelapa', 'bandung', 'ID', '', '', '', '', '2', 'ckFAtszqwbi4fEYqjj3jJdRkSdWozDXu4mc1o93XklET1e1JHippvryj07oF', '2019-01-07 08:24:43', '2019-01-07 08:24:43'),
(9, 'bidang perlindungan dan jaminan sosial', 'linjamsos@mailinator.com', '$2y$10$1.p4k6SS.foksYQmF4KuvOjG4Q9aHwBMqGqENcOpawN/xkk5vbsSi', 'bidang perlindungan dan jaminan sosial', 'bidang perlindungan dan jaminan sosial', 'bandung, kebon kelapa', 'bandung', 'ID', '', '', '', '', '2', 'i2K1BZoHKomnrWi4sBCoyRMl4Ci54JTsGBQ3H6dUBuYgMe1OPA1QODAjaxAr', '2019-01-07 08:25:23', '2019-01-07 08:25:23'),
(10, 'bidang pemberdayaan sosial', 'pemsos@mailinator.com', '$2y$10$bOZ57tJPybOCn/NfWofUmuJSvB0BU41cQoCiElVB/FF6cSrJjgF5a', 'bidang pemberdayaan sosial', 'bidang pemberdayaan sosial', 'bandung, kebon kelapa', 'bandung', 'ID', '', '', '', '', '2', 'IgFvSMwQBOWUtMK4EMqXWosVdH4IUgcnF6AOTz7dfHLsd3zg7TDU7aYOt4jA', '2019-01-07 08:26:43', '2019-01-07 08:26:43'),
(11, 'sekretariat', 'sekretariat@mailinator.com', '$2y$10$PmDb5jYMrDDAamC222EsaOkmI8Io7rf7ZjyIaFbmVzuqWUQB7DEtK', 'sekretariat', 'sekertariat', 'bandung, kebon kelapa', 'bandung', 'ID', '', '', '', '', '2', 'PdcIAFkQPzdQY85qFh1qYFMZqEl8FG77zGmv8udt9C0r2Bjyg0BmofDU6fml', '2019-01-07 08:28:53', '2019-01-07 08:28:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lkpj`
--
ALTER TABLE `lkpj`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lppd`
--
ALTER TABLE `lppd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_kegiatan`
--
ALTER TABLE `master_kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_program`
--
ALTER TABLE `master_program`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pmks_kategori`
--
ALTER TABLE `pmks_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lkpj`
--
ALTER TABLE `lkpj`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `lppd`
--
ALTER TABLE `lppd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `master_kegiatan`
--
ALTER TABLE `master_kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `master_program`
--
ALTER TABLE `master_program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pmks_kategori`
--
ALTER TABLE `pmks_kategori`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
