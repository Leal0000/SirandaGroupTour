-- MySQL dump 10.13  Distrib 8.0.22, for Linux (x86_64)
--
-- Host: localhost    Database: travel_database
-- ------------------------------------------------------
-- Server version	8.0.25-0ubuntu0.20.04.1

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
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clientes` (
  `idclientes` int NOT NULL AUTO_INCREMENT,
  `nombre_c` varchar(100) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `correo` varchar(150) DEFAULT NULL,
  `telefono` int DEFAULT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idclientes`),
  UNIQUE KEY `idclientes_UNIQUE` (`idclientes`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (2,'Gerardo','Peniche','gerardo@gmail.com',2147483647,'no proporciono'),(3,'Juana del Carmen','Pech Hernandez','juana@gmail.com',2147483647,'no proporciono ninguna direccion');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `destinos`
--

DROP TABLE IF EXISTS `destinos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `destinos` (
  `iddestinos` int NOT NULL AUTO_INCREMENT,
  `nombre_destino` varchar(45) NOT NULL,
  PRIMARY KEY (`iddestinos`),
  UNIQUE KEY `iddestinos_UNIQUE` (`iddestinos`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `destinos`
--

LOCK TABLES `destinos` WRITE;
/*!40000 ALTER TABLE `destinos` DISABLE KEYS */;
INSERT INTO `destinos` VALUES (10,'Xmatcuil'),(11,'Uxmal'),(12,'Chichenitza'),(14,'Campeche'),(16,'Quintanarro'),(17,'Sisal'),(18,'Celestun'),(19,'Cancun'),(20,'Chetumal');
/*!40000 ALTER TABLE `destinos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tickets`
--

DROP TABLE IF EXISTS `tickets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tickets` (
  `idtickets` int NOT NULL AUTO_INCREMENT,
  `agencia` varchar(100) NOT NULL,
  `folio` varchar(50) NOT NULL,
  `fecha_i` date NOT NULL,
  `fecha_f` date NOT NULL,
  `tipo_transporte` int NOT NULL,
  `dias` int NOT NULL,
  `paquetes` int NOT NULL,
  `itinerario` varchar(500) NOT NULL,
  `costodia` double NOT NULL,
  `costo_persona` double NOT NULL,
  `costo_dia_t` double NOT NULL,
  `total_neto` double NOT NULL,
  PRIMARY KEY (`idtickets`),
  UNIQUE KEY `idtickets_UNIQUE` (`idtickets`),
  KEY `fk_tickets_idx` (`tipo_transporte`),
  CONSTRAINT `fk_tickets` FOREIGN KEY (`tipo_transporte`) REFERENCES `transporte` (`idtransporte`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tickets`
--

LOCK TABLES `tickets` WRITE;
/*!40000 ALTER TABLE `tickets` DISABLE KEYS */;
INSERT INTO `tickets` VALUES (10,'Guias Campeche','COT-A8027','2021-07-18','2021-07-26',4,9,16,'traslados aeropuerto- hotel ibis (el nuevo) - aeropuerto.\r\nUxmal & Mucuyche \r\nValladolid Selva maya Izamal \r\n1 cena en alguno de los restaurantes en mérida (con traslado incluido).\r\ntraslado de merida- Chiquila el día 20 de mayo y el regreso de chiquila a merida 24 de mayo.   Traslado de salida',3971.941666667,35747.475000003,63551.066666672,571959.60000005);
/*!40000 ALTER TABLE `tickets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transporte`
--

DROP TABLE IF EXISTS `transporte`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `transporte` (
  `idtransporte` int NOT NULL AUTO_INCREMENT,
  `nombre_t` varchar(45) NOT NULL,
  `costo_dia` double NOT NULL,
  `marca` varchar(45) NOT NULL,
  `matricula` varchar(45) NOT NULL,
  PRIMARY KEY (`idtransporte`),
  UNIQUE KEY `idtransporte_UNIQUE` (`idtransporte`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transporte`
--

LOCK TABLES `transporte` WRITE;
/*!40000 ALTER TABLE `transporte` DISABLE KEYS */;
INSERT INTO `transporte` VALUES (2,'Autobus',15000,'Chevrolet','HYNR-23'),(3,'Camioneta',1490,'Mercedez','HYNR-235'),(4,'Sprint',2500,'Honda','FlT-45-A');
/*!40000 ALTER TABLE `transporte` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_travel`
--

DROP TABLE IF EXISTS `users_travel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users_travel` (
  `idusers_travel` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`idusers_travel`),
  UNIQUE KEY `idusers_travel_UNIQUE` (`idusers_travel`),
  UNIQUE KEY `correo_UNIQUE` (`correo`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_travel`
--

LOCK TABLES `users_travel` WRITE;
/*!40000 ALTER TABLE `users_travel` DISABLE KEYS */;
INSERT INTO `users_travel` VALUES (1,'Jesus Ariel','Leal Perez','arielleal2206@gmail.com','leal0000'),(4,'Juana del Carmen','Pech Hernandez','juana@gmail.com','123456');
/*!40000 ALTER TABLE `users_travel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `viajes`
--

DROP TABLE IF EXISTS `viajes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `viajes` (
  `idviajes` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(45) NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  `destino` int NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_finaL` date NOT NULL,
  `costo` double NOT NULL,
  `status` tinyint NOT NULL,
  `dias` int NOT NULL,
  PRIMARY KEY (`idviajes`),
  UNIQUE KEY `idviajes_UNIQUE` (`idviajes`),
  KEY `fk_destino_idx` (`destino`),
  CONSTRAINT `fk_destino` FOREIGN KEY (`destino`) REFERENCES `destinos` (`iddestinos`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `viajes`
--

LOCK TABLES `viajes` WRITE;
/*!40000 ALTER TABLE `viajes` DISABLE KEYS */;
INSERT INTO `viajes` VALUES (1,'Viaje Estudiantil','Viaje Redondo a Xmatcuil',14,'2021-07-01','2021-10-19',150000,1,110),(2,'Viaje Empresarial','Viaje Redondo a Chichenitza',10,'2021-07-01','2021-07-14',15000,1,13),(3,'Viaje de vacaciones','Viaje Redondo a Celestun',18,'2021-07-01','2021-07-10',180000,1,9),(4,'Viaje de Negocios','Viaje Redondo a Cancun',19,'2021-07-01','2021-07-30',22000,1,29),(5,'Viaje de Negocios','Viaje Redondo a Campeche',14,'2021-09-01','2021-10-21',16000,1,50),(6,'Viaje de vacaciones','Viaje Redondo a Xmatcuil',11,'2021-07-01','2021-07-07',150000,1,6);
/*!40000 ALTER TABLE `viajes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-07-25 17:39:23
