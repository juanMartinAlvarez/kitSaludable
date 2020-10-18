-- PHP Version: 7.2.19 local

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "-03:00";
-- 
-- Database
-- 
CREATE Database IF NOT EXISTS KitSaludable;
-- --------------------------------------------------------
-- 
-- Table structure for table `users`
-- 

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(300) DEFAULT NULL,
  `posting_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `users`
-- 

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `posting_date`) VALUES
(1, 'Martin', 'Alvarez', 'martin@alvarez.com', '2020', NULL),
(2, 'Fernando', 'Lamas', 'fernando@lamas.com', '2020', NULL),
(3, 'Lucas', 'Caruso', 'lucas@caruso.com', '2020', NULL);

-- 
-- Indexes for table `users`
-- 
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

-- 
-- AUTO_INCREMENT for table `users`
-- 
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

-- --------------------------------------------------------
-- 
-- Table structure for table `personas`
-- 
CREATE TABLE IF NOT EXISTS `personas` (
    `id` int(11) NOT NULL,
    `edad` int NOT NULL,
    `peso` int(20) NOT NULL,
    `altura` int(20) NOT NULL,
    `id_alimentosDietas` int(11),
    `id_ejerciciosRutinas`int(11),
    `id_users`int(11) NOT NULL,
    `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- 
-- Indexes for table `personas`
-- 
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id`);
-- 
-- AUTO_INCREMENT for table `personas`
-- 
ALTER TABLE `personas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

-- --------------------------------------------------------
-- 
-- Table structure for table `rutinas`
-- 
CREATE TABLE IF NOT EXISTS `rutinas`(
    `id` int(11) NOT NULL,
    `nombre` varchar(255),
    `intensidad` varchar (255),
    `url` varchar (255)    
)ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- 
-- Indexes for table `rutinas`
-- 
ALTER TABLE `rutinas`
    ADD PRIMARY KEY(`id`);
