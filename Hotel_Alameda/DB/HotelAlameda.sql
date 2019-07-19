-- MySQL dump 10.13  Distrib 5.7.26, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: HotelAlameda
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.38-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Cliente`
--

DROP TABLE IF EXISTS `Cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Cliente` (
  `idCliente` int(11) NOT NULL AUTO_INCREMENT,
  `nombreCl` varchar(70) DEFAULT NULL,
  `apellidoCl` varchar(70) DEFAULT NULL,
  `telefonoCl` varchar(30) DEFAULT NULL,
  `correoCl` varchar(100) DEFAULT NULL,
  `Usuario_idUsuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`idCliente`),
  KEY `Usuario_idUsuario` (`Usuario_idUsuario`),
  CONSTRAINT `Cliente_ibfk_1` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `Usuario` (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Cliente`
--

LOCK TABLES `Cliente` WRITE;
/*!40000 ALTER TABLE `Cliente` DISABLE KEYS */;
INSERT INTO `Cliente` VALUES (1,'saul','lopez','7412589630','solerno@gmail.com',NULL),(2,'victoria','alcantara','4474578547','victoria@gmail.com',NULL),(3,'Angel','Toral','4785632101','Angel@gmail.com',NULL),(4,'Salvador','Toral','478965632110','Salvador@gmail.com',NULL),(5,'salomon','perdomo','3456789074','salomon@gmail.com',NULL);
/*!40000 ALTER TABLE `Cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Comentario`
--

DROP TABLE IF EXISTS `Comentario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Comentario` (
  `idComentario` int(11) NOT NULL AUTO_INCREMENT,
  `comentario` varchar(250) DEFAULT NULL,
  `fechaC` date DEFAULT NULL,
  `statusC` tinyint(1) DEFAULT NULL,
  `Cliente_idCliente` int(11) DEFAULT NULL,
  PRIMARY KEY (`idComentario`),
  KEY `Cliente_idCliente` (`Cliente_idCliente`),
  CONSTRAINT `Comentario_ibfk_1` FOREIGN KEY (`Cliente_idCliente`) REFERENCES `Cliente` (`idCliente`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Comentario`
--

LOCK TABLES `Comentario` WRITE;
/*!40000 ALTER TABLE `Comentario` DISABLE KEYS */;
INSERT INTO `Comentario` VALUES (1,' d','2019-07-17',1,1),(2,' Hola amigo','2019-07-18',0,5);
/*!40000 ALTER TABLE `Comentario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `DetalleReservacion`
--

DROP TABLE IF EXISTS `DetalleReservacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `DetalleReservacion` (
  `idDetalleReservacion` int(11) NOT NULL AUTO_INCREMENT,
  `Reservacion_idReservacion` int(11) DEFAULT NULL,
  `Habitacion_idHabitacion` int(11) DEFAULT NULL,
  `totalR` double DEFAULT NULL,
  PRIMARY KEY (`idDetalleReservacion`),
  KEY `Reservacion_idReservacion` (`Reservacion_idReservacion`),
  KEY `Habitacion_idHabitacion` (`Habitacion_idHabitacion`),
  CONSTRAINT `DetalleReservacion_ibfk_1` FOREIGN KEY (`Reservacion_idReservacion`) REFERENCES `Reservacion` (`idReservacion`),
  CONSTRAINT `DetalleReservacion_ibfk_2` FOREIGN KEY (`Habitacion_idHabitacion`) REFERENCES `Habitacion` (`numHabitacion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `DetalleReservacion`
--

LOCK TABLES `DetalleReservacion` WRITE;
/*!40000 ALTER TABLE `DetalleReservacion` DISABLE KEYS */;
/*!40000 ALTER TABLE `DetalleReservacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Habitacion`
--

DROP TABLE IF EXISTS `Habitacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Habitacion` (
  `numHabitacion` int(11) NOT NULL AUTO_INCREMENT,
  `descripcionH` varchar(250) DEFAULT NULL,
  `cantPersonas` int(11) DEFAULT NULL,
  `precio` double DEFAULT NULL,
  `imagenH` varchar(250) DEFAULT NULL,
  `statusH` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`numHabitacion`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Habitacion`
--

LOCK TABLES `Habitacion` WRITE;
/*!40000 ALTER TABLE `Habitacion` DISABLE KEYS */;
INSERT INTO `Habitacion` VALUES (1,'1 CAMA MATRIMONIAL ',2,220,'ae825-habitacioni1.jpg',0),(2,'2 CAMAS MATRIMONIALES ',2,449,'0ea95-habitaciond2.jpg',1);
/*!40000 ALTER TABLE `Habitacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Mensaje`
--

DROP TABLE IF EXISTS `Mensaje`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Mensaje` (
  `idMensaje` int(11) NOT NULL AUTO_INCREMENT,
  `mensaje` varchar(250) DEFAULT NULL,
  `fechaM` date DEFAULT NULL,
  `respuestaM` varchar(250) DEFAULT NULL,
  `Cliente_idCliente` int(11) DEFAULT NULL,
  PRIMARY KEY (`idMensaje`),
  KEY `Cliente_idCliente` (`Cliente_idCliente`),
  CONSTRAINT `Mensaje_ibfk_1` FOREIGN KEY (`Cliente_idCliente`) REFERENCES `Cliente` (`idCliente`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Mensaje`
--

LOCK TABLES `Mensaje` WRITE;
/*!40000 ALTER TABLE `Mensaje` DISABLE KEYS */;
INSERT INTO `Mensaje` VALUES (1,'hola ','2019-07-18','Hola victoria',2),(2,'Hola heeermanitooo ','2019-07-18','Hola Angel',3),(3,'Hola Clientw ','2019-07-18','Hola Salomon',5);
/*!40000 ALTER TABLE `Mensaje` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Noticia`
--

DROP TABLE IF EXISTS `Noticia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Noticia` (
  `idNoticia` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(70) DEFAULT NULL,
  `noticia` varchar(250) DEFAULT NULL,
  `imagenN` varchar(250) DEFAULT NULL,
  `Usuario_idUsuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`idNoticia`),
  KEY `Usuario_idUsuario` (`Usuario_idUsuario`),
  CONSTRAINT `Noticia_ibfk_1` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `Usuario` (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Noticia`
--

LOCK TABLES `Noticia` WRITE;
/*!40000 ALTER TABLE `Noticia` DISABLE KEYS */;
INSERT INTO `Noticia` VALUES (1,'RENTA DE ESPACIO PARA CONFERENCIAS',' ¿Buscas un lugar donde impartir cursos de belleza, manualidades, faciales, conferencias , platicas, etc.?  HOTEL ALAMEDA MARAVATIO te ofrece un espacio con un ambiente cómodo y agradable para tus clientes.  Capacidad de 30 a 40 personas. Medidas ...','1f657-foto.jpg',NULL),(3,'Tu Hotel Ideal','Esta a tan solo 200 metros ( 3 min ) del Centro de Maravatio .  ¡ Que esperas para visitarnos !','d6f70-map.jpg',NULL);
/*!40000 ALTER TABLE `Noticia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Privilegio`
--

DROP TABLE IF EXISTS `Privilegio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Privilegio` (
  `idPrivilegio` int(11) NOT NULL AUTO_INCREMENT,
  `nombreP` varchar(50) DEFAULT NULL,
  `descripcionP` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`idPrivilegio`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Privilegio`
--

LOCK TABLES `Privilegio` WRITE;
/*!40000 ALTER TABLE `Privilegio` DISABLE KEYS */;
/*!40000 ALTER TABLE `Privilegio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Reservacion`
--

DROP TABLE IF EXISTS `Reservacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Reservacion` (
  `idReservacion` int(11) NOT NULL AUTO_INCREMENT,
  `fechaLlegada` date DEFAULT NULL,
  `fechaSalida` date DEFAULT NULL,
  `Cliente_idCliente` int(11) DEFAULT NULL,
  PRIMARY KEY (`idReservacion`),
  KEY `Cliente_idCliente` (`Cliente_idCliente`),
  CONSTRAINT `Reservacion_ibfk_1` FOREIGN KEY (`Cliente_idCliente`) REFERENCES `Cliente` (`idCliente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Reservacion`
--

LOCK TABLES `Reservacion` WRITE;
/*!40000 ALTER TABLE `Reservacion` DISABLE KEYS */;
/*!40000 ALTER TABLE `Reservacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Usuario`
--

DROP TABLE IF EXISTS `Usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombreU` varchar(70) DEFAULT NULL,
  `apellidoU` varchar(70) DEFAULT NULL,
  `telefonoU` varchar(30) DEFAULT NULL,
  `correoU` varchar(100) DEFAULT NULL,
  `fotoU` varchar(250) DEFAULT NULL,
  `password` blob,
  `Privilegio_idPrivilegio` int(11) DEFAULT NULL,
  PRIMARY KEY (`idUsuario`),
  KEY `Privilegio_idPrivilegio` (`Privilegio_idPrivilegio`),
  CONSTRAINT `Usuario_ibfk_1` FOREIGN KEY (`Privilegio_idPrivilegio`) REFERENCES `Privilegio` (`idPrivilegio`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Usuario`
--

LOCK TABLES `Usuario` WRITE;
/*!40000 ALTER TABLE `Usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `Usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-07-18 21:25:04
