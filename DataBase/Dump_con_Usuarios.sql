CREATE DATABASE  IF NOT EXISTS `database` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `database`;
-- MySQL dump 10.13  Distrib 8.0.26, for Win64 (x86_64)
--
-- Host: localhost    Database: MyQ
-- ------------------------------------------------------
-- Server version	5.7.35

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Administrador`
--

DROP TABLE IF EXISTS `Administrador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Administrador` (
  `IDPersona` int(11) NOT NULL,
  PRIMARY KEY (`IDPersona`),
  CONSTRAINT `Administrador_ibfk_1` FOREIGN KEY (`IDPersona`) REFERENCES `Persona` (`IDPersona`),
  CONSTRAINT `Administrador_ibfk_2` FOREIGN KEY (`IDPersona`) REFERENCES `Persona` (`IDPersona`),
  CONSTRAINT `Administrador_ibfk_3` FOREIGN KEY (`IDPersona`) REFERENCES `Persona` (`IDPersona`),
  CONSTRAINT `Administrador_ibfk_4` FOREIGN KEY (`IDPersona`) REFERENCES `Persona` (`IDPersona`),
  CONSTRAINT `Administrador_ibfk_5` FOREIGN KEY (`IDPersona`) REFERENCES `Persona` (`IDPersona`),
  CONSTRAINT `Administrador_ibfk_6` FOREIGN KEY (`IDPersona`) REFERENCES `Persona` (`IDPersona`),
  CONSTRAINT `Administrador_ibfk_7` FOREIGN KEY (`IDPersona`) REFERENCES `Persona` (`IDPersona`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Administrador`
--

