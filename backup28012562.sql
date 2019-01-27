-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2019 at 09:42 PM
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
(30, '{path:C:/xampp/htdocs/data/data/THSarabunNew/.DS_Store|hash:e2512200b92e22b6c831656d3b5315e9|size:6148}{path:C:/xampp/htdocs/data/data/THSarabunNew/._.DS_Store|hash:241ea797774c86197000ffd2fe2ed491|size:4096}{path:C:/xampp/htdocs/data/data/THSarabunNew/th2/THSarabunNew Bold.ttf|hash:bdd8eb542ab9aa84e5809edb230f07cc|size:366464}{path:C:/xampp/htdocs/data/data/THSarabunNew/th2/THSarabunNew BoldItalic.ttf|hash:0b381613886ea1af245b0a8120019ecb|size:118364}{path:C:/xampp/htdocs/data/data/THSarabunNew/th2/THSarabunNew Italic.ttf|hash:05a052030bb61432929f643579b82ce1|size:116800}{path:C:/xampp/htdocs/data/data/THSarabunNew/th2/THSarabunNew.ttf|hash:45905ce12b4739c794a5ebdaee506202|size:479628}{path:C:/xampp/htdocs/data/data/THSarabunNew/THSarabunNew Bold.ttf|hash:bdd8eb542ab9aa84e5809edb230f07cc|size:366464}{path:C:/xampp/htdocs/data/data/THSarabunNew/THSarabunNew BoldItalic.ttf|hash:0b381613886ea1af245b0a8120019ecb|size:118364}{path:C:/xampp/htdocs/data/data/THSarabunNew/THSarabunNew Italic.ttf|hash:05a052030bb61432929f643579b82ce1|size:116800}{path:C:/xampp/htdocs/data/data/THSarabunNew/THSarabunNew.ttf|hash:45905ce12b4739c794a5ebdaee506202|size:479628}{path:C:/xampp/htdocs/data/THSarabunNew/.DS_Store|hash:e2512200b92e22b6c831656d3b5315e9|size:6148}{path:C:/xampp/htdocs/data/THSarabunNew/THSarabunNew Bold.ttf|hash:bdd8eb542ab9aa84e5809edb230f07cc|size:366464}{path:C:/xampp/htdocs/data/THSarabunNew/THSarabunNew BoldItalic.ttf|hash:0b381613886ea1af245b0a8120019ecb|size:118364}{path:C:/xampp/htdocs/data/THSarabunNew/THSarabunNew Italic.ttf|hash:05a052030bb61432929f643579b82ce1|size:116800}', '', '2019-01-27 23:16:25', 'B'),
(31, '{path:C:/xampp/htdocs/data/THSarabun/.DS_Store|hash:e2512200b92e22b6c831656d3b5315e9|size:6148}{path:C:/xampp/htdocs/data/THSarabun/THSarabunNew Bold.ttf|hash:bdd8eb542ab9aa84e5809edb230f07cc|size:366464}{path:C:/xampp/htdocs/data/THSarabun/THSarabunNew BoldItalic.ttf|hash:0b381613886ea1af245b0a8120019ecb|size:118364}{path:C:/xampp/htdocs/data/THSarabun/THSarabunNew Italic.ttf|hash:05a052030bb61432929f643579b82ce1|size:116800}{path:C:/xampp/htdocs/data/THSarabunNew/.DS_Store|hash:e2512200b92e22b6c831656d3b5315e9|size:6148}{path:C:/xampp/htdocs/data/THSarabunNew/THSarabunNew Bold.ttf|hash:bdd8eb542ab9aa84e5809edb230f07cc|size:366464}{path:C:/xampp/htdocs/data/THSarabunNew/THSarabunNew BoldItalic.ttf|hash:0b381613886ea1af245b0a8120019ecb|size:118364}{path:C:/xampp/htdocs/data/THSarabunNew/THSarabunNew Italic.ttf|hash:05a052030bb61432929f643579b82ce1|size:116800}', '', '2019-01-27 23:45:50', 'B'),
(32, '', '', '2019-01-28 00:25:36', 'B'),
(33, '{path:C:/xampp/htdocs/backup/backup (1).sql|hash:949300233ea9609acba1c9bd78cf798f|size:29501}{path:C:/xampp/htdocs/backup/config/connectDB.php|hash:5e8aa2da0e1e3f0f8c3175378b859bd6|size:3066}{path:C:/xampp/htdocs/backup/config/ftp.php|hash:ba5de461cf10540f56d86c40c2896d43|size:587}{path:C:/xampp/htdocs/backup/config/mannual.txt|hash:332d03979db733104952bb58e812d8c4|size:54}{path:C:/xampp/htdocs/backup/core/backup/backup.js|hash:d41d8cd98f00b204e9800998ecf8427e|size:0}{path:C:/xampp/htdocs/backup/core/backup/index.php|hash:70f3ea78922dee154d6fc0be61da210f|size:3398}{path:C:/xampp/htdocs/backup/core/checkData/index.php|hash:ac36afc035baf24fe871078616eba6e2|size:2232}{path:C:/xampp/htdocs/backup/core/recovery/index.php|hash:51739ec62a0bcc7259c67309d2e27ccd|size:3405}{path:C:/xampp/htdocs/backup/core/report/index.php|hash:ba71ed527a38173c1717da80ef1f83c0|size:1093}{path:C:/xampp/htdocs/backup/core/report/report_backup.php|hash:100c3ac12e3c2cca34c8fdf8e437cb6f|size:2463}{path:C:/xampp/htdocs/backup/core/report/report_fileserver.php|hash:0fd657ac65ae2041cca01de913ed84dc|size:4599}{path:C:/xampp/htdocs/backup/core/report/report_recovery.php|hash:b3dda2494505a4deabca2d0c5ed9f0e1|size:1980}{path:C:/xampp/htdocs/backup/core/report/repost.js|hash:638ba41d6f0c035cbf817c30a867f140|size:349}{path:C:/xampp/htdocs/backup/images/.DS_Store|hash:10fda1d740de905d516af56c371a9d12|size:6148}{path:C:/xampp/htdocs/backup/images/shards-dashboards-logo.png|hash:2db96f9b76abd85a149ee432f59986c8|size:954}', '', '2019-01-28 00:28:05', 'B'),
(34, '{path:C:xampphtdocsdata/THSarabun/.DS_Store|hash:e2512200b92e22b6c831656d3b5315e9|size:6148}{path:C:xampphtdocsdata/THSarabun/THSarabunNew Bold.ttf|hash:bdd8eb542ab9aa84e5809edb230f07cc|size:366464}{path:C:xampphtdocsdata/THSarabun/THSarabunNew BoldItalic.ttf|hash:0b381613886ea1af245b0a8120019ecb|size:118364}{path:C:xampphtdocsdata/THSarabun/THSarabunNew Italic.ttf|hash:05a052030bb61432929f643579b82ce1|size:116800}{path:C:xampphtdocsdata/THSarabunNew/.DS_Store|hash:e2512200b92e22b6c831656d3b5315e9|size:6148}{path:C:xampphtdocsdata/THSarabunNew/THSarabunNew Bold.ttf|hash:bdd8eb542ab9aa84e5809edb230f07cc|size:366464}{path:C:xampphtdocsdata/THSarabunNew/THSarabunNew BoldItalic.ttf|hash:0b381613886ea1af245b0a8120019ecb|size:118364}{path:C:xampphtdocsdata/THSarabunNew/THSarabunNew Italic.ttf|hash:05a052030bb61432929f643579b82ce1|size:116800}', '', '2019-01-28 01:16:41', 'C'),
(35, '', '', '2019-01-28 01:18:14', 'C'),
(36, '', '', '2019-01-28 01:19:34', 'C'),
(37, '{path:C:xampphtdocsdata/THSarabun/.DS_Store|hash:e2512200b92e22b6c831656d3b5315e9|size:6148}{path:C:xampphtdocsdata/THSarabun/THSarabunNew Bold.ttf|hash:bdd8eb542ab9aa84e5809edb230f07cc|size:366464}{path:C:xampphtdocsdata/THSarabun/THSarabunNew BoldItalic.ttf|hash:0b381613886ea1af245b0a8120019ecb|size:118364}{path:C:xampphtdocsdata/THSarabun/THSarabunNew Italic.ttf|hash:05a052030bb61432929f643579b82ce1|size:116800}{path:C:xampphtdocsdata/THSarabunNew/.DS_Store|hash:e2512200b92e22b6c831656d3b5315e9|size:6148}{path:C:xampphtdocsdata/THSarabunNew/THSarabunNew Bold.ttf|hash:bdd8eb542ab9aa84e5809edb230f07cc|size:366464}{path:C:xampphtdocsdata/THSarabunNew/THSarabunNew BoldItalic.ttf|hash:0b381613886ea1af245b0a8120019ecb|size:118364}{path:C:xampphtdocsdata/THSarabunNew/THSarabunNew Italic.ttf|hash:05a052030bb61432929f643579b82ce1|size:116800}', ' C:xampphtdocsdata ', '2019-01-28 02:08:51', 'C'),
(38, '{path:C:/xampp/htdocs/data/THSarabun/.DS_Store|hash:e2512200b92e22b6c831656d3b5315e9|size:6148}{path:C:/xampp/htdocs/data/THSarabun/THSarabunNew Bold.ttf|hash:bdd8eb542ab9aa84e5809edb230f07cc|size:366464}{path:C:/xampp/htdocs/data/THSarabun/THSarabunNew BoldItalic.ttf|hash:0b381613886ea1af245b0a8120019ecb|size:118364}{path:C:/xampp/htdocs/data/THSarabun/THSarabunNew Italic.ttf|hash:05a052030bb61432929f643579b82ce1|size:116800}{path:C:/xampp/htdocs/data/THSarabunNew/.DS_Store|hash:e2512200b92e22b6c831656d3b5315e9|size:6148}{path:C:/xampp/htdocs/data/THSarabunNew/THSarabunNew Bold.ttf|hash:bdd8eb542ab9aa84e5809edb230f07cc|size:366464}{path:C:/xampp/htdocs/data/THSarabunNew/THSarabunNew BoldItalic.ttf|hash:0b381613886ea1af245b0a8120019ecb|size:118364}{path:C:/xampp/htdocs/data/THSarabunNew/THSarabunNew Italic.ttf|hash:05a052030bb61432929f643579b82ce1|size:116800}', ' C:/xampp/htdocs/data ', '2019-01-28 02:21:21', 'B');

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
(32, '127.0.0.1', 'backup', ''),
(33, '127.0.0.1', 'backup', '');

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
(20, 'NULL', 'C:\\xampp\\htdocs\\data', 'backup', 'N', 'N', 'N', 'root', '', 'backup', 'localhost', '12431'),
(44, 'NULL', 'C:\\xampp\\htdocs\\backup', 'backup', '', '', '', 'root', '', 'backup', 'localhost', '123');

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
-- Indexes for table `ftp`
--
ALTER TABLE `ftp`
  ADD PRIMARY KEY (`id_ftp`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id_person`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `ftp`
--
ALTER TABLE `ftp`
  MODIFY `id_ftp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `id_person` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id_setting` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
