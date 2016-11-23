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

-- Dumping structure for function fakultet.tran
DELIMITER //
CREATE DEFINER=`root`@`localhost` FUNCTION `tran`() RETURNS int(11)
BEGIN

SAVEPOINT ime1;
INSERT INTO `fakultet`.`mjesto1` (`pbr`, `nazMjesto`, `sifZupanija`) 
VALUES (44444, 'vvv', 4444);
INSERT INTO `fakultet`.`mjesto1` (`pbr`, `nazMjesto`, `sifZupanija`) 
VALUES (88888, 'bbb', 8888);

SAVEPOINT ime2;
INSERT INTO `fakultet`.`mjesto1` (`pbr`, `nazMjesto`, `sifZupanija`) 
VALUES (6666, 'nnn', 9999);
INSERT INTO `fakultet`.`mjesto1` (`pbr`, `nazMjesto`, `sifZupanija`) 
VALUES (77777, 'mmm', 12121);

SELECT mjesto1.nazMjesto
INTO @mojvar 
FROM mjesto1 
WHERE mjesto1.pbr=77777 LIMIT 1;


RETURN(1);

RETURN(1);
END//
DELIMITER ;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
