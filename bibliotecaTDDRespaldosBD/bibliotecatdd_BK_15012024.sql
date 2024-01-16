-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-01-2024 a las 06:31:19
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bibliotecatdd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artayuda`
--

CREATE TABLE `artayuda` (
  `id` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `descripcion` text NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Se guardara informacion del modulo de ayuda';

--
-- Volcado de datos para la tabla `artayuda`
--

INSERT INTO `artayuda` (`id`, `titulo`, `descripcion`, `estado`) VALUES
(1, 'Ayuda del Sistema', 'Si presenta alguna inquietud referente algunas de las categorías o recursos, favor acceder al correo biblioteca@tesorosdedios.org. Horario de atención: lunes a viernes 8am-3pm.', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catetiquetas`
--

CREATE TABLE `catetiquetas` (
  `id` int(11) NOT NULL,
  `etiquetaDescripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Contiene todas las ubicaciones del menu';

--
-- Volcado de datos para la tabla `catetiquetas`
--

INSERT INTO `catetiquetas` (`id`, `etiquetaDescripcion`) VALUES
(1, 'Lectoescritura'),
(2, 'Matemática'),
(3, 'Adecuaciones/Modificaciones'),
(4, 'Apoyo Familiar'),
(5, 'Manejo de Clases'),
(6, 'Intervención de conducta'),
(7, 'Autismo'),
(8, 'Emocional'),
(9, 'Intelectual'),
(10, 'Lenguaje/Comunicación'),
(11, 'Motor'),
(13, 'Todos'),
(14, 'Trastorno de Aprendizaje'),
(15, 'Habilidades de Auto-cuido'),
(16, 'Habilidades Cognitivas'),
(17, 'Habilidades de Comunicación'),
(18, 'Habilidades Fisicas y Sensoriales'),
(19, 'Habilidades Socio-Emocionales'),
(20, 'Historias Sociales'),
(21, 'Capacitaciones para Iglesias'),
(22, 'Predicas'),
(23, 'Recursos para Iglesias'),
(24, 'Habilidades de la vida diaria'),
(25, 'Vocacional'),
(26, 'Alimentación'),
(27, 'Audición'),
(28, 'Encuesta'),
(29, 'Lenguaje'),
(30, 'Lenguaje de Señas'),
(31, 'Los Sistemas Aumentativos y Alternativos'),
(32, 'Producción de sonidos del habla'),
(33, 'Protocolos'),
(34, 'Talleres'),
(35, 'Tartamudez'),
(36, 'Curriculo de Tesoros de Dios'),
(37, 'Guias de Evaluaciones'),
(38, 'Plan individualizado'),
(39, 'Recursos Espirituales'),
(40, 'Capacitacion de Terapia'),
(41, 'Equinoterapia'),
(42, 'Estimulación Temprana Motriz'),
(43, 'Fisioterapia'),
(44, 'Terapia Ocupacional'),
(45, 'Resources in English'),
(46, 'Eliminar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catpaginas`
--

CREATE TABLE `catpaginas` (
  `id` int(11) NOT NULL,
  `idEtiqueta` int(11) NOT NULL,
  `nombrePagina` text NOT NULL,
  `paginaTitulo` text NOT NULL,
  `paginaSubtitulo` text NOT NULL,
  `nombrePaginaTipo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Catalogo para crear una pagina';

--
-- Volcado de datos para la tabla `catpaginas`
--

INSERT INTO `catpaginas` (`id`, `idEtiqueta`, `nombrePagina`, `paginaTitulo`, `paginaSubtitulo`, `nombrePaginaTipo`) VALUES
(1, 0, 'login', '', '', 'login'),
(2, 13, 'buscar', 'Todos los recursos', ' Buscar', 'plantillaPagina'),
(3, 0, 'academico', '', '', 'academico'),
(4, 0, 'home', '', '', 'home'),
(5, 0, 'salir', '', '', 'salir'),
(6, 7, 'autismo', 'Recurso Sobre discapacidades', 'Autismo', 'plantillaPagina'),
(7, 0, 'conducta', '', '', 'conducta'),
(8, 0, 'curriculum', '', '', 'curriculum'),
(9, 0, 'curso', '', '', 'curso'),
(10, 0, 'estimulacion', '', '', 'estimulacion'),
(11, 43, 'fisioterapia', 'Recursos de Terapia', 'Fisioterapia', 'plantillaPagina'),
(12, 20, 'historia', 'Recurso de Historias Sociales', 'Historias Sociales', 'plantillaPagina'),
(13, 0, 'iglesias', '', '', 'iglesias'),
(14, 45, 'ingles', 'Recurso Ingles', 'Todos los recursos en Ingles', 'plantillaPagina'),
(15, 10, 'lenguaje', 'Recurso Sobre discapacidades', 'Trastorno de Lenguaje/Comunicación', 'lenguaje'),
(16, 0, 'piedu', '', '', 'piedu'),
(17, 1, 'catlectura', 'Recursos Académicos', 'Lectoescritura', 'plantillaPagina'),
(18, 0, 'discapacidades', '', '', 'discapacidades'),
(19, 39, 'espiritual', 'Recurso Espiritual', 'Todos los recursos Espiritual', 'plantillaPagina'),
(20, 0, 'habilidad', '', '', 'habilidad'),
(21, 4, 'apoyoFamiliar', 'Recurso de Apoyo Familiar', 'Apoyo Familiar', 'plantillaPagina'),
(22, 2, 'catmat', 'Recursos Académicos', 'Matematica', 'plantillaPagina'),
(23, 3, 'catadecuaciones', 'Recursos Académicos', 'Adecuaciones/Modificaciones', 'plantillaPagina'),
(24, 14, 'aprendizaje', 'Recurso Sobre discapacidades', 'Trastorno Del Aprendizaje', 'plantillaPagina'),
(25, 11, 'motor', 'Recurso Sobre discapacidades', 'Discapacidad Motor', 'plantillaPagina'),
(26, 9, 'intelectual', 'Recurso Sobre discapacidades', 'Discapacidad Intelectual', 'plantillaPagina'),
(27, 8, 'emocional', 'Recurso Sobre discapacidades', 'Trastorno Emocional', 'plantillaPagina'),
(28, 0, 'independencia', '', '', 'plantillaPagina'),
(29, 25, 'vocacional', 'Recursos de Independencia', 'Vocacional', 'plantillaPagina'),
(30, 24, 'habilidadesVidaDiaria', 'Recursos de Independencia', 'Habilidades de la Vida Diaria', 'plantillaPagina'),
(31, 5, 'manejoClases', 'Recursos de Conducta', 'Manejo de Clase', 'plantillaPagina'),
(32, 6, 'intervencionConducta', 'Recursos de Conducta', 'Intervención de Conducta', 'plantillaPagina'),
(33, 15, 'autoCuido', 'Recursos de Estimulación Temprana', 'Habilidades de Auto-Cuido', 'plantillaPagina'),
(34, 16, 'Cognitiva', 'Recursos de Estimulación Temprana', 'Habilidades Cognitivas', 'plantillaPagina'),
(35, 17, 'Comunicacion', 'Recursos de Estimulación Temprana', 'Habilidades de Comunicación', 'plantillaPagina'),
(36, 18, 'FisicoSensorial', 'Recursos de Estimulación Temprana', 'Habilidades Fisicas y Sensoriales', 'plantillaPagina'),
(37, 19, 'SocioEmocional', 'Recursos de Estimulación Temprana', 'Habilidades Socio-Emocionales', 'plantillaPagina'),
(38, 21, 'capacitacionesIglesias', 'Recursos de Iglesias', 'Capacitaciones de Iglesias', 'plantillaPagina'),
(39, 22, 'predicas', 'Recursos para las Iglesias', 'Predicas', 'plantillaPagina'),
(40, 23, 'recursosIglesias', 'Recursos para las Iglesias', 'Recursos Adicionales para las Iglesias', 'plantillaPagina'),
(41, 26, 'alimentacion', 'Recursos de Logopedia', 'Alimentación', 'plantillaPagina'),
(42, 27, 'audicion', 'Recursos de Logopedia', 'Audición', 'plantillaPagina'),
(43, 28, 'encuesta', 'Recursos de Logopedia', 'Encuesta', 'plantillaPagina'),
(44, 29, 'lengua', 'Recursos de Logopedia', 'Lenguaje', 'plantillaPagina'),
(45, 30, 'lenguajeSenas', 'Recursos de Logopedia', 'Lenguaje de Señas', 'plantillaPagina'),
(46, 31, 'sistemasAumentativoAlternativos', 'Recursos de Logopedia', 'Sistemas Aumetativos & Alternativos', 'plantillaPagina'),
(47, 0, 'sonidosHabla', '', '', 'plantillaPagina'),
(48, 33, 'protocolos', 'Recursos de Logopedia', 'Protocolos', 'plantillaPagina'),
(49, 34, 'talleres', 'Recursos de Logopedia', 'Talleres', 'plantillaPagina'),
(50, 35, 'tartamudez', 'Recursos de Logopedia', 'Tartamudez', 'plantillaPagina'),
(51, 0, 'logopedia', '', '', 'plantillaPagina'),
(52, 36, 'curriculoTdd', 'Recursos de Planes Individualizados', 'Curriculo de Tesoros de Dios', 'plantillaPagina'),
(53, 37, 'evalua', 'Recursos de Planes Individualizados', 'Guias de Evaluaciones', 'plantillaPagina'),
(54, 38, 'individual', 'Recursos de Planes Individualizados', 'Plan Individualizado', 'plantillaPagina'),
(55, 0, 'terapia', '', '', 'plantillaPagina'),
(56, 40, 'capacitacionesTerapia', 'Recursos de Terapia', 'Capacitaciones de Terapia', 'plantillaPagina'),
(57, 41, 'equinoterapia', 'Recursos de Terapia', 'Equinoterapia', 'plantillaPagina'),
(58, 44, 'terapiaOcupacional', 'Recursos de Terapia', 'Terapia Ocupacional', 'plantillaPagina'),
(59, 49, 'articulacion', 'Recursos Logopedia', 'Articulación', 'plantillaPagina'),
(60, 48, 'apraxia', 'Recursos Logopedia', 'Apraxia', 'plantillaPagina'),
(61, 50, 'fonologico', 'Recursos Logopedia', 'Fonológico', 'plantillaPagina'),
(62, 51, 'particulacion', 'Recursos Logopedia', 'Practica de Articulación', 'plantillaPagina'),
(63, 52, 'velofaringea', 'Recursos Logopedia', 'Velofaringea', 'plantillaPagina');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catrecursos`
--

CREATE TABLE `catrecursos` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `ruta` text NOT NULL,
  `titulo` text NOT NULL,
  `descripcion` text NOT NULL,
  `autor` text NOT NULL,
  `tipo` text DEFAULT NULL,
  `resumen` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Tabla para registrar los recursos';

--
-- Volcado de datos para la tabla `catrecursos`
--

INSERT INTO `catrecursos` (`id`, `nombre`, `ruta`, `titulo`, `descripcion`, `autor`, `tipo`, `resumen`) VALUES
(5, 'Ejemplos de objetivos modificados.pdf', 'vista/recurso/Ejemplos de objetivos modificados.pdf', 'Ejemplos de Objetivos Modificados', 'Objetivos Modificados', 'Dra. Kathleen VanTol', 'PDF', 'Este documento provee varios ejemplos de objetivos modificados para profesores que requieren mas ideas de como modificar objetivos o su plan de clase para estudiantes con discapacidad.  '),
(6, 'Guia para Adecuaciones.docx', 'vista/recurso/Guia para Adecuaciones.docx', 'Guia para Adecuaciones', 'Guia para Adecuaciones', 'Tesoros de Dios', 'Word', 'Es una guia sencilla de estrategias de como hacer adecuaciones para un estudiante que está presentando dificultades academicas.  '),
(7, 'Ficha de Numeros 1-100.doc', 'vista/recurso/Ficha de Numeros 1-100.doc', 'Ficha de Números 1-100', 'Números 1-100', 'Tesoros de Dios', 'Word', 'Esta ficha funciona para el estudiante, como una herramienta práctica para la identificación de los numeros del 1 al 100.  También puede funcionar para evaluar al estudiante en el reconocimiento de los números.'),
(8, 'Seguimiento de Patrones.pdf', 'vista/recurso/Seguimiento de Patrones.pdf', 'Seguimiento de Patrones - Preescolar', 'Actividades - Patrones', 'Tesoros de Dios', 'PDF', 'En este documento se plasman algunas ideas que permiten al docente reforzar el seguimiento de patrones con estudiantes a nivel de preescolar.'),
(9, 'El Espectro del Autismo - NICHCY.pdf', 'vista/recurso/El Espectro del Autismo - NICHCY.pdf', 'El Espectro del Autismo - NICHCY', 'Recurso Autismo', 'NICHCY', 'PDF', NULL),
(10, 'Exp-STAFFDiapositiva de autismo.pptx', 'vista/recurso/Exp-STAFFDiapositiva de autismo.pptx', 'Exp-STAFFDiapositiva de autismo', 'Recurso Autismo', 'Tesoros de Dios', 'Power Point', NULL),
(11, 'LA FAMILIA y EL AUTISMO-DnaAngela.pptx', 'vista/recurso/LA FAMILIA y EL AUTISMO-DnaAngela.pptx', 'LA FAMILIA y EL AUTISMO', 'Recurso Autismo', 'Angela Herrera', 'Power Point', 'Este recurso trata de las principales funciones de las familias con niños con autismo. '),
(12, 'Manual 100 Dias - Autism Speaks.pdf', 'vista/recurso/Manual 100 Dias - Autism Speaks.pdf', 'Manual 100 Dias - Autism Speaks', 'Recurso Autismo', 'Autism Speaks', 'PDF', NULL),
(13, 'TRASTORNO DEL ESPECTRO AUTISTA - Bren Dna Angela.pptx', 'vista/recurso/TRASTORNO DEL ESPECTRO AUTISTA - Bren Dna Angela.pptx', 'TRASTORNO DEL ESPECTRO AUTISTA - Bren Dña Angela', 'Recurso Autismo', 'Angela Herrera y Brenda Villalobos', 'Power Point', NULL),
(14, 'Tengo amigos en la escuela [Ana Jarquin].docx.pdf', 'vista/recurso/Tengo amigos en la escuela [Ana Jarquin].docx.pdf', 'Tengo Amigos en la Escuela', 'Historia Social', 'Ana Jarquin', 'PDF', 'Esta historia social ayuda a los estudiantes con dificultades sociales como hacer amistades en la escuela. '),
(15, 'Mis lugares privados [Ana Jarquin].docx.pdf', 'vista/recurso/Mis lugares privados [Ana Jarquin].docx.pdf', 'Mis Lugares Privados', 'Historia Social', 'Ana Jarquin', 'PDF', NULL),
(16, 'Historia Social-Levantar las manos - Dr VanTol.pdf', 'vista/recurso/Historia Social-Levantar las manos - Dr VanTol.pdf', 'Levantar las Manos', 'Historia Social - Reglas de Clase', 'Dra. Kathleen VanTol', 'PDF', 'La historia social, ¨Levantar las Manos,¨ puede ayudar a un estudiante con dificultad en ese area a aprender a levantar su mano de manera apropiada.  '),
(17, 'Historia Social-Miedo a Dormir - Paul Blas.pdf', 'vista/recurso/Historia Social-Miedo a Dormir - Paul Blas.pdf', 'Miedo a Dormir', 'Historia Social', 'Paul Blas', 'PDF', NULL),
(18, 'Acceso al Aprendizaje para TODOS los alumnos (2)-convertido.pdf', 'vista/recurso/Acceso al Aprendizaje para TODOS los alumnos (2)-convertido.pdf', 'Acceso al Aprendizaje para Todos', 'Acceso al Aprendizaje', 'Tesoros de Dios', 'PDF', 'Esta presentación es una capacitación que enseña usar el Diseño Universal de Aprendizaje y mejores prácticas educacionales, para poder incluir a cada estudiante con cualquier tipo de habilidad o discapacidad de una manera productiva en su aula de clase.'),
(19, 'Como Ubicar a Estudiantes.pdf', 'vista/recurso/Como Ubicar a Estudiantes.pdf', 'Ubicacion de Estudiantes en Aula', 'Organizacion de Aula', 'aulaPlaneta', 'PDF', 'Este recurso muestra 5 diferentes maneras que puede ubicar los estudiantes en el aula de clase.'),
(20, 'Diferencias entre DI_TEA_TDAH.pdf', 'vista/recurso/Diferencias entre DI_TEA_TDAH.pdf', 'Adaptaciones y Diferencia entre DI, TEA, y TDAH', 'Adaptaciones - DI, TEA, TDAH', 'Tesoros de Dios', 'PDF', 'Este documento provee un breve explicacion de las diferencias entre Discapacidad Intelectual (DI), un Trastorno Especifico de Aprendizaje (TEA), y Trastorno de Deficit de Atencion e Hiperactividad (TDAH). Tambien ofrece algunas adaptaciones que se puede usar en las diferentes clases.'),
(21, 'Estrategias en Áreas Académicas.pdf', 'vista/recurso/Estrategias en Áreas Académicas.pdf', 'Orden en el Aula - Area Academica', 'Orden en el Aula', 'Dra. Kathleen VanTol', 'PDF', 'Este documento provee ideas de como tratar con compartamientos no deseados en las areas academicas de un estudiante. '),
(22, 'Estrategias en Áreas Sociales.pdf', 'vista/recurso/Estrategias en Áreas Sociales.pdf', 'Orden en el Aula - Area Social', 'Orden en el Aula', 'Dra. Kathleen VanTol', 'PDF', 'Este documento provee ideas de como trabajar en el aula de clase con comportamientos no deseados en el area social de un estudiante.  '),
(23, 'Estrategias para hiperactividad.pdf', 'vista/recurso/Estrategias para hiperactividad.pdf', 'Estrategias para Hiperactividad', 'Estrategias - Hiperactividad', 'Dra. Kathleen VanTol', 'PDF', 'Este documento provee estrategias para trabajar con estudiantes que presentan dificultades de hiperactividad.'),
(24, 'Trastorno Especifico de Aprendizaje (TEA) Info General.pdf', 'vista/recurso/Trastorno Especifico de Aprendizaje (TEA) Info General.pdf', 'Trastornos Especificos de Aprendizaje (TEA)', 'Trastornos Especificos de Aprendizaje', 'Dra. Kathleen VanTol', 'PDF', 'Este documento describe de forma breve los diferentes Trastornos Especificos de Aprendizaje (TEA), como Dislexia, Disgrafia, Discalculia, y TDAH y algunas adaptaciones que puede usar la profesora con su alumno.  '),
(25, 'Adaptaciones para estudiantes con Disgrafía.pdf', 'vista/recurso/Adaptaciones para estudiantes con Disgrafía.pdf', 'Adaptaciones para Estudiantes con Disgrafia', 'Adaptaciones - Disgrafia', 'Tesoros de Dios', 'PDF', 'Este documento provee una lista breve de adaptaciones que un maestro puede usar con un estudiante con Disgrafia.  '),
(26, 'Adaptaciones para estudiantes con Dislexia.pdf', 'vista/recurso/Adaptaciones para estudiantes con Dislexia.pdf', 'Adaptaciones para Estudiantes con Dislexia', 'Adaptaciones - Dislexia ', 'Tesoros de Dios', 'PDF', 'Este documento provee una lista breve de ideas para trabajar con un estudiante con Dilexia.'),
(27, 'Calcular la Fluidez de Lectura.pdf', 'vista/recurso/Calcular la Fluidez de Lectura.pdf', 'Calcular la Fluidez Lectora', 'Evaluación - Fluidez Lectora', 'Tesoros de Dios', 'PDF', 'Este documento enseña como calcular fluidez lectora de un estudiante que esta presentando dificultad en esta area.'),
(28, 'Protocolo de Unir-Emparejar.pdf', 'vista/recurso/Protocolo de Unir-Emparejar.pdf', 'Enseñando a Emparejar', 'Actividades - Emparejamiento', 'Dra. Kathleen VanTol', 'PDF', 'Este documento presenta las fases principales  que el maestro requiere poner en práctica con su estudiante, para que este logre el proceso de emparejamiento.\r\n'),
(29, 'Rúbrica de Redacción.xlsx', 'vista/recurso/Rúbrica de Redacción.xlsx', 'Rúbrica de Redacción', 'Evaluación - Redacción', 'Tesoros de Dios', 'Excel', 'Esta rúbrica presenta una evaluación sencilla en el proceso de guiar a un estudiante en su redacción. '),
(30, 'Desarrollo de Conocimientos en Matematica.pdf', 'vista/recurso/Desarrollo de Conocimientos en Matematica.pdf', 'Actividades de Desarrollo - Matemática', 'Actividades - Matemática', 'Tesoros de Dios', 'PDF', 'Este documento facilita al maestro ideas alternativas para apoyar al estudiante a desarrollar conocimientos matemáticos basicos (como orden, clasificación, conteo e identificación de formas geométricas básicas).'),
(31, 'Indicaciones de 3 pasos.pdf', 'vista/recurso/Indicaciones de 3 pasos.pdf', 'Indicación de Tres Pasos', 'Indicaciones - 3 pasos', 'Tesoros de Dios', 'PDF', 'Este documento brinda al docente tres pasos importantes y sencillos de como ayudar al estudiante a seguir orientaciones para poder desarrollar una actividad.'),
(32, 'TEACCH - Colores-Unir-Formas.pdf', 'vista/recurso/TEACCH - Colores-Unir-Formas.pdf', 'TEACCH - Materiales de conceptos básicos', 'Materiales para Actividades - TEACCH', 'Paige Ferrell', 'PDF', 'Este método (TEACCH) ayudará al estudiante a reforzar la identificación de varios conceptos (por ejemplo, colores, números, letras, formas) de una manera práctica y divertida.'),
(33, 'TEACCH Binder (Nombre-Fechas-Dias).docx', 'vista/recurso/TEACCH Binder (Nombre-Fechas-Dias).docx', 'TEACCH Binder', 'Materiales para Binder - TEACCH', 'Paige Ferrell', 'Word', 'Este es un método útil y sencillo que el docente puede utilizar a la hora de querer que el estudiante aprenda los nombres de los meses del año, los días de la semana, y que se apropie de su nombre.'),
(34, 'Adaptaciones para estudiantes con Discalculia.pdf', 'vista/recurso/Adaptaciones para estudiantes con Discalculia.pdf', 'Adaptaciones para Estudiantes con Discalculia', 'Adaptaciones - Discalculia', 'Tesoros de Dios', 'PDF', 'Este documento tiene plasmadas adecuaciones prácticas para apoyar a estudiantes con dificultades en las matemáticas.'),
(35, 'Desarrollo de Juego de un Niño.pdf', 'vista/recurso/Desarrollo de Juego de un Niño.pdf', 'Desarrollo de Juego', 'Juegos - Selección de Juguetes para Niños ', 'Bright Children', 'PDF', 'Este documento describe el propósito del juego con niños y como seleccionar juguetes apropiados a los diferentes edades de un niño.  '),
(36, 'Duelo en Niños.pdf', 'vista/recurso/Duelo en Niños.pdf', 'Duelo en Niños', 'Duelo - Proceso para Niños', 'Elim Christian Services', 'PDF', 'Este documento provee información breve de como uno puede apoyar a niños y adolescentes en el proceso de duelo, y describe las diferentes fases del dessarollo en un niño para entender la muerte.'),
(37, 'Consejos y Técnicas para la Alimentación .doc', 'vista/recurso/Consejos y Técnicas para la Alimentación .doc', 'Consejos y Ténicas para la Alimentación', 'Alimentación - Consejos y Técnicas', 'Dr. Ken Bleile', 'Word', 'Este documento provee recomendaciones de técnicas de como dar de comer y beber a un niño para evitar aspirar.'),
(38, 'Guia de Alimentación TEA.pdf', 'vista/recurso/Guia de Alimentación TEA.pdf', 'Guía de Alimentación TEA', 'Autismo - Guía de Alimentación', 'Federación Autismo Madrid', 'PDF', 'La presente guía, hecho por la Federación Autismo Madrid, ¨trata de ofrecer una base de conocimientos teórico-prácticos necesarios para abordar con éxito los problemas de alimentación que con frecuencia se asocian a niños y niñas con Trastornos del Espectro del Autismo (TEA).¨');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catrecursosvideos`
--

CREATE TABLE `catrecursosvideos` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `link` text NOT NULL,
  `titulo` text NOT NULL,
  `descripcion` text NOT NULL,
  `autor` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Guardar recursos audiovisual';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catroles`
--

CREATE TABLE `catroles` (
  `rolid` int(11) NOT NULL,
  `catRolesDescripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `catroles`
--

INSERT INTO `catroles` (`rolid`, `catRolesDescripcion`) VALUES
(1, 'Administrador'),
(2, 'Invitado'),
(3, 'Desactivado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cattipoarchivo`
--

CREATE TABLE `cattipoarchivo` (
  `id` int(11) NOT NULL,
  `descripcion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Normalizacion de tipo de archivo en cat recursos';

--
-- Volcado de datos para la tabla `cattipoarchivo`
--

INSERT INTO `cattipoarchivo` (`id`, `descripcion`) VALUES
(1, 'Word'),
(2, 'PowerPoint'),
(3, 'Excel'),
(4, 'Publisher'),
(5, 'PDF');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unionetiquetacatrecursovideo`
--

CREATE TABLE `unionetiquetacatrecursovideo` (
  `id` int(11) NOT NULL,
  `recursovideoid` int(11) NOT NULL,
  `etiquetaid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='union Recursos Videos y etiquetas';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unionetiquetascatrecurso`
--

CREATE TABLE `unionetiquetascatrecurso` (
  `id` int(11) NOT NULL,
  `idRecurso` int(11) NOT NULL,
  `idEtiqueta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Enlace etiqueta con el recurso para existir +1 lugar';

--
-- Volcado de datos para la tabla `unionetiquetascatrecurso`
--

INSERT INTO `unionetiquetascatrecurso` (`id`, `idRecurso`, `idEtiqueta`) VALUES
(72, 15, 13),
(77, 9, 7),
(78, 9, 13),
(81, 10, 7),
(82, 10, 13),
(85, 12, 7),
(86, 12, 13),
(89, 13, 7),
(90, 13, 13),
(113, 17, 13),
(133, 11, 4),
(134, 11, 7),
(135, 11, 13),
(249, 14, 20),
(250, 14, 13),
(251, 14, 13),
(265, 25, 1),
(266, 25, 3),
(267, 25, 14),
(268, 25, 13),
(269, 25, 13),
(270, 25, 13),
(271, 26, 1),
(272, 26, 3),
(273, 26, 13),
(274, 26, 14),
(275, 26, 13),
(276, 26, 13),
(277, 20, 3),
(278, 20, 1),
(279, 20, 2),
(280, 20, 9),
(281, 20, 14),
(282, 20, 16),
(283, 20, 13),
(284, 20, 13),
(285, 20, 13),
(286, 20, 13),
(287, 18, 3),
(288, 18, 13),
(289, 18, 14),
(290, 18, 13),
(291, 18, 13),
(292, 18, 13),
(293, 18, 13),
(294, 18, 13),
(295, 23, 3),
(296, 23, 13),
(297, 23, 6),
(298, 23, 13),
(299, 23, 13),
(300, 23, 13),
(301, 6, 3),
(302, 6, 13),
(303, 6, 13),
(304, 6, 13),
(305, 6, 13),
(313, 5, 3),
(314, 5, 14),
(315, 5, 13),
(316, 5, 13),
(317, 5, 13),
(318, 5, 13),
(319, 5, 13),
(320, 5, 13),
(321, 19, 3),
(322, 19, 5),
(323, 19, 13),
(324, 19, 13),
(325, 19, 13),
(326, 21, 3),
(327, 21, 6),
(328, 21, 13),
(329, 21, 13),
(330, 21, 13),
(331, 22, 3),
(332, 22, 5),
(333, 22, 6),
(334, 22, 13),
(335, 22, 19),
(336, 22, 13),
(337, 22, 13),
(338, 24, 3),
(339, 24, 13),
(340, 24, 14),
(341, 24, 13),
(342, 24, 13),
(343, 27, 1),
(344, 27, 13),
(345, 27, 14),
(346, 27, 37),
(347, 27, 13),
(348, 27, 13),
(349, 28, 1),
(350, 28, 2),
(351, 28, 16),
(352, 28, 13),
(353, 28, 13),
(354, 29, 1),
(355, 29, 37),
(356, 29, 13),
(357, 29, 13),
(362, 16, 20),
(363, 16, 13),
(364, 16, 13),
(365, 16, 13),
(366, 16, 13),
(367, 16, 13),
(368, 16, 13),
(372, 30, 2),
(373, 30, 13),
(374, 30, 16),
(375, 30, 13),
(376, 7, 2),
(377, 7, 13),
(378, 7, 16),
(379, 7, 37),
(380, 7, 13),
(381, 31, 2),
(382, 31, 13),
(383, 31, 16),
(384, 31, 19),
(385, 31, 14),
(386, 31, 13),
(387, 8, 2),
(388, 8, 13),
(389, 8, 16),
(390, 8, 13),
(391, 8, 13),
(392, 32, 2),
(393, 32, 16),
(394, 32, 13),
(395, 32, 13),
(396, 33, 2),
(397, 33, 16),
(398, 33, 13),
(399, 33, 13),
(400, 34, 2),
(401, 34, 3),
(402, 34, 13),
(403, 34, 13),
(404, 35, 4),
(405, 35, 19),
(406, 35, 13),
(407, 35, 13),
(411, 36, 4),
(412, 36, 13),
(413, 36, 13),
(414, 36, 13),
(415, 37, 26),
(416, 37, 13),
(417, 37, 13),
(418, 38, 26),
(419, 38, 13),
(420, 38, 7),
(421, 38, 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` text NOT NULL,
  `clave` text NOT NULL,
  `foto` text NOT NULL,
  `email` text NOT NULL,
  `organizacion` text NOT NULL,
  `cargo` text NOT NULL,
  `telefono` text NOT NULL,
  `rolid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='estructura de tabla de usuario';

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `clave`, `foto`, `email`, `organizacion`, `cargo`, `telefono`, `rolid`) VALUES
(1, 'admin', '$2y$10$4x6KuMg4g6gTHBl53NodOukCiSdQbVVojDoembu6sckN0Po/22vc6', '', 'info@tesorosdedios.org', 'Tesoros de Dios', 'Administrador', '505-2265-4038', 1),
(2, 'guest', '$2y$10$i8TWDezQ.PQWMinOnVvJ8OPsVC9nQ3BcKKMHCdmBGplm2tHJOPq.u', '', 'info@tesorosdedios.org', 'Tesoros de Dios', 'Administrador', '505-2265-4038', 3),
(3, 'MAdams', '$2y$10$Ll2X8Psb.M0veTR32MUjV.rWbL.jLmr3fXtkqVTB6JV/29Ha4KSGy', 'vista/img/usuario/U33.png', '', '', '', '', 3),
(4, 'Michelle', '$2y$10$fDFGN313pH84yXJDH8igp.8VehSB9rW8sdoKpFwqz/dxsUp3ugyi6', 'vista/img/usuario/U525.jpg', 'michelle510@hotmail.com', 'Tesoros de Dios', 'Lider de desarrollo Espiritual', '505-8451-4824', 1),
(5, 'Vantol', '$2y$10$D5tiPfAYL9Z1sBJNBEe.xumReTMTiwE0okvEBImQjWciZRwqbe1V.', 'vista/img/usuario/U728.jpg', '', '', '', '', 2),
(6, 'AIppel', '$2y$10$ypdp6UBaDb96vI2q5yv6Je8rCJozP6oKbdr9bbna/RYBJWZTMrO6a', 'vista/img/usuario/U367.png', '', '', '', '', 2),
(7, 'BVillalobos', '$2y$10$uFmQNBVswZx5/uMKdsKCSeXXYGB.Ut/vWyKkxF.njcYtdriU5spgK', '', '', '', '', '', 2),
(8, 'ESanchez', '$2y$10$J1k5qaVIk7QhM3LfohCBA.NgIThrml3ZhjS0/r9VM33A.t7UrVGfy', '', '', '', '', '', 2),
(9, 'Alexandra', '$2y$10$iEfyBfJ.x0BuzNBZo96lUOsToMYY2lkTuy2SJyPYry9mYlgL2yRry', '', '', '', '', '', 3),
(10, 'pamador', '$2y$10$2EkOYd71E6r37gtH7kI8yeXnGcQzLhN5qWgmvJFy0OgMdHc9S80wG', '', 'Sponsor@tesorosdedios.org', 'Tesoros de Dios', 'Coordinadora de Patrocinio', '505-8782-9936', 3),
(11, 'Wendy', '$2y$10$LLgfbr8jeuIj1BR0aIn8neGXyULqhnw4/IdrC2Jiup/cJMbilnrN6', '', 'wendy@tesorosdedios.org', 'Tesoros de Dios', 'Voluntaria', '505-8858-6304', 2),
(12, 'Ajarquin', '$2y$10$WRXc0zbsz3IwfEtfq6njEe.ek/MW1.i2F2.S4PBG8bPvH.f4ekt92', '', '', '', '', '', 2),
(13, 'Mrosales', '$2y$10$sea3wQVNtzIV2AFSJ5RniO5tOBZ7/W2B2I.Ihj2ui3t6MYzzOKl.e', '', '', '', '', '', 2),
(14, 'JennyA', '$2y$10$i7w/YL4CFOy9qQ5x6jIWze5vdHqX2dVcL8fxbPLrszjdvfrzLWGRa', '', '', '', '', '', 3),
(15, 'MilenaS', '$2y$10$98FSql8OAhwFLadAHWlQ5uYm4naV77OBSxKDYJ.SwQyXL6rxubGAq', '', '', '', '', '', 2),
(16, 'AMendoza', '$2y$10$56ryo5g6IO9N/nctDfbl7.NPaJYjVbvtLL88KSstQmqdtKIWhW0Ga', '', '', '', '', '', 3),
(17, 'AMendoza2', '$2y$10$BxxagCwf4SOpZRxy0qtEgujIKleWnKsxQSStfTE5H5HD5/SYKh8tu', '', '', '', '', '', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `artayuda`
--
ALTER TABLE `artayuda`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `catetiquetas`
--
ALTER TABLE `catetiquetas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `catpaginas`
--
ALTER TABLE `catpaginas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idEtiqueta` (`idEtiqueta`);

--
-- Indices de la tabla `catrecursos`
--
ALTER TABLE `catrecursos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `catrecursosvideos`
--
ALTER TABLE `catrecursosvideos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `catroles`
--
ALTER TABLE `catroles`
  ADD PRIMARY KEY (`rolid`);

--
-- Indices de la tabla `cattipoarchivo`
--
ALTER TABLE `cattipoarchivo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `unionetiquetacatrecursovideo`
--
ALTER TABLE `unionetiquetacatrecursovideo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recursovideoid` (`recursovideoid`),
  ADD KEY `etiquetaid` (`etiquetaid`);

--
-- Indices de la tabla `unionetiquetascatrecurso`
--
ALTER TABLE `unionetiquetascatrecurso`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idRecursoBiblioteca` (`idRecurso`),
  ADD KEY `idEtiquetaBiblioteca` (`idEtiqueta`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rolid` (`rolid`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `artayuda`
--
ALTER TABLE `artayuda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `catetiquetas`
--
ALTER TABLE `catetiquetas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de la tabla `catpaginas`
--
ALTER TABLE `catpaginas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT de la tabla `catrecursos`
--
ALTER TABLE `catrecursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `catrecursosvideos`
--
ALTER TABLE `catrecursosvideos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `catroles`
--
ALTER TABLE `catroles`
  MODIFY `rolid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `cattipoarchivo`
--
ALTER TABLE `cattipoarchivo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `unionetiquetacatrecursovideo`
--
ALTER TABLE `unionetiquetacatrecursovideo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `unionetiquetascatrecurso`
--
ALTER TABLE `unionetiquetascatrecurso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=422;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `catrecursosvideos`
--
ALTER TABLE `catrecursosvideos`
  ADD CONSTRAINT `catrecursosvideos_ibfk_1` FOREIGN KEY (`id`) REFERENCES `unionetiquetacatrecursovideo` (`recursovideoid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `unionetiquetacatrecursovideo`
--
ALTER TABLE `unionetiquetacatrecursovideo`
  ADD CONSTRAINT `unionetiquetacatrecursovideo_ibfk_1` FOREIGN KEY (`etiquetaid`) REFERENCES `catetiquetas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `unionetiquetascatrecurso`
--
ALTER TABLE `unionetiquetascatrecurso`
  ADD CONSTRAINT `unionetiquetascatrecurso_ibfk_1` FOREIGN KEY (`idRecurso`) REFERENCES `catrecursos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `unionetiquetascatrecurso_ibfk_2` FOREIGN KEY (`idEtiqueta`) REFERENCES `catetiquetas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`rolid`) REFERENCES `catroles` (`rolid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
