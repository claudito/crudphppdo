
CREATE DATABASE test;
USE test;


CREATE TABLE IF NOT EXISTS `maeart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(20) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `unidad` varchar(10) NOT NULL,
  `cantidad` decimal(15,6) NOT NULL,
  `precio` decimal(15,6) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;

--
-- Volcar la base de datos para la tabla `maeart`
--

INSERT INTO `maeart` (`codigo`, `descripcion`, `unidad`, `cantidad`, `precio`,)
 VALUES
('1234', 'LATA DE ATÚN', 'UND', '1234.000000', '12.000000'),
('123', 'LIJA', 'UND', '123.000000', '2.000000');
