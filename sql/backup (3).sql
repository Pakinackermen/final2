-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2019 at 12:42 AM
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
(3, '{path:/manage/cmd_check_hash.php|hash:388d51f1448a0cbcb1f2914e2b3ba752|size:247}{path:/manage/config/ftp.php|hash:c26f6b57174f6d13c134693cd954ac76|size:207}{path:/manage/config/ReadFile.php|hash:922a3f484f05f7a41166f38fff381101|size:1425}{path:/manage/funccheck.php|hash:508444b1d0e3a579d6d6e3e6a2931c8b|size:559}{path:/manage/linealert.php|hash:37bf7d87cf44b0f2935ea2a3d31605b9|size:1609}{path:/manage/read_write_file.php/create_file_hash/backup.php|hash:14d59a7759c7c422b28b492de33ea071|size:150}{path:/manage/read_write_file.php/create_file_hash/check.php|hash:3dbe2da840d1bfa0f22898ab360327e6|size:150}{path:/manage/read_write_file.php/create_file_hash/main.php|hash:dcbef8b1b7d44d759e5e111f62debed1|size:1120}{path:/manage/read_write_file.php/ftp/ftp_adduser.php|hash:6cb578820b44c57d1858dba4825c935a|size:4190}{path:/manage/referent.txt|hash:9bfa82ce86350855385b17d414827ae2|size:348}{path:/manage/unzip.php|hash:506d2e9b458f35cfb92a989865f465b5|size:4416}', '', '2019-01-05 23:06:54', 'C'),
(4, '{path:/manage/cmd_check_hash.php|hash:388d51f1448a0cbcb1f2914e2b3ba752|size:247}{path:/manage/config/ftp.php|hash:c26f6b57174f6d13c134693cd954ac76|size:207}{path:/manage/config/ReadFile.php|hash:922a3f484f05f7a41166f38fff381101|size:1425}{path:/manage/funccheck.php|hash:508444b1d0e3a579d6d6e3e6a2931c8b|size:559}{path:/manage/linealert.php|hash:37bf7d87cf44b0f2935ea2a3d31605b9|size:1609}{path:/manage/read_write_file.php/create_file_hash/backup.php|hash:14d59a7759c7c422b28b492de33ea071|size:150}{path:/manage/read_write_file.php/create_file_hash/check.php|hash:3dbe2da840d1bfa0f22898ab360327e6|size:150}{path:/manage/read_write_file.php/create_file_hash/main.php|hash:dcbef8b1b7d44d759e5e111f62debed1|size:1120}{path:/manage/read_write_file.php/ftp/ftp_adduser.php|hash:6cb578820b44c57d1858dba4825c935a|size:4190}{path:/manage/referent.txt|hash:9bfa82ce86350855385b17d414827ae2|size:348}{path:/manage/unzip.php|hash:506d2e9b458f35cfb92a989865f465b5|size:4416}', '', '2019-01-06 13:38:49', 'C'),
(5, '{path:/manage/cmd_check_hash.php|hash:388d51f1448a0cbcb1f2914e2b3ba752|size:247}{path:/manage/config/ftp.php|hash:c26f6b57174f6d13c134693cd954ac76|size:207}{path:/manage/config/ReadFile.php|hash:922a3f484f05f7a41166f38fff381101|size:1425}{path:/manage/funccheck.php|hash:508444b1d0e3a579d6d6e3e6a2931c8b|size:559}{path:/manage/linealert.php|hash:37bf7d87cf44b0f2935ea2a3d31605b9|size:1609}{path:/manage/read_write_file.php/create_file_hash/backup.php|hash:14d59a7759c7c422b28b492de33ea071|size:150}{path:/manage/read_write_file.php/create_file_hash/check.php|hash:3dbe2da840d1bfa0f22898ab360327e6|size:150}{path:/manage/read_write_file.php/create_file_hash/main.php|hash:dcbef8b1b7d44d759e5e111f62debed1|size:1120}{path:/manage/read_write_file.php/ftp/ftp_adduser.php|hash:6cb578820b44c57d1858dba4825c935a|size:4190}{path:/manage/referent.txt|hash:9bfa82ce86350855385b17d414827ae2|size:348}{path:/manage/unzip.php|hash:506d2e9b458f35cfb92a989865f465b5|size:4416}', '', '2019-01-06 17:17:30', 'C'),
(30, '{path:C:/xampp/htdocs/data/data/THSarabunNew/.DS_Store|hash:e2512200b92e22b6c831656d3b5315e9|size:6148}{path:C:/xampp/htdocs/data/data/THSarabunNew/._.DS_Store|hash:241ea797774c86197000ffd2fe2ed491|size:4096}{path:C:/xampp/htdocs/data/data/THSarabunNew/th2/THSarabunNew Bold.ttf|hash:bdd8eb542ab9aa84e5809edb230f07cc|size:366464}{path:C:/xampp/htdocs/data/data/THSarabunNew/th2/THSarabunNew BoldItalic.ttf|hash:0b381613886ea1af245b0a8120019ecb|size:118364}{path:C:/xampp/htdocs/data/data/THSarabunNew/th2/THSarabunNew Italic.ttf|hash:05a052030bb61432929f643579b82ce1|size:116800}{path:C:/xampp/htdocs/data/data/THSarabunNew/th2/THSarabunNew.ttf|hash:45905ce12b4739c794a5ebdaee506202|size:479628}{path:C:/xampp/htdocs/data/data/THSarabunNew/THSarabunNew Bold.ttf|hash:bdd8eb542ab9aa84e5809edb230f07cc|size:366464}{path:C:/xampp/htdocs/data/data/THSarabunNew/THSarabunNew BoldItalic.ttf|hash:0b381613886ea1af245b0a8120019ecb|size:118364}{path:C:/xampp/htdocs/data/data/THSarabunNew/THSarabunNew Italic.ttf|hash:05a052030bb61432929f643579b82ce1|size:116800}{path:C:/xampp/htdocs/data/data/THSarabunNew/THSarabunNew.ttf|hash:45905ce12b4739c794a5ebdaee506202|size:479628}{path:C:/xampp/htdocs/data/THSarabunNew/.DS_Store|hash:e2512200b92e22b6c831656d3b5315e9|size:6148}{path:C:/xampp/htdocs/data/THSarabunNew/THSarabunNew Bold.ttf|hash:bdd8eb542ab9aa84e5809edb230f07cc|size:366464}{path:C:/xampp/htdocs/data/THSarabunNew/THSarabunNew BoldItalic.ttf|hash:0b381613886ea1af245b0a8120019ecb|size:118364}{path:C:/xampp/htdocs/data/THSarabunNew/THSarabunNew Italic.ttf|hash:05a052030bb61432929f643579b82ce1|size:116800}', '', '2019-01-27 23:16:25', 'B'),
(31, '{path:C:/xampp/htdocs/data/THSarabun/.DS_Store|hash:e2512200b92e22b6c831656d3b5315e9|size:6148}{path:C:/xampp/htdocs/data/THSarabun/THSarabunNew Bold.ttf|hash:bdd8eb542ab9aa84e5809edb230f07cc|size:366464}{path:C:/xampp/htdocs/data/THSarabun/THSarabunNew BoldItalic.ttf|hash:0b381613886ea1af245b0a8120019ecb|size:118364}{path:C:/xampp/htdocs/data/THSarabun/THSarabunNew Italic.ttf|hash:05a052030bb61432929f643579b82ce1|size:116800}{path:C:/xampp/htdocs/data/THSarabunNew/.DS_Store|hash:e2512200b92e22b6c831656d3b5315e9|size:6148}{path:C:/xampp/htdocs/data/THSarabunNew/THSarabunNew Bold.ttf|hash:bdd8eb542ab9aa84e5809edb230f07cc|size:366464}{path:C:/xampp/htdocs/data/THSarabunNew/THSarabunNew BoldItalic.ttf|hash:0b381613886ea1af245b0a8120019ecb|size:118364}{path:C:/xampp/htdocs/data/THSarabunNew/THSarabunNew Italic.ttf|hash:05a052030bb61432929f643579b82ce1|size:116800}', '', '2019-01-27 23:45:50', 'B'),
(40, '{path:C:xampphtdocsdata/THSarabun/.DS_Store|hash:e2512200b92e22b6c831656d3b5315e9|size:6148}{path:C:xampphtdocsdata/THSarabun/THSarabunNew Bold.ttf|hash:bdd8eb542ab9aa84e5809edb230f07cc|size:366464}{path:C:xampphtdocsdata/THSarabun/THSarabunNew BoldItalic.ttf|hash:0b381613886ea1af245b0a8120019ecb|size:118364}{path:C:xampphtdocsdata/THSarabun/THSarabunNew Italic.ttf|hash:05a052030bb61432929f643579b82ce1|size:116800}{path:C:xampphtdocsdata/THSarabunNew/.DS_Store|hash:e2512200b92e22b6c831656d3b5315e9|size:6148}{path:C:xampphtdocsdata/THSarabunNew/THSarabunNew Bold.ttf|hash:bdd8eb542ab9aa84e5809edb230f07cc|size:366464}{path:C:xampphtdocsdata/THSarabunNew/THSarabunNew BoldItalic.ttf|hash:0b381613886ea1af245b0a8120019ecb|size:118364}{path:C:xampphtdocsdata/THSarabunNew/THSarabunNew Italic.ttf|hash:05a052030bb61432929f643579b82ce1|size:116800}', ' C:xampphtdocsdata ', '2019-01-30 20:23:40', 'R'),
(41, '{path:C:/xampp/htdocs/data/THSarabun/.DS_Store|hash:e2512200b92e22b6c831656d3b5315e9|size:6148}{path:C:/xampp/htdocs/data/THSarabun/THSarabunNew Bold.ttf|hash:bdd8eb542ab9aa84e5809edb230f07cc|size:366464}{path:C:/xampp/htdocs/data/THSarabun/THSarabunNew BoldItalic.ttf|hash:0b381613886ea1af245b0a8120019ecb|size:118364}{path:C:/xampp/htdocs/data/THSarabun/THSarabunNew Italic.ttf|hash:05a052030bb61432929f643579b82ce1|size:116800}{path:C:/xampp/htdocs/data/THSarabunNew/.DS_Store|hash:e2512200b92e22b6c831656d3b5315e9|size:6148}{path:C:/xampp/htdocs/data/THSarabunNew/THSarabunNew Bold.ttf|hash:bdd8eb542ab9aa84e5809edb230f07cc|size:366464}{path:C:/xampp/htdocs/data/THSarabunNew/THSarabunNew BoldItalic.ttf|hash:0b381613886ea1af245b0a8120019ecb|size:118364}{path:C:/xampp/htdocs/data/THSarabunNew/THSarabunNew Italic.ttf|hash:05a052030bb61432929f643579b82ce1|size:116800}', ' C:/xampp/htdocs/data ', '2019-01-30 23:38:14', 'B'),
(42, '{path:C:/xampp/htdocs/data/THSarabun/.DS_Store|hash:e2512200b92e22b6c831656d3b5315e9|size:6148}{path:C:/xampp/htdocs/data/THSarabun/THSarabunNew Bold.ttf|hash:bdd8eb542ab9aa84e5809edb230f07cc|size:366464}{path:C:/xampp/htdocs/data/THSarabun/THSarabunNew BoldItalic.ttf|hash:0b381613886ea1af245b0a8120019ecb|size:118364}{path:C:/xampp/htdocs/data/THSarabun/THSarabunNew Italic.ttf|hash:05a052030bb61432929f643579b82ce1|size:116800}{path:C:/xampp/htdocs/data/THSarabunNew/.DS_Store|hash:e2512200b92e22b6c831656d3b5315e9|size:6148}{path:C:/xampp/htdocs/data/THSarabunNew/THSarabunNew Bold.ttf|hash:bdd8eb542ab9aa84e5809edb230f07cc|size:366464}{path:C:/xampp/htdocs/data/THSarabunNew/THSarabunNew BoldItalic.ttf|hash:0b381613886ea1af245b0a8120019ecb|size:118364}{path:C:/xampp/htdocs/data/THSarabunNew/THSarabunNew Italic.ttf|hash:05a052030bb61432929f643579b82ce1|size:116800}', ' C:/xampp/htdocs/data ', '2019-01-30 23:40:04', 'B'),
(43, '{path:C:/xampp/htdocs/data/THSarabun/.DS_Store|hash:e2512200b92e22b6c831656d3b5315e9|size:6148}{path:C:/xampp/htdocs/data/THSarabun/THSarabunNew Bold.ttf|hash:bdd8eb542ab9aa84e5809edb230f07cc|size:366464}{path:C:/xampp/htdocs/data/THSarabun/THSarabunNew BoldItalic.ttf|hash:0b381613886ea1af245b0a8120019ecb|size:118364}{path:C:/xampp/htdocs/data/THSarabun/THSarabunNew Italic.ttf|hash:05a052030bb61432929f643579b82ce1|size:116800}{path:C:/xampp/htdocs/data/THSarabunNew/.DS_Store|hash:e2512200b92e22b6c831656d3b5315e9|size:6148}{path:C:/xampp/htdocs/data/THSarabunNew/THSarabunNew Bold.ttf|hash:bdd8eb542ab9aa84e5809edb230f07cc|size:366464}{path:C:/xampp/htdocs/data/THSarabunNew/THSarabunNew BoldItalic.ttf|hash:0b381613886ea1af245b0a8120019ecb|size:118364}{path:C:/xampp/htdocs/data/THSarabunNew/THSarabunNew Italic.ttf|hash:05a052030bb61432929f643579b82ce1|size:116800}', ' C:/xampp/htdocs/data ', '2019-01-30 23:40:55', 'B'),
(44, '{path:C:/xampp/htdocs/data/THSarabun/.DS_Store|hash:e2512200b92e22b6c831656d3b5315e9|size:6148}{path:C:/xampp/htdocs/data/THSarabun/THSarabunNew Bold.ttf|hash:bdd8eb542ab9aa84e5809edb230f07cc|size:366464}{path:C:/xampp/htdocs/data/THSarabun/THSarabunNew BoldItalic.ttf|hash:0b381613886ea1af245b0a8120019ecb|size:118364}{path:C:/xampp/htdocs/data/THSarabun/THSarabunNew Italic.ttf|hash:05a052030bb61432929f643579b82ce1|size:116800}{path:C:/xampp/htdocs/data/THSarabunNew/.DS_Store|hash:e2512200b92e22b6c831656d3b5315e9|size:6148}{path:C:/xampp/htdocs/data/THSarabunNew/THSarabunNew Bold.ttf|hash:bdd8eb542ab9aa84e5809edb230f07cc|size:366464}{path:C:/xampp/htdocs/data/THSarabunNew/THSarabunNew BoldItalic.ttf|hash:0b381613886ea1af245b0a8120019ecb|size:118364}{path:C:/xampp/htdocs/data/THSarabunNew/THSarabunNew Italic.ttf|hash:05a052030bb61432929f643579b82ce1|size:116800}', ' C:/xampp/htdocs/data ', '2019-01-30 23:41:13', 'B'),
(45, '{path:C:/xampp/htdocs/data/THSarabun/.DS_Store|hash:e2512200b92e22b6c831656d3b5315e9|size:6148}{path:C:/xampp/htdocs/data/THSarabun/THSarabunNew Bold.ttf|hash:bdd8eb542ab9aa84e5809edb230f07cc|size:366464}{path:C:/xampp/htdocs/data/THSarabun/THSarabunNew BoldItalic.ttf|hash:0b381613886ea1af245b0a8120019ecb|size:118364}{path:C:/xampp/htdocs/data/THSarabun/THSarabunNew Italic.ttf|hash:05a052030bb61432929f643579b82ce1|size:116800}{path:C:/xampp/htdocs/data/THSarabunNew/.DS_Store|hash:e2512200b92e22b6c831656d3b5315e9|size:6148}{path:C:/xampp/htdocs/data/THSarabunNew/THSarabunNew Bold.ttf|hash:bdd8eb542ab9aa84e5809edb230f07cc|size:366464}{path:C:/xampp/htdocs/data/THSarabunNew/THSarabunNew BoldItalic.ttf|hash:0b381613886ea1af245b0a8120019ecb|size:118364}{path:C:/xampp/htdocs/data/THSarabunNew/THSarabunNew Italic.ttf|hash:05a052030bb61432929f643579b82ce1|size:116800}', ' C:/xampp/htdocs/data ', '2019-01-31 00:01:52', 'B'),
(46, '{path:C:xampphtdocsdata/THSarabun/.DS_Store|hash:e2512200b92e22b6c831656d3b5315e9|size:6148}{path:C:xampphtdocsdata/THSarabun/THSarabunNew Bold.ttf|hash:bdd8eb542ab9aa84e5809edb230f07cc|size:366464}{path:C:xampphtdocsdata/THSarabun/THSarabunNew BoldItalic.ttf|hash:0b381613886ea1af245b0a8120019ecb|size:118364}{path:C:xampphtdocsdata/THSarabun/THSarabunNew Italic.ttf|hash:05a052030bb61432929f643579b82ce1|size:116800}{path:C:xampphtdocsdata/THSarabunNew/.DS_Store|hash:e2512200b92e22b6c831656d3b5315e9|size:6148}{path:C:xampphtdocsdata/THSarabunNew/THSarabunNew Bold.ttf|hash:bdd8eb542ab9aa84e5809edb230f07cc|size:366464}{path:C:xampphtdocsdata/THSarabunNew/THSarabunNew BoldItalic.ttf|hash:0b381613886ea1af245b0a8120019ecb|size:118364}{path:C:xampphtdocsdata/THSarabunNew/THSarabunNew Italic.ttf|hash:05a052030bb61432929f643579b82ce1|size:116800}', ' C:xampphtdocsdata ', '2019-01-31 23:22:03', 'C'),
(47, '{path:C:xampphtdocsdata/THSarabun/.DS_Store|hash:e2512200b92e22b6c831656d3b5315e9|size:6148}{path:C:xampphtdocsdata/THSarabun/THSarabunNew Bold.ttf|hash:bdd8eb542ab9aa84e5809edb230f07cc|size:366464}{path:C:xampphtdocsdata/THSarabun/THSarabunNew BoldItalic.ttf|hash:0b381613886ea1af245b0a8120019ecb|size:118364}{path:C:xampphtdocsdata/THSarabun/THSarabunNew Italic.ttf|hash:05a052030bb61432929f643579b82ce1|size:116800}{path:C:xampphtdocsdata/THSarabunNew/.DS_Store|hash:e2512200b92e22b6c831656d3b5315e9|size:6148}{path:C:xampphtdocsdata/THSarabunNew/THSarabunNew Bold.ttf|hash:bdd8eb542ab9aa84e5809edb230f07cc|size:366464}{path:C:xampphtdocsdata/THSarabunNew/THSarabunNew BoldItalic.ttf|hash:0b381613886ea1af245b0a8120019ecb|size:118364}{path:C:xampphtdocsdata/THSarabunNew/THSarabunNew Italic.ttf|hash:05a052030bb61432929f643579b82ce1|size:116800}', ' C:xampphtdocsdata ', '2019-01-31 23:25:16', 'R');

-- --------------------------------------------------------

--
-- Table structure for table `filebackup`
--

CREATE TABLE `filebackup` (
  `id_filebackup` int(12) NOT NULL,
  `id_setting` int(12) NOT NULL,
  `file_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `filebackup`
--

INSERT INTO `filebackup` (`id_filebackup`, `id_setting`, `file_name`) VALUES
(2, 20, '20-20-20'),
(3, 20, '2019-01-30-23-58-06.zip'),
(4, 20, '2019-01-31-00-01-51.zip');

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
-- Indexes for table `checkdata`
--
ALTER TABLE `checkdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `filebackup`
--
ALTER TABLE `filebackup`
  ADD PRIMARY KEY (`id_filebackup`);

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
-- AUTO_INCREMENT for table `checkdata`
--
ALTER TABLE `checkdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `filebackup`
--
ALTER TABLE `filebackup`
  MODIFY `id_filebackup` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
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
  MODIFY `id_setting` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