LOCK TABLES `Administrador` WRITE;
/*!40000 ALTER TABLE `Administrador` DISABLE KEYS */;
INSERT INTO `Administrador` VALUES (1);
/*!40000 ALTER TABLE `Administrador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Alumno`
--

DROP TABLE IF EXISTS `Alumno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Alumno` (
  `IDPersona` int(11) NOT NULL,
  `NickName` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estadoInscripcion` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`IDPersona`),
  CONSTRAINT `Alumno_ibfk_1` FOREIGN KEY (`IDPersona`) REFERENCES `Persona` (`IDPersona`),
  CONSTRAINT `Alumno_ibfk_2` FOREIGN KEY (`IDPersona`) REFERENCES `Persona` (`IDPersona`),
  CONSTRAINT `Alumno_ibfk_3` FOREIGN KEY (`IDPersona`) REFERENCES `Persona` (`IDPersona`),
  CONSTRAINT `Alumno_ibfk_4` FOREIGN KEY (`IDPersona`) REFERENCES `Persona` (`IDPersona`),
  CONSTRAINT `Alumno_ibfk_5` FOREIGN KEY (`IDPersona`) REFERENCES `Persona` (`IDPersona`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Alumno`
--

LOCK TABLES `Alumno` WRITE;
/*!40000 ALTER TABLE `Alumno` DISABLE KEYS */;
INSERT INTO `Alumno` VALUES (33,NULL,1),(34,NULL,1),(35,NULL,1),(36,NULL,1);
/*!40000 ALTER TABLE `Alumno` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Asignatura`
--

DROP TABLE IF EXISTS `Asignatura`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Asignatura` (
  `IDAsignatura` int(11) NOT NULL AUTO_INCREMENT,
  `NomAsignatura` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`IDAsignatura`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Asignatura`
--

LOCK TABLES `Asignatura` WRITE;
/*!40000 ALTER TABLE `Asignatura` DISABLE KEYS */;
INSERT INTO `Asignatura` VALUES (21,'Matematica'),(22,'APT'),(23,'Biologia'),(24,'Programacion I');
/*!40000 ALTER TABLE `Asignatura` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Asignatura_Docente`
--

DROP TABLE IF EXISTS `Asignatura_Docente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Asignatura_Docente` (
  `IDAsignatura` int(11) NOT NULL,
  `IDDocente` int(11) NOT NULL,
  PRIMARY KEY (`IDAsignatura`,`IDDocente`),
  KEY `IDDocente` (`IDDocente`),
  CONSTRAINT `Asignatura_Docente_ibfk_1` FOREIGN KEY (`IDAsignatura`) REFERENCES `Asignatura` (`IDAsignatura`),
  CONSTRAINT `Asignatura_Docente_ibfk_2` FOREIGN KEY (`IDDocente`) REFERENCES `Docente` (`IDPersona`),
  CONSTRAINT `Asignatura_Docente_ibfk_3` FOREIGN KEY (`IDAsignatura`) REFERENCES `Asignatura` (`IDAsignatura`),
  CONSTRAINT `Asignatura_Docente_ibfk_4` FOREIGN KEY (`IDDocente`) REFERENCES `Docente` (`IDPersona`),
  CONSTRAINT `Asignatura_Docente_ibfk_5` FOREIGN KEY (`IDAsignatura`) REFERENCES `Asignatura` (`IDAsignatura`),
  CONSTRAINT `Asignatura_Docente_ibfk_6` FOREIGN KEY (`IDDocente`) REFERENCES `Docente` (`IDPersona`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Asignatura_Docente`
--

LOCK TABLES `Asignatura_Docente` WRITE;
/*!40000 ALTER TABLE `Asignatura_Docente` DISABLE KEYS */;
INSERT INTO `Asignatura_Docente` VALUES (24,37),(23,38),(22,39),(21,40);
/*!40000 ALTER TABLE `Asignatura_Docente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Asignatura_Grupo`
--

DROP TABLE IF EXISTS `Asignatura_Grupo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Asignatura_Grupo` (
  `IDAsignatura` int(11) NOT NULL,
  `IDGrupo` int(11) NOT NULL,
  PRIMARY KEY (`IDAsignatura`,`IDGrupo`),
  KEY `IDGrupo` (`IDGrupo`),
  CONSTRAINT `Asignatura_Grupo_ibfk_1` FOREIGN KEY (`IDAsignatura`) REFERENCES `Asignatura` (`IDAsignatura`),
  CONSTRAINT `Asignatura_Grupo_ibfk_2` FOREIGN KEY (`IDGrupo`) REFERENCES `Grupo` (`IDGrupo`),
  CONSTRAINT `Asignatura_Grupo_ibfk_3` FOREIGN KEY (`IDAsignatura`) REFERENCES `Asignatura` (`IDAsignatura`),
  CONSTRAINT `Asignatura_Grupo_ibfk_4` FOREIGN KEY (`IDGrupo`) REFERENCES `Grupo` (`IDGrupo`),
  CONSTRAINT `Asignatura_Grupo_ibfk_5` FOREIGN KEY (`IDAsignatura`) REFERENCES `Asignatura` (`IDAsignatura`),
  CONSTRAINT `Asignatura_Grupo_ibfk_6` FOREIGN KEY (`IDGrupo`) REFERENCES `Grupo` (`IDGrupo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Asignatura_Grupo`
--

LOCK TABLES `Asignatura_Grupo` WRITE;
/*!40000 ALTER TABLE `Asignatura_Grupo` DISABLE KEYS */;
INSERT INTO `Asignatura_Grupo` VALUES (21,17),(22,17),(23,17),(24,17),(21,18),(22,18),(23,18);
/*!40000 ALTER TABLE `Asignatura_Grupo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Chat`
--

DROP TABLE IF EXISTS `Chat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Chat` (
  `IDChat` int(11) NOT NULL AUTO_INCREMENT,
  `IDDocente` int(11) NOT NULL,
  `IDGrupo` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` tinyint(4) NOT NULL,
  `fechaHora` datetime DEFAULT NULL,
  `Descripcion` varchar(155) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`IDChat`),
  KEY `IDDocente` (`IDDocente`),
  KEY `IDGrupo` (`IDGrupo`),
  CONSTRAINT `Chat_ibfk_1` FOREIGN KEY (`IDDocente`) REFERENCES `Docente` (`IDPersona`),
  CONSTRAINT `Chat_ibfk_2` FOREIGN KEY (`IDGrupo`) REFERENCES `Grupo` (`IDGrupo`),
  CONSTRAINT `Chat_ibfk_3` FOREIGN KEY (`IDDocente`) REFERENCES `Docente` (`IDPersona`),
  CONSTRAINT `Chat_ibfk_4` FOREIGN KEY (`IDDocente`) REFERENCES `Docente` (`IDPersona`),
  CONSTRAINT `Chat_ibfk_5` FOREIGN KEY (`IDDocente`) REFERENCES `Docente` (`IDPersona`),
  CONSTRAINT `Chat_ibfk_6` FOREIGN KEY (`IDGrupo`) REFERENCES `Grupo` (`IDGrupo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Chat`
--

LOCK TABLES `Chat` WRITE;
/*!40000 ALTER TABLE `Chat` DISABLE KEYS */;
/*!40000 ALTER TABLE `Chat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Consulta`
--

DROP TABLE IF EXISTS `Consulta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Consulta` (
  `IDConsulta` int(11) NOT NULL AUTO_INCREMENT,
  `IDDocente` int(11) NOT NULL,
  `IDAlumno` int(11) NOT NULL,
  `asunto` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `consulta` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `respuesta` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fechaHora` datetime DEFAULT NULL,
  `estado` enum('Enviado','Recibido','Leido','Contestado') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`IDConsulta`),
  KEY `IDDocente` (`IDDocente`),
  KEY `IDAlumno` (`IDAlumno`),
  CONSTRAINT `Consulta_ibfk_1` FOREIGN KEY (`IDDocente`) REFERENCES `Docente` (`IDPersona`),
  CONSTRAINT `Consulta_ibfk_2` FOREIGN KEY (`IDAlumno`) REFERENCES `Alumno` (`IDPersona`),
  CONSTRAINT `Consulta_ibfk_3` FOREIGN KEY (`IDDocente`) REFERENCES `Docente` (`IDPersona`),
  CONSTRAINT `Consulta_ibfk_4` FOREIGN KEY (`IDAlumno`) REFERENCES `Alumno` (`IDPersona`),
  CONSTRAINT `Consulta_ibfk_5` FOREIGN KEY (`IDDocente`) REFERENCES `Docente` (`IDPersona`),
  CONSTRAINT `Consulta_ibfk_6` FOREIGN KEY (`IDAlumno`) REFERENCES `Alumno` (`IDPersona`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Consulta`
--

LOCK TABLES `Consulta` WRITE;
/*!40000 ALTER TABLE `Consulta` DISABLE KEYS */;
/*!40000 ALTER TABLE `Consulta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Docente`
--

DROP TABLE IF EXISTS `Docente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Docente` (
  `IDPersona` int(11) NOT NULL,
  `DiasDisponibles` varchar(90) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `HoraInicio` time DEFAULT NULL,
  `HoraFinalizacion` time DEFAULT NULL,
  PRIMARY KEY (`IDPersona`),
  CONSTRAINT `Docente_ibfk_1` FOREIGN KEY (`IDPersona`) REFERENCES `Persona` (`IDPersona`),
  CONSTRAINT `Docente_ibfk_2` FOREIGN KEY (`IDPersona`) REFERENCES `Persona` (`IDPersona`),
  CONSTRAINT `Docente_ibfk_3` FOREIGN KEY (`IDPersona`) REFERENCES `Persona` (`IDPersona`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Docente`
--

LOCK TABLES `Docente` WRITE;
/*!40000 ALTER TABLE `Docente` DISABLE KEYS */;
INSERT INTO `Docente` VALUES (37,NULL,NULL,NULL),(38,NULL,NULL,NULL),(39,NULL,NULL,NULL),(40,NULL,NULL,NULL);
/*!40000 ALTER TABLE `Docente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Grupo`
--

DROP TABLE IF EXISTS `Grupo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Grupo` (
  `IDGrupo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orientacion` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`IDGrupo`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Grupo`
--

LOCK TABLES `Grupo` WRITE;
/*!40000 ALTER TABLE `Grupo` DISABLE KEYS */;
INSERT INTO `Grupo` VALUES (17,'3eroBE','Desarrollo Web',1),(18,'1eroBH','Comun',1);
/*!40000 ALTER TABLE `Grupo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MensajeChat`
--

DROP TABLE IF EXISTS `MensajeChat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `MensajeChat` (
  `IDMensaje` int(11) NOT NULL AUTO_INCREMENT,
  `IDChat` int(11) NOT NULL,
  `IDPersona` int(11) NOT NULL,
  `texto` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fechaHora` datetime DEFAULT NULL,
  PRIMARY KEY (`IDMensaje`),
  KEY `IDPersona` (`IDPersona`),
  KEY `IDChat` (`IDChat`),
  CONSTRAINT `MensajeChat_ibfk_1` FOREIGN KEY (`IDPersona`) REFERENCES `Persona` (`IDPersona`),
  CONSTRAINT `MensajeChat_ibfk_2` FOREIGN KEY (`IDChat`) REFERENCES `Chat` (`IDChat`),
  CONSTRAINT `MensajeChat_ibfk_3` FOREIGN KEY (`IDChat`) REFERENCES `Chat` (`IDChat`),
  CONSTRAINT `MensajeChat_ibfk_4` FOREIGN KEY (`IDPersona`) REFERENCES `Persona` (`IDPersona`),
  CONSTRAINT `MensajeChat_ibfk_5` FOREIGN KEY (`IDChat`) REFERENCES `Chat` (`IDChat`),
  CONSTRAINT `MensajeChat_ibfk_6` FOREIGN KEY (`IDPersona`) REFERENCES `Persona` (`IDPersona`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MensajeChat`
--

LOCK TABLES `MensajeChat` WRITE;
/*!40000 ALTER TABLE `MensajeChat` DISABLE KEYS */;
/*!40000 ALTER TABLE `MensajeChat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Participa`
--

DROP TABLE IF EXISTS `Participa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Participa` (
  `IDChat` int(11) NOT NULL AUTO_INCREMENT,
  `anfitrion` int(11) NOT NULL,
  PRIMARY KEY (`IDChat`),
  KEY `IDChat` (`IDChat`),
  KEY `anfitrion` (`anfitrion`),
  CONSTRAINT `Participa_ibfk_2` FOREIGN KEY (`IDChat`) REFERENCES `Chat` (`IDChat`),
  CONSTRAINT `Participa_ibfk_3` FOREIGN KEY (`IDChat`) REFERENCES `Chat` (`IDChat`),
  CONSTRAINT `Participa_ibfk_4` FOREIGN KEY (`anfitrion`) REFERENCES `Alumno` (`IDPersona`),
  CONSTRAINT `Participa_ibfk_5` FOREIGN KEY (`IDChat`) REFERENCES `Chat` (`IDChat`),
  CONSTRAINT `Participa_ibfk_6` FOREIGN KEY (`anfitrion`) REFERENCES `Alumno` (`IDPersona`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Participa`
--

LOCK TABLES `Participa` WRITE;
/*!40000 ALTER TABLE `Participa` DISABLE KEYS */;
/*!40000 ALTER TABLE `Participa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Persona`
--

DROP TABLE IF EXISTS `Persona`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Persona` (
  `CI` char(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IDPersona` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SegundoNombre` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Apellido` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SegundoApellido` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `correo` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contrasena` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Conexion` int(11) DEFAULT '0',
  `Avatar` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT '000-user.jpg',
  `Estado` tinyint(4) NOT NULL,
  `FondoChat` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'bg6.jpg',
  PRIMARY KEY (`IDPersona`),
  UNIQUE KEY `correo_UNIQUE` (`correo`),
  UNIQUE KEY `CI_UNIQUE` (`CI`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Persona`
--

LOCK TABLES `Persona` WRITE;
/*!40000 ALTER TABLE `Persona` DISABLE KEYS */;
INSERT INTO `Persona` VALUES ('53636064',1,'Admin',NULL,'Admin',NULL,'admin@gmail.com','$2y$10$ozxWWAi/6Xk21Bqf//Z1M.NMxoW9WQnR1nN17NcI0h.7fFtsJZcYq',0,'000-user.jpg',1,'bg6.jpg'),('63411501',33,'Gaspar','','Morales','Burgueño','gaspar@gmail.com','$2y$10$iZmnGN8vZdPMntF7AYqhQuB4nwhUuWn5g0HfKnHf1zVFbg0Fc7HgG',0,'000-user.jpg',1,'bg6.jpg'),('56321478',34,'Lorena','Paola','Rodriguez','','lorena@gmail.com','$2y$10$pfPBp8abLisMoEdCMoptAup5vev2Ee50JM9eMtpznbdynxWFDBf.O',0,'000-user.jpg',1,'bg6.jpg'),('56482139',35,'Joaquin','','Sellanes','','joaquin@gmail.com','$2y$10$c9Zr4/Q1tZa8HG9c6wUch.EfNM5ble6RdhXt8qSJ/9GOxjjv5ojA2',0,'000-user.jpg',1,'bg6.jpg'),('63411053',36,'Eduardo','David','Piñero','Espinoza','eduardo@gmail.com','$2y$10$unoNC1PEizxyvB.ZhMhZMuqgobstUKswN7G2B2Fek0HOZ1dv45dJu',1,'000-user.jpg',1,'bg6.jpg'),('45213698',37,'Richard','','Pias','','richard@gmail.com','$2y$10$xmW8qQMKQ/57RMDkYkSoielzqbEjtaHc1IXHpxodRNGNKb7USei.O',0,'000-user.jpg',1,'bg6.jpg'),('42136548',38,'Gonzalo','','Martinez','','gonzalo@gmail.com','$2y$10$/QumMQI0hdhwY4dOZAHUmOABC2/wBofIvwDDT/6YZo//NsKEJ0OC2',0,'000-user.jpg',1,'bg6.jpg'),('42153698',39,'Elina','','Valles','','elina@gmail.com','$2y$10$7xYLa5TuHXj5YRlYHeIhQe3e0pg59I/ByU/wL4hTDBDBzNIRCFvYK',1,'000-user.jpg',1,'bg6.jpg'),('47586923',40,'Gustavo','','Carrio','','gustavo@gmail.com','$2y$10$vHmYulbwHNTLpOWZ0hRPROwMk5fYJk1ewnFswPN/E.RslV0irUS/y',0,'000-user.jpg',1,'bg6.jpg');
/*!40000 ALTER TABLE `Persona` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Persona_Grupo`
--

DROP TABLE IF EXISTS `Persona_Grupo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Persona_Grupo` (
  `IDPersona` int(11) NOT NULL,
  `IDGrupo` int(11) NOT NULL,
  `año` int(5) NOT NULL,
  PRIMARY KEY (`IDPersona`,`IDGrupo`,`año`),
  KEY `IDGrupo` (`IDGrupo`),
  CONSTRAINT `Persona_Grupo_ibfk_1` FOREIGN KEY (`IDGrupo`) REFERENCES `Grupo` (`IDGrupo`),
  CONSTRAINT `Persona_Grupo_ibfk_2` FOREIGN KEY (`IDPersona`) REFERENCES `Persona` (`IDPersona`),
  CONSTRAINT `Persona_Grupo_ibfk_3` FOREIGN KEY (`IDPersona`) REFERENCES `Persona` (`IDPersona`),
  CONSTRAINT `Persona_Grupo_ibfk_4` FOREIGN KEY (`IDGrupo`) REFERENCES `Grupo` (`IDGrupo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Persona_Grupo`
--

LOCK TABLES `Persona_Grupo` WRITE;
/*!40000 ALTER TABLE `Persona_Grupo` DISABLE KEYS */;
INSERT INTO `Persona_Grupo` VALUES (33,17,2021),(35,17,2021),(37,17,2021),(39,17,2021),(34,18,2021),(36,18,2021),(37,18,2021),(38,18,2021),(39,18,2021),(40,18,2021);
/*!40000 ALTER TABLE `Persona_Grupo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Registro_Conexion`
--

DROP TABLE IF EXISTS `Registro_Conexion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Registro_Conexion` (
  `IDPersona` int(11) NOT NULL,
  `fechaHoraConexion` datetime NOT NULL,
  `Conexion` int(11) DEFAULT NULL,
  `Desconexion` int(11) DEFAULT NULL,
  PRIMARY KEY (`IDPersona`,`fechaHoraConexion`),
  CONSTRAINT `Registro_Conexion_ibfk_1` FOREIGN KEY (`IDPersona`) REFERENCES `Persona` (`IDPersona`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Registro_Conexion`
--

LOCK TABLES `Registro_Conexion` WRITE;
/*!40000 ALTER TABLE `Registro_Conexion` DISABLE KEYS */;
/*!40000 ALTER TABLE `Registro_Conexion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ReiniciarContraseña`
--

DROP TABLE IF EXISTS `ReiniciarContraseña`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ReiniciarContraseña` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `codigo` (`codigo`),
  KEY `correo` (`correo`),
  CONSTRAINT `ReiniciarContraseña_ibfk_1` FOREIGN KEY (`correo`) REFERENCES `Persona` (`correo`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ReiniciarContraseña`
--

LOCK TABLES `ReiniciarContraseña` WRITE;
/*!40000 ALTER TABLE `ReiniciarContraseña` DISABLE KEYS */;
/*!40000 ALTER TABLE `ReiniciarContraseña` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-11-02 22:48:17
