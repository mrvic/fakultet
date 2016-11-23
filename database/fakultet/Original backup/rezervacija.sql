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

-- Dumping structure for table fakultet.rezervacija
CREATE TABLE IF NOT EXISTS `rezervacija` (
  `oznDvorana` char(5) NOT NULL,
  `oznVrstaDan` char(2) NOT NULL,
  `sat` smallint(6) NOT NULL,
  `sifPred` int(11) NOT NULL,
  KEY `oznDvorana` (`oznDvorana`),
  KEY `sifPred` (`sifPred`),
  CONSTRAINT `rezervacija_ibfk_1` FOREIGN KEY (`oznDvorana`) REFERENCES `dvorana` (`oznDvorana`),
  CONSTRAINT `rezervacija_ibfk_2` FOREIGN KEY (`sifPred`) REFERENCES `pred` (`sifPred`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table fakultet.rezervacija: ~89 rows (approximately)
DELETE FROM `rezervacija`;
/*!40000 ALTER TABLE `rezervacija` DISABLE KEYS */;
INSERT INTO `rezervacija` (`oznDvorana`, `oznVrstaDan`, `sat`, `sifPred`) VALUES
	('B1', 'PO', 15, 393),
	('B1', 'PO', 9, 393),
	('B2', 'PO', 14, 393),
	('B2', 'PO', 17, 393),
	('B3', 'PO', 18, 393),
	('B3', 'PO', 14, 393),
	('B1', 'SR', 15, 393),
	('B2', 'SR', 16, 393),
	('B3', 'SR', 17, 393),
	('A101', 'PO', 8, 104),
	('A101', 'PO', 5, 104),
	('A101', 'PO', 11, 104),
	('A101', 'PO', 19, 104),
	('A101', 'PO', 10, 104),
	('A101', 'UT', 20, 104),
	('A101', 'UT', 10, 104),
	('A101', 'UT', 12, 104),
	('A101', 'UT', 14, 104),
	('A102', 'CE', 13, 343),
	('A101', 'CE', 12, 343),
	('A209', 'CE', 14, 641),
	('A210', 'CE', 20, 641),
	('A209', 'PE', 14, 641),
	('A210', 'PE', 15, 641),
	('A204', 'SR', 11, 107),
	('A204', 'SR', 15, 107),
	('A205', 'SR', 18, 107),
	('A205', 'SR', 16, 107),
	('B1', 'CE', 10, 425),
	('A101', 'CE', 17, 425),
	('B1', 'PO', 10, 305),
	('B1', 'PO', 12, 304),
	('B2', 'PO', 13, 288),
	('B3', 'PO', 19, 286),
	('B3', 'PO', 15, 285),
	('B1', 'SR', 11, 284),
	('B2', 'SR', 14, 282),
	('B3', 'SR', 13, 278),
	('A101', 'PO', 14, 267),
	('A101', 'PO', 17, 266),
	('A101', 'UT', 15, 265),
	('A101', 'UT', 16, 262),
	('A101', 'UT', 6, 259),
	('A102', 'CE', 11, 258),
	('A101', 'CE', 18, 256),
	('A210', 'CE', 17, 253),
	('A204', 'SR', 17, 36),
	('A204', 'SR', 16, 39),
	('B1', 'CE', 11, 53),
	('A101', 'CE', 15, 56),
	('B2', 'PO', 15, 68),
	('B3', 'PO', 12, 70),
	('B1', 'SR', 14, 76),
	('B3', 'SR', 15, 101),
	('A101', 'PO', 9, 102),
	('A101', 'PO', 18, 103),
	('A101', 'UT', 4, 143),
	('A101', 'UT', 9, 384),
	('A101', 'CE', 13, 390),
	('B1', 'PO', 16, 370),
	('B1', 'PO', 14, 371),
	('B2', 'PO', 16, 372),
	('B1', 'PO', 11, 576),
	('B2', 'PO', 11, 589),
	('B3', 'PO', 11, 590),
	('B3', 'PO', 20, 594),
	('B2', 'SR', 12, 596),
	('A101', 'UT', 18, 607),
	('A102', 'CE', 20, 611),
	('A210', 'PE', 16, 621),
	('A204', 'SR', 18, 627),
	('A205', 'SR', 10, 643),
	('B1', 'CE', 20, 636),
	('B1', 'PO', 8, 652),
	('B2', 'PO', 9, 653),
	('B3', 'PO', 9, 654),
	('B2', 'SR', 13, 658),
	('B3', 'SR', 14, 662),
	('A101', 'PO', 15, 669),
	('A101', 'PO', 20, 301),
	('A101', 'UT', 19, 37),
	('A102', 'CE', 12, 392),
	('A204', 'SR', 7, 515),
	('A204', 'SR', 8, 99),
	('B1', 'CE', 19, 181),
	('B2', 'PO', 10, 489),
	('B1', 'SR', 17, 166),
	('B3', 'SR', 11, 650),
	('A111', 'SR', 14, 589);
/*!40000 ALTER TABLE `rezervacija` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
