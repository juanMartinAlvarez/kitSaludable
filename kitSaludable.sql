-- PHP Version: 7.2.19 local

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "-03:00";
--
-- Database
--
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
    `nombre` varchar(255) NOT NULL,
    `apellido` varchar(255) NOT NULL,
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
-- Table structure for table `rutina`
--
CREATE TABLE IF NOT EXISTS `rutina`(
    `id_rutina` int(11) NOT NULL,
    `id_rutinas` int(11) NOT NULL,
    `numero_de_dia` int(11)NOT NULL,
    `id_ejercicio`  int(11)NOT NULL,
    `series`  int(11)NOT NULL,
    `repeticiones` varchar (255),
    `descanso` varchar (255)    
)ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Indexes for table `rutinas`
--
ALTER TABLE `rutina`
    ADD PRIMARY KEY(`id_rutina`);
--
-- AUTO_INCREMENT for table `rutinas`
--
ALTER TABLE `rutina`
  MODIFY `id_rutina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
-- --------------------------------------------------------
--
-- Dumping data for table `rutina`
--
INSERT INTO `rutina`(`id_rutina`, `id_rutinas`,`numero_de_dia`,`id_ejercicio`,`series`,`repeticiones`,`descanso`) VALUES (1,'1','1','1','4','10-10-10-8','60s'),
(2,'1','1','2','4','10-10-10-8','60s'),
(3,'1','1','3','4','10-10-10-8','60s'),
(4,'1','1','4','4','10-10-10-8','60s'),
(5,'1','1','5','4','10-10-10-8','60s'),
(6,'1','1','6','4','10-10-10-8','60s'),
(7,'1','1','7','4','10-10-10-8','60s'),
(8,'1','2','8','4','10-10-10-8','60s'),
(9,'1','2','9','4','10-10-10-8','60s'),
(10,'1','2','10','4','10-10-10-8','60s'),
(11,'1','2','11','4','10-10-10-8','60s'),
(12,'1','2','12','4','10-10-10-8','60s'),
(13,'1','3','13','4','10-10-10-8','60s'),
(14,'1','3','14','4','10-10-10-8','60s'),
(15,'1','3','15','4','10-10-10-8','60s'),
(16,'1','3','16','4','10-10-10-8','60s'),
(17,'1','3','17','4','10-10-10-8','60s'),
(18,'1','3','18','4','10-10-10-8','60s'),
(19,'1','3','20','4','10-10-10-8','60s'),
(20,'1','4','21','4','10-10-10-8','60s'),
(21,'1','4','22','4','10-10-10-8','60s'),
(22,'1','4','23','4','10-10-10-8','60s'),
(23,'1','4','24','4','10-10-10-8','60s'),
(24,'1','4','25','4','10-10-10-8','60s'),
(25,'1','4','26','4','40"','15s'),
(26,'1','4','27','4','25-25-20-20','15s'),
(27,'1','4','28','4','30-30','15s'),
(28,'1','4','29','4','40"','15s');

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
(12,'Extensiones cuádriceps','Piernas'),
(13,'Press banca','Pecho'),
(14,'Press inclinado mancuerna','Pecho'),
(15,'Aperturas','Pecho'),
(16,'Press declinado mancuerna','Pecho'),
(17,'Press francés','Triceps'),
(18,'Extensiones de triceps','Triceps'),
(19,'Triceps Polea Alta','Triceps'),
(20,'Triceps Polea Baja','Triceps'),
(21,'Press Arnold','Hombros'),
(22,'Press militar','Hombros'),
(23,'Pajaros','Hombros'),
(24,'Elevaciones frontales','Hombros'),
(25,'Elevacion barra mentón','Trapecio'),
(26,'Plancha lateral','Abdominales'),
(27,'Crunch frontal piernas elevadas','Abdominales'),
(28,'Tocar manos talones','Abdominales'),
(29,'Elevación piernas','Abdominales'),
(30,'Abdonminales','Abdominales');

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
-- Table structure for table `alimentosDietas`
--
CREATE TABLE IF NOT EXISTS `alimentosDietas`(
    `id` int(11) NOT NULL,
    `id_dietas` int(11) NOT NULL,
    `id_alimentos` int(11) NOT NULL
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