-- 
-- AUTO_INCREMENT for table `rutinas`
-- 
ALTER TABLE `rutinas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

-- --------------------------------------------------------
-- 
-- Dumping data for table `rutinas`
-- 
INSERT INTO `rutinas`(`id`, `nombre`,`intensidad`,`url`) VALUES (1,'Full body - Easy','leve','aerobico'),
(2,'Weider - Medium','Media','weider1'),
(3,'Weider - Hard','Alta','weider2');

-- --------------------------------------------------------
-- 
-- Table structure for table `listadejercicios`
-- 
CREATE TABLE IF NOT EXISTS `listadejercicios`(
    `id` int(11) NOT NULL,
    `id_rutinas` int(11) NOT NULL,
    `numero_de_dia` int(11)NOT NULL,
    `id_ejercicio`  int(11)NOT NULL,
    `series`  int(11)NOT NULL,
    `repeticiones` varchar (255),
    `descanso` varchar (255)    
)ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- 
-- Indexes for table `listadejercicios`
-- 
ALTER TABLE `listadejercicios`
    ADD PRIMARY KEY(`id`);
-- 
-- AUTO_INCREMENT for table `listadejercicios`
-- 
ALTER TABLE `listadejercicios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
-- --------------------------------------------------------
-- 
-- Dumping data for table `listadejercicios`
-- 
INSERT INTO `listadejercicios`(`id`, `id_rutinas`,`numero_de_dia`,`id_ejercicio`,`series`,`repeticiones`,`descanso`) VALUES (1,'2','1','1','4','10-10-10-8','60s'),
(2,'2','1','2','4','10-10-10-8','60s'),
(3,'2','1','3','4','10-10-10-8','60s'),
(4,'2','1','4','4','10-10-10-8','60s'),
(5,'2','1','5','4','10-10-10-8','60s'),
(6,'2','1','6','4','10-10-10-8','60s'),
(7,'2','1','7','4','10-10-10-8','60s'),
(8,'2','2','8','4','10-10-10-8','60s'),
(9,'2','2','9','4','10-10-10-8','60s'),
(10,'2','2','10','4','10-10-10-8','60s'),
(11,'2','2','11','4','10-10-10-8','60s'),
(12,'2','2','12','4','10-10-10-8','60s'),
(13,'2','3','13','4','10-10-10-8','60s'),
(14,'2','3','14','4','10-10-10-8','60s'),
(15,'2','3','15','4','10-10-10-8','60s'),
(16,'2','3','16','4','10-10-10-8','60s'),
(17,'2','3','17','4','10-10-10-8','60s'),
(18,'2','3','18','4','10-10-10-8','60s'),
(19,'2','3','20','4','10-10-10-8','60s'),
(20,'2','4','21','4','10-10-10-8','60s'),
(21,'2','4','22','4','10-10-10-8','60s'),
(22,'2','4','23','4','10-10-10-8','60s'),
(23,'2','4','24','4','10-10-10-8','60s'),
(24,'2','4','25','4','10-10-10-8','60s'),
(25,'2','4','26','4','40"','15s'),
(26,'2','4','27','4','25-25-20-20','15s'),
(27,'2','4','28','4','30-30','15s'),
(28,'2','4','29','4','40"','15s'),
(29,'3','1','13','4','10-10-10-8','45s'),
(30,'3','1','14','4','10-10-10-8','45s'),
(31,'3','1','15','4','10-10-10-8','45s'),
(32,'3','1','16','4','10-10-10-8','45s'),
(33,'3','1','26','4','40"','15s'),
(34,'3','2','1','4','10-10-10-8','45s'),
(35,'3','2','2','4','10-10-10-8','45s'),
(36,'3','2','3','4','10-10-10-8','45s'),
(37,'3','2','4','4','10-10-10-8','45s'),
(38,'3','2','27','4','25-25-20-20','15s'),
(39,'3','3','21','4','10-10-10-8','45s'),
(40,'3','3','22','4','10-10-10-8','45s'),
(41,'3','3','23','4','10-10-10-8','45s'),
(42,'3','3','24','4','10-10-10-8','45s'),
(43,'3','3','28','4','30-30','15s'),
(44,'3','4','8','4','10-10-10-8','45s'),
(45,'3','4','9','4','10-10-10-8','45s'),
(46,'3','4','10','4','10-10-10-8','45s'),
(47,'3','4','11','4','10-10-10-8','45s'),
(48,'3','4','12','4','10-10-10-8','45s'),
(49,'3','4','29','4','40"','15s'),
(50,'3','5','5','4','10-10-10-8','45s'),
(51,'3','5','6','4','10-10-10-8','45s'),
(52,'3','5','7','4','10-10-10-8','45s'),
(53,'3','5','17','4','10-10-10-8','45s'),
(54,'3','5','18','4','10-10-10-8','45s'),
(55,'3','5','19','4','10-10-10-8','45s'),
(56,'3','5','20','4','10-10-10-8','45s'),
(57,'3','5','30','4','40"','15s'),
(58,'1','1','8','4','8','30s'),
(59,'1','1','13','4','8','30s'),
(60,'1','1','3','3','10','30s'),
(61,'1','1','10','3','12','30s'),
(62,'1','1','11','2','10','30s'),
(63,'1','2','14','3','5','30s'),
(64,'1','2','12','2','12','30s'),
(65,'1','2','22','4','8','30s'),
(66,'1','2','4','4','10','30s'),
(67,'1','2','5','3','10','30s'),
(68,'1','3','9','4','8','30s'),
(69,'1','3','15','3','6','30s'),
(70,'1','3','2','3','8','30s'),
(71,'1','3','29','4','10','10s'),
(72,'1','3','18','3','8','30s');

-- --------------------------------------------------------
-- 
-- Table structure for table `ejercicio`
-- 
CREATE TABLE IF NOT EXISTS `ejercicio`(
    `id` int(11) NOT NULL,
    `nombre` varchar(255),
    `musculo` varchar(255)
)ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- 
-- Indexes for table `ejercicio`
-- 
ALTER TABLE `ejercicio`
    ADD PRIMARY KEY(`id`);
