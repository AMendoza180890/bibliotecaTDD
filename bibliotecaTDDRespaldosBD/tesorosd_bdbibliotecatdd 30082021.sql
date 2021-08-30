-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 30, 2021 at 10:44 AM
-- Server version: 5.6.41-84.1
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tesorosd_bdbibliotecatdd`
--

-- --------------------------------------------------------

--
-- Table structure for table `artayuda`
--

CREATE TABLE `artayuda` (
  `id` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `descripcion` text NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Se guardara informacion del modulo de ayuda';

--
-- Dumping data for table `artayuda`
--

INSERT INTO `artayuda` (`id`, `titulo`, `descripcion`, `estado`) VALUES
(1, 'Ayuda del Sistema', 'Si presenta alguna inquietud referente algunas de las categorías o recursos, favor acceder al correo biblioteca@tesorosdedios.org. Horario de atención: Lunes a Viernes 8am-3pm.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `catetiquetas`
--

CREATE TABLE `catetiquetas` (
  `id` int(11) NOT NULL,
  `etiquetaDescripcion` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Contiene todas las ubicaciones del menu';

--
-- Dumping data for table `catetiquetas`
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
(46, 'Eliminar'),
(48, 'apraxia'),
(49, 'articulacion'),
(50, 'fonologico'),
(51, 'practica articulacion'),
(52, 'velofaringea');

-- --------------------------------------------------------

--
-- Table structure for table `catpaginas`
--

CREATE TABLE `catpaginas` (
  `id` int(11) NOT NULL,
  `idEtiqueta` int(11) NOT NULL,
  `nombrePagina` text NOT NULL,
  `paginaTitulo` text NOT NULL,
  `paginaSubtitulo` text NOT NULL,
  `nombrePaginaTipo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Catalogo para crear una pagina';

--
-- Dumping data for table `catpaginas`
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
(28, 0, 'independencia', '', '', 'independencia'),
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
-- Table structure for table `catrecursos`
--

CREATE TABLE `catrecursos` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `ruta` text COLLATE utf8_spanish_ci NOT NULL,
  `titulo` text COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `autor` text COLLATE utf8_spanish_ci NOT NULL,
  `tipo` text COLLATE utf8_spanish_ci,
  `resumen` text COLLATE utf8_spanish_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Tabla para registrar los recursos';

--
-- Dumping data for table `catrecursos`
--

