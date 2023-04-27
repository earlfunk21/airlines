-- MariaDB dump 10.19  Distrib 10.4.27-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: dbairlines
-- ------------------------------------------------------
-- Server version	10.4.27-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tbladmin`
--

DROP TABLE IF EXISTS `tbladmin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbladmin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(120) DEFAULT NULL,
  `password` varchar(120) DEFAULT NULL,
  `info_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbladmin`
--

LOCK TABLES `tbladmin` WRITE;
/*!40000 ALTER TABLE `tbladmin` DISABLE KEYS */;
INSERT INTO `tbladmin` VALUES (1,'earlfunk21@gmail.com','helloworld',1),(2,'earlfunk27@gmail.com','asdfdsaf',2);
/*!40000 ALTER TABLE `tbladmin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblaircraft`
--

DROP TABLE IF EXISTS `tblaircraft`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblaircraft` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `model` varchar(120) DEFAULT NULL,
  `capacity` int(11) DEFAULT NULL,
  `manufacturer` varchar(120) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblaircraft`
--

LOCK TABLES `tblaircraft` WRITE;
/*!40000 ALTER TABLE `tblaircraft` DISABLE KEYS */;
INSERT INTO `tblaircraft` VALUES (1,'ModelTest',3,'TestAircraft'),(2,'ModelA213',32,'Japan213213');
/*!40000 ALTER TABLE `tblaircraft` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblcrew`
--

DROP TABLE IF EXISTS `tblcrew`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblcrew` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `position` varchar(120) DEFAULT NULL,
  `experience` varchar(120) DEFAULT NULL,
  `info_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblcrew`
--

LOCK TABLES `tblcrew` WRITE;
/*!40000 ALTER TABLE `tblcrew` DISABLE KEYS */;
INSERT INTO `tblcrew` VALUES (1,'Manager','12 years',2),(2,'Staff','23 years',2);
/*!40000 ALTER TABLE `tblcrew` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblpassenger`
--

DROP TABLE IF EXISTS `tblpassenger`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblpassenger` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `seat_number` varchar(120) DEFAULT NULL,
  `info_id` int(11) DEFAULT NULL,
  `ticket_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblpassenger`
--

LOCK TABLES `tblpassenger` WRITE;
/*!40000 ALTER TABLE `tblpassenger` DISABLE KEYS */;
INSERT INTO `tblpassenger` VALUES (1,'A12',1,2),(2,'A13',1,2);
/*!40000 ALTER TABLE `tblpassenger` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblpersonalinfo`
--

DROP TABLE IF EXISTS `tblpersonalinfo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblpersonalinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(120) DEFAULT NULL,
  `lastname` varchar(120) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `nationality` varchar(120) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblpersonalinfo`
--

LOCK TABLES `tblpersonalinfo` WRITE;
/*!40000 ALTER TABLE `tblpersonalinfo` DISABLE KEYS */;
INSERT INTO `tblpersonalinfo` VALUES (1,'Earl','Nobe',NULL,'filipino'),(3,'Earl','Nobe','2000-08-22','Filipino'),(4,'Juniper','Gabriel','1000-12-20','American'),(5,'','','0000-00-00',''),(6,'Morax','Funk','2004-12-31','Mexican');
/*!40000 ALTER TABLE `tblpersonalinfo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblticket`
--

DROP TABLE IF EXISTS `tblticket`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblticket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `passenger_id` int(11) DEFAULT NULL,
  `seat_number` varchar(120) DEFAULT NULL,
  `arrival_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblticket`
--

LOCK TABLES `tblticket` WRITE;
/*!40000 ALTER TABLE `tblticket` DISABLE KEYS */;
INSERT INTO `tblticket` VALUES (1,1,'A12','0000-00-00'),(2,1,'A12','0000-00-00'),(3,2,'A32','2023-04-22');
/*!40000 ALTER TABLE `tblticket` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-04-27 13:23:30