-- 
-- AUTO_INCREMENT for table `ejercicios`
-- 
ALTER TABLE `ejercicio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
  -- --------------------------------------------------------
-- 
-- Dumping data for table `ejercicio`
-- 
INSERT INTO `ejercicio`(`id`, `nombre`,`musculo`) VALUES (1,'Dominadas','Espalda'),
(2,'Jalones con triangulo','Espalda'),
(3,'Remo con barra','Espalda'),
(4,'Peso muerto','Espalda'),
(5,'Curl biceps','Biceps'),
(6,'Martillo alterado','Biceps'),
(7,'Concentrado','Biceps'),
(8,'Sentadillas','Piernas'),
(9,'Prensa','Piernas'),
(10,'Gemelos con prensa','Piernas'),
(11,'Curl femoral','Piernas'),
(12,'Extensiones cuadriceps','Piernas'),
(13,'Press banca','Pecho'),
(14,'Press inclinado mancuerna','Pecho'),
(15,'Aperturas','Pecho'),
(16,'Press declinado mancuerna','Pecho'),
(17,'Press frances','Triceps'),
(18,'Extensiones de triceps','Triceps'),
(19,'Triceps Polea Alta','Triceps'),
(20,'Triceps Polea Baja','Triceps'),
(21,'Press Arnold','Hombros'),
(22,'Press militar','Hombros'),
(23,'Pajaros','Hombros'),
(24,'Elevaciones frontales','Hombros'),
(25,'Elevacion barra menton','Trapecio'),
(26,'Plancha lateral','Abdominales'),
(27,'Crunch frontal piernas elevadas','Abdominales'),
(28,'Tocar manos talones','Abdominales'),
(29,'Elevacion piernas','Abdominales'),
(30,'Abdonminales','Abdominales');


-- --------------------------------------------------------
-- 
-- Table structure for table `alimentos`
-- 
CREATE TABLE IF NOT EXISTS `alimentos`(
    `id` int(11) NOT NULL,
    `nombre` varchar(255) NOT NULL, 
    `calorias` int(20) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- 
-- Indexes for table `alimentos`
-- 
ALTER TABLE `alimentos`
    ADD PRIMARY KEY(`id`);
-- 
-- AUTO_INCREMENT for table `alimentos`
-- 
ALTER TABLE `alimentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

-- --------------------------------------------------------
-- 
-- Dumping data for table `alimentos`
-- 
INSERT INTO `alimentos`(`id`, `nombre`, `calorias` ) VALUES (1,'Yogurt con cereales',62),
(2,'Galletitas integrales',200),
(3,'Infucion',4),
(4,'Fruta',50),
(6,'Berenjena',24),
(7,'Brocoli',35),
(8,'Hongos Frescos',22),
(9,'Calabaza',19),
(10,'Carne Blanca',75),
(11,'Carne Roja',94),
(12,'Pescado',100),
(13,'Queso',250),
(14,'Arroz integral',130),
(15,'Huevo',155),
(16,'Leche',47),
(17,'Ricota',174),
(18,'Postre Diet',99),
(19,'Caldo',267),
(20,'Barra de ceral',350),
(21,'Verduras Cocidas',36),
(22,'Gelatina',61),
(23,'Jamon',145);

