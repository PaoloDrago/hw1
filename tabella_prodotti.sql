CREATE TABLE `vehicle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `descrizione` text DEFAULT NULL,
  `power` varchar(100) DEFAULT NULL,
  `autonomy` varchar(100) DEFAULT NULL,
  `acceleration` varchar(100) DEFAULT NULL,
  `traction` varchar(100) DEFAULT NULL,
  `immagine1` varchar(255) DEFAULT NULL,
  `immagine2` varchar(255) DEFAULT NULL,
  `immagine3` varchar(255) DEFAULT NULL,
  `immagine4` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci