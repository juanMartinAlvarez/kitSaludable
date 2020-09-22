USE loginsystem;
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
-- Indexes for table `personas`
-- Config Id Pesonas.
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
--
-- Table structure for table `rutinas`
--
CREATE TABLE IF NOT EXISTS `rutinas`(
    `id` int(11) NOT NULL,
    `nombre` varchar(255),
    `intensidad` varchar (255)
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
-- Table structure for table `ejercicios`
--
CREATE TABLE IF NOT EXISTS `ejercicios`(
    `id` int(11) NOT NULL,
    `nombre` varchar(255)
)ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Indexes for table `ejercicios`
--
ALTER TABLE `ejercicios`
    ADD PRIMARY KEY(`id`);
--
-- AUTO_INCREMENT for table `ejercicios`
--
ALTER TABLE `ejercicios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

-- --------------------------------------------------------
--
-- Table structure for table `usejerciciosRutinasers`
--
CREATE TABLE IF NOT EXISTS `ejerciciosRutinas`(
    `id` int(11) NOT NULL,
    `id_rutinas` int(11) NOT NULL,
    `id_ejercicios` int(11) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Indexes for table `usejerciciosRutinasers`
--
ALTER TABLE `ejerciciosRutinas`
    ADD PRIMARY KEY(`id`);
--
-- AUTO_INCREMENT for table `usejerciciosRutinasers`
--
ALTER TABLE `ejerciciosRutinas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
