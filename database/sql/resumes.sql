-- MySQL dump 10.13  Distrib 5.7.21, for Linux (x86_64)
--
-- Host: localhost    Database: recruitment
-- ------------------------------------------------------
-- Server version	5.7.21-0ubuntu0.16.04.1

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
-- Table structure for table `resumes`
--

DROP TABLE IF EXISTS `resumes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `resumes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `work_id` int(10) unsigned DEFAULT '0',
  `name` varchar(190) COLLATE utf8_unicode_ci DEFAULT NULL,
  `surname` varchar(190) COLLATE utf8_unicode_ci DEFAULT NULL,
  `middle_name` varchar(190) COLLATE utf8_unicode_ci DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `drive_license` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'null',
  `level_education` text COLLATE utf8_unicode_ci,
  `qualification` text COLLATE utf8_unicode_ci,
  `experience` text COLLATE utf8_unicode_ci,
  `other_languages` text COLLATE utf8_unicode_ci,
  `en` int(11) DEFAULT '0',
  `de` int(11) DEFAULT '0',
  `ve` int(11) DEFAULT '0',
  `money` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `file` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resumes`
--

LOCK TABLES `resumes` WRITE;
/*!40000 ALTER TABLE `resumes` DISABLE KEYS */;
INSERT INTO `resumes` VALUES (1,NULL,'Простой','Человек','Дядькович',66,'vitaliy.loshniy@edipresse.ua','В','бАРАН','ДЦП','ніц не роблення',NULL,NULL,1,1,14,'2018-02-22 06:12:44','2018-02-22 06:12:44',NULL),(2,NULL,'Украина','asdfs','asdff',222,'admin@admin.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,12213,'2018-02-22 06:16:22','2018-02-22 06:16:22',NULL),(3,NULL,'Первый','asdfs','asdff',66,'admin@admin.com','В',NULL,NULL,NULL,NULL,NULL,NULL,NULL,2322,'2018-02-22 06:22:57','2018-02-22 06:22:57',NULL),(4,NULL,'Украина','asdfs','asdff',66,'admin@admin.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,12312,'2018-02-22 06:24:46','2018-02-22 06:24:46',NULL),(5,3,'Украина','asdfs','wewrew',222,'admin@admin.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,12,'2018-02-22 06:26:23','2018-02-22 06:26:23',NULL);
/*!40000 ALTER TABLE `resumes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'recruitment'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-02-27 10:02:26
