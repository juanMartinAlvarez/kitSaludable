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
-- Dumping data for table `dietas`
--
INSERT INTO `dietas`(`id`, `nombre`, `calorias`) VALUES (1,'Dieta primavera',2000),
(2,'Carnes y lácteos',2000),
(3,'Dieta de inicio',2400),
(4,'Disociada combinada',2400),
(5,'Hipercalórica1',2800),
(6,'Hipercalórica2',2800);

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
-- Dumping data for table `ejercicios`
--
INSERT INTO `ejercicios`(`id`, `nombre`) VALUES (1,'Zancadas'),
(2,'Sentadillas Salto'),
(3,'Zancadas Lateral'),
(4,'Sentadillas Peso'),
(5,'Patada de Burro'),
(6,'Elevaciones Laterales'),
(7,'Abdonminales'),
(8,'Abdonminales Bicicleta'),
(9,'Abdonminales Diagonal'),
(10,'Plancha'),
(11,'Plancha con pierna elevada'),
(12,'Peso muerto'),
(13,'HIP con barra'),
(14,'Gemelos con prensa'),
(15,'Press inclinado'),
(16,'Flexiones con lastre'),
(17,'Press militar'),
(18,'Remo'),
(19,'Triceps Polea Alta');






-- --------------------------------------------------------
--
-- Dumping data for table `rutinas`
--
INSERT INTO `rutinas`(`id`, `nombre`,`intensidad`) VALUES (1,'Gluteos y piernas','Baja'),
(2,'Abdominales','Media'),
(3,'Pierna y Torso','Alta');


-- --------------------------------------------------------
--
-- Dumping data for table `ejerciciosRutinas`
--
INSERT INTO `ejerciciosRutinas`(`id`, `id_rutinas`,`id_ejercicios`,`repeticiones`) VALUES (1,1,1,15),
(2,1,2,25),
(3,1,3,25),
(4,1,4,20),
(5,1,5,25),
(6,1,6,25),
(7,2,7,20),
(8,2,8,20),
(9,2,9,20),
(10,2,10,20),
(11,2,11,20),
(12,3,12,40),
(13,3,2,40),
(14,3,13,36),
(15,3,14,100),
(16,3,10,60),
(17,3,11,60),
(18,3,13,90),
(19,3,16,24),
(20,3,17,36),
(21,3,18,40),
(22,3,19,40),
(23,3,7,120);