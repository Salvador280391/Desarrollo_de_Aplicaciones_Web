-- MySQL dump 10.13  Distrib 5.7.26, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: hotelAlameda
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
-- Table structure for table `Comentario`
--

DROP TABLE IF EXISTS `Comentario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Comentario` (
  `idComentario` int(11) NOT NULL AUTO_INCREMENT,
  `comentario` varchar(300) DEFAULT NULL,
  `fechaC` date DEFAULT NULL,
  `satatusC` tinyint(1) DEFAULT NULL,
  `Usuario_idUsuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`idComentario`),
  KEY `Usuario_idUsuario` (`Usuario_idUsuario`),
  CONSTRAINT `Comentario_ibfk_1` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `Usuario` (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Comentario`
--

LOCK TABLES `Comentario` WRITE;
/*!40000 ALTER TABLE `Comentario` DISABLE KEYS */;
INSERT INTO `Comentario` VALUES (2,' Me gustaría conocer su hotel','2019-07-31',NULL,5),(3,'hola','2019-08-01',NULL,5),(5,'Envío idUsuario',NULL,NULL,4),(6,' Prueba de fecha automática ','2019-08-01',NULL,4);
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
  `Habitacion_numHabitacion` int(11) DEFAULT NULL,
  `totalR` double DEFAULT NULL,
  PRIMARY KEY (`idDetalleReservacion`),
  KEY `Reservacion_idReservacion` (`Reservacion_idReservacion`),
  KEY `Habitacion_numHabitacion` (`Habitacion_numHabitacion`),
  CONSTRAINT `DetalleReservacion_ibfk_1` FOREIGN KEY (`Reservacion_idReservacion`) REFERENCES `Reservacion` (`idReservacion`),
  CONSTRAINT `DetalleReservacion_ibfk_2` FOREIGN KEY (`Habitacion_numHabitacion`) REFERENCES `Habitacion` (`numHabitacion`)
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
  `numHabitacion` int(11) NOT NULL,
  `descripcionH` varchar(250) DEFAULT NULL,
  `cantPersonas` int(11) DEFAULT NULL,
  `precio` double DEFAULT NULL,
  `imagenH` varchar(100) DEFAULT NULL,
  `statusH` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`numHabitacion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Habitacion`
--

LOCK TABLES `Habitacion` WRITE;
/*!40000 ALTER TABLE `Habitacion` DISABLE KEYS */;
INSERT INTO `Habitacion` VALUES (1,'2 camas matrimoniales',4,450,'4cf19-habitaciond1.jpg',NULL),(2,'1 cama matrimonial',2,320,'3705d-habitacioni2.jpg',1),(3,'1 cama individual ',1,250,'563a1-habitacioni1.jpg',NULL),(4,'3 camas individuales',3,530,'73e1d-habitaciont1.jpg',NULL);
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
  `mensaje` varchar(300) DEFAULT NULL,
  `fechaM` date DEFAULT NULL,
  `respuestaM` varchar(250) DEFAULT NULL,
  `Usuario_idUsuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`idMensaje`),
  KEY `Usuario_idUsuario` (`Usuario_idUsuario`),
  CONSTRAINT `Mensaje_ibfk_1` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `Usuario` (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Mensaje`
--

LOCK TABLES `Mensaje` WRITE;
/*!40000 ALTER TABLE `Mensaje` DISABLE KEYS */;
INSERT INTO `Mensaje` VALUES (1,'Hola buenas tardes como puedo hacer una reservación ','2019-07-30','Hola jose es muy facil solo debes ir a la sección habitaciones y dar clic en el boton agregar a reservación y listo ',3),(3,' Prueba de fecha en mensajes ','2019-08-01',NULL,4);
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
  `noticia` varchar(300) DEFAULT NULL,
  `imagenN` varchar(100) DEFAULT NULL,
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
-- Table structure for table `Privilegio`
--

DROP TABLE IF EXISTS `Privilegio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Privilegio` (
  `idPrivilegio` int(11) NOT NULL AUTO_INCREMENT,
  `nombreP` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idPrivilegio`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Privilegio`
--

LOCK TABLES `Privilegio` WRITE;
/*!40000 ALTER TABLE `Privilegio` DISABLE KEYS */;
INSERT INTO `Privilegio` VALUES (1,'Cliente'),(2,'Administrador');
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
  `Usuario_idUsuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`idReservacion`),
  KEY `Usuario_idUsuario` (`Usuario_idUsuario`),
  CONSTRAINT `Reservacion_ibfk_1` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `Usuario` (`idUsuario`)
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
  `nombreU` varchar(50) DEFAULT NULL,
  `apellidoU` varchar(50) DEFAULT NULL,
  `telefonoU` varchar(50) DEFAULT NULL,
  `correoU` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `Privilegio_idPrivilegio` int(11) DEFAULT NULL,
  PRIMARY KEY (`idUsuario`),
  KEY `Privilegio_idPrivilegio` (`Privilegio_idPrivilegio`),
  CONSTRAINT `Usuario_ibfk_1` FOREIGN KEY (`Privilegio_idPrivilegio`) REFERENCES `Privilegio` (`idPrivilegio`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Usuario`
--

LOCK TABLES `Usuario` WRITE;
/*!40000 ALTER TABLE `Usuario` DISABLE KEYS */;
INSERT INTO `Usuario` VALUES (1,'andres','perez','1234567890','andres@gmail.com','$2y$10$BsrhSlFUC8UJjgUQIa92cOgIPW8PvVCu3MhJ0kwhwA3ebfpzzw/dK',2),(3,'jose','perez','23468797671','jose@gmail.com',NULL,2),(4,'samuel','perdomo','1234567890','samuel@gmail.com','$2y$10$xzHb/7nHq96tz/vVJpE9seWUuOhVqVw9EBnUPAIY/M41jn4UotFkm',1),(5,'saul','mora','34434645334','saul@gmail.com',NULL,NULL),(6,'lusia','lopez','1224566876','lusia@gmail.com','$2y$10$yuFcPuMB.SXomYV13wFjFuUy5HUhF4GHoAOYBVJY.u47KkA8POVja',1);
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

-- Dump completed on 2019-08-02  2:38:16
