-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 02-08-2021 a las 23:06:28
-- Versión del servidor: 5.7.23-23
-- Versión de PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `globexco_PaginaWeb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Detalles_de_Examen`
--

CREATE TABLE `Detalles_de_Examen` (
  `id_detalle_examen` int(11) NOT NULL,
  `nota` float DEFAULT NULL,
  `fecha_realizado` date NOT NULL,
  `acertadas` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_examen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Detalles_de_Examen`
--

INSERT INTO `Detalles_de_Examen` (`id_detalle_examen`, `nota`, `fecha_realizado`, `acertadas`, `id_usuario`, `id_examen`) VALUES
(1, 4.5, '2021-04-14', 10, 2, 1),
(2, 3.9, '2021-04-06', 6, 1, 1),
(3, 4.2, '2021-04-11', 7, 3, 1),
(4, 3.8, '2021-01-04', 10, 4, 1),
(5, 4.7, '2019-11-12', 9, 5, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Encuestas`
--

CREATE TABLE `Encuestas` (
  `id_encuesta` int(11) NOT NULL,
  `opinion` longtext COLLATE utf8_unicode_ci,
  `mejoras` longtext COLLATE utf8_unicode_ci,
  `puntuacion` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fecha_encuesta` date DEFAULT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Encuestas`
--

INSERT INTO `Encuestas` (`id_encuesta`, `opinion`, `mejoras`, `puntuacion`, `fecha_encuesta`, `id_usuario`) VALUES
(1, 'Disfrutaba muchísimo del juego, pero de un día para otro comenzó a mandar un mensaje de conexión inestable, que la actualización no podía ser descargada', 'mejorar la conexion inestable', '4', '2021-04-06', 1),
(2, 'el juego tiene potencial pero deberian mejorar la conexion', 'deberian mejorar las plataformas', '50', '2021-04-14', 2),
(3, 'me gusta el juego y la actualizacion', 'ninguna', '100', '2021-04-07', 3),
(4, 'ninguna', 'deberian mejorar el marketing es mala publicidad', '40', '2021-04-04', 4),
(5, 'podrian poner mas diversion en el juego', 'podrian mejorarlo con mas preguntas abiertas', '45', '2020-12-15', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Examenes`
--

CREATE TABLE `Examenes` (
  `id_examen` int(11) NOT NULL,
  `id_dificultad` int(11) DEFAULT NULL,
  `nombre_examen` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Numero_preguntas` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Examenes`
--

INSERT INTO `Examenes` (`id_examen`, `id_dificultad`, `nombre_examen`, `Numero_preguntas`) VALUES
(1, 2, 'Legislacion en Informatica', '12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Navegantes`
--

CREATE TABLE `Navegantes` (
  `navegante` varchar(60) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Navegantes`
--

INSERT INTO `Navegantes` (`navegante`) VALUES
('eduardo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Personas`
--

CREATE TABLE `Personas` (
  `id_persona` int(11) NOT NULL,
  `primer_nombre` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `segundo_nombre` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `primer_apellido` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `segundo_apellido` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `celular` varchar(14) COLLATE utf8_unicode_ci DEFAULT NULL,
  `correo` varchar(170) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Personas`
--

INSERT INTO `Personas` (`id_persona`, `primer_nombre`, `segundo_nombre`, `primer_apellido`, `segundo_apellido`, `celular`, `correo`) VALUES
(2, 'Enrique', 'Manuel', 'Velasquez', 'Gonzales', '3157689654', 'enriquem2021@gmail.com'),
(3, 'Sebastian', 'Betancourt', 'Sosa', 'Martinez', '3175896352', 'sebas4043@hotmail.com'),
(4, 'Mariana', NULL, 'Gonzales', 'Martinez', '3012569865', 'mari98@gmail.com'),
(5, 'Sofia', 'Laura', 'Rodriguez', 'Jimenez', '320 4139643', 'sofi_9093@hotmail.com'),
(6, 'David', 'Jose', 'Martinez', NULL, '3014320989', 'david_cas83@yahoo.es'),
(7, 'gato', 'con', 'botas', 'negras', '3145678890', 'gato_tom94@hotmail.com'),
(25, 'fdfdfd', 'fdfdfd', 'fdfd', 'fdfdfd', '3124433443', 'michi@hotmail.com'),
(26, 'dfdfd', 'fdfd', 'fdf', 'dffd', '3122332348', 'paloma2919@hotmail.com'),
(27, 'fdxdxd', 'sdsdds', 'dsdssd', 'dsds', '3124445566', 'laverguenza2020@hotmail.com'),
(28, 'dfdsdssd', 'dssddsds', 'dsdssd', 'fdfdfd', '3125645564', 'secili99@hotmail.com'),
(29, 'ewewewew', 'ewewew', 'ewewew', 'ewewew', '3125443433', 'jaramillo2020@hotmail.com'),
(38, 'pepe', NULL, 'fdsfdssdf', 'sfdfsdsfdsfd', '3123223428', 'polaca@hotmail.com'),
(39, 'pepe', '', 'fdsfdssdf', 'sfdfsdsfdsfd', '3123223428', 'mario64@hotmail.com'),
(40, 'pepe', '', 'fdsfdssdf', 'sfdfsdsfdsfd', '3123223428', 'la_rebelde@hotmail.com'),
(41, 'tgrgfdgf', 'gfgf', 'gfgfgf', 'gfgfdfd', '3124334545', 'jbalvin@hotmail.com'),
(42, 'fdfdfdfdfd', 'fdfdfd', 'fdfdfd', 'fdfdfd', '3143232323', 'leonardo_76@hotmail.com'),
(43, 'fdfdfdfdfd', 'fdfdfd', 'fdfdfd', 'fdfdfd', '3143232323', 'dontato@hotmail.com'),
(44, 'Alvaro', 'dsdssd', 'Uribe', 'dssdds', '3124445555', 'jennifer@hotmail.com'),
(45, 'Leonardo', 'reerer', 'Di Caprio', 'erererer', '3122234455', 'cerveza2010@hotmail.com'),
(46, 'roberto', 'sdsdsd', 'sdsdsd', 'sdsdsd', '3122893334', 'ratica24@hotmail.com'),
(47, 'dfsds', 'sdffds', 'fdsfds', 'sdfsfdsdf', '3123321323', 'pimpollititico@hotmail.com'),
(50, 'dssddsds', '', 'sddsdsdsds', '', '3122893334', 'paloma21@hotmail.com'),
(51, 'dsxvcds', 'sdxvcsdz', 'sdsddssd', 'sddssdsd', '312234535', 'mamarrones20293@hotmail.com'),
(52, 'pescadito', '', 'redfrfsd', 'fuyjyujjnyu', '3124567766', 'chicolisto@hotmail.com'),
(53, 'Pedro', '', 'Ramirez', '', '3129076633', 'loschicalos2929293@gmail.com'),
(54, 'Andres', '', 'Arevalo', '', '312569874', 'pipear07@hotmail.com'),
(55, 'Sandra', '', 'Arevalo', '', '3017165122', 'afelipearevalo@ucundinamarca.edu.co');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Preguntas`
--

CREATE TABLE `Preguntas` (
  `id_pregunta` int(11) NOT NULL,
  `enunciado` longtext COLLATE utf8_unicode_ci,
  `valor` varchar(4) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_examen` int(11) NOT NULL,
  `id_respuesta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Preguntas`
--

INSERT INTO `Preguntas` (`id_pregunta`, `enunciado`, `valor`, `id_examen`, `id_respuesta`) VALUES
(1, 'El capitulo 1 que contiene los articulos Artículo 269A de Acceso abusivo a un sistema informático, Artículo 269B de obstaculización ilegítima de sistema informático o red de telecomunicación Artículo 269F de violación de datos personales entre otros, hace referencia a:', '10', 1, 1),
(2, 'La ley 1273 del 2009 habla sobre:', '10', 1, 2),
(3, 'En el capitulo 2 donde habla de los atentados informáticos y otras infracciones en el articulo 269J el cual habla de la persona que con ánimo de lucro y valiéndose de alguna manipulación informática o artificio semejante, consiga la transferencia no consentida de cualquier activo en perjuicio de un tercero. Habla de :', '10', 1, 3),
(4, 'el articulo 269E habla sobre El que, sin estar facultado para ello, produzca, trafique, adquiera, distribuya, venda, envíe, introduzca o extraiga del territorio nacional software malicioso u otros programas de computación de efectos dañinos. Hace referencia a:', '10', 1, 4),
(5, 'La página web de un reconocido partido político ha sido víctima de ‘hackers’, que han “vandalizado” el contenido gráfico de la página. Identifique de acuerdo ala ley 1273 de 2009 la correcta tipificación del delito cometido.', '10', 1, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Respuestas`
--

CREATE TABLE `Respuestas` (
  `id_respuesta` int(11) NOT NULL,
  `respuesta_A` longtext COLLATE utf8_unicode_ci,
  `respuesta_B` longtext COLLATE utf8_unicode_ci NOT NULL,
  `respuesta_C` longtext COLLATE utf8_unicode_ci NOT NULL,
  `respuesta_D` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Respuestas`
--

INSERT INTO `Respuestas` (`id_respuesta`, `respuesta_A`, `respuesta_B`, `respuesta_C`, `respuesta_D`) VALUES
(1, 'Los atentados que producen daños fisicos en los servidores web.', '	Los atentados contra la confidencialidad, la integridad y la disponibilidad de los datos y de los sistemas informáticos.', 'Los atentados informáticos y otras infracciones.', '	Los atentados informaticos en comunicaciones.'),
(2, 'Derechos de autor', 'Comercio electronico', 'Proteccion de informacion y datos', '	Delitos informaticos'),
(3, 'Transferencia no consentida de activos', 'Hurto por medios informáticos y semejantes', '	Circustancias de mayor punibilidad', '	Obstaculización ilegítima de sistema informático o red de telecomunicación'),
(4, 'Daño informatico', 'Suplantación de sitios web para capturar datos personales', 'Interceptación de datos informático', 'Uso de software malicioso'),
(5, 'Uso de software malicioso.', 'Violación de datos personales.', 'Acceso abusivo a un sistema informático.', 'Daño informático.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tipos_de_Dificultad`
--

CREATE TABLE `Tipos_de_Dificultad` (
  `id_dificultad` int(11) NOT NULL,
  `nombre_dificultad` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Tipos_de_Dificultad`
--

INSERT INTO `Tipos_de_Dificultad` (`id_dificultad`, `nombre_dificultad`) VALUES
(1, 'Baja'),
(2, 'Media'),
(3, 'Alta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tipos_de_Usuarios`
--

CREATE TABLE `Tipos_de_Usuarios` (
  `id_tipo_usuario` int(11) NOT NULL,
  `nombre_tipo` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Tipos_de_Usuarios`
--

INSERT INTO `Tipos_de_Usuarios` (`id_tipo_usuario`, `nombre_tipo`) VALUES
(3, 'Usuario'),
(4, 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuarios`
--

CREATE TABLE `Usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `clave` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `codigo_autenticacion` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `Personas_id_persona` int(11) NOT NULL,
  `Tipos_de_Usuarios_id_tipo_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Usuarios`
--

INSERT INTO `Usuarios` (`id_usuario`, `nombre_usuario`, `clave`, `activo`, `codigo_autenticacion`, `Personas_id_persona`, `Tipos_de_Usuarios_id_tipo_usuario`) VALUES
(1, 'La_canela', '8cb2237d0679ca88db6464eac60da96345513964', 1, '$1$IYO4BOIF$gIwYsfZUcrnBRvJr0k9v61', 2, 3),
(2, 'elpaspi', '8cb2237d0679ca88db6464eac60da96345513964', 1, '4$1$IYO4BOIF$fI1YsfZUcrnBRvJr0k9v61', 3, 3),
(3, 'rootewrreaes', 'dc76e9f0c0006e8f919e0c515c66dbba3982f785', 1, '$1$IYO4BOIF$fI1YsfZUcrnBRvJr0k9v61', 4, 4),
(4, 'pipear07', '415fe6be8b99e91d8faf8c5ddc2ca86a6ff46514', 1, '$1$IYO4BOIF$fI1YsfZUcrnBRvJr0k9v61', 5, 3),
(5, 'fddfdffd', 'f3bb9560a2532e0409bc8ff3fb0572b3537ca0ec', 1, '$1$IYO4BOIF$fI1YsfZUcrnBRvJr0k9v61', 6, 3),
(43, 'arles', 'papitas', 1, '$1$IYO4BOIF$fI1YsfZUcrnBRvJr0k9v61', 25, 3),
(44, 'yuyuyuyyuuyyu', 'e1266a157dfffa338a43520cec7b90c2', 1, '$1$IYO4BOIF$fI1YsfZUcrnBRvJr0k9v61', 26, 3),
(46, 'beta', '$2y$10$HtzEn0HpLsICnZ8cmhUAr.wgYELQqcxWLdIlX8X/9Spj1aQ9McRZ2', 1, '$1$IYO4BOIF$fI1YsfZUcrnBRvJr0k9v61', 28, 3),
(64, 'roberto', '$2y$10$ZAWMWq54EcBgr540kI.Boe9.J7mBHbOzgAmZncYlrBff2dWh.p8s2', 1, '$1$XxgvvYEI$wUW92zv1BJ9wvVnXhEroh0', 46, 3),
(65, 'Papita1', 'fdfffdfdfd', 1, '$1$IYO4BOIF$fI1YsfZUcrnBRvJr0k9v61', 6, 3),
(66, 'misael', '$2y$10$ZjrBL3EpQIKic626lDuYMe2YwTBPerBnOqECMztsuOz4SUV/IJHuW', 1, '$1$xg3WzFHs$ntEIPAdShpHwe3R0/Mhlm/', 47, 3),
(71, 'bagre', '$2y$10$9/vi.t3E5l24AMGiCQQDCeg6xANO2Cq0QH0wouD2gXZWXyS4itMpC', 1, '$1$IYO4BOIF$fI1YsfZUcrnBRvJr0k9v61', 52, 3),
(72, 'sparkie', '$2y$10$eITNCf9TRklem7KtT6SHlO6Oy4VoH7o7.WjuNO/nK16U4eybiK4jW', 1, '$1$NtTBGG7r$fxTKq40OOi.DrvH8Q3sU31', 53, 3),
(73, 'profe', '$2y$10$J6IntWRg4WmzimW.SyUAK.93sg9lNpihbhUBBfbdmLbtiCSLWCtRO', 1, '$1$EeIKFEEK$6w87gsHXJhTUoP9XijeF30', 54, 3),
(74, 'profe2', '$2y$10$7QL21bHR4so2Fz88VEpLs.oboe6PiV99xI.rHGwDSha.qoHBe0pTK', 1, '$1$VZiqpEus$VwNB6bMFqIuXsnn.tLV0o.', 55, 3);

--
-- Disparadores `Usuarios`
--
DELIMITER $$
CREATE TRIGGER `Generar_codigo_autenticacion` BEFORE INSERT ON `Usuarios` FOR EACH ROW SET NEW.codigo_autenticacion = CONVERT(ROUND((RAND() * (999999 - 100000)) + 1), CHARACTER)
#select ROUND((RAND() * (999999 - 100000)) + 1) AS aleatorio
/*(RAND() * (max - min)) + min */
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `Inserte_al_registrar_usuario` BEFORE INSERT ON `Usuarios` FOR EACH ROW SET NEW.activo='1', NEW.Tipos_de_Usuarios_id_tipo_usuario='3' #NO ME DEJABA ACTUALIZAR PORQUE DEBE ESTAR EN BEFORE(ANTES) Y ASIGNANDO VALORES, NO ACTUALIZANDO NI INSERTANDO
$$
DELIMITER ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Detalles_de_Examen`
--
ALTER TABLE `Detalles_de_Examen`
  ADD PRIMARY KEY (`id_detalle_examen`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_examen` (`id_examen`);

--
-- Indices de la tabla `Encuestas`
--
ALTER TABLE `Encuestas`
  ADD PRIMARY KEY (`id_encuesta`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `Examenes`
--
ALTER TABLE `Examenes`
  ADD PRIMARY KEY (`id_examen`),
  ADD KEY `id_dificultad` (`id_dificultad`);

--
-- Indices de la tabla `Personas`
--
ALTER TABLE `Personas`
  ADD PRIMARY KEY (`id_persona`);

--
-- Indices de la tabla `Preguntas`
--
ALTER TABLE `Preguntas`
  ADD PRIMARY KEY (`id_pregunta`),
  ADD KEY `id_examen` (`id_examen`),
  ADD KEY `id_respuesta` (`id_respuesta`);

--
-- Indices de la tabla `Respuestas`
--
ALTER TABLE `Respuestas`
  ADD PRIMARY KEY (`id_respuesta`);

--
-- Indices de la tabla `Tipos_de_Dificultad`
--
ALTER TABLE `Tipos_de_Dificultad`
  ADD PRIMARY KEY (`id_dificultad`);

--
-- Indices de la tabla `Tipos_de_Usuarios`
--
ALTER TABLE `Tipos_de_Usuarios`
  ADD PRIMARY KEY (`id_tipo_usuario`);

--
-- Indices de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `fk_Usuarios_Personas_idx` (`Personas_id_persona`),
  ADD KEY `fk_Usuarios_Tipos_de_Usuarios1_idx` (`Tipos_de_Usuarios_id_tipo_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Detalles_de_Examen`
--
ALTER TABLE `Detalles_de_Examen`
  MODIFY `id_detalle_examen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `Encuestas`
--
ALTER TABLE `Encuestas`
  MODIFY `id_encuesta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `Examenes`
--
ALTER TABLE `Examenes`
  MODIFY `id_examen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `Personas`
--
ALTER TABLE `Personas`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT de la tabla `Preguntas`
--
ALTER TABLE `Preguntas`
  MODIFY `id_pregunta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `Respuestas`
--
ALTER TABLE `Respuestas`
  MODIFY `id_respuesta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `Tipos_de_Dificultad`
--
ALTER TABLE `Tipos_de_Dificultad`
  MODIFY `id_dificultad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `Tipos_de_Usuarios`
--
ALTER TABLE `Tipos_de_Usuarios`
  MODIFY `id_tipo_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Detalles_de_Examen`
--
ALTER TABLE `Detalles_de_Examen`
  ADD CONSTRAINT `Detalles_de_Examen_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `Usuarios` (`id_usuario`),
  ADD CONSTRAINT `Detalles_de_Examen_ibfk_2` FOREIGN KEY (`id_examen`) REFERENCES `Examenes` (`id_examen`);

--
-- Filtros para la tabla `Encuestas`
--
ALTER TABLE `Encuestas`
  ADD CONSTRAINT `Encuestas_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `Usuarios` (`id_usuario`);

--
-- Filtros para la tabla `Examenes`
--
ALTER TABLE `Examenes`
  ADD CONSTRAINT `Examenes_ibfk_1` FOREIGN KEY (`id_dificultad`) REFERENCES `Tipos_de_Dificultad` (`id_dificultad`);

--
-- Filtros para la tabla `Preguntas`
--
ALTER TABLE `Preguntas`
  ADD CONSTRAINT `Preguntas_ibfk_1` FOREIGN KEY (`id_examen`) REFERENCES `Examenes` (`id_examen`),
  ADD CONSTRAINT `Preguntas_ibfk_2` FOREIGN KEY (`id_respuesta`) REFERENCES `Respuestas` (`id_respuesta`);

--
-- Filtros para la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  ADD CONSTRAINT `fk_Usuarios_Personas` FOREIGN KEY (`Personas_id_persona`) REFERENCES `Personas` (`id_persona`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Usuarios_Tipos_de_Usuarios1` FOREIGN KEY (`Tipos_de_Usuarios_id_tipo_usuario`) REFERENCES `Tipos_de_Usuarios` (`id_tipo_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
