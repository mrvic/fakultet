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

-- Dumping structure for table fakultet.nastavnik
CREATE TABLE IF NOT EXISTS `nastavnik` (
  `sifNastavnik` int(11) NOT NULL,
  `imeNastavnik` char(25) NOT NULL,
  `prezNastavnik` char(25) NOT NULL,
  `pbrStan` int(11) NOT NULL,
  `sifOrgjed` int(11) NOT NULL,
  `koef` decimal(3,2) NOT NULL,
  PRIMARY KEY (`sifNastavnik`),
  KEY `pbrStan` (`pbrStan`),
  KEY `sifOrgjed` (`sifOrgjed`),
  CONSTRAINT `nastavnik_ibfk_1` FOREIGN KEY (`pbrStan`) REFERENCES `mjesto` (`pbr`),
  CONSTRAINT `nastavnik_ibfk_2` FOREIGN KEY (`sifOrgjed`) REFERENCES `orgjed` (`sifOrgjed`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table fakultet.nastavnik: ~98 rows (approximately)
DELETE FROM `nastavnik`;
/*!40000 ALTER TABLE `nastavnik` DISABLE KEYS */;
INSERT INTO `nastavnik` (`sifNastavnik`, `imeNastavnik`, `prezNastavnik`, `pbrStan`, `sifOrgjed`, `koef`) VALUES
	(122, 'Tin', 'Grabovac', 49000, 100005, 5.90),
	(126, 'Zdravko', 'Budišin', 53000, 100006, 6.30),
	(130, 'Antun Ivan', 'Jonjić', 10000, 100007, 6.70),
	(134, 'Želimir', 'Somrak', 33000, 100025, 7.10),
	(138, 'David', 'Petković', 35000, 100009, 7.50),
	(142, 'Alan', 'Ostojčić', 10000, 100010, 7.90),
	(146, 'Franjo', 'Vidaković', 20000, 100011, 8.30),
	(150, 'Ana', 'Kukec', 20000, 100001, 8.70),
	(154, 'Žarko', 'Dubinko', 10000, 100002, 9.10),
	(158, 'Davorka', 'Volarić', 10000, 100003, 9.50),
	(162, 'Želimir', 'Prester', 34550, 100004, 9.90),
	(166, 'Nino', 'Lipec', 10000, 100005, 3.30),
	(171, 'Dinko', 'Žubrinić', 10000, 100006, 4.50),
	(175, 'Željko', 'Kovačević', 10000, 100007, 4.90),
	(179, 'Adrijan', 'Dugonjić', 21000, 100008, 5.30),
	(183, 'Dino', 'Parlov', 21000, 100025, 5.70),
	(187, 'Gordana', 'Hočevar', 10000, 100025, 3.10),
	(191, 'Davorka', 'Vidović', 10000, 100011, 3.50),
	(195, 'Lovre', 'Đeri', 20000, 100001, 3.90),
	(199, 'Marko', 'Pepelnjak', 10000, 100026, 4.30),
	(203, 'Ivana', 'Sokol', 10000, 100003, 4.70),
	(207, 'Mijo', 'Marović', 51000, 100004, 5.10),
	(211, 'Julija', 'Studen', 10000, 100026, 5.50),
	(215, 'Petar', 'Kruljac', 33000, 100006, 5.90),
	(220, 'Katarina', 'Glavaš', 10000, 100007, 7.10),
	(224, 'Lovro', 'Martinović', 10000, 100008, 7.50),
	(228, 'Renata', 'Santo', 22000, 100009, 7.90),
	(232, 'Dubravko', 'Josipović', 10000, 100010, 8.30),
	(236, 'Robert', 'Pavlović', 20000, 100011, 8.70),
	(240, 'Želimir', 'Bereček', 21000, 100025, 9.10),
	(244, 'Zlatko', 'Tomašek', 10000, 100002, 9.50),
	(248, 'Sandra', 'Stanojević', 31410, 100003, 9.90),
	(252, 'Edita', 'Pavić', 21265, 100025, 3.30),
	(256, 'Sanja', 'Watz', 10000, 100005, 3.70),
	(260, 'Božidar', 'Došen', 21275, 100006, 4.10),
	(264, 'Marko', 'Kovačević', 10000, 100007, 4.50),
	(269, 'Marija', 'Novokmet', 32000, 100008, 5.70),
	(273, 'Davor', 'Režan', 10000, 100009, 3.10),
	(277, 'Silvije', 'Szekeres', 21000, 100010, 3.50),
	(281, 'Dubravko', 'Kirinčić', 10000, 100011, 3.90),
	(285, 'Iva', 'Frančišković', 10000, 100001, 4.30),
	(289, 'Marina', 'Carek', 10000, 100002, 4.70),
	(293, 'Mirna', 'Rakić', 21000, 100025, 5.10),
	(297, 'Alen', 'Pisac', 10000, 100004, 5.50),
	(301, 'Stanislav', 'Krznarić', 10000, 100005, 5.90),
	(305, 'Nikolina', 'Horvat', 31000, 100006, 6.30),
	(309, 'Lovre', 'Rožić', 35000, 100007, 6.70),
	(313, 'Marko', 'Trajbar', 43000, 100008, 7.10),
	(318, 'Nino', 'Gvozdić', 10000, 100009, 8.30),
	(322, 'Ana', 'Juretić', 32000, 100025, 8.70),
	(326, 'Sunčica', 'Pleško', 34000, 100011, 9.10),
	(330, 'Vinko', 'Kecman', 10000, 100001, 9.50),
	(334, 'Sandra', 'Mihaljević', 10000, 100002, 9.90),
	(338, 'Petar', 'Petrović', 20000, 100026, 3.30),
	(342, 'Tin', 'Mandić', 10000, 100004, 3.70),
	(346, 'Anđelko', 'Puzak', 48260, 100025, 4.10),
	(350, 'Vjeran', 'Kovačić', 10000, 100006, 4.50),
	(354, 'Tamara', 'Križanić', 10000, 100007, 4.90),
	(358, 'Aljoša', 'Marijanić', 31000, 100008, 5.30),
	(362, 'Tanja', 'Crnić', 34000, 100009, 5.70),
	(367, 'Tanja', 'Petrović', 10000, 100010, 3.90),
	(371, 'Božidar', 'Mužar', 10000, 100011, 4.30),
	(375, 'Tina', 'Švaljek', 10000, 100001, 4.70),
	(379, 'Mia', 'Stojić', 21000, 100002, 5.10),
	(383, 'Mihael', 'Schildenfeld', 10000, 100003, 5.50),
	(387, 'Tina', 'Madunić', 21000, 100025, 5.90),
	(391, 'Marko', 'Hazdovac', 10000, 100005, 6.30),
	(395, 'Nino', 'Zajc', 51000, 100006, 6.70),
	(399, 'Tino', 'Zerec', 31000, 100007, 7.10),
	(403, 'Aurelija', 'Jurić', 34000, 100008, 7.50),
	(407, 'Gregor', 'Krmpotić', 32100, 100009, 7.90),
	(411, 'Kristian', 'Damjančić', 48000, 100010, 8.30),
	(416, 'Željka', 'Bello', 10000, 100026, 9.50),
	(420, 'Bernard', 'Jurjević', 33000, 100001, 9.90),
	(424, 'Blaž', 'Bartolović', 10000, 100026, 3.30),
	(428, 'Mirna', 'Ban', 10000, 100003, 3.70),
	(432, 'Bojan', 'Bračić', 10000, 100004, 4.10),
	(436, 'Karla', 'Glasnović', 31500, 100005, 4.50),
	(440, 'Miroslav', 'Pongrac', 51550, 100025, 4.90),
	(444, 'Ilija', 'Marasović', 10000, 100007, 5.30),
	(448, 'Mladen', 'Butković', 10000, 100008, 5.70),
	(452, 'Viktor', 'Kuzmić', 31000, 100009, 3.10),
	(456, 'Slavica', 'Haban', 10000, 100010, 3.50),
	(460, 'Ivana', 'Košanski', 10000, 100011, 3.90),
	(465, 'Vinko', 'Belošević', 10000, 100001, 5.10),
	(469, 'Ivana', 'Dumančić', 10000, 100002, 5.50),
	(473, 'Ive', 'Pisarović', 10000, 100003, 5.90),
	(477, 'Gordan', 'Štampar', 21000, 100004, 6.30),
	(481, 'Iva', 'Habuš', 10000, 100005, 6.70),
	(485, 'Ivo', 'Lovrić', 10000, 100025, 7.10),
	(489, 'Vladimir', 'Vinković', 10000, 100007, 7.50),
	(493, 'Vlado', 'Burela', 31000, 100025, 7.90),
	(497, 'Hrvoje', 'Mandić', 42000, 100009, 8.30),
	(501, 'Davorin', 'Rodinis', 48000, 100010, 8.70),
	(505, 'Jerko', 'Zovko', 52000, 100011, 9.10),
	(509, 'Petar', 'Posavčević', 10000, 100001, 9.50),
	(514, 'Damjan', 'Dolar', 10000, 100002, 3.70),
	(518, 'Josipa', 'Prokopić', 21000, 100026, 4.10);
/*!40000 ALTER TABLE `nastavnik` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
