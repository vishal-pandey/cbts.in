-- MySQL dump 10.13  Distrib 5.7.17, for macos10.12 (x86_64)
--
-- Host: localhost    Database: ssc
-- ------------------------------------------------------
-- Server version	5.7.17

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
-- Table structure for table `r9717130893`
--

DROP TABLE IF EXISTS `r9717130893`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `r9717130893` (
  `qno` int(3) NOT NULL,
  `ans` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`qno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `r9717130893`
--

LOCK TABLES `r9717130893` WRITE;
/*!40000 ALTER TABLE `r9717130893` DISABLE KEYS */;
INSERT INTO `r9717130893` VALUES (1,'a1'),(2,'a2'),(3,'a3'),(4,'a3'),(8,'a4'),(12,'a1'),(31,'a3'),(32,'a4'),(47,'a4'),(48,'a2'),(51,'a1'),(52,'a4'),(53,'a4'),(54,'a3'),(57,'a2'),(80,'a2'),(96,'a4'),(97,'a2'),(98,'a1');
/*!40000 ALTER TABLE `r9717130893` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rstu`
--

DROP TABLE IF EXISTS `rstu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rstu` (
  `rollno` bigint(10) NOT NULL,
  `name` varchar(60) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `sp` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`rollno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rstu`
--

LOCK TABLES `rstu` WRITE;
/*!40000 ALTER TABLE `rstu` DISABLE KEYS */;
INSERT INTO `rstu` VALUES (9717130893,'Ram Prakash Jha','64742',NULL);
/*!40000 ALTER TABLE `rstu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tid1`
--

DROP TABLE IF EXISTS `tid1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tid1` (
  `qno` int(3) NOT NULL,
  `instruction` text,
  `question` text,
  `a1` text,
  `a2` text,
  `a3` text,
  `a4` text,
  `ra` varchar(5) DEFAULT NULL,
  `ip` varchar(50) DEFAULT NULL,
  `a1p` varchar(50) DEFAULT NULL,
  `a2p` varchar(50) DEFAULT NULL,
  `a3p` varchar(50) DEFAULT NULL,
  `a4p` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`qno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tid1`
--

LOCK TABLES `tid1` WRITE;
/*!40000 ALTER TABLE `tid1` DISABLE KEYS */;
INSERT INTO `tid1` VALUES (1,NULL,'This is qufdsafafadsfaf','dfgsgsg','fdsgsg','dsgfg','dfsgsg','a1',NULL,NULL,NULL,NULL,NULL),(2,'This is instrucitno','This is question for question no. 2','1','2','3','4','a3',NULL,NULL,NULL,NULL,NULL),(51,NULL,'Select the related word/letters/numbers from the given alternatives: <br><br>\r\nCURE : DISEASE :: HEAL : ?','Illness','Injury','Recover','Sick','a2',NULL,NULL,NULL,NULL,NULL),(52,NULL,'Select the related word/letters/numbers from the given alternatives: <br><br>\r\nDBCE : QOPR :: JLKI : ?','YWXU','WYXV','WXYV','WYVX','a2',NULL,NULL,NULL,NULL,NULL),(53,NULL,'Select the related word/letters/numbers from the given alternatives: \r\n<br><br>\r\n6 : 42 :: 12 : ?','48','72','60','84','a4',NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `tid1` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-07-25  3:50:01
