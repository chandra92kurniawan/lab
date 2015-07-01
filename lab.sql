-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2015 at 12:13 PM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lab`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE IF NOT EXISTS `absensi` (
`id_absensi` int(11) NOT NULL,
  `id_jadwal_dtl` int(11) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `tahun_berjalan` int(11) DEFAULT NULL,
  `semester_berjalan` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=545 ;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`id_absensi`, `id_jadwal_dtl`, `keterangan`, `tanggal`, `tahun_berjalan`, `semester_berjalan`) VALUES
(211, 2, NULL, '2015-02-02', NULL, NULL),
(221, 1, NULL, '2015-02-02', NULL, NULL),
(230, 2, '', '2015-02-03', NULL, NULL),
(287, NULL, NULL, '2015-02-03', NULL, NULL),
(312, 4, 'Belajar Matematika Dasar', '2015-02-03', NULL, NULL),
(322, 14, 'Matematik', '2015-02-03', NULL, NULL),
(323, 4, '', '2015-02-21', NULL, NULL),
(332, 19, NULL, '2015-02-21', NULL, NULL),
(333, 4, NULL, '2015-03-14', NULL, NULL),
(334, 4, NULL, '2015-03-16', NULL, NULL),
(346, 32, NULL, '2015-03-16', NULL, NULL),
(347, 32, NULL, '2015-03-21', NULL, NULL),
(358, 40, NULL, '2015-03-21', NULL, NULL),
(381, 32, NULL, '2015-03-25', NULL, NULL),
(382, 32, NULL, '2015-04-14', NULL, NULL),
(402, 32, NULL, '2015-04-22', NULL, NULL),
(424, 32, NULL, '2015-04-24', NULL, NULL),
(425, 32, NULL, '2015-04-30', NULL, NULL),
(445, 32, NULL, '2015-05-01', NULL, NULL),
(454, 36, '', '2015-05-01', NULL, NULL),
(474, 36, '', '2015-05-04', NULL, NULL),
(485, 45, 'Brlajar mateauhdiaghd', '2015-05-04', NULL, NULL),
(495, 32, NULL, '2015-05-04', NULL, NULL),
(513, 37, NULL, '2015-05-04', NULL, NULL),
(514, 39, NULL, '2015-05-15', NULL, NULL),
(519, 46, NULL, '2015-05-15', NULL, NULL),
(520, 36, '', '2015-05-19', NULL, NULL),
(530, 36, NULL, '2015-05-19', NULL, NULL),
(531, 40, 'hfhdskjf', '2015-05-19', NULL, NULL),
(532, 38, 'Belajar agama', '2015-05-20', NULL, NULL),
(533, 39, NULL, '2015-05-22', NULL, NULL),
(543, 46, NULL, '2015-05-22', NULL, NULL),
(544, 43, NULL, '2015-05-25', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `absensi_dtl`
--

CREATE TABLE IF NOT EXISTS `absensi_dtl` (
`id_absensi_dtl` int(11) NOT NULL,
  `nis` varchar(15) DEFAULT NULL,
  `absensi` int(11) DEFAULT NULL COMMENT '1:hadir 2:ijin 3:alpa',
  `id_absensi` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=113 ;

--
-- Dumping data for table `absensi_dtl`
--

INSERT INTO `absensi_dtl` (`id_absensi_dtl`, `nis`, `absensi`, `id_absensi`) VALUES
(41, '11113795', 3, 211),
(42, '2718273817', 3, 211),
(43, '6764824264876', 3, 211),
(44, '763276648174', 3, 211),
(45, '876249726347', 3, 211),
(46, '11113795', 3, 221),
(47, '2718273817', 3, 221),
(48, '6764824264876', 3, 221),
(49, '763276648174', 3, 221),
(50, '876249726347', 3, 221),
(51, '11113795', 1, 230),
(52, '2718273817', 1, 230),
(53, '6764824264876', 2, 230),
(54, '763276648174', 2, 230),
(55, '876249726347', 1, 230),
(56, '11113795', 2, 312),
(57, '2718273817', 2, 312),
(58, '6764824264876', 2, 312),
(59, '763276648174', 2, 312),
(60, '876249726347', 3, 312),
(61, '11113795', 1, 322),
(62, '2718273817', 1, 322),
(63, '6764824264876', 1, 322),
(64, '763276648174', 1, 322),
(65, '876249726347', 1, 322),
(66, '11113795', 3, 323),
(67, '2718273817', 3, 323),
(68, '6764824264876', 3, 323),
(69, '763276648174', 3, 323),
(70, '876249726347', 3, 323),
(71, '11113795', 3, 333),
(72, '2718273817', 3, 333),
(73, '6764824264876', 3, 333),
(74, '763276648174', 3, 333),
(75, '876249726347', 3, 333),
(76, '1111', 2, 454),
(77, '11113795', 3, 454),
(78, '2718273817', 2, 454),
(79, '6764824264876', 2, 454),
(80, '763276648174', 3, 454),
(81, '876249726347', 3, 454),
(82, '1111', 3, 0),
(83, '11113795', 3, 0),
(84, '2718273817', 3, 0),
(85, '6764824264876', 3, 0),
(86, '763276648174', 3, 0),
(87, '876249726347', 3, 0),
(88, '1111', 1, 474),
(89, '11113795', 1, 474),
(90, '2718273817', 1, 474),
(91, '6764824264876', 1, 474),
(92, '763276648174', 1, 474),
(93, '876249726347', 1, 474),
(94, '1111', 1, 485),
(95, '11113795', 1, 485),
(96, '2718273817', 1, 485),
(97, '6764824264876', 1, 485),
(98, '763276648174', 1, 485),
(99, '876249726347', 3, 485),
(100, '1111', 3, 358),
(101, '11113795', 3, 358),
(102, '2718273817', 3, 520),
(103, '763276648174', 3, 520),
(104, '2718273817', 3, 530),
(105, '763276648174', 3, 530),
(106, '1111', 2, 531),
(107, '11113795', 3, 531),
(108, '2718273817', 1, 532),
(109, '763276648174', 2, 532),
(110, '2718273817', 3, 543),
(111, '763276648174', 3, 543),
(112, '2718273817', 3, 544);

-- --------------------------------------------------------

--
-- Table structure for table `administrasi`
--

CREATE TABLE IF NOT EXISTS `administrasi` (
  `nik` varchar(255) DEFAULT NULL,
  `nama_admin` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(255) DEFAULT NULL,
  `no_hp` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrasi`
--

