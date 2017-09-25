-- MySQL dump 10.13  Distrib 5.6.11, for Win64 (x86_64)
--
-- Host: localhost    Database: app_bd
-- ------------------------------------------------------
-- Server version	5.6.11

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
-- Table structure for table `inscription`
--

DROP TABLE IF EXISTS `inscription`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inscription` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prenom` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pays` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `eglise` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `eglise_autre` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adresse` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tel` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_ajout` datetime DEFAULT NULL,
  `date_modification` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inscription`
--

LOCK TABLES `inscription` WRITE;
/*!40000 ALTER TABLE `inscription` DISABLE KEYS */;
INSERT INTO `inscription` VALUES (1,'Ben','Koffi','virgil.koffi@hotmail.fr','C&ocirc;te d&#039;Ivoire','Impact Centre Chr&eacute;tien','','06 BP 1116 Abidjan',' 22558313288','2017-08-20 06:00:00','2017-09-14 15:26:44'),(2,'Koffi','Virgil','virgil_koffi@hotmail.fr','C&ocirc;te d&#039;Ivoire','Vases d&#039;Honneur','','06 BP 1116 Abidjan 06',' 22501020304','0000-00-00 00:00:00','2017-09-15 23:23:31'),(14,'Koffi','Virgil','virgil_koffi@hotmail.frDF','C&ocirc;te d\'Ivoire','Impact Centre Chr&eacute;tien','','06 BP 1116 Abidjan 06',' 22501020304','2017-09-11 16:17:39','2017-09-11 16:17:53'),(15,'Koffi','Virgil','virgil_koffi@hotmail.free','C&ocirc;te d\'Ivoire','Vases d\'Honneur','','06 BP 1116 Abidjan 06',' 22558313288','2017-09-12 11:50:15',NULL),(16,'Koffi','Virgil','virgil_koffi@hotmail.frzeze','C&ocirc;te d\'Ivoire','','','06 BP 1116 Abidjan 06',' 225','2017-09-12 12:23:52','2017-09-12 12:24:09'),(17,'BOH','REGIS','test@test.fr','Hawaii','Vases d&#039;Honneur','','01 BP 01 ABIDJAN 01',' 22501020304','2017-09-12 14:37:29','2017-09-13 12:14:39'),(18,'Koffi','Virgil','virgil_koffi@hotmail.frsdl','C&ocirc;te d&#039;Ivoire','','','06 BP 1116 Abidjan 06',' 225','2017-09-12 21:19:53','2017-09-12 21:22:19'),(19,'sdsd','sfddffdf','kingpabel@kingpabel.com','Andorre','Tabernacle of Glory','','',' 22501020304','2017-09-12 23:11:46','2017-09-12 23:15:33'),(20,'BOH','REGIS','test@test.com','Hawaii','Vases d&#039;Honneur','','01 BP 01 ABIDJAN 01',' 22501020304','2017-09-13 12:14:58','2017-09-13 12:18:52'),(21,'Abou','Franck','virgilkoffi@gmail.fr','Armenie','autre_eglise','Assembl&eacute;e de Dieu','06 BP 1116 Abidjan',' 22501020304','2017-09-14 13:04:35','2017-09-14 13:05:06'),(22,'Menan','St&eacute;phanie','muriellemenan@gmail.com','Canada','autre_eglise','Living Hope','06 BP 1116 Abidjan 06',' 22558313288','2017-09-14 14:27:14','2017-09-14 14:27:16');
/*!40000 ALTER TABLE `inscription` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `priere`
--

DROP TABLE IF EXISTS `priere`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `priere` (
  `priere_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_priere` date NOT NULL,
  `temps_debut` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `temps_fin` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `date_ajout` date NOT NULL,
  PRIMARY KEY (`priere_id`)
) ENGINE=InnoDB AUTO_INCREMENT=143 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `priere`
--

LOCK TABLES `priere` WRITE;
/*!40000 ALTER TABLE `priere` DISABLE KEYS */;
INSERT INTO `priere` VALUES (18,'test@test.fr','2017-10-01','00:00','03:00','2017-09-13'),(19,'test@test.fr','2017-10-01','08:00','10:00','2017-09-13'),(20,'test@test.fr','2017-10-15','01:00','02:00','2017-09-13'),(21,'test@test.fr','2017-10-26','00:00','01:00','2017-09-13'),(22,'test@test.fr','2017-11-08','00:00','05:00','2017-09-13'),(38,'test@test.com','2017-10-19','00:00','01:00','2017-09-13'),(113,'virgilkoffi@gmail.fr','2017-10-04','00:00','01:00','2017-09-14'),(116,'virgilkoffi@gmail.fr','2017-10-17','00:00','01:00','2017-09-14'),(118,'virgilkoffi@gmail.fred','2017-10-01','00:00','01:00','2017-09-14'),(120,'virgilkoffi@gmail.fred','2017-10-01','00:00','04:00','2017-09-14'),(125,'virgil_koffi@hotmail.fr','2017-10-06','00:00','05:00','2017-09-14'),(128,'virgil_koffi@hotmail.fr','2017-10-01','00:00','01:00','2017-09-14'),(130,'virgil_koffi@hotmail.fr','2017-10-17','00:00','01:00','2017-09-14'),(131,'muriellemenan@gmail.com','2017-10-05','13:00','18:00','2017-09-14'),(133,'muriellemenan@gmail.com','2017-10-06','00:00','01:00','2017-09-14'),(134,'muriellemenan@gmail.com','2017-10-05','00:00','01:00','2017-09-14'),(135,'virgil_koffi@hotmail.fr','2017-10-14','00:00','01:00','2017-09-14'),(136,'virgil_koffi@hotmail.fr','2017-10-17','00:00','06:00','2017-09-14'),(137,'virgil.koffi@hotmail.fr','2017-10-02','01:00','05:00','2017-09-14'),(138,'murielle@glic.ds','2017-10-01','00:00','01:00','2017-09-14'),(139,'virgil_koffi@hotmail.fr','2017-10-04','01:00','02:00','2017-09-14'),(140,'virgil_koffi@hotmail.fr','2017-10-17','01:00','03:00','2017-09-14'),(141,'virgil_koffi@hotmail.fr','2017-10-01','05:00','06:00','2017-09-14'),(142,'virgil_koffi@hotmail.fr','2017-10-01','15:00','17:00','2017-09-14');
/*!40000 ALTER TABLE `priere` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'app_bd'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-09-16  0:17:42
