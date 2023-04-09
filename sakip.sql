-- phpMyAdmin SQL Dump
-- version 4.9.11
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 10, 2023 at 05:14 AM
-- Server version: 10.5.19-MariaDB-cll-lve
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `n1607753_sakip`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `subfolder` varchar(255) NOT NULL,
  `kegiatan` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `nama_file` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_upload` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `lokasi`, `subfolder`, `kegiatan`, `jenis`, `nama_file`, `tanggal`, `nama_upload`) VALUES
(1, 'A Perencanaan Kinerja', 'A. 4 Target kinerja Perjanjian Kinerja ditetapkan dengan baik', 'Perjanjian-Kinerja-2022-BPS-Kabupaten-Dompu', 'SK', 'SK_Perjanjian-Kinerja-2022-BPS-Kabupaten-Dompu.pdf', '2022-08-30', 'M. Chumaidi Rahman '),
(2, 'A Perencanaan Kinerja', 'A. 4 Target kinerja Perjanjian Kinerja ditetapkan dengan baik', '2. Notulen dan Penjelasan Penetapan Target PK Tahun 2022', 'Notulensi', 'Notulensi_2. Notulen dan Penjelasan Penetapan Target PK Tahun 2022.pdf', '2022-08-30', 'M. Chumaidi Rahman '),
(3, 'A Perencanaan Kinerja', 'A. 4 Target kinerja Perjanjian Kinerja ditetapkan dengan baik', 'Surat Undangan Rapat Penetapan PK 2022', 'Undangan', 'Undangan_Surat Undangan Rapat Penetapan PK 2022.pdf', '2022-08-30', 'M. Chumaidi Rahman '),
(4, 'A Perencanaan Kinerja', 'A. 4 Target kinerja Perjanjian Kinerja ditetapkan dengan baik', 'Dokumentasi Rapat Penetapan PK 2022', 'Dokumentasi', 'Dokumentasi_Dokumentasi Rapat Penetapan PK 2022.pdf', '2022-08-30', 'M. Chumaidi Rahman '),
(5, 'A Perencanaan Kinerja', 'A. 4 Target kinerja Perjanjian Kinerja ditetapkan dengan baik', 'Daftar Hadir Rapat Penetapan Target PK 2022', 'Daftar Hadir', 'Daftar Hadir_Daftar Hadir Rapat Penetapan Target PK 2022.pdf', '2022-08-30', 'M. Chumaidi Rahman '),
(6, 'A Perencanaan Kinerja', 'A. 4 Target kinerja Perjanjian Kinerja ditetapkan dengan baik', 'Dasar Hitung Penentuan Perjanjian Kinerja Tahun 2022', 'Laporan', 'Laporan_Dasar Hitung Penentuan Perjanjian Kinerja Tahun 2022.pdf', '2022-08-30', 'M. Chumaidi Rahman '),
(7, 'A Perencanaan Kinerja', 'A. 1 Target kinerja Renstra ditetapkan dengan baik', 'Undangan Rapat Monitoring Renstra (Desember 2021)', 'Undangan', 'Undangan_Undangan Rapat Monitoring Renstra (Desember 2021).pdf', '2022-08-30', 'M. Chumaidi Rahman '),
(8, 'A Perencanaan Kinerja', 'A. 1 Target kinerja Renstra ditetapkan dengan baik', 'Notulensi Monitoring Resntra 2020-2024 (Desember 2021)', 'Notulensi', 'Notulensi_Notulensi Monitoring Resntra 2020-2024 (Desember 2021).pdf', '2022-08-30', 'M. Chumaidi Rahman '),
(9, 'A Perencanaan Kinerja', 'A. 1 Target kinerja Renstra ditetapkan dengan baik', 'Daftar Hadir Rapat Monitoring Renstra 2020-2024 (Desember 2021)', 'Daftar Hadir', 'Daftar Hadir_Daftar Hadir Rapat Monitoring Renstra 2020-2024 (Desember 2021).pdf', '2022-08-30', 'M. Chumaidi Rahman '),
(10, 'A Perencanaan Kinerja', 'A. 1 Target kinerja Renstra ditetapkan dengan baik', 'Dokumentasi Rapat Monitoring Renstra 2020-2024 (Desember 2021)', 'Dokumentasi', 'Dokumentasi_Dokumentasi Rapat Monitoring Renstra 2020-2024 (Desember 2021).pdf', '2022-08-30', 'M. Chumaidi Rahman '),
(11, 'A Perencanaan Kinerja', 'A. 4 Target kinerja Perjanjian Kinerja ditetapkan dengan baik', 'SK Tim Humas', 'SK', 'SK_SK Tim Humas.jpg', '2022-09-01', 'Emalia Septiani Hirma');

-- --------------------------------------------------------

--
-- Table structure for table `subkomponen`
--

CREATE TABLE `subkomponen` (
  `id` int(11) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `subfolder` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `subkomponen`
--

INSERT INTO `subkomponen` (`id`, `lokasi`, `subfolder`) VALUES
(1, 'A Perencanaan Kinerja', 'A. 4 Target kinerja Perjanjian Kinerja ditetapkan dengan baik'),
(2, 'A Perencanaan Kinerja', 'A. 1 Target kinerja Renstra ditetapkan dengan baik'),
(3, 'A Perencanaan Kinerja', 'A. 2 Jangka menengah dalam Renstra telah dimonitor pencapaiannya sampai dengan tahun berjalan'),
(4, 'A Perencanaan Kinerja', 'A. 3 Dokumen Renstra telah direviu secara berkala'),
(5, 'A Perencanaan Kinerja', 'A. 5 Target kinerja perjanjian kinerja ditetapkan dengan baik'),
(6, 'A Perencanaan Kinerja', 'A. 6 Rencana aksi atas kinerja telah dimonitor pencapaiannya secara berkala'),
(7, 'A Perencanaan Kinerja', 'A. 7 Rencana aksi atas kinerja telah dimanfaatkan dalam pengarahaan dan pengorganisasian kegiatan'),
(8, 'B Pengukuran Kinerja', 'B. 1 Terdapat mekanisme pengumpulan data kinerja'),
(9, 'B Pengukuran Kinerja', 'B. 2 Sudah terdapat ukuran (indikator) kinerja individu yang mengacu pada IKU unit kerja organisasi /atasannya'),
(10, 'B Pengukuran Kinerja', 'B. 3 Pengukuran kinerja sudah dilakukan secara berjenjang'),
(11, 'B Pengukuran Kinerja', 'B. 4 Pengumpulan data kinerja dapat diandalkan'),
(12, 'B Pengukuran Kinerja', 'B. 5 Pengukuran kinerja sudah dikembangkan menggunakan teknologi informasi'),
(13, 'B Pengukuran Kinerja', 'B. 7 Target kinerja eselon  III dan IV telah dimonitor pencapaiannya'),
(14, 'B Pengukuran Kinerja', 'B. 6  IKU telah dimanfaatkan untuk penilaian kinerja'),
(15, 'B Pengukuran Kinerja', 'B. 8 Hasil pengukuran (capaian) kinerja mulai dari setingkat eselon IV keatas telah dikaitkan dengan (dimanfaatkan sebagai dasar pemberian) reward & punishment'),
(16, 'C Pelaporan Kinerja', 'C. 1 Laporan Kinerja telah di-upload ke dalam website'),
(17, 'C Pelaporan Kinerja', 'C. 2 Laporan kinerja menyajikan informasi mengenai pencapaian IKU'),
(18, 'C Pelaporan Kinerja', 'C. 3 Laporan kinerja menyajikan informasi mengenai kinerja yang telah diperjanjikan'),
(19, 'C Pelaporan Kinerja', 'C. 4 Laporan kinerja menyajikan evaluasi dan analisis mengenai capaian kinerja'),
(20, 'C Pelaporan Kinerja', 'C. 5 Laporan kinerja menyajikan pembandingan data kinerja yang memadai antara realisasi tahun ini dengan realisasi tahun ini dengan realisasi tahun sebelumnya dan pembanding lain yang diperlukan'),
(21, 'C Pelaporan Kinerja', 'C. 6 Laporan kinerja menyajikan informasi tentang analisis efiensi penggunaan sumber daya'),
(22, 'C Pelaporan Kinerja', 'C. 7 Laporan kinerja menyajikan informasi keuangan yang terkait dengan pencapian sasaran kinerja instansi'),
(23, 'C Pelaporan Kinerja', 'C. 8 Informasi kinerja dalam laporan kinerja'),
(24, 'C Pelaporan Kinerja', 'C. 9 Informasi yang disajikan telah digunakan untuk peningkatan kinerja'),
(25, 'C Pelaporan Kinerja', 'C. 10 Informasi yang disajikan telah digunakan untuk penilaian kinerja'),
(26, 'D Evaluasi Kinerja', 'D. 1 Terdapat pemantauan kemajuan pencapaian kinerja beserta hambatannya'),
(27, 'D Evaluasi Kinerja', 'D. 2 Evaluasi atas pelaksanaan Rencana Aksi telah dilakukan'),
(28, 'D Evaluasi Kinerja', 'D. 3 Hasil evaluasi telah disampaikan dan dikomunikasikan kepada pihak-pihak yang berkepentingan '),
(29, 'D Evaluasi Kinerja', 'D. 4 Evaluasi kinerja telah dilaksanakan oleh SDM yang berkompeten '),
(30, 'D Evaluasi Kinerja', 'D. 5 Pelakasnaan evaluasi kinerja telah disupervisi dengan baik melalui pembahasan-pembahasan yang reguler dan bertahap'),
(31, 'D Evaluasi Kinerja', 'D. 6 Evaluasi kinerja telah memberikan rekomendasi-rekomendasi perbaikan manajemen kinerja yang dapat dilaksanakan'),
(32, 'D Evaluasi Kinerja', 'D. 7 Pemantauan Rencana Aksi dilaksanakan dalam rangka mengendalikan kinerja'),
(33, 'D Evaluasi Kinerja', 'D. 8 Pemantauan Rencana Aksi telah memberikan alternatif perbaikan yang dapat dilaksanakan'),
(34, 'D Evaluasi Kinerja', 'D. 9 Hasil evaluasi Rencana Aksi telah menunjukkan perbaikan setiap periode'),
(35, 'D Evaluasi Kinerja', 'D. 10 Hasil evaluasi kinerja telah ditindaklanjuti untuk perbaikan penerapan manajemen kinerja'),
(36, 'D Evaluasi Kinerja', 'D. 11 Hasil evaluasi kinerja telah ditindaklanjuti untuk mengukur keberhasilan unit kerja'),
(37, 'E Capaian Kinerja', 'E. 1 Target capaian kinerja dapat dicapai'),
(38, 'E Capaian Kinerja', 'E. 2 Capaian Kinerja lebih baik dari sebelumnya'),
(39, 'E Capaian Kinerja', 'E. 3 Informasi mengenai kinerja dapat diandalkan'),
(40, 'E Capaian Kinerja', 'E. 4 Inisiatif dalam pemberantasan korupsi'),
(41, 'E Capaian Kinerja', 'E. 5 Inovasi dalam manajemen kinerja'),
(42, 'E Capaian Kinerja', 'E. 6 Penghargaan-penghargaan lainnya'),
(43, 'B Pengukuran Kinerja', 'B. 1 Terdapat mekanisme pengumpulan data kinerja');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `nip`, `jabatan`, `username`, `email`, `password`) VALUES
(1, 'Agung Yuniarta Sosiawan', '199806032021041001', 'Staff Fungsi Statistik Produksi', 'agung.yuniarta', 'agung.yuniarta@bps.go.id', 'e1138cef2b3c8ae65390c51b25f8ad72'),
(2, 'M. Chumaidi Rahman ', '200004162022011002', 'Staff Fungsi Statistik Produksi', 'Chumaidi22', 'rahmanchumaidi22@gmail.com', '73964293dbf51146ac368e4eab52e49c'),
(3, 'Isa', '196809151991121001', 'Kepala BPS Kabupaten Dompu', 'isa', 'isa@bps.go.id', '229b31cfa898c8a606a057977e1678b0'),
(4, 'Desy Handayani', '199612212019122002', 'Staff Fungsi Statistik Sosial', 'handayanides', 'yanih1518@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(5, 'Emalia Septiani Hirma', '199809032022012002', 'Staff Fungsi NWAS', 'emaliahirma', 'emaliahirma@bps.go.id', '8a35db63574d6d3b399c3b29cae526b8'),
(6, 'Salsabila Puspita Wahyuni', '999062241', 'Fungsional Umum', 'Salsabila Puspita Wahyuni', 'salsabilapuspitawahyuni@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(7, 'saya bikin ngasal', '1234567890', 'Kepala BPS Kabupaten Dompu', 'saya bikin ngasal', 'sayabikin@ngasal.com', '20c1a26a55039b30866c9d0aa51953ca');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subkomponen`
--
ALTER TABLE `subkomponen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `subkomponen`
--
ALTER TABLE `subkomponen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