INSERT INTO `administrasi` (`nik`, `nama_admin`, `alamat`, `jenis_kelamin`, `no_hp`) VALUES
('111', 'Dilan Deswara', 'Ujungberung', 'L', '089602817721'),
('4566', 'Pevita Pearce', 'Cicaheum', 'P', '08969797979'),
('261101004', 'Ujang', 'Ujung Berung', 'L', '0896973'),
('1111', 'Fathur', 'Jl Ciamin', 'L', '085624204678');

-- --------------------------------------------------------

--
-- Table structure for table `adm_akses`
--

CREATE TABLE IF NOT EXISTS `adm_akses` (
`id_akses` int(11) NOT NULL,
  `id_menu` int(11) DEFAULT NULL,
  `id_role` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=87 ;

--
-- Dumping data for table `adm_akses`
--

INSERT INTO `adm_akses` (`id_akses`, `id_menu`, `id_role`, `status`) VALUES
(1, 1, 1, 1),
(2, 2, 1, 1),
(3, 3, 1, 1),
(4, 4, 1, 1),
(5, 5, 1, 1),
(6, 7, 1, 1),
(7, 6, 1, 1),
(8, 8, 1, 1),
(9, 9, 1, 1),
(10, 10, 1, 1),
(11, 11, 1, 1),
(12, 12, 1, 1),
(13, 14, 1, 1),
(25, 26, 1, 0),
(26, 27, 1, 0),
(27, 28, 1, 1),
(28, 29, 1, 1),
(29, 30, 1, 0),
(30, 1, 4, 1),
(31, 2, 4, 0),
(32, 3, 4, 0),
(33, 4, 4, 0),
(34, 5, 4, 0),
(35, 7, 4, 0),
(36, 6, 4, 0),
(37, 8, 4, 0),
(38, 9, 4, 0),
(39, 10, 4, 0),
(40, 11, 4, 0),
(41, 12, 4, 0),
(42, 14, 4, 0),
(43, 28, 4, 0),
(44, 29, 4, 0),
(45, 30, 4, 1),
(46, 31, 1, 1),
(47, 32, 1, 1),
(48, 33, 1, 0),
(49, 1, 2, 0),
(50, 2, 2, 0),
(51, 3, 2, 0),
(52, 4, 2, 0),
(53, 5, 2, 0),
(54, 7, 2, 0),
(55, 6, 2, 0),
(56, 8, 2, 0),
(57, 9, 2, 0),
(58, 10, 2, 0),
(59, 11, 2, 0),
(60, 31, 2, 1),
(61, 32, 2, 0),
(62, 33, 2, 0),
(63, 12, 2, 0),
(64, 14, 2, 0),
(65, 28, 2, 0),
(66, 29, 2, 1),
(67, 30, 2, 0),
(68, 1, 3, 0),
(69, 2, 3, 0),
(70, 3, 3, 0),
(71, 4, 3, 0),
(72, 5, 3, 0),
(73, 7, 3, 0),
(74, 6, 3, 1),
(75, 8, 3, 0),
(76, 9, 3, 0),
(77, 10, 3, 0),
(78, 11, 3, 0),
(79, 31, 3, 1),
(80, 32, 3, 1),
(81, 33, 3, 0),
(82, 12, 3, 1),
(83, 14, 3, 0),
(84, 28, 3, 1),
(85, 29, 3, 0),
(86, 30, 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `adm_menu`
--

CREATE TABLE IF NOT EXISTS `adm_menu` (
`id_menu` int(255) NOT NULL,
  `nama_menu` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `controllers` varchar(255) DEFAULT NULL,
  `function` varchar(255) DEFAULT NULL,
  `sub` varchar(255) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `adm_menu`
--

INSERT INTO `adm_menu` (`id_menu`, `nama_menu`, `icon`, `controllers`, `function`, `sub`) VALUES
(1, 'Dashboard', 'fa fa-dashboard', 'dashboard', 'index', '0'),
(2, 'Manajemen', 'glyphicon glyphicon-home', '-', '-', '0'),
(3, 'Manajemen Menu', 'glyphicon glyphicon-list', 'menu', 'index', '2'),
(4, 'Manajemen Role', 'glyphicon glyphicon-bullhorn', 'role', 'index', '2'),
(5, 'Manajemen Admin', 'glyphicon glyphicon-user', 'admin', 'index', '2'),
(6, 'Master', 'glyphicon glyphicon-play', '-', '-', '0'),
(7, 'Manajemen Akses', 'glyphicon glyphicon-eye-close', 'akses', 'index', '2'),
(8, 'Manajemen Guru', 'glyphicon glyphicon-user', 'guru', 'index', '6'),
(9, 'Manajemen Kelas', 'glyphicon glyphicon-home', 'kelas', 'index', '6'),
(10, 'Mata Pelajaran', 'glyphicon glyphicon-book', 'mata_pelajaran', 'index', '6'),
(11, 'Manajemen Siswa', 'glyphicon glyphicon-user', 'siswa', 'index', '6'),
(12, 'Jadwal Pelajaran', 'glyphicon glyphicon-list-alt', 'jadwal', 'index', '0'),
(14, 'SMS', 'glyphicon glyphicon-envelope', 'sms', 'index', '0'),
(28, 'Presensi', 'glyphicon glyphicon-saved', 'absensi', 'index', '0'),
(29, 'Rekap Presensi', 'glyphicon glyphicon-calendar', 'rekap_presensi', 'index', '0'),
(30, 'Profile', 'glyphicon glyphicon-user', 'profile', 'index', '0'),
(31, 'Manajemen Nilai', 'glyphicon glyphicon-user', 'nilai', 'indexnilai', '6'),
(32, 'Status SMS', 'glyphicon glyphicon-user', 'info_sms', 'index', '6');

-- --------------------------------------------------------

--
-- Table structure for table `adm_role`
--

CREATE TABLE IF NOT EXISTS `adm_role` (
`id_role` int(11) NOT NULL,
  `nama_role` varchar(25) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `adm_role`
--

INSERT INTO `adm_role` (`id_role`, `nama_role`) VALUES
(1, 'super'),
(2, 'Administrasi'),
(3, 'Guru'),
(4, 'Orang tua');

-- --------------------------------------------------------

--
-- Table structure for table `daemons`
--

CREATE TABLE IF NOT EXISTS `daemons` (
  `Start` text NOT NULL,
  `Info` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `gammu`
--

CREATE TABLE IF NOT EXISTS `gammu` (
  `Version` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gammu`
--

INSERT INTO `gammu` (`Version`) VALUES
(13);

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
  `nik` int(11) NOT NULL,
  `nama_guru` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(2) DEFAULT NULL,
  `no_hp_guru` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`nik`, `nama_guru`, `alamat`, `jenis_kelamin`, `no_hp_guru`) VALUES
(112, 'Chandra', 'Chandra', 'L', '085624204678'),
(1112, 'Dilan Deswara', 'Jl.Singaraja', 'L', '089602817721'),
(12345, 'Hahahah', 'heheheh', 'L', '089602817721'),
(261102001, 'Mamang', 'Bandung', 'L', '089602817721');

-- --------------------------------------------------------

--
-- Table structure for table `hari`
--

CREATE TABLE IF NOT EXISTS `hari` (
`id_hari` int(11) NOT NULL,
  `hari_indonesia` varchar(20) DEFAULT NULL,
  `hari_inggris` varchar(5) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `hari`
--

INSERT INTO `hari` (`id_hari`, `hari_indonesia`, `hari_inggris`) VALUES
(1, 'Senin', 'Mon'),
(2, 'Selasa', 'Tue'),
(3, 'Rabu', 'Wed'),
(4, 'Kamis ', 'Thu'),
(5, 'Jumat', 'Fri'),
(6, 'Sabtu', 'Sat');

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE IF NOT EXISTS `inbox` (
  `UpdatedInDB` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ReceivingDateTime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Text` text NOT NULL,
  `SenderNumber` varchar(20) NOT NULL DEFAULT '',
  `Coding` enum('Default_No_Compression','Unicode_No_Compression','8bit','Default_Compression','Unicode_Compression') NOT NULL DEFAULT 'Default_No_Compression',
  `UDH` text NOT NULL,
  `SMSCNumber` varchar(20) NOT NULL DEFAULT '',
  `Class` int(11) NOT NULL DEFAULT '-1',
  `TextDecoded` text NOT NULL,
`ID` int(10) unsigned NOT NULL,
  `RecipientID` text NOT NULL,
  `Processed` enum('false','true') NOT NULL DEFAULT 'false'
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`UpdatedInDB`, `ReceivingDateTime`, `Text`, `SenderNumber`, `Coding`, `UDH`, `SMSCNumber`, `Class`, `TextDecoded`, `ID`, `RecipientID`, `Processed`) VALUES
('2015-05-18 11:49:02', '2015-05-18 11:48:58', '005400650073', '+6289602817721', 'Default_No_Compression', '', '+628964011092', -1, 'Tes', 12, '', 'false'),
('2015-05-18 11:49:07', '2015-05-18 11:49:02', '00560073006A007300620073006200620073', '+6289602817721', 'Default_No_Compression', '', '+6289644000001', -1, 'Vsjsbsbbs', 13, '', 'false'),
('2015-05-19 09:09:28', '2015-05-19 07:14:50', '004900440020005400720061006E00730061006B0073006900200030003500310039003100340031003400340038003100340032003400350034003300300031002E0020004E006F006D006F007200200041006E00640061002000740065006C00610068002000640069002D0074006F007000200075007000200035002C00300030003000200070006100640061002000310039002D00300035002D0032003000310035002000310034003A00310034003A00340038', 'V-Tri', 'Default_No_Compression', '', '+628964011091', -1, 'ID Transaksi 0519141448142454301. Nomor Anda telah di-top up 5,000 pada 19-05-2015 14:14:48', 14, '', 'false'),
('2015-05-19 09:09:29', '2015-05-19 07:14:50', '00500065006E00670069007300690061006E0020005200700035003000300030002000730075006B007300650073002E0020004D00610073006100200061006B0074006900660020006200650072006C0061006B007500200073002F0064002000310038002F00300036002F0032003000310035002E00200041006B0068006900720020006D006100730061002000740065006E006700670061006E0067002000310037002F00300038002F0032003000310035002E00200041006C00770061007900730020004F006E002E00420065006200610073002000420042004D002D0061006E0020003100740068006E0020006400690041006E00640072006F00690064002C004900700068006F006E0065002E002000540065006B0061006E002A003100320033002A0033002A00310023', '+3', 'Default_No_Compression', '', '+628964011091', -1, 'Pengisian Rp5000 sukses. Masa aktif berlaku s/d 18/06/2015. Akhir masa tenggang 17/08/2015. Always On.Bebas BBM-an 1thn diAndroid,Iphone. Tekan*123*3*1#', 15, '', 'false'),
('2015-05-20 03:59:48', '2015-05-20 03:59:43', '00570065007900730020006E00790061006D007000650020006D0061006E006B', '+6285236041981', 'Default_No_Compression', '', '+6281100000', -1, 'Weys nyampe mank', 16, '', 'false'),
('2015-05-23 03:23:09', '2015-05-23 03:23:04', '004D00610061006600200061006E0061006B00200073006100790061002000750064006800200067006B002000730065006B006F006C00610068002E002E002E006D0075006E0067006B0069006E0020006B006900730061006E0061006B002000730061006C006100680020006B006900720069006D002E002E', '+6285624004976', 'Default_No_Compression', '', '+62816124', -1, 'Maaf anak saya udh gk sekolah...mungkin kisanak salah kirim..', 17, '', 'false');

--
-- Triggers `inbox`
--
DELIMITER //
CREATE TRIGGER `inbox_timestamp` BEFORE INSERT ON `inbox`
 FOR EACH ROW BEGIN
    IF NEW.ReceivingDateTime = '0000-00-00 00:00:00' THEN
        SET NEW.ReceivingDateTime = CURRENT_TIMESTAMP();
    END IF;
END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE IF NOT EXISTS `jadwal` (
`id_jadwal` int(255) NOT NULL,
  `id_kelas` varchar(255) DEFAULT NULL,
  `nik` varchar(255) DEFAULT NULL,
  `id_mata_pelajaran` int(11) DEFAULT NULL,
  `tahun_berjalan` int(11) DEFAULT NULL,
  `semester_berjalan` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `id_kelas`, `nik`, `id_mata_pelajaran`, `tahun_berjalan`, `semester_berjalan`) VALUES
(1, '1', '1112', 678, NULL, NULL),
(3, '3', '112', 678, NULL, NULL),
(4, '10', '1112', 678, NULL, NULL),
(5, '11', '112', 777, NULL, NULL),
(6, '9', '261102001', 678, NULL, NULL),
(7, '1', '261102001', 678, NULL, NULL),
(8, '1', '12345', 678, NULL, NULL),
(9, '1', '12345', 8986865, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_dtl`
--

CREATE TABLE IF NOT EXISTS `jadwal_dtl` (
`id_jadwal_dtl` int(255) NOT NULL,
  `id_hari` varchar(255) DEFAULT NULL,
  `jam_awal` time DEFAULT NULL,
  `jam_akhir` time DEFAULT NULL,
  `id_jadwal` int(255) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=60 ;

--
-- Dumping data for table `jadwal_dtl`
--

INSERT INTO `jadwal_dtl` (`id_jadwal_dtl`, `id_hari`, `jam_awal`, `jam_akhir`, `id_jadwal`) VALUES
(36, '2', '07:00:00', '09:00:00', 3),
(37, '2', '20:09:00', '23:00:00', 4),
(38, '3', '16:09:00', '17:00:00', 3),
(39, '5', '12:43:00', '17:34:00', 5),
(40, '2', '06:09:00', '20:06:00', 1),
(41, '6', '20:07:00', '08:07:00', 1),
(43, '1', '03:47:00', '03:07:00', 3),
(44, '4', '12:08:00', '15:29:00', 3),
(45, '6', '08:39:00', '00:34:00', 3),
(46, '5', '03:09:00', '03:07:00', 3),
(47, '1', '00:58:00', '05:08:00', 6),
(48, '2', '02:08:00', '03:00:00', 0),
(49, '1', '16:55:00', '15:05:00', 0),
(50, '1', '00:31:00', '02:13:00', 0),
(51, '1', '08:07:00', '20:07:00', 0),
(52, '1', '08:08:00', '20:08:00', 0),
(53, '1', '08:08:00', '20:08:00', 0),
(54, '1', '08:08:00', '20:08:00', 0),
(55, '1', '08:08:00', '20:08:00', 0),
(56, '1', '07:37:00', '21:09:00', 1),
(57, '2', '05:07:00', '04:04:00', 7),
(58, '3', '03:07:00', '16:07:00', 8),
(59, '4', '08:07:00', '10:07:00', 9);

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
`id_kelas` int(255) NOT NULL,
  `tingkat_kelas` int(3) DEFAULT NULL,
  `jurusan` varchar(255) DEFAULT NULL,
  `grup_kelas` varchar(255) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `tingkat_kelas`, `jurusan`, `grup_kelas`) VALUES
(1, 1, 'IPS', 'A'),
(2, 1, 'IPA', 'C'),
(3, 1, 'IPS', 'B'),
(8, 2, 'IPA', 'C'),
(9, 2, 'IPA', 'D'),
(10, 2, 'IPA', 'C'),
(11, 3, 'IPA', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `mata_pelajaran`
--

CREATE TABLE IF NOT EXISTS `mata_pelajaran` (
  `id_mata_pelajaran` varchar(255) NOT NULL,
  `nama_pelajaran` varchar(255) DEFAULT NULL,
  `inisial_nama_pelajaran` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`id_mata_pelajaran`, `nama_pelajaran`, `inisial_nama_pelajaran`) VALUES
('678', 'Matematika', 'MTK'),
('777', 'Bahasa Indonesia', 'B IND'),
('8986865', 'Ilmu pengetahuan alam', 'IPA');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
`id_nilai` int(255) NOT NULL,
  `id_mata_pelajaran` int(255) DEFAULT NULL,
  `tanggal` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `nik` int(30) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `id_kelas` varchar(255) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=178 ;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `id_mata_pelajaran`, `tanggal`, `nik`, `keterangan`, `id_kelas`) VALUES
(18, 678, NULL, 12345, 'materi mtk 3', '1'),
(19, 678, NULL, 12345, 'Materi MTk 4', '1'),
(166, 8986865, NULL, 12345, 'Matei 6', '1'),
(167, 8986865, NULL, 12345, 'Matei 6', '1'),
(168, 8986865, NULL, 12345, 'Matei 6', '1'),
(170, 678, NULL, 12345, 'Belajar Matriks Dan Ruang Vektor', '1'),
(171, 678, NULL, 12345, 'Belajar Matriks Dan Ruang Vektor', '1'),
(172, 8986865, NULL, 12345, 'Materi 8', '1'),
(173, 678, NULL, 12345, '', '1'),
(174, 678, NULL, 12345, '', '1'),
(175, 8986865, NULL, 12345, 'Tes kematerian', '1'),
(176, 8986865, NULL, 12345, 'tes', '1'),
(177, 8986865, NULL, 0, 'Belajar Kalkulus', '1');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_dtl`
--

CREATE TABLE IF NOT EXISTS `nilai_dtl` (
`id_nilai_dtl` int(255) NOT NULL,
  `nis` int(255) DEFAULT NULL,
  `nilai` varchar(255) DEFAULT NULL,
  `id_nilai` varchar(255) DEFAULT NULL,
  `ID_outbox` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=141 ;

--
-- Dumping data for table `nilai_dtl`
--

INSERT INTO `nilai_dtl` (`id_nilai_dtl`, `nis`, `nilai`, `id_nilai`, `ID_outbox`) VALUES
(123, 1111, '70', '172', NULL),
(124, 11113795, '70', '172', NULL),
(125, 2147483647, '70', '172', NULL),
(126, 1111, '', '173', NULL),
(127, 11113795, '', '173', NULL),
(128, 2147483647, '', '173', NULL),
(129, 1111, '', '174', NULL),
(130, 11113795, '', '174', NULL),
(131, 2147483647, '', '174', NULL),
(132, 1111, '70', '175', NULL),
(133, 11113795, '80', '175', NULL),
(134, 2147483647, '78', '175', NULL),
(135, 1111, '80', '176', 73),
(136, 11113795, '80', '176', 74),
(137, 2147483647, '80', '176', 75),
(138, 1111, '80', '177', 76),
(139, 11113795, '70', '177', 77),
(140, 2147483647, '60', '177', 78);

-- --------------------------------------------------------

--
-- Table structure for table `outbox`
--

CREATE TABLE IF NOT EXISTS `outbox` (
  `UpdatedInDB` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `InsertIntoDB` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `SendingDateTime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `SendBefore` time NOT NULL DEFAULT '23:59:59',
  `SendAfter` time NOT NULL DEFAULT '00:00:00',
  `Text` text,
  `DestinationNumber` varchar(20) NOT NULL DEFAULT '',
  `Coding` enum('Default_No_Compression','Unicode_No_Compression','8bit','Default_Compression','Unicode_Compression') NOT NULL DEFAULT 'Default_No_Compression',
  `UDH` text,
  `Class` int(11) DEFAULT '-1',
  `TextDecoded` text NOT NULL,
`ID` int(10) unsigned NOT NULL,
  `MultiPart` enum('false','true') DEFAULT 'false',
  `RelativeValidity` int(11) DEFAULT '-1',
  `SenderID` varchar(255) DEFAULT NULL,
  `SendingTimeOut` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `DeliveryReport` enum('default','yes','no') DEFAULT 'default',
  `CreatorID` text NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=79 ;

--
-- Dumping data for table `outbox`
--

INSERT INTO `outbox` (`UpdatedInDB`, `InsertIntoDB`, `SendingDateTime`, `SendBefore`, `SendAfter`, `Text`, `DestinationNumber`, `Coding`, `UDH`, `Class`, `TextDecoded`, `ID`, `MultiPart`, `RelativeValidity`, `SenderID`, `SendingTimeOut`, `DeliveryReport`, `CreatorID`) VALUES
('2015-05-24 00:09:48', '2015-05-24 00:09:48', '2015-05-24 00:09:48', '23:59:59', '00:00:00', NULL, '085624004976', 'Default_No_Compression', NULL, -1, 'Pemberitahuan nilai harian dari siswa Bayu dengan Mata pelajaran Ilmu pengetahuan alam mendapatkan nilai sebesar 80 pada materi Belajar Kalkulus ', 76, 'false', -1, NULL, '2015-05-24 00:09:48', 'default', ''),
('2015-05-24 00:09:48', '2015-05-24 00:09:48', '2015-05-24 00:09:48', '23:59:59', '00:00:00', NULL, '085236042018', 'Default_No_Compression', NULL, -1, 'Pemberitahuan nilai harian dari siswa Dilan Ganteng dengan Mata pelajaran Ilmu pengetahuan alam mendapatkan nilai sebesar 70 pada materi Belajar Kalkulus ', 77, 'false', -1, NULL, '2015-05-24 00:09:48', 'default', ''),
('2015-05-24 00:09:48', '2015-05-24 00:09:48', '2015-05-24 00:09:48', '23:59:59', '00:00:00', NULL, '085236041981', 'Default_No_Compression', NULL, -1, 'Pemberitahuan nilai harian dari siswa Chandra Kurniawan sP dengan Mata pelajaran Ilmu pengetahuan alam mendapatkan nilai sebesar 60 pada materi Belajar Kalkulus ', 78, 'false', -1, NULL, '2015-05-24 00:09:48', 'default', '');

--
-- Triggers `outbox`
--
DELIMITER //
CREATE TRIGGER `outbox_timestamp` BEFORE INSERT ON `outbox`
 FOR EACH ROW BEGIN
    IF NEW.InsertIntoDB = '0000-00-00 00:00:00' THEN
        SET NEW.InsertIntoDB = CURRENT_TIMESTAMP();
    END IF;
    IF NEW.SendingDateTime = '0000-00-00 00:00:00' THEN
        SET NEW.SendingDateTime = CURRENT_TIMESTAMP();
    END IF;
    IF NEW.SendingTimeOut = '0000-00-00 00:00:00' THEN
        SET NEW.SendingTimeOut = CURRENT_TIMESTAMP();
    END IF;
END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `outbox_multipart`
--

CREATE TABLE IF NOT EXISTS `outbox_multipart` (
  `Text` text,
  `Coding` enum('Default_No_Compression','Unicode_No_Compression','8bit','Default_Compression','Unicode_Compression') NOT NULL DEFAULT 'Default_No_Compression',
  `UDH` text,
  `Class` int(11) DEFAULT '-1',
  `TextDecoded` text,
  `ID` int(10) unsigned NOT NULL DEFAULT '0',
  `SequencePosition` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pbk`
--

CREATE TABLE IF NOT EXISTS `pbk` (
`ID` int(11) NOT NULL,
  `GroupID` int(11) NOT NULL DEFAULT '-1',
  `Name` text NOT NULL,
  `Number` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pbk_groups`
--

CREATE TABLE IF NOT EXISTS `pbk_groups` (
  `Name` text NOT NULL,
`ID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `phones`
--

CREATE TABLE IF NOT EXISTS `phones` (
  `ID` text NOT NULL,
  `UpdatedInDB` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `InsertIntoDB` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `TimeOut` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Send` enum('yes','no') NOT NULL DEFAULT 'no',
  `Receive` enum('yes','no') NOT NULL DEFAULT 'no',
  `IMEI` varchar(35) NOT NULL,
  `Client` text NOT NULL,
  `Battery` int(11) NOT NULL DEFAULT '-1',
  `Signal` int(11) NOT NULL DEFAULT '-1',
  `Sent` int(11) NOT NULL DEFAULT '0',
  `Received` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `phones`
--

INSERT INTO `phones` (`ID`, `UpdatedInDB`, `InsertIntoDB`, `TimeOut`, `Send`, `Receive`, `IMEI`, `Client`, `Battery`, `Signal`, `Sent`, `Received`) VALUES
('', '2015-05-23 06:41:38', '2015-05-23 03:05:49', '2015-05-23 06:41:48', 'yes', 'yes', '355896051464602', 'Gammu 1.33.0, Windows Server 2007 SP1, GCC 4.7, MinGW 3.11', 0, 69, 13, 1);

--
-- Triggers `phones`
--
DELIMITER //
CREATE TRIGGER `phones_timestamp` BEFORE INSERT ON `phones`
 FOR EACH ROW BEGIN
    IF NEW.InsertIntoDB = '0000-00-00 00:00:00' THEN
        SET NEW.InsertIntoDB = CURRENT_TIMESTAMP();
    END IF;
    IF NEW.TimeOut = '0000-00-00 00:00:00' THEN
        SET NEW.TimeOut = CURRENT_TIMESTAMP();
    END IF;
END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE IF NOT EXISTS `program` (
`id_program` int(11) NOT NULL,
  `nm_program` varchar(20) NOT NULL,
  `jml_bulan` int(11) NOT NULL,
  `jml_pertemuan` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`id_program`, `nm_program`, `jml_bulan`, `jml_pertemuan`) VALUES
(2, 'B.inggris', 3, 14);

-- --------------------------------------------------------

--
-- Table structure for table `sentitems`
--

CREATE TABLE IF NOT EXISTS `sentitems` (
  `UpdatedInDB` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `InsertIntoDB` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `SendingDateTime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `DeliveryDateTime` timestamp NULL DEFAULT NULL,
  `Text` text NOT NULL,
  `DestinationNumber` varchar(20) NOT NULL DEFAULT '',
  `Coding` enum('Default_No_Compression','Unicode_No_Compression','8bit','Default_Compression','Unicode_Compression') NOT NULL DEFAULT 'Default_No_Compression',
  `UDH` text NOT NULL,
  `SMSCNumber` varchar(20) NOT NULL DEFAULT '',
  `Class` int(11) NOT NULL DEFAULT '-1',
  `TextDecoded` text NOT NULL,
  `ID` int(10) unsigned NOT NULL DEFAULT '0',
  `SenderID` varchar(255) NOT NULL,
  `SequencePosition` int(11) NOT NULL DEFAULT '1',
  `Status` enum('SendingOK','SendingOKNoReport','SendingError','DeliveryOK','DeliveryFailed','DeliveryPending','DeliveryUnknown','Error') NOT NULL DEFAULT 'SendingOK',
  `StatusError` int(11) NOT NULL DEFAULT '-1',
  `TPMR` int(11) NOT NULL DEFAULT '-1',
  `RelativeValidity` int(11) NOT NULL DEFAULT '-1',
  `CreatorID` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sentitems`
--

INSERT INTO `sentitems` (`UpdatedInDB`, `InsertIntoDB`, `SendingDateTime`, `DeliveryDateTime`, `Text`, `DestinationNumber`, `Coding`, `UDH`, `SMSCNumber`, `Class`, `TextDecoded`, `ID`, `SenderID`, `SequencePosition`, `Status`, `StatusError`, `TPMR`, `RelativeValidity`, `CreatorID`) VALUES
('2015-05-23 03:43:03', '2015-05-23 03:42:28', '2015-05-23 03:43:03', NULL, '00500065006D006200650072006900740061006800750061006E0020006E0069006C00610069002000680061007200690061006E00200064006100720069002000730069007300770061002000440069006C0061006E002000470061006E00740065006E0067002000640065006E00670061006E0020004D006100740061002000700065006C0061006A006100720061006E00200049006C006D0075002000700065006E0067006500740061006800750061006E00200061006C0061006D0020006D0065006E00640061007000610074006B0061006E0020006E0069006C0061006900200073006500620065007300610072002000380030002000700061006400610020006D0061007400650072006900200074006500730020', '085236042018', 'Default_No_Compression', '', '+6289644000001', -1, 'Pemberitahuan nilai harian dari siswa Dilan Ganteng dengan Mata pelajaran Ilmu pengetahuan alam mendapatkan nilai sebesar 80 pada materi tes ', 74, '', 1, 'SendingOKNoReport', -1, 20, 255, ''),
('2015-05-23 03:43:08', '2015-05-23 03:42:28', '2015-05-23 03:43:08', NULL, '00500065006D006200650072006900740061006800750061006E0020006E0069006C00610069002000680061007200690061006E002000640061007200690020007300690073007700610020004300680061006E0064007200610020004B00750072006E0069006100770061006E002000730050002000640065006E00670061006E0020004D006100740061002000700065006C0061006A006100720061006E00200049006C006D0075002000700065006E0067006500740061006800750061006E00200061006C0061006D0020006D0065006E00640061007000610074006B0061006E0020006E0069006C0061006900200073006500620065007300610072002000380030002000700061006400610020006D0061007400650072006900200074006500730020', '085236041981', 'Default_No_Compression', '', '+6289644000001', -1, 'Pemberitahuan nilai harian dari siswa Chandra Kurniawan sP dengan Mata pelajaran Ilmu pengetahuan alam mendapatkan nilai sebesar 80 pada materi tes ', 75, '', 1, 'SendingOKNoReport', -1, 21, 255, ''),
('2015-05-23 03:42:59', '2015-05-23 03:42:28', '2015-05-23 03:42:59', NULL, '00500065006D006200650072006900740061006800750061006E0020006E0069006C00610069002000680061007200690061006E0020006400610072006900200073006900730077006100200042006100790075002000640065006E00670061006E0020004D006100740061002000700065006C0061006A006100720061006E00200049006C006D0075002000700065006E0067006500740061006800750061006E00200061006C0061006D0020006D0065006E00640061007000610074006B0061006E0020006E0069006C0061006900200073006500620065007300610072002000380030002000700061006400610020006D0061007400650072006900200074006500730020', '085624004976', 'Default_No_Compression', '', '+6289644000001', -1, 'Pemberitahuan nilai harian dari siswa Bayu dengan Mata pelajaran Ilmu pengetahuan alam mendapatkan nilai sebesar 80 pada materi tes ', 73, '', 1, 'SendingOKNoReport', -1, 19, 255, ''),
('2015-05-23 03:21:21', '2015-05-23 03:21:02', '2015-05-23 03:21:21', NULL, '00500065006D006200650072006900740061006800750061006E0020006E0069006C00610069002000680061007200690061006E0020006B006500700061006400610020006F00720061006E0067007400750061002000640061007200690020004300680061006E0064007200610020004B00750072006E0069006100770061006E002000730050002000640065006E00670061006E0020004D006100740061002000700065006C0061006A006100720061006E00200049006C006D0075002000700065006E0067006500740061006800750061006E00200061006C0061006D0020006D0065006E00640061007000610074006B0061006E0020006E0069006C0061006900200073006500620065007300610072002000370038002000700061006400610020006D0061007400650072006900200054006500730020006B0065006D006100740065007200690061006E0020', '085236041981', 'Default_No_Compression', '', '+6289644000001', -1, 'Pemberitahuan nilai harian kepada orangtua dari Chandra Kurniawan sP dengan Mata pelajaran Ilmu pengetahuan alam mendapatkan nilai sebesar 78 pada materi Tes kematerian ', 72, '', 1, 'SendingOKNoReport', -1, 18, 255, ''),
('2015-05-23 03:21:16', '2015-05-23 03:21:02', '2015-05-23 03:21:16', NULL, '00500065006D006200650072006900740061006800750061006E0020006E0069006C00610069002000680061007200690061006E0020006B006500700061006400610020006F00720061006E006700740075006100200064006100720069002000440069006C0061006E002000470061006E00740065006E0067002000640065006E00670061006E0020004D006100740061002000700065006C0061006A006100720061006E00200049006C006D0075002000700065006E0067006500740061006800750061006E00200061006C0061006D0020006D0065006E00640061007000610074006B0061006E0020006E0069006C0061006900200073006500620065007300610072002000380030002000700061006400610020006D0061007400650072006900200054006500730020006B0065006D006100740065007200690061006E0020', '085236042018', 'Default_No_Compression', '', '+6289644000001', -1, 'Pemberitahuan nilai harian kepada orangtua dari Dilan Ganteng dengan Mata pelajaran Ilmu pengetahuan alam mendapatkan nilai sebesar 80 pada materi Tes kematerian ', 71, '', 1, 'SendingOKNoReport', -1, 17, 255, ''),
('2015-05-23 03:21:11', '2015-05-23 03:21:02', '2015-05-23 03:21:11', NULL, '00500065006D006200650072006900740061006800750061006E0020006E0069006C00610069002000680061007200690061006E0020006B006500700061006400610020006F00720061006E00670074007500610020006400610072006900200042006100790075002000640065006E00670061006E0020004D006100740061002000700065006C0061006A006100720061006E00200049006C006D0075002000700065006E0067006500740061006800750061006E00200061006C0061006D0020006D0065006E00640061007000610074006B0061006E0020006E0069006C0061006900200073006500620065007300610072002000370030002000700061006400610020006D0061007400650072006900200054006500730020006B0065006D006100740065007200690061006E0020', '085624004976', 'Default_No_Compression', '', '+6289644000001', -1, 'Pemberitahuan nilai harian kepada orangtua dari Bayu dengan Mata pelajaran Ilmu pengetahuan alam mendapatkan nilai sebesar 70 pada materi Tes kematerian ', 70, '', 1, 'SendingOKNoReport', -1, 16, 255, ''),
('2015-05-23 03:20:04', '2015-05-23 03:19:28', '2015-05-23 03:20:04', NULL, '00500065006D006200650072006900740061006800750061006E0020006E0069006C00610069002000680061007200690061006E0020006B006500700061006400610020006F00720061006E0067007400750061002000640061007200690020004300680061006E0064007200610020004B00750072006E0069006100770061006E002000730050002000640065006E00670061006E0020004D006100740061002000700065006C0061006A006100720061006E0020004D006100740065006D006100740069006B00610020006D0065006E00640061007000610074006B0061006E0020006E0069006C00610069002000730065006200650073006100720020002000700061006400610020006D0061007400650072006900200020', '085236041981', 'Default_No_Compression', '', '+6289644000001', -1, 'Pemberitahuan nilai harian kepada orangtua dari Chandra Kurniawan sP dengan Mata pelajaran Matematika mendapatkan nilai sebesar  pada materi  ', 69, '', 1, 'SendingOKNoReport', -1, 15, 255, ''),
('2015-05-23 03:15:51', '2015-05-23 03:15:41', '2015-05-23 03:15:51', NULL, '00500065006D006200650072006900740061006800750061006E0020006E0069006C00610069002000680061007200690061006E0020006B006500700061006400610020006F00720061006E0067007400750061002000640061007200690020004300680061006E0064007200610020004B00750072006E0069006100770061006E002000730050002000640065006E00670061006E0020004D006100740061002000700065006C0061006A006100720061006E00200049006C006D0075002000700065006E0067006500740061006800750061006E00200061006C0061006D0020006D0065006E00640061007000610074006B0061006E0020006E0069006C0061006900200073006500620065007300610072002000370030002000700061006400610020006D006100740065007200690020004D00610074006500720069002000380020', '085236041981', 'Default_No_Compression', '', '+6289644000001', -1, 'Pemberitahuan nilai harian kepada orangtua dari Chandra Kurniawan sP dengan Mata pelajaran Ilmu pengetahuan alam mendapatkan nilai sebesar 70 pada materi Materi 8 ', 67, '', 1, 'SendingOKNoReport', -1, 13, 255, ''),
('2015-05-23 03:19:27', '2015-05-23 03:19:15', '2015-05-23 03:19:27', NULL, '00500065006D006200650072006900740061006800750061006E0020006E0069006C00610069002000680061007200690061006E0020006B006500700061006400610020006F00720061006E0067007400750061002000640061007200690020004300680061006E0064007200610020004B00750072006E0069006100770061006E002000730050002000640065006E00670061006E0020004D006100740061002000700065006C0061006A006100720061006E0020004D006100740065006D006100740069006B00610020006D0065006E00640061007000610074006B0061006E0020006E0069006C00610069002000730065006200650073006100720020002000700061006400610020006D0061007400650072006900200020', '085236041981', 'Default_No_Compression', '', '+6289644000001', -1, 'Pemberitahuan nilai harian kepada orangtua dari Chandra Kurniawan sP dengan Mata pelajaran Matematika mendapatkan nilai sebesar  pada materi  ', 68, '', 1, 'SendingOKNoReport', -1, 14, 255, '');

--
-- Triggers `sentitems`
--
DELIMITER //
CREATE TRIGGER `sentitems_timestamp` BEFORE INSERT ON `sentitems`
 FOR EACH ROW BEGIN
    IF NEW.InsertIntoDB = '0000-00-00 00:00:00' THEN
        SET NEW.InsertIntoDB = CURRENT_TIMESTAMP();
    END IF;
    IF NEW.SendingDateTime = '0000-00-00 00:00:00' THEN
        SET NEW.SendingDateTime = CURRENT_TIMESTAMP();
    END IF;
END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `nis` varchar(20) NOT NULL,
  `nama_siswa` varchar(200) DEFAULT NULL,
  `jenis_kelamin` varchar(2) DEFAULT NULL,
  `no_orang_tua` varchar(20) DEFAULT NULL,
  `nama_orang_tua` varchar(200) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL COMMENT '1:Aktif 0:blm aktif'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `nama_siswa`, `jenis_kelamin`, `no_orang_tua`, `nama_orang_tua`, `alamat`, `id_kelas`, `status`) VALUES
('1111', 'Bayu', 'L', '085624004976', 'Profesor Haji Lulung', 'Cigondewah', 1, 1),
('11113795', 'Dilan Ganteng', 'L', '085236042018', 'YYYYY', 'Jl.Cibadak', 1, 1),
('2718273817', 'Dilan Deswara', 'L', '089602817721', 'Bradpit', 'Bandung', 3, 1),
('6764824264876', 'Eko Alfia', 'L', '29742974017', 'Ujang', 'Cibaduts', 3, 0),
('763276648174', 'Chandra Kurniawan sP', 'L', '085236041981', 'Aseu', 'Sindang Laya', 1, 1),
('876249726347', 'kamseu', 'L', '9837492734', 'sdcasdc', 'dhakdkjhadkjh', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(50) NOT NULL,
  `nama_user` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `id_role` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `salt` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `nama_user`, `password`, `id_role`, `status`, `salt`) VALUES
('111', 'Dilan', '8533b9e880149e8b94942b6f1f926d7bc0e4db23.21232f297a57a5a743894a0e4a801fc3', 2, 1, NULL),
('1111', 'Fathur', '5b31717473020149216178c6922ffc01c9f715b4.21232f297a57a5a743894a0e4a801fc3', 4, 1, 'KoDvY'),
('1112', 'Dilan Deswara', '5ba539af68ba3c65e81b4a3dbbb1ea3623e3d62d.21232f297a57a5a743894a0e4a801fc3', 3, 1, 'xaHQ0'),
('112', 'Chandra', '8533b9e880149e8b94942b6f1f926d7bc0e4db23.21232f297a57a5a743894a0e4a801fc3', 3, 1, NULL),
('12345', 'Hahahah', '2787c8dbd52bc220b2a0f2a4131454deb5f8ffef.e72743f1af53fdbd840f1fdd3fd8ef10', 3, 1, 'h3D4O'),
('261101004', 'Ujang', '592162a0c8d9e3a071317357868ee453c7537306.21232f297a57a5a743894a0e4a801fc3', 2, 1, 'xtBNN'),
('261102001', 'Mamang', '43aeed13e4ea2c9ad325a163579a901f179bf7dc.f7900beec376f2856a8a38af3dd416c9', 3, 1, '0cJSB'),
('4566', 'Pevita', '8533b9e880149e8b94942b6f1f926d7bc0e4db23.21232f297a57a5a743894a0e4a801fc3', 2, 0, NULL),
('admin', 'admin', '8533b9e880149e8b94942b6f1f926d7bc0e4db23.21232f297a57a5a743894a0e4a801fc3', 1, NULL, 'wLVuv');

-- --------------------------------------------------------

--
-- Table structure for table `waktu_berjalan`
--

CREATE TABLE IF NOT EXISTS `waktu_berjalan` (
`id_waktu_berjalan` int(11) NOT NULL,
  `tahun_berjalan` int(11) DEFAULT NULL,
  `semester_berjalan` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `waktu_berjalan`
--

INSERT INTO `waktu_berjalan` (`id_waktu_berjalan`, `tahun_berjalan`, `semester_berjalan`, `status`) VALUES
(1, 2014, 2, 1),
(2, 2015, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `wali_kelas`
--

CREATE TABLE IF NOT EXISTS `wali_kelas` (
  `id_wali_kelas` int(255) NOT NULL,
  `nik` int(255) DEFAULT NULL,
  `id_kelas` int(255) DEFAULT NULL,
  `tahun_berjalan` int(255) DEFAULT NULL,
  `semester_berjalan` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
 ADD PRIMARY KEY (`id_absensi`);

--
-- Indexes for table `absensi_dtl`
--
ALTER TABLE `absensi_dtl`
 ADD PRIMARY KEY (`id_absensi_dtl`);

--
-- Indexes for table `adm_akses`
--
ALTER TABLE `adm_akses`
 ADD PRIMARY KEY (`id_akses`);

--
-- Indexes for table `adm_menu`
--
ALTER TABLE `adm_menu`
 ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `adm_role`
--
ALTER TABLE `adm_role`
 ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
 ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `hari`
--
ALTER TABLE `hari`
 ADD PRIMARY KEY (`id_hari`);

--
-- Indexes for table `inbox`
--
ALTER TABLE `inbox`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
 ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `jadwal_dtl`
--
ALTER TABLE `jadwal_dtl`
 ADD PRIMARY KEY (`id_jadwal_dtl`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
 ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
 ADD PRIMARY KEY (`id_mata_pelajaran`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
 ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `nilai_dtl`
--
ALTER TABLE `nilai_dtl`
 ADD PRIMARY KEY (`id_nilai_dtl`);

--
-- Indexes for table `outbox`
--
ALTER TABLE `outbox`
 ADD PRIMARY KEY (`ID`), ADD KEY `outbox_date` (`SendingDateTime`,`SendingTimeOut`), ADD KEY `outbox_sender` (`SenderID`);

--
-- Indexes for table `outbox_multipart`
--
ALTER TABLE `outbox_multipart`
 ADD PRIMARY KEY (`ID`,`SequencePosition`);

--
-- Indexes for table `pbk`
--
ALTER TABLE `pbk`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pbk_groups`
--
ALTER TABLE `pbk_groups`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `phones`
--
ALTER TABLE `phones`
 ADD PRIMARY KEY (`IMEI`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
 ADD PRIMARY KEY (`id_program`);

--
-- Indexes for table `sentitems`
--
ALTER TABLE `sentitems`
 ADD PRIMARY KEY (`ID`,`SequencePosition`), ADD KEY `sentitems_date` (`DeliveryDateTime`), ADD KEY `sentitems_tpmr` (`TPMR`), ADD KEY `sentitems_dest` (`DestinationNumber`), ADD KEY `sentitems_sender` (`SenderID`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
 ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`username`);

--
-- Indexes for table `waktu_berjalan`
--
ALTER TABLE `waktu_berjalan`
 ADD PRIMARY KEY (`id_waktu_berjalan`);

--
-- Indexes for table `wali_kelas`
--
ALTER TABLE `wali_kelas`
 ADD PRIMARY KEY (`id_wali_kelas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
MODIFY `id_absensi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=545;
--
-- AUTO_INCREMENT for table `absensi_dtl`
--
ALTER TABLE `absensi_dtl`
MODIFY `id_absensi_dtl` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=113;
--
-- AUTO_INCREMENT for table `adm_akses`
--
ALTER TABLE `adm_akses`
MODIFY `id_akses` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=87;
--
-- AUTO_INCREMENT for table `adm_menu`
--
ALTER TABLE `adm_menu`
MODIFY `id_menu` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `adm_role`
--
ALTER TABLE `adm_role`
MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `hari`
--
ALTER TABLE `hari`
MODIFY `id_hari` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `inbox`
--
ALTER TABLE `inbox`
MODIFY `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
MODIFY `id_jadwal` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `jadwal_dtl`
--
ALTER TABLE `jadwal_dtl`
MODIFY `id_jadwal_dtl` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
MODIFY `id_kelas` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
MODIFY `id_nilai` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=178;
--
-- AUTO_INCREMENT for table `nilai_dtl`
--
ALTER TABLE `nilai_dtl`
MODIFY `id_nilai_dtl` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=141;
--
-- AUTO_INCREMENT for table `outbox`
--
ALTER TABLE `outbox`
MODIFY `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT for table `pbk`
--
ALTER TABLE `pbk`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pbk_groups`
--
ALTER TABLE `pbk_groups`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
MODIFY `id_program` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `waktu_berjalan`
--
ALTER TABLE `waktu_berjalan`
MODIFY `id_waktu_berjalan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