-- --------------------------------------------------------
-- 
-- Table structure for table `alimentosDietas`
-- 
CREATE TABLE IF NOT EXISTS `alimentosDietas`(
    `id` int(11) NOT NULL,
    `id_dietas` int(11) NOT NULL,
    `id_alimentos` int(11) NOT NULL,
    `tipo` varchar(255) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- 
-- Indexes for table `alimentosDietas`
-- 
ALTER TABLE `alimentosDietas`
    ADD PRIMARY KEY(`id`);
-- 
-- AUTO_INCREMENT for table `alimentosDietas`
-- 
ALTER TABLE `alimentosDietas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
  
-- --------------------------------------------------------
-- 
-- Dumping data for table `alimentosDietas`
-- 
INSERT INTO `alimentosDietas` (`id`, `id_dietas`, `id_alimentos`,`tipo`) VALUES (1,1,1,'Desayuno'),
(2,1,1,'Merienda'),
(3,1,2,'Desayuno'),
(4,1,2,'Merienda'),
(5,1,3,'Desayuno'),
(6,1,3,'Merienda'),
(7,1,4,'Almuerzo'),
(8,1,4,'Cena'),
(9,1,6,'Almuerzo'),
(10,1,7,'Cena'),
(11,1,8,'Almuerzo'),
(12,1,8,'Cena'),
(13,1,9,'Almuerzo'),
(14,1,9,'Cena'),
(15,1,10,'Almuerzo'),
(16,1,10,'Cena'),
(18,1,12,'Almuerzo'),
(17,1,12,'Cena'),
(81,1,13,'Almuerzo'),
(19,1,14,'Almuerzo'),
(20,1,14,'Cena'),
(21,1,15,'Almuerzo'),
(22,1,15,'Cena'),
(23,2,3,'Desayuno'),
(24,2,3,'Merienda'),
(25,2,2,'Desayuno'),
(26,2,2,'Merienda'),
(27,2,16,'Colacion'),
(28,2,1,'Colacion'),
(29,2,13,'Colacion'),
(30,2,17,'Colacion'),
(31,2,18,'Colacion'),
(32,2,10,'Almuerzo'),
(33,2,10,'Cena'),
(34,2,11,'Almuerzo'),
(35,2,11,'Cena'),
(36,2,12,'Almuerzo'),
(37,2,12,'Cena'),
(38,3,2,'Desayuno'),
(39,3,2,'Merienda'),
(40,3,3,'Desayuno'),
(41,3,3,'Merienda'),
(42,3,1,'Colacion'),
(43,3,4,'Colacion'),
(44,3,4,'Cena'),
(45,3,20,'Colacion'),
(46,3,19,'Almuerzo'),
(47,3,19,'Cena'),
(48,3,11,'Almuerzo'),
(49,3,21,'Almuerzo'),
(50,3,21,'Cena'),
(51,3,2,'Desayuno'),
(52,3,2,'Merienda'),
(53,3,4,'Desayuno'),
(54,3,4,'Merienda'),
(55,3,19,'Colacion'),
(56,3,1,'Colacion'),
(57,3,22,'Colacion'),
(58,3,6,'Almuerzo'),
(59,3,6,'Cena'),
(60,3,7,'Almuerzo'),
(61,3,7,'Cena'),
(62,3,8,'Almuerzo'),
(63,3,8,'Cena'),
(64,3,9,'Almuerzo'),
(65,3,9,'Cena'),
(66,3,4,'Almuerzo'),
(67,3,4,'Cena'),
(68,3,13,'Almuerzo'),
(69,3,13,'Cena'),
(70,3,15,'Almuerzo'),
(71,3,15,'Cena'),
(72,3,23,'Almuerzo'),
(73,3,23,'Cena'),
(74,3,10,'Almuerzo'),
(75,3,10,'Cena'),
(76,3,11,'Almuerzo'),
(77,3,11,'Cena'),
(78,3,12,'Almuerzo'),
(79,3,12,'Cena'),
(80,3,18,'Cena');
-- --------------------------------------------------------
-- 
-- Table structure for table `dietas`
-- 
CREATE TABLE IF NOT EXISTS `dietas`(
    `id` int(11) NOT NULL,
    `nombre` varchar(255) NOT NULL, 
    `calorias` varchar(255) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- 
-- Indexes for table `dietas`
-- 
ALTER TABLE `dietas`
  ADD PRIMARY KEY(`id`);
-- 
-- AUTO_INCREMENT for table `dietas`
-- 
ALTER TABLE `dietas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
  
-- --------------------------------------------------------
-- 
-- Dumping data for table `dietas`
-- 
INSERT INTO `dietas`(`id`, `nombre`, `calorias`) VALUES (1,'Dieta primavera',2000),
(2,'Carnes y lacteos',2000),
(3,'Dieta de inicio',2400),

-- 
-- ADD FKs
-- 
ALTER TABLE `alimentosdietas` ADD INDEX(`id_dietas`);
ALTER TABLE `alimentosdietas` ADD INDEX(`id_alimentos`);
alter table `alimentosdietas` ADD FOREIGN KEY(id_dietas) REFERENCES dietas(id) ON DELETE NO ACTION ON UPDATE NO ACTION; 
alter table `alimentosdietas` ADD FOREIGN KEY(id_alimentos) REFERENCES alimentos(id) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `listadejercicios` ADD INDEX(`id_ejercicio`);
ALTER TABLE `listadejercicios` ADD INDEX(`id_rutinas`);
alter table `listadejercicios` ADD FOREIGN KEY(id_ejercicio) REFERENCES ejercicio(id) ON DELETE NO ACTION ON UPDATE NO ACTION;
alter table `listadejercicios` ADD FOREIGN KEY(id_rutinas) REFERENCES rutinas(id) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `personas` ADD INDEX(`id_alimentosDietas`);
ALTER TABLE `personas` ADD INDEX(`id_ejerciciosRutinas`);
ALTER TABLE `personas` ADD INDEX(`id_users`);
alter table `personas` ADD FOREIGN KEY(id_alimentosDietas) REFERENCES dietas(id) ON DELETE NO ACTION ON UPDATE NO ACTION;
alter table `personas` ADD FOREIGN KEY(id_ejerciciosRutinas) REFERENCES ejercicio(id) ON DELETE NO ACTION ON UPDATE NO ACTION;
alter table `personas` ADD FOREIGN KEY(id_users) REFERENCES users(id) ON DELETE NO ACTION ON UPDATE NO ACTION;