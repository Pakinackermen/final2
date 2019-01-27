-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2019 at 07:22 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `backup`
--

-- --------------------------------------------------------

--
-- Table structure for table `backuppathname`
--

CREATE TABLE `backuppathname` (
  `id_pathName` int(12) NOT NULL,
  `pathName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `backuppathname`
--

INSERT INTO `backuppathname` (`id_pathName`, `pathName`) VALUES
(1, 'dir src22');

-- --------------------------------------------------------

--
-- Table structure for table `checkdata`
--

CREATE TABLE `checkdata` (
  `id` int(11) NOT NULL,
  `value` text NOT NULL,
  `directory` text NOT NULL COMMENT 'nul directory',
  `datetime` datetime NOT NULL COMMENT 'วันเวลาในการบันทึกข้อมูล',
  `status` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `checkdata`
--

INSERT INTO `checkdata` (`id`, `value`, `directory`, `datetime`, `status`) VALUES
(1, '', '', '2018-12-29 17:21:37', 'C'),
(2, 'หกด', '', '2019-01-09 00:00:00', 'ก'),
(3, '{path:/manage/cmd_check_hash.php|hash:388d51f1448a0cbcb1f2914e2b3ba752|size:247}{path:/manage/config/ftp.php|hash:c26f6b57174f6d13c134693cd954ac76|size:207}{path:/manage/config/ReadFile.php|hash:922a3f484f05f7a41166f38fff381101|size:1425}{path:/manage/funccheck.php|hash:508444b1d0e3a579d6d6e3e6a2931c8b|size:559}{path:/manage/linealert.php|hash:37bf7d87cf44b0f2935ea2a3d31605b9|size:1609}{path:/manage/read_write_file.php/create_file_hash/backup.php|hash:14d59a7759c7c422b28b492de33ea071|size:150}{path:/manage/read_write_file.php/create_file_hash/check.php|hash:3dbe2da840d1bfa0f22898ab360327e6|size:150}{path:/manage/read_write_file.php/create_file_hash/main.php|hash:dcbef8b1b7d44d759e5e111f62debed1|size:1120}{path:/manage/read_write_file.php/ftp/ftp_adduser.php|hash:6cb578820b44c57d1858dba4825c935a|size:4190}{path:/manage/referent.txt|hash:9bfa82ce86350855385b17d414827ae2|size:348}{path:/manage/unzip.php|hash:506d2e9b458f35cfb92a989865f465b5|size:4416}', '', '2019-01-05 23:06:54', 'C'),
(4, '{path:/manage/cmd_check_hash.php|hash:388d51f1448a0cbcb1f2914e2b3ba752|size:247}{path:/manage/config/ftp.php|hash:c26f6b57174f6d13c134693cd954ac76|size:207}{path:/manage/config/ReadFile.php|hash:922a3f484f05f7a41166f38fff381101|size:1425}{path:/manage/funccheck.php|hash:508444b1d0e3a579d6d6e3e6a2931c8b|size:559}{path:/manage/linealert.php|hash:37bf7d87cf44b0f2935ea2a3d31605b9|size:1609}{path:/manage/read_write_file.php/create_file_hash/backup.php|hash:14d59a7759c7c422b28b492de33ea071|size:150}{path:/manage/read_write_file.php/create_file_hash/check.php|hash:3dbe2da840d1bfa0f22898ab360327e6|size:150}{path:/manage/read_write_file.php/create_file_hash/main.php|hash:dcbef8b1b7d44d759e5e111f62debed1|size:1120}{path:/manage/read_write_file.php/ftp/ftp_adduser.php|hash:6cb578820b44c57d1858dba4825c935a|size:4190}{path:/manage/referent.txt|hash:9bfa82ce86350855385b17d414827ae2|size:348}{path:/manage/unzip.php|hash:506d2e9b458f35cfb92a989865f465b5|size:4416}', '', '2019-01-06 13:38:49', 'C'),
(5, '{path:/manage/cmd_check_hash.php|hash:388d51f1448a0cbcb1f2914e2b3ba752|size:247}{path:/manage/config/ftp.php|hash:c26f6b57174f6d13c134693cd954ac76|size:207}{path:/manage/config/ReadFile.php|hash:922a3f484f05f7a41166f38fff381101|size:1425}{path:/manage/funccheck.php|hash:508444b1d0e3a579d6d6e3e6a2931c8b|size:559}{path:/manage/linealert.php|hash:37bf7d87cf44b0f2935ea2a3d31605b9|size:1609}{path:/manage/read_write_file.php/create_file_hash/backup.php|hash:14d59a7759c7c422b28b492de33ea071|size:150}{path:/manage/read_write_file.php/create_file_hash/check.php|hash:3dbe2da840d1bfa0f22898ab360327e6|size:150}{path:/manage/read_write_file.php/create_file_hash/main.php|hash:dcbef8b1b7d44d759e5e111f62debed1|size:1120}{path:/manage/read_write_file.php/ftp/ftp_adduser.php|hash:6cb578820b44c57d1858dba4825c935a|size:4190}{path:/manage/referent.txt|hash:9bfa82ce86350855385b17d414827ae2|size:348}{path:/manage/unzip.php|hash:506d2e9b458f35cfb92a989865f465b5|size:4416}', '', '2019-01-06 17:17:30', 'C'),
(6, '', '', '2019-01-13 14:41:31', ''),
(7, '', '', '2019-01-13 14:41:45', ''),
(8, '', '', '2019-01-13 14:47:45', ''),
(9, '', '', '2019-01-13 14:50:27', ''),
(10, '', '', '2019-01-13 14:50:34', ''),
(11, '', '', '2019-01-13 14:51:16', ''),
(12, '', '', '2019-01-13 14:51:55', ''),
(13, '', '', '2019-01-13 14:52:05', ''),
(14, '', '', '2019-01-13 14:57:49', ''),
(15, '', '', '2019-01-13 14:59:07', ''),
(16, '{path:C:/xampp/htdocs/data/backup/testOne/backup/backup.php|hash:4d4295788b607d074fc78256f5a1c40f|size:1071}{path:C:/xampp/htdocs/data/backup/testOne/backup/bk_db.php|hash:d5659468266f7e502a7576d8996185b3|size:1437}{path:C:/xampp/htdocs/data/backup/testOne/backup/bk_zip.php|hash:9dbfcfaa60ad9fc7318668d0525efd9b|size:2091}', '', '2019-01-13 15:08:56', 'B'),
(17, '{path:C:/xampp/htdocs/data/backup/testOne/backup/backup.php|hash:4d4295788b607d074fc78256f5a1c40f|size:1071}{path:C:/xampp/htdocs/data/backup/testOne/backup/bk_db.php|hash:d5659468266f7e502a7576d8996185b3|size:1437}{path:C:/xampp/htdocs/data/backup/testOne/backup/bk_zip.php|hash:9dbfcfaa60ad9fc7318668d0525efd9b|size:2091}', '', '2019-01-13 15:14:55', 'B'),
(18, '{path:C:/xampp/htdocs/data/backup/testOne/backup/backup.php|hash:4d4295788b607d074fc78256f5a1c40f|size:1071}{path:C:/xampp/htdocs/data/backup/testOne/backup/bk_db.php|hash:d5659468266f7e502a7576d8996185b3|size:1437}{path:C:/xampp/htdocs/data/backup/testOne/backup/bk_zip.php|hash:9dbfcfaa60ad9fc7318668d0525efd9b|size:2091}', '', '2019-01-13 15:16:25', 'B'),
(19, '', '', '2019-01-27 11:00:40', 'B'),
(20, '', '', '2019-01-27 11:00:59', 'B'),
(21, '', '', '2019-01-27 11:04:26', 'B'),
(22, '', '', '2019-01-27 11:05:28', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `config_var`
--

CREATE TABLE `config_var` (
  `id_config_var` int(12) NOT NULL,
  `name` text NOT NULL,
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ftp`
--

CREATE TABLE `ftp` (
  `id_ftp` int(11) NOT NULL,
  `ftp_server` varchar(20) NOT NULL,
  `ftp_username` varchar(20) NOT NULL,
  `ftp_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ftp`
--

INSERT INTO `ftp` (`id_ftp`, `ftp_server`, `ftp_username`, `ftp_password`) VALUES
(30, '127.0.0.1', 'backup', ''),
(32, '127.0.0.1', 'backup', '');

-- --------------------------------------------------------

--
-- Table structure for table `hash`
--

CREATE TABLE `hash` (
  `id_hash` int(20) NOT NULL,
  `hash_src` text CHARACTER SET utf8 NOT NULL,
  `hash_check` text CHARACTER SET utf8 NOT NULL,
  `hash_day` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `id_person` int(11) NOT NULL,
  `username` varchar(12) NOT NULL,
  `_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`id_person`, `username`, `_password`) VALUES
(1, 'test', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `report_backup`
--

CREATE TABLE `report_backup` (
  `id_report_backup` int(12) NOT NULL,
  `report_backup_name` varchar(100) NOT NULL,
  `report_backup_date` datetime NOT NULL,
  `report_backup_size` varchar(100) NOT NULL,
  `hash_backup` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `report_fileserver`
--

CREATE TABLE `report_fileserver` (
  `id_fileServer` int(12) NOT NULL,
  `name` text NOT NULL,
  `hash` text NOT NULL,
  `size` int(10) NOT NULL,
  `date_fileserver` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `report_new_fileserver`
--

CREATE TABLE `report_new_fileserver` (
  `id_newfileserver` int(12) NOT NULL,
  `name` text NOT NULL,
  `hash` text NOT NULL,
  `size` int(10) NOT NULL,
  `date_newfileserver` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `report_new_fileserver`
--

INSERT INTO `report_new_fileserver` (`id_newfileserver`, `name`, `hash`, `size`, `date_newfileserver`) VALUES
(1, 'C:/xampp/htdocs/data/backup/testOne/backup/backup.php', '4d4295788b607d074fc78256f5a1c40f', 1071, '07-01-2019'),
(2, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_db.php', 'd5659468266f7e502a7576d8996185b3', 1437, '07-01-2019'),
(3, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_zip.php', '9dbfcfaa60ad9fc7318668d0525efd9b', 2091, '07-01-2019'),
(4, 'C:/xampp/htdocs/data/backup/testOne/backup/backup.php', '4d4295788b607d074fc78256f5a1c40f', 1071, '12-01-2019'),
(5, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_db.php', 'd5659468266f7e502a7576d8996185b3', 1437, '12-01-2019'),
(6, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_zip.php', '9dbfcfaa60ad9fc7318668d0525efd9b', 2091, '12-01-2019'),
(7, 'C:/xampp/htdocs/data/backup/testOne/backup/backup.php', '4d4295788b607d074fc78256f5a1c40f', 1071, '12-01-2019'),
(8, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_db.php', 'd5659468266f7e502a7576d8996185b3', 1437, '12-01-2019'),
(9, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_zip.php', '9dbfcfaa60ad9fc7318668d0525efd9b', 2091, '12-01-2019'),
(10, 'C:/xampp/htdocs/data/backup/testOne/backup/backup.php', '4d4295788b607d074fc78256f5a1c40f', 1071, '12-01-2019'),
(11, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_db.php', 'd5659468266f7e502a7576d8996185b3', 1437, '12-01-2019'),
(12, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_zip.php', '9dbfcfaa60ad9fc7318668d0525efd9b', 2091, '12-01-2019'),
(13, 'C:/xampp/htdocs/data/backup/testOne/backup/backup.php', '4d4295788b607d074fc78256f5a1c40f', 1071, '12-01-2019'),
(14, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_db.php', 'd5659468266f7e502a7576d8996185b3', 1437, '12-01-2019'),
(15, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_zip.php', '9dbfcfaa60ad9fc7318668d0525efd9b', 2091, '12-01-2019'),
(16, 'C:/xampp/htdocs/data/backup/testOne/backup/backup.php', '4d4295788b607d074fc78256f5a1c40f', 1071, '12-01-2019'),
(17, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_db.php', 'd5659468266f7e502a7576d8996185b3', 1437, '12-01-2019'),
(18, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_zip.php', '9dbfcfaa60ad9fc7318668d0525efd9b', 2091, '12-01-2019'),
(19, 'C:/xampp/htdocs/data/backup/testOne/backup/backup.php', '4d4295788b607d074fc78256f5a1c40f', 1071, '12-01-2019'),
(20, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_db.php', 'd5659468266f7e502a7576d8996185b3', 1437, '12-01-2019'),
(21, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_zip.php', '9dbfcfaa60ad9fc7318668d0525efd9b', 2091, '12-01-2019'),
(22, 'C:/xampp/htdocs/data/backup/testOne/backup/backup.php', '4d4295788b607d074fc78256f5a1c40f', 1071, '12-01-2019'),
(23, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_db.php', 'd5659468266f7e502a7576d8996185b3', 1437, '12-01-2019'),
(24, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_zip.php', '9dbfcfaa60ad9fc7318668d0525efd9b', 2091, '12-01-2019'),
(25, 'C:/xampp/htdocs/data/backup/testOne/backup/backup.php', '4d4295788b607d074fc78256f5a1c40f', 1071, '12-01-2019'),
(26, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_db.php', 'd5659468266f7e502a7576d8996185b3', 1437, '12-01-2019'),
(27, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_zip.php', '9dbfcfaa60ad9fc7318668d0525efd9b', 2091, '12-01-2019'),
(28, 'C:/xampp/htdocs/data/backup/testOne/backup/backup.php', '4d4295788b607d074fc78256f5a1c40f', 1071, '12-01-2019'),
(29, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_db.php', 'd5659468266f7e502a7576d8996185b3', 1437, '12-01-2019'),
(30, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_zip.php', '9dbfcfaa60ad9fc7318668d0525efd9b', 2091, '12-01-2019'),
(31, 'C:/xampp/htdocs/data/backup/testOne/backup/backup.php', '4d4295788b607d074fc78256f5a1c40f', 1071, '12-01-2019'),
(32, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_db.php', 'd5659468266f7e502a7576d8996185b3', 1437, '12-01-2019'),
(33, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_zip.php', '9dbfcfaa60ad9fc7318668d0525efd9b', 2091, '12-01-2019'),
(34, 'C:/xampp/htdocs/data/backup/testOne/backup/backup.php', '4d4295788b607d074fc78256f5a1c40f', 1071, '12-01-2019'),
(35, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_db.php', 'd5659468266f7e502a7576d8996185b3', 1437, '12-01-2019'),
(36, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_zip.php', '9dbfcfaa60ad9fc7318668d0525efd9b', 2091, '12-01-2019'),
(37, 'C:/xampp/htdocs/data/backup/testOne/backup/backup.php', '4d4295788b607d074fc78256f5a1c40f', 1071, '12-01-2019'),
(38, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_db.php', 'd5659468266f7e502a7576d8996185b3', 1437, '12-01-2019'),
(39, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_zip.php', '9dbfcfaa60ad9fc7318668d0525efd9b', 2091, '12-01-2019'),
(40, 'C:/xampp/htdocs/data/backup/testOne/backup/backup.php', '4d4295788b607d074fc78256f5a1c40f', 1071, '12-01-2019'),
(41, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_db.php', 'd5659468266f7e502a7576d8996185b3', 1437, '12-01-2019'),
(42, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_zip.php', '9dbfcfaa60ad9fc7318668d0525efd9b', 2091, '12-01-2019'),
(43, 'C:/xampp/htdocs/data/backup/testOne/backup/backup.php', '4d4295788b607d074fc78256f5a1c40f', 1071, '12-01-2019'),
(44, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_db.php', 'd5659468266f7e502a7576d8996185b3', 1437, '12-01-2019'),
(45, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_zip.php', '9dbfcfaa60ad9fc7318668d0525efd9b', 2091, '12-01-2019'),
(46, 'C:/xampp/htdocs/data/backup/testOne/backup/backup.php', '4d4295788b607d074fc78256f5a1c40f', 1071, '12-01-2019'),
(47, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_db.php', 'd5659468266f7e502a7576d8996185b3', 1437, '12-01-2019'),
(48, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_zip.php', '9dbfcfaa60ad9fc7318668d0525efd9b', 2091, '12-01-2019'),
(49, 'C:/xampp/htdocs/data/backup/testOne/backup/backup.php', '4d4295788b607d074fc78256f5a1c40f', 1071, '12-01-2019'),
(50, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_db.php', 'd5659468266f7e502a7576d8996185b3', 1437, '12-01-2019'),
(51, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_zip.php', '9dbfcfaa60ad9fc7318668d0525efd9b', 2091, '12-01-2019'),
(52, 'C:/xampp/htdocs/data/backup/testOne/backup/backup.php', '4d4295788b607d074fc78256f5a1c40f', 1071, '12-01-2019'),
(53, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_db.php', 'd5659468266f7e502a7576d8996185b3', 1437, '12-01-2019'),
(54, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_zip.php', '9dbfcfaa60ad9fc7318668d0525efd9b', 2091, '12-01-2019'),
(55, 'C:/xampp/htdocs/data/backup/testOne/backup/backup.php', '4d4295788b607d074fc78256f5a1c40f', 1071, '12-01-2019'),
(56, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_db.php', 'd5659468266f7e502a7576d8996185b3', 1437, '12-01-2019'),
(57, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_zip.php', '9dbfcfaa60ad9fc7318668d0525efd9b', 2091, '12-01-2019'),
(58, 'C:/xampp/htdocs/data/backup/testOne/backup/backup.php', '4d4295788b607d074fc78256f5a1c40f', 1071, '12-01-2019'),
(59, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_db.php', 'd5659468266f7e502a7576d8996185b3', 1437, '12-01-2019'),
(60, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_zip.php', '9dbfcfaa60ad9fc7318668d0525efd9b', 2091, '12-01-2019'),
(61, 'C:/xampp/htdocs/data/backup/testOne/backup/backup.php', '4d4295788b607d074fc78256f5a1c40f', 1071, '12-01-2019'),
(62, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_db.php', 'd5659468266f7e502a7576d8996185b3', 1437, '12-01-2019'),
(63, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_zip.php', '9dbfcfaa60ad9fc7318668d0525efd9b', 2091, '12-01-2019'),
(64, 'C:/xampp/htdocs/data/backup/testOne/backup/backup.php', '4d4295788b607d074fc78256f5a1c40f', 1071, '13-01-2019'),
(65, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_db.php', 'd5659468266f7e502a7576d8996185b3', 1437, '13-01-2019'),
(66, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_zip.php', '9dbfcfaa60ad9fc7318668d0525efd9b', 2091, '13-01-2019'),
(67, 'C:/xampp/htdocs/data/backup/testOne/backup/backup.php', '4d4295788b607d074fc78256f5a1c40f', 1071, '13-01-2019'),
(68, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_db.php', 'd5659468266f7e502a7576d8996185b3', 1437, '13-01-2019'),
(69, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_zip.php', '9dbfcfaa60ad9fc7318668d0525efd9b', 2091, '13-01-2019'),
(70, 'C:/xampp/htdocs/data/backup/testOne/backup/backup.php', '4d4295788b607d074fc78256f5a1c40f', 1071, '13-01-2019'),
(71, 'C:/xampp/htdocs/data/backup/testOne/backup/backup.php', '4d4295788b607d074fc78256f5a1c40f', 1071, '13-01-2019'),
(72, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_db.php', 'd5659468266f7e502a7576d8996185b3', 1437, '13-01-2019'),
(73, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_zip.php', '9dbfcfaa60ad9fc7318668d0525efd9b', 2091, '13-01-2019'),
(74, 'C:/xampp/htdocs/data/backup/testOne/backup/backup.php', '4d4295788b607d074fc78256f5a1c40f', 1071, '13-01-2019'),
(75, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_db.php', 'd5659468266f7e502a7576d8996185b3', 1437, '13-01-2019'),
(76, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_zip.php', '9dbfcfaa60ad9fc7318668d0525efd9b', 2091, '13-01-2019'),
(77, 'C:/xampp/htdocs/data/backup/testOne/backup/backup.php', '4d4295788b607d074fc78256f5a1c40f', 1071, '13-01-2019'),
(78, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_db.php', 'd5659468266f7e502a7576d8996185b3', 1437, '13-01-2019'),
(79, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_zip.php', '9dbfcfaa60ad9fc7318668d0525efd9b', 2091, '13-01-2019'),
(80, 'C:/xampp/htdocs/data/backup/testOne/backup/backup.php', '4d4295788b607d074fc78256f5a1c40f', 1071, '13-01-2019'),
(81, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_db.php', 'd5659468266f7e502a7576d8996185b3', 1437, '13-01-2019'),
(82, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_zip.php', '9dbfcfaa60ad9fc7318668d0525efd9b', 2091, '13-01-2019'),
(83, 'C:/xampp/htdocs/data/backup/testOne/backup/backup.php', '4d4295788b607d074fc78256f5a1c40f', 1071, '13-01-2019'),
(84, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_db.php', 'd5659468266f7e502a7576d8996185b3', 1437, '13-01-2019'),
(85, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_zip.php', '9dbfcfaa60ad9fc7318668d0525efd9b', 2091, '13-01-2019'),
(86, 'C:/xampp/htdocs/data/backup/testOne/backup/backup.php', '4d4295788b607d074fc78256f5a1c40f', 1071, '13-01-2019'),
(87, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_db.php', 'd5659468266f7e502a7576d8996185b3', 1437, '13-01-2019'),
(88, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_zip.php', '9dbfcfaa60ad9fc7318668d0525efd9b', 2091, '13-01-2019'),
(89, 'C:/xampp/htdocs/data/backup/testOne/backup/backup.php', '4d4295788b607d074fc78256f5a1c40f', 1071, '13-01-2019'),
(90, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_db.php', 'd5659468266f7e502a7576d8996185b3', 1437, '13-01-2019'),
(91, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_zip.php', '9dbfcfaa60ad9fc7318668d0525efd9b', 2091, '13-01-2019'),
(92, 'C:/xampp/htdocs/data/backup/testOne/backup/backup.php', '4d4295788b607d074fc78256f5a1c40f', 1071, '13-01-2019'),
(93, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_db.php', 'd5659468266f7e502a7576d8996185b3', 1437, '13-01-2019'),
(94, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_zip.php', '9dbfcfaa60ad9fc7318668d0525efd9b', 2091, '13-01-2019'),
(95, 'C:/xampp/htdocs/data/backup/testOne/backup/backup.php', '4d4295788b607d074fc78256f5a1c40f', 1071, '13-01-2019'),
(96, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_db.php', 'd5659468266f7e502a7576d8996185b3', 1437, '13-01-2019'),
(97, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_zip.php', '9dbfcfaa60ad9fc7318668d0525efd9b', 2091, '13-01-2019'),
(98, 'C:/xampp/htdocs/data/backup/testOne/backup/backup.php', '4d4295788b607d074fc78256f5a1c40f', 1071, '13-01-2019'),
(99, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_db.php', 'd5659468266f7e502a7576d8996185b3', 1437, '13-01-2019'),
(100, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_zip.php', '9dbfcfaa60ad9fc7318668d0525efd9b', 2091, '13-01-2019'),
(101, 'C:/xampp/htdocs/data/backup/testOne/backup/backup.php', '4d4295788b607d074fc78256f5a1c40f', 1071, '13-01-2019'),
(102, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_db.php', 'd5659468266f7e502a7576d8996185b3', 1437, '13-01-2019'),
(103, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_zip.php', '9dbfcfaa60ad9fc7318668d0525efd9b', 2091, '13-01-2019'),
(104, 'C:/xampp/htdocs/data/backup/testOne/backup/backup.php', '4d4295788b607d074fc78256f5a1c40f', 1071, '13-01-2019'),
(105, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_db.php', 'd5659468266f7e502a7576d8996185b3', 1437, '13-01-2019'),
(106, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_zip.php', '9dbfcfaa60ad9fc7318668d0525efd9b', 2091, '13-01-2019'),
(107, 'C:/xampp/htdocs/data/backup/testOne/backup/backup.php', '4d4295788b607d074fc78256f5a1c40f', 1071, '13-01-2019'),
(108, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_db.php', 'd5659468266f7e502a7576d8996185b3', 1437, '13-01-2019'),
(109, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_zip.php', '9dbfcfaa60ad9fc7318668d0525efd9b', 2091, '13-01-2019'),
(110, 'C:/xampp/htdocs/data/backup/testOne/backup/backup.php', '4d4295788b607d074fc78256f5a1c40f', 1071, '13-01-2019'),
(111, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_db.php', 'd5659468266f7e502a7576d8996185b3', 1437, '13-01-2019'),
(112, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_zip.php', '9dbfcfaa60ad9fc7318668d0525efd9b', 2091, '13-01-2019'),
(113, 'C:/xampp/htdocs/data/backup/testOne/backup/backup.php', '4d4295788b607d074fc78256f5a1c40f', 1071, '13-01-2019'),
(114, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_db.php', 'd5659468266f7e502a7576d8996185b3', 1437, '13-01-2019'),
(115, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_zip.php', '9dbfcfaa60ad9fc7318668d0525efd9b', 2091, '13-01-2019'),
(116, 'C:/xampp/htdocs/data/backup/testOne/backup/backup.php', '4d4295788b607d074fc78256f5a1c40f', 1071, '13-01-2019'),
(117, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_db.php', 'd5659468266f7e502a7576d8996185b3', 1437, '13-01-2019'),
(118, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_zip.php', '9dbfcfaa60ad9fc7318668d0525efd9b', 2091, '13-01-2019'),
(119, 'C:/xampp/htdocs/data/backup/testOne/backup/backup.php', '4d4295788b607d074fc78256f5a1c40f', 1071, '13-01-2019'),
(120, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_db.php', 'd5659468266f7e502a7576d8996185b3', 1437, '13-01-2019'),
(121, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_zip.php', '9dbfcfaa60ad9fc7318668d0525efd9b', 2091, '13-01-2019'),
(122, 'C:/xampp/htdocs/data/backup/testOne/backup/backup.php', '4d4295788b607d074fc78256f5a1c40f', 1071, '13-01-2019'),
(123, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_db.php', 'd5659468266f7e502a7576d8996185b3', 1437, '13-01-2019'),
(124, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_zip.php', '9dbfcfaa60ad9fc7318668d0525efd9b', 2091, '13-01-2019'),
(125, 'C:/xampp/htdocs/data/backup/testOne/backup/backup.php', '4d4295788b607d074fc78256f5a1c40f', 1071, '13-01-2019'),
(126, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_db.php', 'd5659468266f7e502a7576d8996185b3', 1437, '13-01-2019'),
(127, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_zip.php', '9dbfcfaa60ad9fc7318668d0525efd9b', 2091, '13-01-2019'),
(128, 'C:/xampp/htdocs/data/backup/testOne/backup/backup.php', '4d4295788b607d074fc78256f5a1c40f', 1071, '13-01-2019'),
(129, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_db.php', 'd5659468266f7e502a7576d8996185b3', 1437, '13-01-2019'),
(130, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_zip.php', '9dbfcfaa60ad9fc7318668d0525efd9b', 2091, '13-01-2019'),
(131, 'C:/xampp/htdocs/data/backup/testOne/backup/backup.php', '4d4295788b607d074fc78256f5a1c40f', 1071, '13-01-2019'),
(132, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_db.php', 'd5659468266f7e502a7576d8996185b3', 1437, '13-01-2019'),
(133, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_zip.php', '9dbfcfaa60ad9fc7318668d0525efd9b', 2091, '13-01-2019'),
(134, 'C:/xampp/htdocs/data/backup/testOne/backup/backup.php', '4d4295788b607d074fc78256f5a1c40f', 1071, '13-01-2019'),
(135, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_db.php', 'd5659468266f7e502a7576d8996185b3', 1437, '13-01-2019'),
(136, 'C:/xampp/htdocs/data/backup/testOne/backup/bk_zip.php', '9dbfcfaa60ad9fc7318668d0525efd9b', 2091, '13-01-2019');

-- --------------------------------------------------------

--
-- Table structure for table `report_recovory`
--

CREATE TABLE `report_recovory` (
  `id_report_recovery` int(12) NOT NULL,
  `report_recovory_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `report_recovery_date` datetime NOT NULL,
  `report_recovory_size` varchar(100) CHARACTER SET utf8 NOT NULL,
  `hash` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2;

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id_setting` int(15) NOT NULL,
  `name` text NOT NULL,
  `dir_src` varchar(200) NOT NULL,
  `ftp_user` varchar(200) NOT NULL,
  `day` varchar(12) NOT NULL,
  `week` varchar(12) NOT NULL,
  `month` varchar(5) NOT NULL,
  `database_user` varchar(100) NOT NULL,
  `database_pass` varchar(12) NOT NULL,
  `database_name` varchar(100) NOT NULL,
  `database_host` varchar(100) NOT NULL,
  `token_line` varchar(20) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id_setting`, `name`, `dir_src`, `ftp_user`, `day`, `week`, `month`, `database_user`, `database_pass`, `database_name`, `database_host`, `token_line`) VALUES
(44, 'NULL', 'C:\\xampp\\htdocs\\data\\backup', 'backup', 'N', 'อังคาร', 'N', 'root', '', 'backup', 'localhost', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `backuppathname`
--
ALTER TABLE `backuppathname`
  ADD PRIMARY KEY (`id_pathName`);

--
-- Indexes for table `checkdata`
--
ALTER TABLE `checkdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `config_var`
--
ALTER TABLE `config_var`
  ADD PRIMARY KEY (`id_config_var`);

--
-- Indexes for table `ftp`
--
ALTER TABLE `ftp`
  ADD PRIMARY KEY (`id_ftp`);

--
-- Indexes for table `hash`
--
ALTER TABLE `hash`
  ADD PRIMARY KEY (`id_hash`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id_person`);

--
-- Indexes for table `report_backup`
--
ALTER TABLE `report_backup`
  ADD PRIMARY KEY (`id_report_backup`);

--
-- Indexes for table `report_fileserver`
--
ALTER TABLE `report_fileserver`
  ADD PRIMARY KEY (`id_fileServer`);

--
-- Indexes for table `report_new_fileserver`
--
ALTER TABLE `report_new_fileserver`
  ADD PRIMARY KEY (`id_newfileserver`);

--
-- Indexes for table `report_recovory`
--
ALTER TABLE `report_recovory`
  ADD PRIMARY KEY (`id_report_recovery`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id_setting`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `backuppathname`
--
ALTER TABLE `backuppathname`
  MODIFY `id_pathName` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `checkdata`
--
ALTER TABLE `checkdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `config_var`
--
ALTER TABLE `config_var`
  MODIFY `id_config_var` int(12) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ftp`
--
ALTER TABLE `ftp`
  MODIFY `id_ftp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `hash`
--
ALTER TABLE `hash`
  MODIFY `id_hash` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `id_person` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `report_backup`
--
ALTER TABLE `report_backup`
  MODIFY `id_report_backup` int(12) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `report_fileserver`
--
ALTER TABLE `report_fileserver`
  MODIFY `id_fileServer` int(12) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `report_new_fileserver`
--
ALTER TABLE `report_new_fileserver`
  MODIFY `id_newfileserver` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;
--
-- AUTO_INCREMENT for table `report_recovory`
--
ALTER TABLE `report_recovory`
  MODIFY `id_report_recovery` int(12) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id_setting` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