INSERT INTO `catrecursos` (`id`, `nombre`, `ruta`, `titulo`, `descripcion`, `autor`, `tipo`, `resumen`) VALUES
(5, 'Ejemplos de objetivos modificados.pdf', 'vista/recurso/Ejemplos de objetivos modificados.pdf', 'Ejemplos de Objetivos Modificados', 'Objetivos Modificados', 'Dra. Kathleen VanTol', 'PDF', 'Este documento provee varios ejemplos de objetivos modificados para profesores que requieren mas ideas de como modificar objetivos o su plan de clase para estudiantes con discapacidad.  '),
(6, 'Guia para Adecuaciones.docx', 'vista/recurso/Guia para Adecuaciones.docx', 'Guia para Adecuaciones', 'Guia para Adecuaciones', 'Tesoros de Dios', 'Word', 'Es una guia sencilla de estrategias de como hacer adecuaciones para un estudiante que está presentando dificultades academicas.  '),
(7, 'Ficha de Numeros 1-100.doc', 'vista/recurso/Ficha de Numeros 1-100.doc', 'Ficha de Números 1-100', 'Números 1-100', 'Tesoros de Dios', 'Word', 'Esta ficha funciona para el estudiante, como una herramienta práctica para la identificación de los numeros del 1 al 100.  También puede funcionar para evaluar al estudiante en el reconocimiento de los números.'),
(8, 'Seguimiento de Patrones.pdf', 'vista/recurso/Seguimiento de Patrones.pdf', 'Seguimiento de Patrones - Preescolar', 'Actividades - Patrones', 'Tesoros de Dios', 'PDF', 'En este documento se plasman algunas ideas que permiten al docente reforzar el seguimiento de patrones con estudiantes a nivel de preescolar.'),
(9, 'El Espectro del Autismo - NICHCY.pdf', 'vista/recurso/El Espectro del Autismo - NICHCY.pdf', 'El Espectro del Autismo - NICHCY', 'Recurso Autismo', 'NICHCY', 'PDF', NULL),
(10, 'Exp-STAFFDiapositiva de autismo.pptx', 'vista/recurso/Exp-STAFFDiapositiva de autismo.pptx', 'Exp-STAFFDiapositiva de autismo', 'Recurso Autismo', 'Tesoros de Dios', 'Power Point', NULL),
(11, 'LA FAMILIA y EL AUTISMO-DnaAngela.pptx', 'vista/recurso/LA FAMILIA y EL AUTISMO-DnaAngela.pptx', 'La Familia y El Autismo', 'Capacitación a Padres - Autismo', 'Lic. Angela Herrera', 'Power Point', 'Este recurso presenta las principales funciones que ejercen los padres de familia en el hogar cuando tienen niños con Autismo, para brindar un desarrollo optimo en el mismo. '),
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
(35, 'Desarrollo de Juego de un Niño.pdf', 'vista/recurso/Desarrollo de Juego de un Niño.pdf', 'Desarrollo de Juego', 'Juegos - Selección de Juguetes para Niños ', 'Bright Children', 'PDF', 'Este documento proporciona diferentes juegos utilizados para desarrollar habilidades y destrezas con instrumentos o juguetes apropiados a la edad del niño. '),
(36, 'Duelo en Niños.pdf', 'vista/recurso/Duelo en Niños.pdf', 'Duelo en Niños', 'Duelo - Proceso para Niños', 'Elim Christian Services', 'PDF', 'Este documento provee información breve y relevante de como una persona puede apoyar a niños o adolescentes en el proceso del duelo.  También describe las diferentes fases del desarrollo en el que se pueden encontrar un niño o adolescente para comprender el significado del muerte.  '),
(37, 'Consejos y Técnicas para la Alimentación .doc', 'vista/recurso/Consejos y Técnicas para la Alimentación .doc', 'Consejos y Ténicas para la Alimentación', 'Alimentación - Consejos y Técnicas', 'Dr. Ken Bleile', 'Word', 'Este documento provee recomendaciones de técnicas de como dar de comer y beber a un niño para evitar aspirar.'),
(38, 'Guia de Alimentación TEA.pdf', 'vista/recurso/Guia de Alimentación TEA.pdf', 'Guía de Alimentación TEA', 'Autismo - Guía de Alimentación', 'Federación Autismo Madrid', 'PDF', 'La presente guía, hecho por la Federación Autismo Madrid, ¨trata de ofrecer una base de conocimientos teórico-prácticos necesarios para abordar con éxito los problemas de alimentación que con frecuencia se asocian a niños y niñas con Trastornos del Espectro del Autismo (TEA).¨'),
(39, 'La Habilitacion Audiologica Auditiva para Niños.pdf', 'vista/recurso/La Habilitacion Audiologica Auditiva para Niños.pdf', 'La Habilitación Audiológica/Auditiva para Niños', 'Audiologia - Habilitación para niños', 'Asociación Americana del Habla, Lenguaje y Audición', 'PDF', 'Este documento provee una breve explicación de los diferentes servicios tipicos de habilitación/rehabilitación auditiva para los niños. '),
(40, 'Los Efectos de la Perdida de Audicion en el Desarrollo.pdf', 'vista/recurso/Los Efectos de la Perdida de Audicion en el Desarrollo.pdf', 'Los Efectos de la Pérdida de Audición en el Desarrollo', 'Audiologia - Efectos en Desarrollo', 'Asociación Americana del Habla, Lenguaje y Audición', 'PDF', 'Este documento de la Asociación Americana del Habla, Lenguaje y Audición describe los efectos de la pérdida de audición en el desarrollo de un niño. (www.asha.org)'),
(41, 'Los Niños y los Auxiliares Auditivos.pdf', 'vista/recurso/Los Niños y los Auxiliares Auditivos.pdf', 'Los Niños y los Auxiliares Auditivos', 'Audiologia - Auxiliares Auditivos', 'Asociación Americana del Habla, Lenguaje y Audición', 'PDF', 'En este documento, la Asociación Americana del Habla, Lenguaje y Audición provee un breve explicación del uso de auxiliares auditivos en niños. '),
(42, 'Encuesta de articulacion - profesores.docx', 'vista/recurso/Encuesta de articulacion - profesores.docx', 'Encuesta de Articulación - Profesores', 'Articulación - Encuesta para Profesores', 'Tesoros de Dios', 'Word', 'Esta encuesta debe estar llenado por los profesores de un niño que está presentando dificultades en su articulación, con proposito de dar más información a la logopeda al momento de una evaluación.'),
(43, 'Encuesta de Habla y Lenguaje - Profesores.docx', 'vista/recurso/Encuesta de Habla y Lenguaje - Profesores.docx', 'Encuesta de Habla y Lenguaje - Profesores', 'Habla y Lenguaje - Encuesta para Profesores', 'Tesoros de Dios', 'Word', 'Esta encuesta debe estar llenado por los profesores de un niño que está teniendo dificultades y su habla y lenguaje, con proposito de dar más información a la logopeda al momento de una evaluación.'),
(44, 'Encuesta de lenguaje - profesores.docx', 'vista/recurso/Encuesta de lenguaje - profesores.docx', 'Encuesta de Lenguaje - Profesores', 'Lenguaje - Encuesta para Profesores', 'Tesoros de Dios', 'Word', 'Esta encuesta es parte de una evaluación de lenguaje de un niño que está presentando dificultades en esta area.  Debe estar llenado por los profesores del niño.  '),
(45, 'Encuesta para padres - Articulacion.pdf', 'vista/recurso/Encuesta para padres - Articulacion.pdf', 'Encuesta de Articulación - Padres', 'Articulación - Encuesta para Padres', 'Austin ISD Eligibility Manual', 'PDF', 'Esta encuesta debe estar llenado por los padres de un niño que está presentando dificultades en su articulación, con proposito de dar más información a la logopeda al momento de una evaluación.  '),
(46, 'Historial del Caso Clinico - para los padres.docx', 'vista/recurso/Historial del Caso Clinico - para los padres.docx', 'Historial del Caso Clinico para los Padres', 'Historial - Caso Clinico - Padres', 'Tesoros de Dios', 'Word', 'Este historial de caso clinico debe estar llenado por los padres de un niño presentando dificultades en su lenguaje, con proposito de dar mas información a la logopeda al momento de una evaluación.'),
(47, 'Historial del Caso Clinico.docx', 'vista/recurso/Historial del Caso Clinico.docx', 'Historial del Caso Clinico', 'Historial - Caso Clinico', 'Tesoros de Dios', 'Word', 'Este es un historial del caso clinico de un niño que está presentando algun atraso, especialmente en el lenguaje.  Generalmente es para uso al momento de una evaluación.  '),
(48, 'Lenguaje de Señas Manual de Bebes.pdf', 'vista/recurso/Lenguaje de Señas Manual de Bebes.pdf', 'Lenguaje de Señas Manual de Bebes', 'Lenguaje de Señas - Bebes', 'Super Duper Publications', 'PDF', 'L'),
(49, 'Lenguaje de Señas.pdf', 'vista/recurso/Lenguaje de Señas.pdf', 'Lenguaje de Señas', 'Lenguaje de Señas', 'Super Duper Publications', 'PDF', 'L'),
(50, 'Los Sistemas Aumentativos y Alternativos de Comunicación.docx', 'vista/recurso/Los Sistemas Aumentativos y Alternativos de Comunicación.docx', 'Los Sistemas Aumentativos y Alternativos de Comunicación', 'Sistemas de Comunicación', 'Asociación Americana del Habla, Lenguaje y Audición', 'Word', 'S'),
(51, 'Protocolo de Unir-Emparejar.pdf', 'vista/recurso/Protocolo de Unir-Emparejar.pdf', 'Protocolo de Unir/Emparejar', 'Unir/Emparejar - Lenguaje', 'Dra. Kathleen VanTol', 'PDF', 'E');

