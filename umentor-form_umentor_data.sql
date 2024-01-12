-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: umentor-form
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.32-MariaDB

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
-- Table structure for table `umentor_data`
--

DROP TABLE IF EXISTS `umentor_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `umentor_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `data_admissao` date NOT NULL,
  `data_insercao` datetime NOT NULL DEFAULT current_timestamp(),
  `data_atualizacao` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `umentor_data`
--

LOCK TABLES `umentor_data` WRITE;
/*!40000 ALTER TABLE `umentor_data` DISABLE KEYS */;
INSERT INTO `umentor_data` VALUES (1,'Diego Souza','diego@gmail.com','2024-10-11','2024-01-11 18:54:37','2024-01-12 11:38:07'),(2,'Tadeu','bernardo@gmail.com','2023-02-12','2024-01-11 21:59:25','2024-01-12 09:49:48'),(3,'Mateus','mateus@teste.com','2024-01-12','2024-01-11 21:59:52','2024-01-12 13:50:31'),(4,'Mateus','mateus@teste.com','2024-01-11','2024-01-11 22:08:15',NULL),(5,'Mateus','mateus@teste.com','2024-01-11','2024-01-12 02:12:15',NULL),(6,'Mateus','mateus@teste.com','2024-01-11','2024-01-12 03:23:46',NULL),(7,'Mateus','mateus@teste.com','2024-01-11','2024-01-12 03:38:57',NULL),(8,'Mateus','mateus@teste.com','2024-01-11','2024-01-12 03:38:59',NULL),(9,'Mateus','mateus@teste.com','2024-01-11','2024-01-12 03:39:06',NULL),(10,'Mateus','mateus@teste.com','2024-01-11','2024-01-12 03:45:04',NULL),(33,'Luis','luis.natan@bol.com','2024-01-12','2024-01-12 08:42:05','2024-01-12 08:42:05'),(37,'dAVI','davi@gmail.com','2002-02-01','2024-01-12 09:06:41','2024-01-12 13:46:23'),(41,'Juan','juan@teste','2025-01-12','2024-01-12 09:09:46','2024-01-12 13:46:09'),(42,'Juan','juan@outlook','2024-01-12','2024-01-12 09:10:56','2024-01-12 13:45:49'),(45,'Natan','natan@bing','2024-01-12','2024-01-12 09:12:30','2024-01-12 10:22:04'),(47,'Paula','paula.t@yahoo.com','2024-01-12','2024-01-12 10:21:50','2024-01-12 10:21:50'),(51,'Lucas','Lucas@gmail.com','2024-01-12','2024-01-12 13:44:41','2024-01-12 13:44:41');
/*!40000 ALTER TABLE `umentor_data` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-01-12 14:39:00
