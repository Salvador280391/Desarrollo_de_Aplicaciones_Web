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
  `nombreCl` varchar(50) DEFAULT NULL,
  `apellidoCl` varchar(70) DEFAULT NULL,
  `telefonoCl` varchar(15) DEFAULT NULL,
  `correoCl` varchar(70) DEFAULT NULL,
  PRIMARY KEY (`idCliente`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Cliente`
--

LOCK TABLES `Cliente` WRITE;
/*!40000 ALTER TABLE `Cliente` DISABLE KEYS */;
INSERT INTO `Cliente` VALUES (1,'Julio','Solerno rojas','4471000000','solerno@gmail.com');
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
  `Usuario_idUsuario` int(11) DEFAULT NULL,
  `Cliente_idCliente` int(11) DEFAULT NULL,
  PRIMARY KEY (`idComentario`),
  KEY `Usuario_idUsuario` (`Usuario_idUsuario`),
  KEY `Cliente_idCliente` (`Cliente_idCliente`),
  CONSTRAINT `Comentario_ibfk_1` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `Usuario` (`idUsuario`),
  CONSTRAINT `Comentario_ibfk_2` FOREIGN KEY (`Cliente_idCliente`) REFERENCES `Cliente` (`idCliente`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Comentario`
--

LOCK TABLES `Comentario` WRITE;
/*!40000 ALTER TABLE `Comentario` DISABLE KEYS */;
INSERT INTO `Comentario` VALUES (1,'Muy buen servicio','2019-06-20',0,NULL,1);
/*!40000 ALTER TABLE `Comentario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `DetalleReserva`
--

DROP TABLE IF EXISTS `DetalleReserva`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `DetalleReserva` (
  `idDetalleReserva` int(11) NOT NULL AUTO_INCREMENT,
  `Reservacion_idReservacion` int(11) DEFAULT NULL,
  `Habitacion_numHabitacion` int(11) DEFAULT NULL,
  PRIMARY KEY (`idDetalleReserva`),
  KEY `Reservacion_idReservacion` (`Reservacion_idReservacion`),
  KEY `Habitacion_numHabitacion` (`Habitacion_numHabitacion`),
  CONSTRAINT `DetalleReserva_ibfk_1` FOREIGN KEY (`Reservacion_idReservacion`) REFERENCES `Reservacion` (`idReservacion`),
  CONSTRAINT `DetalleReserva_ibfk_2` FOREIGN KEY (`Habitacion_numHabitacion`) REFERENCES `Habitacion` (`numHabitacion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `DetalleReserva`
--

LOCK TABLES `DetalleReserva` WRITE;
/*!40000 ALTER TABLE `DetalleReserva` DISABLE KEYS */;
/*!40000 ALTER TABLE `DetalleReserva` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Habitacion`
--

DROP TABLE IF EXISTS `Habitacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Habitacion` (
  `numHabitacion` int(11) NOT NULL,
  `descripcion` varchar(250) DEFAULT NULL,
  `cantPersonas` int(11) DEFAULT NULL,
  `precio` double DEFAULT NULL,
  `imagenH` blob,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`numHabitacion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Habitacion`
--

LOCK TABLES `Habitacion` WRITE;
/*!40000 ALTER TABLE `Habitacion` DISABLE KEYS */;
INSERT INTO `Habitacion` VALUES (1,'Habitacion de 1 cama matrimonial',2,200,_binary 'dfd',1);
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
  `respuesta` varchar(250) DEFAULT NULL,
  `Usuario_idUsuario` int(11) DEFAULT NULL,
  `Cliente_idCliente` int(11) DEFAULT NULL,
  PRIMARY KEY (`idMensaje`),
  KEY `Usuario_idUsuario` (`Usuario_idUsuario`),
  KEY `Cliente_idCliente` (`Cliente_idCliente`),
  CONSTRAINT `Mensaje_ibfk_1` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `Usuario` (`idUsuario`),
  CONSTRAINT `Mensaje_ibfk_2` FOREIGN KEY (`Cliente_idCliente`) REFERENCES `Cliente` (`idCliente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Mensaje`
--

LOCK TABLES `Mensaje` WRITE;
/*!40000 ALTER TABLE `Mensaje` DISABLE KEYS */;
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
  `titulo` varchar(50) DEFAULT NULL,
  `noticia` varchar(250) DEFAULT NULL,
  `imagenN` blob,
  `Usuario_idUsuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`idNoticia`),
  KEY `Usuario_idUsuario` (`Usuario_idUsuario`),
  CONSTRAINT `Noticia_ibfk_1` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `Usuario` (`idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Noticia`
--

LOCK TABLES `Noticia` WRITE;
/*!40000 ALTER TABLE `Noticia` DISABLE KEYS */;
/*!40000 ALTER TABLE `Noticia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Reservacion`
--

DROP TABLE IF EXISTS `Reservacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Reservacion` (
  `idReservacion` int(11) NOT NULL AUTO_INCREMENT,
  `pago` double DEFAULT NULL,
  `fechaEntr` date DEFAULT NULL,
  `fechaSal` date DEFAULT NULL,
  `Usuario_idUsuario` int(11) DEFAULT NULL,
  `Cliente_idCliente` int(11) DEFAULT NULL,
  PRIMARY KEY (`idReservacion`),
  KEY `Usuario_idUsuario` (`Usuario_idUsuario`),
  KEY `Cliente_idCliente` (`Cliente_idCliente`),
  CONSTRAINT `Reservacion_ibfk_1` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `Usuario` (`idUsuario`),
  CONSTRAINT `Reservacion_ibfk_2` FOREIGN KEY (`Cliente_idCliente`) REFERENCES `Cliente` (`idCliente`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Reservacion`
--

LOCK TABLES `Reservacion` WRITE;
/*!40000 ALTER TABLE `Reservacion` DISABLE KEYS */;
INSERT INTO `Reservacion` VALUES (1,200,'2019-06-08','2019-06-10',NULL,1);
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
  `nombreU` varchar(50) DEFAULT NULL,
  `apellidoU` varchar(70) DEFAULT NULL,
  `telefonoU` varchar(15) DEFAULT NULL,
  `correoU` varchar(70) DEFAULT NULL,
  `passwordU` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idUsuario`)
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

-- Dump completed on 2019-06-20 18:35:39