-- --------------------------------------------------------

--
-- Table structure for table `catrecursosvideos`
--

CREATE TABLE `catrecursosvideos` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `link` text NOT NULL,
  `titulo` text NOT NULL,
  `descripcion` text NOT NULL,
  `autor` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Guardar recursos audiovisual';

--
-- Dumping data for table `catrecursosvideos`
--

INSERT INTO `catrecursosvideos` (`id`, `nombre`, `link`, `titulo`, `descripcion`, `autor`) VALUES
(1, 'Recurso de video para aprender las vocales', 'https://www.youtube.com/watch?v=CqTXFbnG0ag', 'Ronda De Las Vocales, Canticuentos - Kids Song', 'Recurso para aprender las vocales, por medio audiovisual', 'Mundo Canticuentos - Kids Song');

-- --------------------------------------------------------

--
-- Table structure for table `catroles`
--

CREATE TABLE `catroles` (
  `rolid` int(11) NOT NULL,
  `catRolesDescripcion` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `catroles`
--

INSERT INTO `catroles` (`rolid`, `catRolesDescripcion`) VALUES
(1, 'Administrador'),
(2, 'Invitado'),
(3, 'Desactivado');

-- --------------------------------------------------------

--
-- Table structure for table `catTipoArchivo`
--

CREATE TABLE `catTipoArchivo` (
  `id` int(11) NOT NULL,
  `descripcion` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Normalizacion de tipo de archivo en cat recursos';

--
-- Dumping data for table `catTipoArchivo`
--

INSERT INTO `catTipoArchivo` (`id`, `descripcion`) VALUES
(1, 'Word'),
(2, 'PowerPoint'),
(3, 'Excel'),
(4, 'Publisher'),
(5, 'PDF');

-- --------------------------------------------------------

--
-- Table structure for table `unionetiquetacatrecursovideo`
--

CREATE TABLE `unionetiquetacatrecursovideo` (
  `id` int(11) NOT NULL,
  `recursovideoid` int(11) NOT NULL,
  `etiquetaid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='union Recursos Videos y etiquetas';

--
-- Dumping data for table `unionetiquetacatrecursovideo`
--

INSERT INTO `unionetiquetacatrecursovideo` (`id`, `recursovideoid`, `etiquetaid`) VALUES
(1, 1, 43),
(2, 1, 13);

-- --------------------------------------------------------

--
-- Table structure for table `unionetiquetascatrecurso`
--

CREATE TABLE `unionetiquetascatrecurso` (
  `id` int(11) NOT NULL,
  `idRecurso` int(11) NOT NULL,
  `idEtiqueta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Enlace etiqueta con el recurso para existir +1 lugar';

--
-- Dumping data for table `unionetiquetascatrecurso`
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
(415, 37, 26),
(416, 37, 13),
(417, 37, 13),
(418, 38, 26),
(419, 38, 13),
(420, 38, 7),
(421, 38, 13),
(425, 40, 27),
(426, 40, 13),
(427, 40, 13),
(435, 39, 27),
(436, 39, 13),
(437, 39, 13),
(438, 39, 13),
(439, 39, 13),
(440, 41, 27),
(441, 41, 13),
(442, 41, 13),
(443, 41, 13),
(444, 5, 3),
(445, 5, 14),
(446, 5, 46),
(447, 5, 46),
(448, 5, 46),
(449, 5, 46),
(450, 5, 46),
(451, 5, 46),
(452, 5, 13),
(453, 42, 28),
(454, 42, 13),
(455, 43, 28),
(456, 43, 13),
(457, 44, 28),
(458, 44, 13),
(459, 45, 28),
(460, 45, 13),
(461, 46, 28),
(462, 46, 13),
(463, 47, 28),
(464, 47, 13),
(465, 48, 30),
(466, 48, 13),
(467, 49, 30),
(468, 49, 13),
(469, 50, 31),
(470, 50, 13),
(471, 51, 33),
(472, 51, 13),
(477, 35, 4),
(478, 35, 19),
(479, 35, 13),
(480, 35, 13),
(481, 35, 13),
(487, 36, 4),
(488, 36, 13),
(489, 36, 13),
(490, 36, 13),
(491, 36, 13),
(492, 36, 13),
(493, 11, 4),
(494, 11, 7),
(495, 11, 13),
(496, 11, 13),
(497, 11, 13),
(498, 29, 1),
(499, 29, 37),
(500, 29, 13),
(501, 29, 13),
(502, 29, 13);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` text COLLATE utf8_spanish_ci NOT NULL,
  `clave` text COLLATE utf8_spanish_ci NOT NULL,
  `foto` text COLLATE utf8_spanish_ci NOT NULL,
  `rolid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='estructura de tabla de usuario';

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `clave`, `foto`, `rolid`) VALUES
(1, 'admin', 'tesoros', '', 1),
(2, 'guest', 'tesoros', '', 2),
(3, 'MAdams', '123456', 'vista/img/usuario/U33.png', 3),
(4, 'Michelle', 'tesoros', 'vista/img/usuario/U525.jpg', 1),
(5, 'Vantol', 'Tesoros', 'vista/img/usuario/U728.jpg', 2),
(6, 'AIppel', 'Tesoros', 'vista/img/usuario/U367.png', 2),
(7, 'BVillalobos', 'Tesoros', '', 2),
(8, 'ESanchez', 'Tesoros', '', 2),
(9, 'Alexandra', 'Tesoros', '', 2),
(10, 'pamador', 'tesoros', '', 2),
(11, 'Wendy', 'tesoros', '', 2),
(12, 'Ajarquin', 'Tesoros123', '', 2),
(13, 'Mrosales', 'Tesoros456', '', 2),
(14, 'JennyA', 'Tesoros123', '', 2),
(15, 'MilenaS', 'Tesoros123', '', 2),
(16, 'AZuniga', 'AZuniga', '', 2),
(17, 'Thamara', '2808', '', 2),
(18, 'Eydy', 'tesoros2021', '', 2),
(19, 'Camryn', 'trustnGod3!+', '', 2),
(20, 'Alexandra', 'tesoros2021', '', 2),
(21, 'phernandez', 'tesoros', '', 2),
(22, 'IvaniaAndrade', 'tesoros123', '', 2),
(23, 'AMSuarez', 'tesoros123', '', 2),
(24, 'Lordian', 'tesoros123', '', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artayuda`
--
ALTER TABLE `artayuda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catetiquetas`
--
ALTER TABLE `catetiquetas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catpaginas`
--
ALTER TABLE `catpaginas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idEtiqueta` (`idEtiqueta`);

--
-- Indexes for table `catrecursos`
--
ALTER TABLE `catrecursos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catrecursosvideos`
--
ALTER TABLE `catrecursosvideos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catroles`
--
ALTER TABLE `catroles`
  ADD PRIMARY KEY (`rolid`);

--
-- Indexes for table `catTipoArchivo`
--
ALTER TABLE `catTipoArchivo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unionetiquetacatrecursovideo`
--
ALTER TABLE `unionetiquetacatrecursovideo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recursovideoid` (`recursovideoid`),
  ADD KEY `etiquetaid` (`etiquetaid`);

--
-- Indexes for table `unionetiquetascatrecurso`
--
ALTER TABLE `unionetiquetascatrecurso`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idRecursoBiblioteca` (`idRecurso`),
  ADD KEY `idEtiquetaBiblioteca` (`idEtiqueta`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rolid` (`rolid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artayuda`
--
ALTER TABLE `artayuda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `catetiquetas`
--
ALTER TABLE `catetiquetas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `catpaginas`
--
ALTER TABLE `catpaginas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `catrecursos`
--
ALTER TABLE `catrecursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `catrecursosvideos`
--
ALTER TABLE `catrecursosvideos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `catroles`
--
ALTER TABLE `catroles`
  MODIFY `rolid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `catTipoArchivo`
--
ALTER TABLE `catTipoArchivo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `unionetiquetacatrecursovideo`
--
ALTER TABLE `unionetiquetacatrecursovideo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `unionetiquetascatrecurso`
--
ALTER TABLE `unionetiquetascatrecurso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=503;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `unionetiquetacatrecursovideo`
--
ALTER TABLE `unionetiquetacatrecursovideo`
  ADD CONSTRAINT `unionetiquetacatrecursovideo_ibfk_1` FOREIGN KEY (`etiquetaid`) REFERENCES `catetiquetas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `unionetiquetacatrecursovideo_ibfk_2` FOREIGN KEY (`recursovideoid`) REFERENCES `catrecursosvideos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `unionetiquetascatrecurso`
--
ALTER TABLE `unionetiquetascatrecurso`
  ADD CONSTRAINT `unionetiquetascatrecurso_ibfk_1` FOREIGN KEY (`idRecurso`) REFERENCES `catrecursos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `unionetiquetascatrecurso_ibfk_2` FOREIGN KEY (`idEtiqueta`) REFERENCES `catetiquetas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`rolid`) REFERENCES `catroles` (`rolid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
