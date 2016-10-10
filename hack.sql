-- MySQL dump 10.13  Distrib 5.7.15, for Linux (x86_64)
--
-- Host: localhost    Database: chaussette_vote
-- ------------------------------------------------------
-- Server version	5.7.15-0ubuntu0.16.04.1

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
-- Table structure for table `chaussettes`
--

DROP TABLE IF EXISTS `chaussettes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chaussettes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `url_chaussette` varchar(300) NOT NULL,
  `vote1` int(11) DEFAULT '0',
  `vote2` int(11) DEFAULT '0',
  `vote3` int(11) DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chaussettes`
--

LOCK TABLES `chaussettes` WRITE;
/*!40000 ALTER TABLE `chaussettes` DISABLE KEYS */;
INSERT INTO `chaussettes` VALUES (14,'WCS','Wafa','images/img_20161007090628.png',0,0,NULL),(15,'WCS','David ','images/img_20161007090703.png',0,1,NULL),(16,'WCS','Adam','images/img_20161007090809.png',0,0,NULL),(17,'WCS','Yoan','images/img_20161007090842.png',0,1,NULL),(18,'WCS','Christian ','images/img_20161007090917.png',0,0,NULL),(19,'Beauseigneur','Damien ','images/img_20161007091011.png',1,0,NULL),(20,'WCS','Aymen ','images/img_20161007091050.png',0,1,NULL),(21,'WCS','Florent ','images/img_20161007091212.png',0,1,NULL),(22,'test2','test3','images/img_20161007115733.png',0,0,NULL),(23,'PHP','elephant','images/img_20161007132405.png',0,12,NULL),(24,'cedric','gam','images/img_20161007135740.png',1,0,NULL);
/*!40000 ALTER TABLE `chaussettes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-10-10 17:35:18
