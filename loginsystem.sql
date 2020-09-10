-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'f925916e2754e5e03f75dd58a5733251');

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
(9, 'Anuj', 'Kumar', 'demouser@gmail.com', 'Test@123', '2020-04-15 18:30:00'),
(11, 'Anuj', 'Kumar', 'phpgurukulofficial@gmail.com', 'Test@123', '2020-04-15 18:30:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

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
    `fecha` DATETIME NOT NULL
  
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
-- Table structure for table `ejerciciosRutinas`
--
CREATE TABLE IF NOT EXISTS `ejerciciosRutinas`(
    `id` int(11) NOT NULL,
    `id_rutinas` int(11) NOT NULL,
    `id_ejercicios` int(11) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Indexes for table `ejerciciosRutinas`
--
ALTER TABLE `ejerciciosRutinas`
    ADD PRIMARY KEY(`id`);
--
-- AUTO_INCREMENT for table `ejerciciosRutinas`
--
ALTER TABLE `ejerciciosRutinas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

-- --------------------------------------------------------
--
-- Dumping data for table `alimentosDietas`
--

ALTER TABLE alimentosDietas ADD tipo varchar(255) NOT NULL;

ALTER TABLE ejerciciosRutinas ADD repeticiones int(11);


