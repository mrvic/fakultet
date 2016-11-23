-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.10-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table fakultet.zupanija
CREATE TABLE IF NOT EXISTS `zupanija` (
  `sifZupanija` smallint(6) NOT NULL,
  `nazZupanija` char(40) NOT NULL,
  PRIMARY KEY (`sifZupanija`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table fakultet.zupanija: ~22 rows (approximately)
DELETE FROM `zupanija`;
/*!40000 ALTER TABLE `zupanija` DISABLE KEYS */;
INSERT INTO `zupanija` (`sifZupanija`, `nazZupanija`) VALUES
	(0, 'Nepoznata županija'),
	(1, 'Zagrebačka'),
	(2, 'Krapinsko-zagorska'),
	(3, 'Sisačko-moslavačka'),
	(4, 'Karlovačka'),
	(5, 'Varaždinska'),
	(6, 'Koprivničko-križevačka'),
	(7, 'Bjelovarsko-bilogorska'),
	(8, 'Primorsko-goranska'),
	(9, 'Ličko-senjska'),
	(10, 'Virovitičko-podravska'),
	(11, 'Požeško-slavonska'),
	(12, 'Brodsko-posavska'),
	(13, 'Zadarska'),
	(14, 'Osječko-baranjska'),
	(15, 'Šibensko-kninska'),
	(16, 'Vukovarsko-srijemska'),
	(17, 'Splitsko-dalmatinska'),
	(18, 'Istarska'),
	(19, 'Dubrovačko-neretvanska'),
	(20, 'Međimurska'),
	(21, 'Grad Zagreb');
/*!40000 ALTER TABLE `zupanija` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
