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

-- Dumping structure for table fakultet.dvorana
CREATE TABLE IF NOT EXISTS `dvorana` (
  `oznDvorana` char(5) NOT NULL,
  `kapacitet` int(11) DEFAULT '40',
  PRIMARY KEY (`oznDvorana`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table fakultet.dvorana: ~26 rows (approximately)
DELETE FROM `dvorana`;
/*!40000 ALTER TABLE `dvorana` DISABLE KEYS */;
INSERT INTO `dvorana` (`oznDvorana`, `kapacitet`) VALUES
	('A001', 24),
	('A002', 10),
	('A101', 39),
	('A102', 40),
	('A104', 20),
	('A105', 16),
	('A111', 40),
	('A201', 40),
	('A202', 39),
	('A204', 20),
	('A205', 20),
	('A209', 35),
	('A210', 35),
	('A211', 39),
	('A301', 18),
	('A302', 18),
	('A304', 15),
	('A309', 22),
	('A310', 20),
	('A311', 20),
	('A312', 20),
	('B1', 64),
	('B2', 30),
	('B3', 30),
	('B4', 64),
	('M2', 14);
/*!40000 ALTER TABLE `dvorana` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
