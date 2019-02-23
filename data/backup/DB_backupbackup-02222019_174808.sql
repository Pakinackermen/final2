CREATE DATABASE IF NOT EXISTS backup;

SET FOREIGN_KEY_CHECKS=0;

USE `backup`;

DROP TABLE IF EXISTS `changedata`;

CREATE TABLE `changedata` (
  `id_change` int(12) NOT NULL AUTO_INCREMENT,
  `new` text NOT NULL COMMENT 'file ที่เพิ่มขึ้น',
  `reduce` text NOT NULL COMMENT 'file ที่หาย',
  `hash_change` text NOT NULL,
  `size` text NOT NULL,
  `id_checkdata` int(12) NOT NULL COMMENT 'สำหรับการคัดข้อมูลไปโชว์',
  `date` datetime NOT NULL,
  PRIMARY KEY (`id_change`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `changedata` VALUES("1","path","","","12323","20","2019-02-20 07:31:35");



DROP TABLE IF EXISTS `checkdata`;

CREATE TABLE `checkdata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` text NOT NULL,
  `directory` text NOT NULL COMMENT 'nul directory',
  `datetime` datetime NOT NULL COMMENT 'วันเวลาในการบันทึกข้อมูล',
  `status` varchar(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8;

INSERT INTO `checkdata` VALUES("3","{path:/manage/cmd_check_hash.php|hash:388d51f1448a0cbcb1f2914e2b3ba752|size:247}{path:/manage/config/ftp.php|hash:c26f6b57174f6d13c134693cd954ac76|size:207}{path:/manage/config/ReadFile.php|hash:922a3f484f05f7a41166f38fff381101|size:1425}{path:/manage/funccheck.php|hash:508444b1d0e3a579d6d6e3e6a2931c8b|size:559}{path:/manage/linealert.php|hash:37bf7d87cf44b0f2935ea2a3d31605b9|size:1609}{path:/manage/read_write_file.php/create_file_hash/backup.php|hash:14d59a7759c7c422b28b492de33ea071|size:150}{path:/manage/read_write_file.php/create_file_hash/check.php|hash:3dbe2da840d1bfa0f22898ab360327e6|size:150}{path:/manage/read_write_file.php/create_file_hash/main.php|hash:dcbef8b1b7d44d759e5e111f62debed1|size:1120}{path:/manage/read_write_file.php/ftp/ftp_adduser.php|hash:6cb578820b44c57d1858dba4825c935a|size:4190}{path:/manage/referent.txt|hash:9bfa82ce86350855385b17d414827ae2|size:348}{path:/manage/unzip.php|hash:506d2e9b458f35cfb92a989865f465b5|size:4416}","","2019-01-05 23:06:54","C");
INSERT INTO `checkdata` VALUES("4","{path:/manage/cmd_check_hash.php|hash:388d51f1448a0cbcb1f2914e2b3ba752|size:247}{path:/manage/config/ftp.php|hash:c26f6b57174f6d13c134693cd954ac76|size:207}{path:/manage/config/ReadFile.php|hash:922a3f484f05f7a41166f38fff381101|size:1425}{path:/manage/funccheck.php|hash:508444b1d0e3a579d6d6e3e6a2931c8b|size:559}{path:/manage/linealert.php|hash:37bf7d87cf44b0f2935ea2a3d31605b9|size:1609}{path:/manage/read_write_file.php/create_file_hash/backup.php|hash:14d59a7759c7c422b28b492de33ea071|size:150}{path:/manage/read_write_file.php/create_file_hash/check.php|hash:3dbe2da840d1bfa0f22898ab360327e6|size:150}{path:/manage/read_write_file.php/create_file_hash/main.php|hash:dcbef8b1b7d44d759e5e111f62debed1|size:1120}{path:/manage/read_write_file.php/ftp/ftp_adduser.php|hash:6cb578820b44c57d1858dba4825c935a|size:4190}{path:/manage/referent.txt|hash:9bfa82ce86350855385b17d414827ae2|size:348}{path:/manage/unzip.php|hash:506d2e9b458f35cfb92a989865f465b5|size:4416}","","2019-01-06 13:38:49","C");
INSERT INTO `checkdata` VALUES("5","{path:/manage/cmd_check_hash.php|hash:388d51f1448a0cbcb1f2914e2b3ba752|size:247}{path:/manage/config/ftp.php|hash:c26f6b57174f6d13c134693cd954ac76|size:207}{path:/manage/config/ReadFile.php|hash:922a3f484f05f7a41166f38fff381101|size:1425}{path:/manage/funccheck.php|hash:508444b1d0e3a579d6d6e3e6a2931c8b|size:559}{path:/manage/linealert.php|hash:37bf7d87cf44b0f2935ea2a3d31605b9|size:1609}{path:/manage/read_write_file.php/create_file_hash/backup.php|hash:14d59a7759c7c422b28b492de33ea071|size:150}{path:/manage/read_write_file.php/create_file_hash/check.php|hash:3dbe2da840d1bfa0f22898ab360327e6|size:150}{path:/manage/read_write_file.php/create_file_hash/main.php|hash:dcbef8b1b7d44d759e5e111f62debed1|size:1120}{path:/manage/read_write_file.php/ftp/ftp_adduser.php|hash:6cb578820b44c57d1858dba4825c935a|size:4190}{path:/manage/referent.txt|hash:9bfa82ce86350855385b17d414827ae2|size:348}{path:/manage/unzip.php|hash:506d2e9b458f35cfb92a989865f465b5|size:4416}","","2019-01-06 17:17:30","C");
INSERT INTO `checkdata` VALUES("30","{path:C:/xampp/htdocs/data/data/THSarabunNew/.DS_Store|hash:e2512200b92e22b6c831656d3b5315e9|size:6148}{path:C:/xampp/htdocs/data/data/THSarabunNew/._.DS_Store|hash:241ea797774c86197000ffd2fe2ed491|size:4096}{path:C:/xampp/htdocs/data/data/THSarabunNew/th2/THSarabunNew Bold.ttf|hash:bdd8eb542ab9aa84e5809edb230f07cc|size:366464}{path:C:/xampp/htdocs/data/data/THSarabunNew/th2/THSarabunNew BoldItalic.ttf|hash:0b381613886ea1af245b0a8120019ecb|size:118364}{path:C:/xampp/htdocs/data/data/THSarabunNew/th2/THSarabunNew Italic.ttf|hash:05a052030bb61432929f643579b82ce1|size:116800}{path:C:/xampp/htdocs/data/data/THSarabunNew/th2/THSarabunNew.ttf|hash:45905ce12b4739c794a5ebdaee506202|size:479628}{path:C:/xampp/htdocs/data/data/THSarabunNew/THSarabunNew Bold.ttf|hash:bdd8eb542ab9aa84e5809edb230f07cc|size:366464}{path:C:/xampp/htdocs/data/data/THSarabunNew/THSarabunNew BoldItalic.ttf|hash:0b381613886ea1af245b0a8120019ecb|size:118364}{path:C:/xampp/htdocs/data/data/THSarabunNew/THSarabunNew Italic.ttf|hash:05a052030bb61432929f643579b82ce1|size:116800}{path:C:/xampp/htdocs/data/data/THSarabunNew/THSarabunNew.ttf|hash:45905ce12b4739c794a5ebdaee506202|size:479628}{path:C:/xampp/htdocs/data/THSarabunNew/.DS_Store|hash:e2512200b92e22b6c831656d3b5315e9|size:6148}{path:C:/xampp/htdocs/data/THSarabunNew/THSarabunNew Bold.ttf|hash:bdd8eb542ab9aa84e5809edb230f07cc|size:366464}{path:C:/xampp/htdocs/data/THSarabunNew/THSarabunNew BoldItalic.ttf|hash:0b381613886ea1af245b0a8120019ecb|size:118364}{path:C:/xampp/htdocs/data/THSarabunNew/THSarabunNew Italic.ttf|hash:05a052030bb61432929f643579b82ce1|size:116800}","","2019-01-27 23:16:25","B");
INSERT INTO `checkdata` VALUES("31","{path:C:/xampp/htdocs/data/THSarabun/.DS_Store|hash:e2512200b92e22b6c831656d3b5315e9|size:6148}{path:C:/xampp/htdocs/data/THSarabun/THSarabunNew Bold.ttf|hash:bdd8eb542ab9aa84e5809edb230f07cc|size:366464}{path:C:/xampp/htdocs/data/THSarabun/THSarabunNew BoldItalic.ttf|hash:0b381613886ea1af245b0a8120019ecb|size:118364}{path:C:/xampp/htdocs/data/THSarabun/THSarabunNew Italic.ttf|hash:05a052030bb61432929f643579b82ce1|size:116800}{path:C:/xampp/htdocs/data/THSarabunNew/.DS_Store|hash:e2512200b92e22b6c831656d3b5315e9|size:6148}{path:C:/xampp/htdocs/data/THSarabunNew/THSarabunNew Bold.ttf|hash:bdd8eb542ab9aa84e5809edb230f07cc|size:366464}{path:C:/xampp/htdocs/data/THSarabunNew/THSarabunNew BoldItalic.ttf|hash:0b381613886ea1af245b0a8120019ecb|size:118364}{path:C:/xampp/htdocs/data/THSarabunNew/THSarabunNew Italic.ttf|hash:05a052030bb61432929f643579b82ce1|size:116800}","","2019-01-27 23:45:50","B");
INSERT INTO `checkdata` VALUES("40","{path:C:xampphtdocsdata/THSarabun/.DS_Store|hash:e2512200b92e22b6c831656d3b5315e9|size:6148}{path:C:xampphtdocsdata/THSarabun/THSarabunNew Bold.ttf|hash:bdd8eb542ab9aa84e5809edb230f07cc|size:366464}"," C:xampphtdocsdata ","2019-01-30 20:23:40","R");
INSERT INTO `checkdata` VALUES("41","{path:C:/xampp/htdocs/data/THSarabun/.DS_Store|hash:e2512200b92e22b6c831656d3b5315e9|size:6148}{path:C:/xampp/htdocs/data/THSarabun/THSarabunNew Bold.ttf|hash:bdd8eb542ab9aa84e5809edb230f07cc|size:366464}{path:C:/xampp/htdocs/data/THSarabun/THSarabunNew BoldItalic.ttf|hash:0b381613886ea1af245b0a8120019ecb|size:118364}{path:C:/xampp/htdocs/data/THSarabun/THSarabunNew Italic.ttf|hash:05a052030bb61432929f643579b82ce1|size:116800}{path:C:/xampp/htdocs/data/THSarabunNew/.DS_Store|hash:e2512200b92e22b6c831656d3b5315e9|size:6148}{path:C:/xampp/htdocs/data/THSarabunNew/THSarabunNew Bold.ttf|hash:bdd8eb542ab9aa84e5809edb230f07cc|size:366464}{path:C:/xampp/htdocs/data/THSarabunNew/THSarabunNew BoldItalic.ttf|hash:0b381613886ea1af245b0a8120019ecb|size:118364}{path:C:/xampp/htdocs/data/THSarabunNew/THSarabunNew Italic.ttf|hash:05a052030bb61432929f643579b82ce1|size:116800}"," C:/xampp/htdocs/data ","2019-01-30 23:38:14","B");
INSERT INTO `checkdata` VALUES("42","{path:C:/xampp/htdocs/data/THSarabun/.DS_Store|hash:e2512200b92e22b6c831656d3b5315e9|size:6148}{path:C:/xampp/htdocs/data/THSarabun/THSarabunNew Bold.ttf|hash:bdd8eb542ab9aa84e5809edb230f07cc|size:366464}{path:C:/xampp/htdocs/data/THSarabun/THSarabunNew BoldItalic.ttf|hash:0b381613886ea1af245b0a8120019ecb|size:118364}{path:C:/xampp/htdocs/data/THSarabun/THSarabunNew Italic.ttf|hash:05a052030bb61432929f643579b82ce1|size:116800}{path:C:/xampp/htdocs/data/THSarabunNew/.DS_Store|hash:e2512200b92e22b6c831656d3b5315e9|size:6148}{path:C:/xampp/htdocs/data/THSarabunNew/THSarabunNew Bold.ttf|hash:bdd8eb542ab9aa84e5809edb230f07cc|size:366464}{path:C:/xampp/htdocs/data/THSarabunNew/THSarabunNew BoldItalic.ttf|hash:0b381613886ea1af245b0a8120019ecb|size:118364}{path:C:/xampp/htdocs/data/THSarabunNew/THSarabunNew Italic.ttf|hash:05a052030bb61432929f643579b82ce1|size:116800}"," C:/xampp/htdocs/data ","2019-01-30 23:40:04","B");
INSERT INTO `checkdata` VALUES("43","{path:C:/xampp/htdocs/data/THSarabun/.DS_Store|hash:e2512200b92e22b6c831656d3b5315e9|size:6148}{path:C:/xampp/htdocs/data/THSarabun/THSarabunNew Bold.ttf|hash:bdd8eb542ab9aa84e5809edb230f07cc|size:366464}{path:C:/xampp/htdocs/data/THSarabun/THSarabunNew BoldItalic.ttf|hash:0b381613886ea1af245b0a8120019ecb|size:118364}{path:C:/xampp/htdocs/data/THSarabun/THSarabunNew Italic.ttf|hash:05a052030bb61432929f643579b82ce1|size:116800}{path:C:/xampp/htdocs/data/THSarabunNew/.DS_Store|hash:e2512200b92e22b6c831656d3b5315e9|size:6148}{path:C:/xampp/htdocs/data/THSarabunNew/THSarabunNew Bold.ttf|hash:bdd8eb542ab9aa84e5809edb230f07cc|size:366464}{path:C:/xampp/htdocs/data/THSarabunNew/THSarabunNew BoldItalic.ttf|hash:0b381613886ea1af245b0a8120019ecb|size:118364}{path:C:/xampp/htdocs/data/THSarabunNew/THSarabunNew Italic.ttf|hash:05a052030bb61432929f643579b82ce1|size:116800}"," C:/xampp/htdocs/data ","2019-01-30 23:40:55","B");
INSERT INTO `checkdata` VALUES("44","{path:C:/xampp/htdocs/data/THSarabun/.DS_Store|hash:e2512200b92e22b6c831656d3b5315e9|size:6148}{path:C:/xampp/htdocs/data/THSarabun/THSarabunNew Bold.ttf|hash:bdd8eb542ab9aa84e5809edb230f07cc|size:366464}{path:C:/xampp/htdocs/data/THSarabun/THSarabunNew BoldItalic.ttf|hash:0b381613886ea1af245b0a8120019ecb|size:118364}{path:C:/xampp/htdocs/data/THSarabun/THSarabunNew Italic.ttf|hash:05a052030bb61432929f643579b82ce1|size:116800}{path:C:/xampp/htdocs/data/THSarabunNew/.DS_Store|hash:e2512200b92e22b6c831656d3b5315e9|size:6148}{path:C:/xampp/htdocs/data/THSarabunNew/THSarabunNew Bold.ttf|hash:bdd8eb542ab9aa84e5809edb230f07cc|size:366464}{path:C:/xampp/htdocs/data/THSarabunNew/THSarabunNew BoldItalic.ttf|hash:0b381613886ea1af245b0a8120019ecb|size:118364}{path:C:/xampp/htdocs/data/THSarabunNew/THSarabunNew Italic.ttf|hash:05a052030bb61432929f643579b82ce1|size:116800}"," C:/xampp/htdocs/data ","2019-01-30 23:41:13","B");
INSERT INTO `checkdata` VALUES("45","{path:C:/xampp/htdocs/data/THSarabun/.DS_Store|hash:e2512200b92e22b6c831656d3b5315e9|size:6148}{path:C:/xampp/htdocs/data/THSarabun/THSarabunNew Bold.ttf|hash:bdd8eb542ab9aa84e5809edb230f07cc|size:366464}{path:C:/xampp/htdocs/data/THSarabun/THSarabunNew BoldItalic.ttf|hash:0b381613886ea1af245b0a8120019ecb|size:118364}{path:C:/xampp/htdocs/data/THSarabun/THSarabunNew Italic.ttf|hash:05a052030bb61432929f643579b82ce1|size:116800}{path:C:/xampp/htdocs/data/THSarabunNew/.DS_Store|hash:e2512200b92e22b6c831656d3b5315e9|size:6148}{path:C:/xampp/htdocs/data/THSarabunNew/THSarabunNew Bold.ttf|hash:bdd8eb542ab9aa84e5809edb230f07cc|size:366464}{path:C:/xampp/htdocs/data/THSarabunNew/THSarabunNew BoldItalic.ttf|hash:0b381613886ea1af245b0a8120019ecb|size:118364}{path:C:/xampp/htdocs/data/THSarabunNew/THSarabunNew Italic.ttf|hash:05a052030bb61432929f643579b82ce1|size:116800}"," C:/xampp/htdocs/data ","2019-01-31 00:01:52","B");
INSERT INTO `checkdata` VALUES("46","{path:C:xampphtdocsdata/THSarabun/.DS_Store|hash:e2512200b92e22b6c831656d3b5315e9|size:6148}{path:C:xampphtdocsdata/THSarabun/THSarabunNew Bold.ttf|hash:bdd8eb542ab9aa84e5809edb230f07cc|size:366464}{path:C:xampphtdocsdata/THSarabun/THSarabunNew BoldItalic.ttf|hash:0b381613886ea1af245b0a8120019ecb|size:118364}{path:C:xampphtdocsdata/THSarabun/THSarabunNew Italic.ttf|hash:05a052030bb61432929f643579b82ce1|size:116800}{path:C:xampphtdocsdata/THSarabunNew/.DS_Store|hash:e2512200b92e22b6c831656d3b5315e9|size:6148}{path:C:xampphtdocsdata/THSarabunNew/THSarabunNew Bold.ttf|hash:bdd8eb542ab9aa84e5809edb230f07cc|size:366464}{path:C:xampphtdocsdata/THSarabunNew/THSarabunNew BoldItalic.ttf|hash:0b381613886ea1af245b0a8120019ecb|size:118364}{path:C:xampphtdocsdata/THSarabunNew/THSarabunNew Italic.ttf|hash:05a052030bb61432929f643579b82ce1|size:116800}"," C:xampphtdocsdata ","2019-01-31 23:22:03","C");
INSERT INTO `checkdata` VALUES("47","{path:C:xampphtdocsdata/THSarabun/.DS_Store|hash:e2512200b92e22b6c831656d3b5315e9|size:6148}{path:C:xampphtdocsdata/THSarabun/THSarabunNew Bold.ttf|hash:bdd8eb5b9aa84e5809edb230f07cc|size:366464}{path:C:xampphtdocsdata/newfile|hash:e2512200b92e22b6c831656d3b5315e9|size:6148}"," C:xampphtdocsdata ","2019-01-31 23:25:16","R");



DROP TABLE IF EXISTS `filebackup`;

CREATE TABLE `filebackup` (
  `id_filebackup` int(12) NOT NULL AUTO_INCREMENT,
  `id_setting` int(12) NOT NULL,
  `file_name` text NOT NULL,
  PRIMARY KEY (`id_filebackup`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO `filebackup` VALUES("2","20","20-20-20");
INSERT INTO `filebackup` VALUES("3","20","2019-01-30-23-58-06.zip");
INSERT INTO `filebackup` VALUES("4","20","2019-01-31-00-01-51.zip");



DROP TABLE IF EXISTS `ftp`;

CREATE TABLE `ftp` (
  `id_ftp` int(11) NOT NULL AUTO_INCREMENT,
  `ftp_server` varchar(20) NOT NULL,
  `ftp_username` varchar(20) NOT NULL,
  `ftp_password` varchar(20) NOT NULL,
  PRIMARY KEY (`id_ftp`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

INSERT INTO `ftp` VALUES("30","127.0.0.1","backup","");
INSERT INTO `ftp` VALUES("32","127.0.0.1","backup","");
INSERT INTO `ftp` VALUES("33","127.0.0.1","backup","");



DROP TABLE IF EXISTS `person`;

CREATE TABLE `person` (
  `id_person` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(12) NOT NULL,
  `_password` varchar(100) NOT NULL,
  PRIMARY KEY (`id_person`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `person` VALUES("1","test","81dc9bdb52d04dc20036dbd8313ed055");



DROP TABLE IF EXISTS `setting`;

CREATE TABLE `setting` (
  `id_setting` int(15) NOT NULL AUTO_INCREMENT,
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
  `token_line` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  PRIMARY KEY (`id_setting`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;

INSERT INTO `setting` VALUES("20","NULL","C:\\xampp\\htdocs\\data","backup","N","N","N","root","","backup","localhost","12431");
INSERT INTO `setting` VALUES("44","NULL","C:\\xampp\\htdocs\\backup","backup","","","","root","","backup","localhost","123");
